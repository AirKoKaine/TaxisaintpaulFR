<?php
/* ═══════════════════════════════════════════════════════════════
   TSPDV — i18n.php  |  Traductions EN / FR
   Détection : 1) ?lang=  2) cookie (choix mémorisé 1 an)
               3) langue du navigateur  4) EN par défaut
═══════════════════════════════════════════════════════════════ */

// ── Détection de la langue ────────────────────────────────────
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en','fr'], true)) {
    // Choix explicite : on le mémorise pour toutes les pages suivantes
    $lang = $_GET['lang'];
    if (!headers_sent()) {
        setcookie('lang', $lang, time() + 31536000, '/'); // 1 an
    }
    $_COOKIE['lang'] = $lang;
} elseif (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], ['en','fr'], true)) {
    // Choix mémorisé lors d'une visite précédente
    $lang = $_COOKIE['lang'];
} elseif (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])
          && stripos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'fr') === 0) {
    // Navigateur configuré en français
    $lang = 'fr';
} else {
    $lang = 'en';
}
$L = $lang; // shorthand utilisé par les pages

// ── URL de bascule de langue (preserve la page courante) ──────
$current_url = strtok(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/', '?');
$toggle_lang  = ($lang === 'en') ? 'fr' : 'en';
$toggle_url   = $current_url . '?lang=' . $toggle_lang;
$toggle_label = ($lang === 'en') ? 'FR' : 'EN';

// ── Dictionnaire ──────────────────────────────────────────────
$t = [

  /* ── Navigation ─────────────────────────────────────────── */
  'nav_philosophy'  => ['en' => 'Philosophy',  'fr' => 'Philosophie'],
  'nav_services'    => ['en' => 'Services',     'fr' => 'Services'],
  'nav_book'        => ['en' => 'Book',         'fr' => 'Réserver'],
  'nav_fleet'       => ['en' => 'Fleet',        'fr' => 'Flotte'],
  'nav_clientele'   => ['en' => 'Clientele',    'fr' => 'Clientèle'],
  'nav_reserve'     => ['en' => 'Reserve',      'fr' => 'Réserver'],

  /* ── Footer ──────────────────────────────────────────────── */
  'footer_services' => ['en' => 'Services',             'fr' => 'Services'],
  'footer_contact'  => ['en' => 'Contact',              'fr' => 'Contact'],
  'footer_brochure' => ['en' => 'Download Brochure',    'fr' => 'Télécharger la brochure'],

  /* ── Boutons ─────────────────────────────────────────────── */
  'btn_enquire'     => ['en' => 'Send an enquiry',      'fr' => 'Envoyer une demande'],
  'btn_discover'    => ['en' => 'Discover →',            'fr' => 'Découvrir →'],

  /* ── Labels ──────────────────────────────────────────────── */
  'label_faq'       => ['en' => 'Frequently asked questions', 'fr' => 'Questions fréquentes'],
  'label_related'   => ['en' => 'You may also require',       'fr' => 'Vous pourriez aussi avoir besoin'],
  'label_related_h' => ['en' => 'Related services',           'fr' => 'Services associés'],

  /* ── Pages de service ────────────────────────────────────── */
  'svc_the_service'   => ['en' => 'The Service',    'fr' => 'Le Service'],
  'breadcrumb_home'   => ['en' => 'TSPDV',          'fr' => 'TSPDV'],
  'breadcrumb_svc'    => ['en' => 'Services',        'fr' => 'Services'],
];

/**
 * Retourne la traduction d'une clé dans la langue courante.
 * Fallback : EN, puis la clé elle-même.
 */
function _t(string $key): string {
    global $t, $lang;
    return $t[$key][$lang] ?? $t[$key]['en'] ?? $key;
}
