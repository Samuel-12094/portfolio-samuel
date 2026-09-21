<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sujet' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Enregistrer dans la base de données
        $contact = Contact::create($validated);

        // Envoyer l'email
        try {
            Mail::to(config('portfolio.email'))->send(new ContactMail($contact));

            return back()->with('success', 'Message envoyé avec succès ! Je vous répondrai bientôt.');
        } catch (\Exception) {
            return back()->with('error', "Erreur lors de l'envoi. Veuillez réessayer.");
        }
    }
}
