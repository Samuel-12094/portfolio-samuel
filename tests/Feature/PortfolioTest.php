<?php

namespace Tests\Feature;

use App\Mail\ContactMail;
use App\Models\Competence;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_displays_projects_and_competences(): void
    {
        $project = Project::create([
            'titre' => 'Application de test',
            'description' => 'Une description de test.',
            'image' => 'images/project-1.jpg',
            'tags' => ['Laravel', 'MySQL'],
            'statut' => 'Terminé',
            'ordre' => 1,
            'visible' => true,
        ]);

        Competence::create(['categorie' => 'Backend', 'nom' => 'Laravel', 'niveau' => 90, 'ordre' => 1]);

        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertSee('Application de test')
            ->assertSee('Laravel')
            ->assertSee('Backend');
    }

    public function test_contact_submission_stores_message_and_sends_email(): void
    {
        Mail::fake();

        $response = $this->from('/#contact')->post('/contact', [
            'nom' => 'Jean Dupont',
            'email' => 'jean@example.com',
            'sujet' => 'Offre de collaboration',
            'message' => 'Bonjour, je souhaite vous proposer un projet.',
        ]);

        $response->assertRedirect('/#contact');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contacts', [
            'nom' => 'Jean Dupont',
            'email' => 'jean@example.com',
            'sujet' => 'Offre de collaboration',
        ]);

        Mail::assertSent(ContactMail::class, function ($mail) {
            return $mail->hasTo(config('portfolio.email'))
                && $mail->contact->nom === 'Jean Dupont';
        });
    }

    public function test_contact_submission_rejects_invalid_data(): void
    {
        $response = $this->post('/contact', [
            'nom' => '',
            'email' => 'pas-un-email',
            'message' => '',
        ]);

        $response->assertSessionHasErrors(['nom', 'email', 'message']);
        $this->assertDatabaseCount('contacts', 0);
    }
}
