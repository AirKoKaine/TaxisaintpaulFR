<?php
// Script à exécuter UNE SEULE FOIS depuis le navigateur
// puis supprimer ce fichier du FTP !
// URL: https://taxisaintpaul.fr/download-fonts.php

$fonts_dir = __DIR__ . '/assets/fonts/';
if (!is_dir($fonts_dir)) mkdir($fonts_dir, 0755, true);

$font_urls = [
  // Cormorant Garamond
  'cormorant-300.woff2'  => 'https://fonts.gstatic.com/s/cormorantgaramond/v22/co3YmX5slCNuHLi8bLeY9MK7whWMhyjYqXtK.woff2',
  'cormorant-300i.woff2' => 'https://fonts.gstatic.com/s/cormorantgaramond/v22/co3WmX5slCNuHLi8bLeY9MK7whWMhyjorYtDxd56.woff2',
  'cormorant-400.woff2'  => 'https://fonts.gstatic.com/s/cormorantgaramond/v22/co3bmX5slCNuHLi8bLeY9MK7whWMhyjYqXts.woff2',
  'cormorant-400i.woff2' => 'https://fonts.gstatic.com/s/cormorantgaramond/v22/co3ZmX5slCNuHLi8bLeY9MK7whWMhyjorYtDwd4.woff2',
  'cormorant-600.woff2'  => 'https://fonts.gstatic.com/s/cormorantgaramond/v22/co3YmX5slCNuHLi8bLeY9MK7whWMhyjYrHpK.woff2',
  // Montserrat
  'montserrat-300.woff2' => 'https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2',
  'montserrat-400.woff2' => 'https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2',
  'montserrat-500.woff2' => 'https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2',
  'montserrat-600.woff2' => 'https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2',
];

$results = [];
foreach ($font_urls as $filename => $url) {
  $dest = $fonts_dir . $filename;
  if (file_exists($dest)) {
    $results[] = "✓ (déjà présent) $filename";
    continue;
  }
  $data = @file_get_contents($url, false, stream_context_create([
    'http' => ['header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) Chrome/120\r\n"]
  ]));
  if ($data && strlen($data) > 1000) {
    file_put_contents($dest, $data);
    $results[] = "✓ $filename (" . round(strlen($data)/1024, 1) . " Ko)";
  } else {
    $results[] = "✗ ÉCHEC $filename";
  }
}

// Créer fonts.css
$css = <<<CSS
/* Cormorant Garamond */
@font-face { font-family:'Cormorant Garamond'; font-style:normal; font-weight:300; font-display:swap; src:url('/assets/fonts/cormorant-300.woff2') format('woff2'); }
@font-face { font-family:'Cormorant Garamond'; font-style:italic; font-weight:300; font-display:swap; src:url('/assets/fonts/cormorant-300i.woff2') format('woff2'); }
@font-face { font-family:'Cormorant Garamond'; font-style:normal; font-weight:400; font-display:swap; src:url('/assets/fonts/cormorant-400.woff2') format('woff2'); }
@font-face { font-family:'Cormorant Garamond'; font-style:italic; font-weight:400; font-display:swap; src:url('/assets/fonts/cormorant-400i.woff2') format('woff2'); }
@font-face { font-family:'Cormorant Garamond'; font-style:normal; font-weight:600; font-display:swap; src:url('/assets/fonts/cormorant-600.woff2') format('woff2'); }
/* Montserrat */
@font-face { font-family:'Montserrat'; font-style:normal; font-weight:300; font-display:swap; src:url('/assets/fonts/montserrat-300.woff2') format('woff2'); }
@font-face { font-family:'Montserrat'; font-style:normal; font-weight:400; font-display:swap; src:url('/assets/fonts/montserrat-400.woff2') format('woff2'); }
@font-face { font-family:'Montserrat'; font-style:normal; font-weight:500; font-display:swap; src:url('/assets/fonts/montserrat-500.woff2') format('woff2'); }
@font-face { font-family:'Montserrat'; font-style:normal; font-weight:600; font-display:swap; src:url('/assets/fonts/montserrat-600.woff2') format('woff2'); }
CSS;

file_put_contents($fonts_dir . 'fonts.css', $css);
$results[] = "✓ fonts.css créé";

echo '<pre style="font-family:monospace;font-size:14px;padding:20px;">';
echo "<b>Téléchargement des fonts TSPDV</b>\n\n";
foreach ($results as $r) echo $r . "\n";
$all_ok = !array_filter($results, fn($r) => str_starts_with($r, '✗'));
if ($all_ok) {
  echo "\n<b style='color:green'>✓ Tout OK — SUPPRIMEZ ce fichier du FTP maintenant !</b>\n";
} else {
  echo "\n<b style='color:red'>⚠ Certains fichiers ont échoué — réessayez</b>\n";
}
echo '</pre>';
