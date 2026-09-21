<?php

namespace Database\Seeders;

use App\Models\Competence;
use App\Models\Experience;
use App\Models\Project;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        // Ré-initialisation (idempotent)
        Project::query()->delete();
        Competence::query()->delete();
        Experience::query()->delete();

        // ---------------------------------------------------------------
        // PROJET 01 — AGOR BENIN
        // ---------------------------------------------------------------
        Project::create([
            'titre' => 'AGOR BENIN',
            'description' => 'Plateforme web de gestion automatisée des événements privés.',
            'domaine' => 'Événementiel',
            'role' => 'Développeur / membre de l\'équipe projet',
            'type' => 'Projet de Licence',
            'presentation' => 'AGOR BENIN est une plateforme web innovante conçue pour automatiser et simplifier l\'organisation des événements privés au Bénin. La solution permet de structurer le processus d\'organisation, depuis la définition des besoins du client jusqu\'à la gestion des prestataires, des services et du suivi financier.',
            'fonctionnalites' => [
                'Gestion des clients et des événements',
                'Classification des événements par type et niveau de complexité',
                'Définition de budgets et de services prédéfinis',
                'Gestion des prestataires et des équipes',
                'Gestion des commandes et des contrats',
                'Suivi financier et gestion des commissions',
                'Notifications et suivi des activités',
            ],
            'image' => 'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=800',
            'tags' => ['PHP', 'Laravel', 'MySQL'],
            'statut' => 'Terminé',
            'ordre' => 1,
        ]);

        // ---------------------------------------------------------------
        // PROJET 02 — MediFlow
        // ---------------------------------------------------------------
        Project::create([
            'titre' => 'MediFlow',
            'description' => 'Plateforme SaaS de gestion des établissements de santé.',
            'domaine' => 'Santé numérique',
            'role' => 'Concepteur et développeur',
            'type' => 'Projet de développement SaaS',
            'presentation' => 'MediFlow est une plateforme SaaS destinée aux établissements de santé. Elle vise à faciliter la gestion des rendez-vous, des patients et des activités médicales grâce à un système centralisé et multi-établissements. Le projet repose sur une architecture permettant à plusieurs établissements de disposer d\'un espace de gestion distinct.',
            'fonctionnalites' => [
                'Gestion des établissements de santé',
                'Gestion des médecins et secrétaires',
                'Gestion des patients',
                'Prise de rendez-vous en ligne',
                'Gestion des disponibilités et prévention des conflits de réservation',
                'Dossiers médicaux électroniques',
                'Notifications par SMS',
                'Assistance au triage médical par intelligence artificielle',
                'Gestion des rôles et permissions',
            ],
            'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800',
            'tags' => ['Laravel 12', 'PHP', 'MySQL', 'Blade', 'Livewire', 'Filament 5', 'BudgetSMS', 'Vonage', 'Brevo'],
            'statut' => 'En développement',
            'ordre' => 2,
        ]);

        // ---------------------------------------------------------------
        // PROJET 03 — PROFAN / NUNASU
        // ---------------------------------------------------------------
        Project::create([
            'titre' => 'PROFAN / NUNASU',
            'description' => 'Plateforme web de gestion et de commercialisation agroalimentaire.',
            'domaine' => 'Agroalimentaire / E-commerce',
            'role' => 'Développeur',
            'type' => 'Projet client',
            'presentation' => 'PROFAN est un projet de solution numérique destiné au secteur agroalimentaire. La plateforme vise à faciliter la commercialisation des produits et à optimiser la gestion des opérations commerciales et des stocks.',
            'fonctionnalites' => [
                'Gestion des produits et catégories',
                'Gestion des prix et des stocks',
                'Gestion du panier et des commandes',
                'Gestion des réservations',
                'Intégration de solutions de paiement',
                'Gestion des opérations commerciales',
                'Suivi des mouvements de stock',
                'Gestion de la production et des ventes',
                'Interface d\'administration',
            ],
            'image' => 'https://images.unsplash.com/photo-1500595046743-cd271d694d30?w=800',
            'tags' => ['Laravel', 'PHP', 'MySQL', 'FedaPay'],
            'statut' => 'En développement',
            'ordre' => 3,
        ]);

        // ---------------------------------------------------------------
        // PROJET 04 — Main Divine
        // ---------------------------------------------------------------
        Project::create([
            'titre' => 'Main Divine',
            'description' => 'Application web de gestion scolaire.',
            'domaine' => 'Éducation',
            'role' => 'Développeur',
            'type' => 'Projet client',
            'presentation' => 'Main Divine est une application web destinée à faciliter la gestion scolaire et le suivi des performances académiques des élèves. Elle vise à centraliser les informations des élèves, des enseignants, des notes et des résultats scolaires.',
            'fonctionnalites' => [
                'Gestion des élèves',
                'Gestion des enseignants',
                'Gestion des utilisateurs et des rôles',
                'Enregistrement des notes',
                'Gestion des coefficients',
                'Calcul des moyennes',
                'Génération des bulletins scolaires en PDF',
                'Visualisation des résultats avec des graphiques',
            ],
            'image' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?w=800',
            'tags' => ['PHP', 'MySQL', 'Bootstrap', 'AdminLTE', 'Chart.js'],
            'statut' => 'À actualiser',
            'ordre' => 4,
        ]);

        // ---------------------------------------------------------------
        // EXPLORATION 01 — Application de diagnostic d'appareils
        // ---------------------------------------------------------------
        Project::create([
            'titre' => 'Diagnostic d\'appareils',
            'description' => 'Système de diagnostic de l\'état des composants d\'un appareil.',
            'domaine' => 'Diagnostic matériel / Technologie mobile',
            'role' => 'Concepteur',
            'type' => 'Projet exploratoire',
            'presentation' => 'Un système destiné à identifier l\'état de certains composants d\'un appareil et à fournir des informations sur les réparations ou les pièces remplacées. L\'objectif est de faciliter le diagnostic et d\'améliorer la transparence sur l\'état des appareils.',
            'fonctionnalites' => [
                'Identification de l\'appareil',
                'Diagnostic de l\'état des composants',
                'Historique des réparations',
                'Signalement des composants remplacés',
                'Interface de consultation des résultats',
            ],
            'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=800',
            'tags' => ['Mobile', 'MVP', 'Diagnostic'],
            'statut' => 'Conception de MVP',
            'ordre' => 5,
            'exploration' => true,
        ]);

        // ---------------------------------------------------------------
        // EXPLORATION 02 — Application de transfert d'argent mobile
        // ---------------------------------------------------------------
        Project::create([
            'titre' => 'Transfert Mobile Money',
            'description' => 'Application de transfert d\'argent entre réseaux de mobile money au Bénin.',
            'domaine' => 'Fintech / Mobile Money',
            'role' => 'Concepteur',
            'type' => 'Idée de projet entrepreneurial',
            'presentation' => 'Réflexion autour d\'une application destinée à faciliter les transferts d\'argent entre différents réseaux de mobile money au Bénin. Le projet s\'intéresse à l\'interopérabilité des services financiers mobiles et à la simplification des opérations de transfert.',
            'fonctionnalites' => [
                'Interface de transfert d\'argent',
                'Gestion des transactions',
                'Suivi des opérations',
                'Historique des transferts',
                'Intégration potentielle de plusieurs réseaux de mobile money',
            ],
            'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800',
            'tags' => ['Mobile', 'Fintech', 'Interopérabilité'],
            'statut' => 'Exploration',
            'ordre' => 6,
            'exploration' => true,
        ]);

        // ---------------------------------------------------------------
        // EXPLORATION 03 — Marketplace pédagogique
        // ---------------------------------------------------------------
        Project::create([
            'titre' => 'Marketplace pédagogique',
            'description' => 'Plateforme de commercialisation de contenus pédagogiques.',
            'domaine' => 'Éducation / E-commerce',
            'role' => 'Concepteur',
            'type' => 'Projet de plateforme numérique',
            'presentation' => 'Une plateforme de commercialisation de contenus pédagogiques permettant aux créateurs de proposer leurs ressources éducatives à des apprenants.',
            'fonctionnalites' => [
                'Gestion des formateurs et apprenants',
                'Publication de ressources pédagogiques',
                'Gestion des achats et des accès',
                'Intégration de solutions de paiement',
                'Gestion des commissions sur les ventes',
            ],
            'image' => 'https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=800',
            'tags' => ['Web', 'E-learning', 'Paiement', 'Commission'],
            'statut' => 'Conception et développement à préciser',
            'ordre' => 7,
            'exploration' => true,
        ]);

        // ---------------------------------------------------------------
        // Expériences — Stage professionnel BENELEC
        // ---------------------------------------------------------------
        Experience::create([
            'type' => 'stage',
            'titre' => 'Stage professionnel',
            'organisme' => 'BENELEC',
            'periode' => '7 juillet au 5 septembre 2025',
            'lieu' => 'Cotonou, Bénin',
            'domaine' => 'Courant faible, sécurité incendie et prévention des risques',
            'description' => 'Stage professionnel effectué dans un environnement technique lié aux installations de courant faible, à la sécurité incendie et à la prévention des risques. Cette expérience m\'a permis de découvrir un environnement professionnel et de développer une approche pratique des systèmes techniques.',
            'ordre' => 1,
        ]);

        // ---------------------------------------------------------------
        // Expériences — Développement logiciel
        // ---------------------------------------------------------------
        Experience::create([
            'type' => 'developpement',
            'titre' => 'Développement d\'applications et de solutions logicielles',
            'periode' => '2023 - Aujourd\'hui',
            'lieu' => 'Porto-Novo, Bénin',
            'domaine' => 'Développement web et applications de gestion',
            'description' => 'Participation à des projets académiques et clients dans les domaines du développement web et des applications de gestion. Ces réalisations m\'ont permis de travailler sur la conception de solutions numériques, la gestion des données et l\'implémentation de fonctionnalités métier.',
            'ordre' => 2,
        ]);

        // ---------------------------------------------------------------
        // Formation — Licence SIL
        // ---------------------------------------------------------------
        Experience::create([
            'type' => 'formation',
            'titre' => 'Licence en Système Informatique et Logiciel (SIL)',
            'organisme' => 'ESCAE-BENIN',
            'periode' => 'Licence',
            'lieu' => 'Porto-Novo, Bénin',
            'domaine' => 'Informatique et Logiciel',
            'description' => 'Formation universitaire orientée vers le développement logiciel, la programmation et la conception de systèmes d\'information.',
            'details' => [
                'Développement logiciel',
                'Programmation',
                'Bases de données',
                'Conception de systèmes d\'information',
                'Technologies web',
                'Architecture et logique applicative',
            ],
            'ordre' => 3,
        ]);

        // ---------------------------------------------------------------
        // Compétences — Frontend
        // ---------------------------------------------------------------
        Competence::create(['categorie' => 'Frontend', 'nom' => 'HTML / CSS', 'niveau' => 95, 'ordre' => 1]);
        Competence::create(['categorie' => 'Frontend', 'nom' => 'JavaScript', 'niveau' => 92, 'ordre' => 2]);
        Competence::create(['categorie' => 'Frontend', 'nom' => 'React.js', 'niveau' => 85, 'ordre' => 3]);
        Competence::create(['categorie' => 'Frontend', 'nom' => 'Bootstrap', 'niveau' => 90, 'ordre' => 4]);
        Competence::create(['categorie' => 'Frontend', 'nom' => 'Tailwind CSS', 'niveau' => 88, 'ordre' => 5]);

        // ---------------------------------------------------------------
        // Compétences — Backend
        // ---------------------------------------------------------------
        Competence::create(['categorie' => 'Backend', 'nom' => 'PHP', 'niveau' => 93, 'ordre' => 1]);
        Competence::create(['categorie' => 'Backend', 'nom' => 'Laravel', 'niveau' => 91, 'ordre' => 2]);
        Competence::create(['categorie' => 'Backend', 'nom' => 'Python', 'niveau' => 94, 'ordre' => 3]);
        Competence::create(['categorie' => 'Backend', 'nom' => 'Django', 'niveau' => 90, 'ordre' => 4]);
        Competence::create(['categorie' => 'Backend', 'nom' => 'Node.js', 'niveau' => 82, 'ordre' => 5]);
        Competence::create(['categorie' => 'Backend', 'nom' => 'API REST', 'niveau' => 89, 'ordre' => 6]);

        // ---------------------------------------------------------------
        // Compétences — Bases de données
        // ---------------------------------------------------------------
        Competence::create(['categorie' => 'Base de Données', 'nom' => 'MySQL', 'niveau' => 92, 'ordre' => 1]);
        Competence::create(['categorie' => 'Base de Données', 'nom' => 'PostgreSQL', 'niveau' => 89, 'ordre' => 2]);
        Competence::create(['categorie' => 'Base de Données', 'nom' => 'SQLite', 'niveau' => 87, 'ordre' => 3]);
        Competence::create(['categorie' => 'Base de Données', 'nom' => 'MongoDB', 'niveau' => 78, 'ordre' => 4]);

        // ---------------------------------------------------------------
        // Compétences — Outils et environnement
        // ---------------------------------------------------------------
        Competence::create(['categorie' => 'Outils & Environnement', 'nom' => 'Git & GitHub', 'niveau' => 90, 'ordre' => 1]);
        Competence::create(['categorie' => 'Outils & Environnement', 'nom' => 'Node.js & npm', 'niveau' => 85, 'ordre' => 2]);
        Competence::create(['categorie' => 'Outils & Environnement', 'nom' => 'Composer', 'niveau' => 88, 'ordre' => 3]);
        Competence::create(['categorie' => 'Outils & Environnement', 'nom' => 'Visual Studio Code', 'niveau' => 93, 'ordre' => 4]);
        Competence::create(['categorie' => 'Outils & Environnement', 'nom' => 'Docker', 'niveau' => 75, 'ordre' => 5]);
        Competence::create(['categorie' => 'Outils & Environnement', 'nom' => 'XAMPP', 'niveau' => 90, 'ordre' => 6]);

        // ---------------------------------------------------------------
        // Compétences — Autres
        // ---------------------------------------------------------------
        Competence::create(['categorie' => 'Autres compétences', 'nom' => 'Conception et modélisation de bases de données', 'niveau' => 90, 'ordre' => 1]);
        Competence::create(['categorie' => 'Autres compétences', 'nom' => 'Analyse et conception de systèmes d\'information', 'niveau' => 88, 'ordre' => 2]);
        Competence::create(['categorie' => 'Autres compétences', 'nom' => 'Développement d\'applications de gestion', 'niveau' => 92, 'ordre' => 3]);
        Competence::create(['categorie' => 'Autres compétences', 'nom' => 'Intégration de solutions de paiement', 'niveau' => 82, 'ordre' => 4]);
        Competence::create(['categorie' => 'Autres compétences', 'nom' => 'Responsive Web Design', 'niveau' => 92, 'ordre' => 5]);
        Competence::create(['categorie' => 'Autres compétences', 'nom' => 'Maintenance informatique et réseaux', 'niveau' => 80, 'ordre' => 6]);
        Competence::create(['categorie' => 'Autres compétences', 'nom' => 'Gestion des rôles et permissions', 'niveau' => 88, 'ordre' => 7]);
        Competence::create(['categorie' => 'Autres compétences', 'nom' => 'Conception de plateformes SaaS', 'niveau' => 84, 'ordre' => 8]);
    }
}
