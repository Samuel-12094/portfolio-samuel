<?php

/**
 * Télécharge une image représentant une poissonnerie (étal / boutique)
 * et remplace `public/images/fishery.jpg`.
 * Usage: php scripts/download_fishery_shop_image.php
 */

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Liste d'URLs candidates (Pexels / Unsplash). Si une URL fonctionne, elle remplace l'image.
$candidates = [
    'https://images.pexels.com/photos/302899/pexels-photo-302899.jpeg?auto=compress&cs=tinysrgb&w=800',
    'https://images.pexels.com/photos/114131/pexels-photo-114131.jpeg?auto=compress&cs=tinysrgb&w=800',
    'https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?w=800',
    'https://images.pexels.com/photos/1092730/pexels-photo-1092730.jpeg?auto=compress&cs=tinysrgb&w=800',
];

$destDir = __DIR__.'/../public/images';
@mkdir($destDir, 0755, true);
$destFile = $destDir.'/fishery.jpg';

echo "Searching for a fish-shop image and attempting downloads...\n";

foreach ($candidates as $url) {
    echo "Trying: {$url} ... ";
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        $fp = fopen($destFile, 'wb');
        if (! $fp) {
            echo "FAILED to open destination file\n";

            continue;
        }
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
        $ok = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        fclose($fp);
        if ($ok === false || $httpCode >= 400) {
            @unlink($destFile);
            echo "FAILED (HTTP {$httpCode})\n";
            curl_close($ch);

            continue;
        }
        curl_close($ch);
        echo "OK\n";
        echo "Replaced public/images/fishery.jpg with selected shop image.\n";
        exit(0);
    }

    // fallback
    $data = @file_get_contents($url);
    if ($data === false) {
        echo "FAILED\n";

        continue;
    }
    $w = @file_put_contents($destFile, $data);
    if ($w === false) {
        echo "FAILED to write file\n";

        continue;
    }
    echo "OK\n";
    echo "Replaced public/images/fishery.jpg with selected shop image.\n";
    exit(0);
}

echo "Aucune des sources candidates n'a abouti. Je peux essayer d'autres images ou utiliser un placeholder.\n";
exit(1);
