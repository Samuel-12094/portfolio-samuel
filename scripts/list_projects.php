<?php

// Liste les projets dans la base pour diagnostic
require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$projects = App\Models\Project::all();
echo 'COUNT:'.$projects->count().PHP_EOL;
foreach ($projects as $p) {
    echo '- '.$p->titre.PHP_EOL;
}
