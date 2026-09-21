<?php

/**
 * Télécharge des images placeholder (picsum.photos) pour les projets
 * qui ont encore une URL distante et met à jour la base.
 * Usage: php scripts/fill_missing_with_placeholders.php
 */

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Project;

$projects = Project::where('image', 'like', 'http%')->get();
$count = $projects->count();

echo "Projects to fill: {$count}\n";

function download_placeholder($dest)
{
    $url = 'https://picsum.photos/800';
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        $fp = fopen($dest, 'wb');
        if (! $fp) {
            return false;
        }
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Laravel Placeholder Downloader/1.0');
        $ok = curl_exec($ch);
        fclose($fp);
        if ($ok === false) {
            @unlink($dest);
            curl_close($ch);

            return false;
        }
        curl_close($ch);

        return true;
    }
    $data = @file_get_contents($url);
    if ($data === false) {
        return false;
    }
    $w = @file_put_contents($dest, $data);

    return $w !== false;
}

foreach ($projects as $project) {
    $filename = 'project-'.$project->id.'.jpg';
    $destRel = 'images/'.$filename;
    $destAbs = __DIR__.'/../public/'.$destRel;
    @mkdir(dirname($destAbs), 0755, true);
    echo "- [{$project->id}] {$project->titre} -> filling with placeholder... ";
    $ok = download_placeholder($destAbs);
    if (! $ok) {
        echo "FAILED\n";

        continue;
    }
    $project->image = $destRel;
    $project->save();
    echo "saved as {$destRel}\n";
}

echo "Done.\n";
