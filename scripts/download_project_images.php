<?php

/**
 * Télécharge les images distantes référencées par les projets
 * et met à jour le champ `image` pour pointer vers `images/<file>`.
 * Usage: php scripts/download_project_images.php
 */

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Project;

function download_file($url, $dest)
{
    // Try cURL first for better robustness
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        $fp = fopen($dest, 'wb');
        if (! $fp) {
            return false;
        }
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        // In local dev environments cURL on Windows may fail verifying CA bundle.
        // Disable peer verification here to allow downloads (acceptable for local dev).
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Laravel Image Downloader/1.0');
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        $ok = curl_exec($ch);
        $curlErr = curl_error($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        fclose($fp);
        if ($ok === false) {
            // remove partial file
            @unlink($dest);
            curl_close($ch);
            echo "curl error: {$curlErr} (http code: {$httpCode})\n";

            return false;
        }
        curl_close($ch);

        return true;
    }

    // Fallback to file_get_contents
    $context = stream_context_create(['http' => ['timeout' => 30]]);
    $data = @file_get_contents($url, false, $context);
    if ($data === false) {
        return false;
    }
    $w = @file_put_contents($dest, $data);

    return $w !== false;
}

$projects = Project::all();
$count = $projects->count();
echo "PROJECTS found: {$count}\n";

foreach ($projects as $project) {
    $img = trim((string) $project->image);
    $title = $project->titre ?? 'project-'.$project->id;
    if ($img === '') {
        echo "- [{$project->id}] {$title} -> (no image)\n";

        continue;
    }

    // If already local (no scheme), skip
    $isUrl = filter_var($img, FILTER_VALIDATE_URL) !== false;
    if (! $isUrl) {
        echo "- [{$project->id}] {$title} -> {$img} [local]\n";

        continue;
    }

    echo "- [{$project->id}] {$title} -> {$img} [remote] ... ";

    // Determine extension from URL path
    $path = parse_url($img, PHP_URL_PATH) ?: '';
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    if ($ext === '') {
        $ext = 'jpg';
    }
    // sanitize extension
    $ext = preg_replace('/[^a-z0-9]/i', '', $ext) ?: 'jpg';

    $filename = 'project-'.$project->id.'.'.$ext;
    $destRel = 'images/'.$filename;
    $destAbs = __DIR__.'/../public/'.$destRel;

    if (file_exists($destAbs)) {
        echo "already exists as {$destRel}";
        if ($project->image !== $destRel) {
            $project->image = $destRel;
            $project->save();
            echo ' — DB updated';
        }
        echo "\n";

        continue;
    }

    // Ensure directory exists
    @mkdir(dirname($destAbs), 0755, true);

    $ok = download_file($img, $destAbs);
    if (! $ok) {
        // If the URL contains query parameters, try again without them (some Unsplash links work without the ?w=...)
        if (strpos($img, '?') !== false) {
            $alt = explode('?', $img, 2)[0];
            echo " — retrying without query string: {$alt} ... ";
            $ok2 = download_file($alt, $destAbs);
            if ($ok2) {
                echo "saved as {$destRel} (from trimmed URL) — DB updated\n";
                $project->image = $destRel;
                $project->save();

                continue;
            }
        }

        // Try a second time via simple file_get_contents fallback and report reason
        echo 'Attempting fallback download... ';
        $context = stream_context_create(['http' => ['timeout' => 30, 'header' => "User-Agent: Laravel Image Downloader/1.0\r\n"]]);
        $data = @file_get_contents($img, false, $context);
        if ($data === false) {
            $err = error_get_last();
            echo 'FALLBACK FAILED ('.($err['message'] ?? 'unknown').")\n";

            continue;
        }
        $w = @file_put_contents($destAbs, $data);
        if ($w === false) {
            echo "FALLBACK FAILED writing file\n";

            continue;
        }
        echo "fallback saved as {$destRel}\n";
        $project->image = $destRel;
        $project->save();

        continue;
    }

    // Success: update DB
    $project->image = $destRel;
    $project->save();

    echo "saved as {$destRel} — DB updated\n";
}

echo "Done. Vérifiez `public/images/` et relancez `php scripts/list_project_images.php` si nécessaire.\n";
