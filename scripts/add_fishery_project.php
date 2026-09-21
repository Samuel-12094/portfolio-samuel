<?php

/**
 * Ajoute le projet "Gestion de Poissonnerie" à la base de données
 * et télécharge une image placeholder pour celui-ci.
 * Usage: php scripts/add_fishery_project.php
 */

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Project;

// Vérifier si le projet existe déjà
$existing = Project::where('titre', 'like', '%Poissonnerie%')->first();
if ($existing) {
    echo "Le projet poissonnerie existe déjà (ID: {$existing->id}).\n";
    exit(0);
}

// Télécharger une image placeholder
$imgDir = __DIR__.'/../public/images';
@mkdir($imgDir, 0755, true);
$imgFile = 'fishery.jpg';
$imgPath = $imgDir.'/'.$imgFile;

echo 'Downloading placeholder image for fishery project... ';
$url = 'https://picsum.photos/800/600?random='.time();
if (function_exists('curl_init')) {
    $ch = curl_init($url);
    $fp = fopen($imgPath, 'wb');
    if ($fp) {
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Laravel Fishery Seeder/1.0');
        $ok = curl_exec($ch);
        fclose($fp);
        if ($ok === false) {
            @unlink($imgPath);
            curl_close($ch);
            echo "FAILED (cURL error)\n";
            exit(1);
        }
        curl_close($ch);
        echo "OK\n";
    }
} else {
    $data = @file_get_contents($url);
    if ($data === false) {
        echo "FAILED\n";
        exit(1);
    }
    $w = @file_put_contents($imgPath, $data);
    if ($w === false) {
        echo "FAILED (write error)\n";
        exit(1);
    }
    echo "OK\n";
}

// Créer le projet
$project = new Project;
$project->titre = 'Gestion de Poissonnerie';
$project->description = 'Application web complète pour gérer une poissonnerie : '.
    'inventaire des produits, gestion des stocks, ventes, clients, '.
    'factures et rapports analytiques. Système de commande intégré avec '.
    'traçabilité des produits et gestion des fournisseurs.';
$project->image = 'images/'.$imgFile;
$project->tags = ['Laravel', 'PHP', 'MySQL', 'Tailwind CSS', 'Vue.js'];
$project->statut = 'En cours';
$project->ordre = 10;
$project->visible = true;
$project->save();

echo "✓ Projet 'Gestion de Poissonnerie' créé avec succès (ID: {$project->id})\n";
echo "  - Titre: {$project->titre}\n";
echo "  - Image: {$project->image}\n";
echo "  - Statut: {$project->statut}\n";
echo "\nVous pouvez voir le projet sur: http://127.0.0.1:8000#projects\n";
