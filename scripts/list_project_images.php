<?php

// Liste les images référencées par les projets et vérifie leur présence locale
require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$projects = App\Models\Project::all();
echo 'PROJECTS: '.$projects->count().PHP_EOL;
foreach ($projects as $p) {
    $img = $p->image;
    $exists = 'N/A';
    if (strpos($img, 'http') === 0) {
        $exists = 'remote';
    } else {
        $path = __DIR__.'/../public/'.ltrim($img, '/');
        $exists = file_exists($path) ? 'exists' : 'missing';
    }
    echo "- {$p->titre} -> {$img} [{$exists}]".PHP_EOL;
}
