<?php
/**
 * TSPDV — _inc/header.php
 * Requires: $page[] array set by the calling page
 *           i18n.php already required (sets $lang and _t())
 */
$lang       = $page['lang']        ?? $lang ?? 'en';
$title      = $page['title']       ?? 'Private Chauffeur French Riviera — Cannes, Monaco & Nice | TSPDV';
$desc       = $page['description'] ?? 'Discreet private chauffeur services on the French Riviera.';
$canonical  = $page['canonical']   ?? 'https://taxisaintpaul.fr/';
$og_title   = $page['og_title']    ?? $title;
$og_image   = $page['og_image']    ?? 'https://taxisaintpaul.fr/assets/og-default.jpg';
$schema     = $page['schema']      ?? '{}';
$hl_en      = $page['hreflang_en'] ?? 'https://taxisaintpaul.fr/';
$hl_fr      = $page['hreflang_fr'] ?? false;

// URL du toggle langue — préserve la page courante, change seulement ?lang=
$current_url = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
$toggle_lang = ($lang === 'en') ? 'fr' : 'en';
$toggle_url  = $current_url . '?lang=' . $toggle_lang;
$toggle_label= ($lang === 'en') ? 'FR' : 'EN';
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
  <link rel="icon" type="image/png" sizes="120x120" href="assets/logo-tspdv-120.png">
  <link rel="apple-touch-icon" href="assets/logo-tspdv-120.png">

  <!-- ═══ PRIMARY SEO ════════════════════════════════════════ -->
  <title><?= htmlspecialchars($title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($desc) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

  <!-- ═══ HREFLANG ═══════════════════════════════════════════ -->
  <link rel="alternate" hreflang="en" href="<?= htmlspecialchars($hl_en) ?>">
  <?php if ($hl_fr): ?>
  <link rel="alternate" hreflang="fr" href="<?= htmlspecialchars($hl_fr) ?>">
  <?php endif; ?>
  <link rel="alternate" hreflang="x-default" href="<?= htmlspecialchars($hl_en) ?>">

  <!-- ═══ OPEN GRAPH ════════════════════════════════════════ -->
  <meta property="og:type"         content="website">
  <meta property="og:site_name"    content="TSPDV — Private Chauffeur">
  <meta property="og:title"        content="<?= htmlspecialchars($og_title) ?>">
  <meta property="og:description"  content="<?= htmlspecialchars($desc) ?>">
  <meta property="og:url"          content="<?= htmlspecialchars($canonical) ?>">
  <meta property="og:image"        content="<?= htmlspecialchars($og_image) ?>">
  <meta property="og:image:width"  content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:locale"       content="<?= ($lang === 'fr') ? 'fr_FR' : 'en_GB' ?>">

  <!-- ═══ TWITTER CARD ══════════════════════════════════════ -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?= htmlspecialchars($og_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($desc) ?>">
  <meta name="twitter:image"       content="<?= htmlspecialchars($og_image) ?>">

  <!-- ═══ STRUCTURED DATA ════════════════════════════════════ -->
  <script type="application/ld+json"><?= $schema ?></script>

  <!-- ═══ FONTS ═════════════════════════════════════════════ -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">

  <!-- ═══ GLOBAL STYLES ══════════════════════════════════════ -->
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --obsidian:    #0d0c0a;
      --obsidian-2:  #151310;
      --obsidian-3:  #1d1b17;
      --noir:        #0a0a0a;
      --noir-warm:   #100f0d;
      --noir-soft:   #1a1915;
      --ivoire:      #f5f1e8;
      --gold:        #c8a96e;
      --or:          #b8965a;
      --gold-light:  #dfc48e;
      --or-pale:     #d4b87a;
      --or-soft:     rgba(184,150,90,0.25);
      --cream:       #e8dfd0;
      --cream-muted: #a89880;
      --gris:        #888;
      --gris-pale:   #bbb;
      --rule:        rgba(200,169,110,0.18);
      --serif:       'Cormorant Garamond', Georgia, serif;
      --sans:        'Montserrat', system-ui, sans-serif;
    }

    html { scroll-behavior: smooth; }

    body {
      background: var(--obsidian);
      color: var(--cream);
      font-family: var(--sans);
      font-weight: 300;
      font-size: 15px;
      line-height: 1.75;
      -webkit-font-smoothing: antialiased;
    }

    h1, h2, h3, h4 { font-family: var(--serif); font-weight: 400; }
    h1 { font-size: clamp(2.2rem, 5vw, 3.8rem); line-height: 1.1; letter-spacing: -.01em; }
    h2 { font-size: clamp(1.6rem, 3vw, 2.4rem); line-height: 1.2; }
    h3 { font-size: 1.25rem; }
    em { font-style: italic; color: var(--gold); }
    p  { color: var(--cream-muted); max-width: 64ch; }
    a  { color: inherit; text-decoration: none; }

    .container { max-width: 1140px; margin: 0 auto; padding: 0 2rem; }
    .section    { padding: 6rem 0; border-top: .5px solid var(--rule); }

    /* ── Nav ─────────────────────────────────────────────── */
    .nav {
      position: fixed; top: 0; width: 100%; z-index: 100;
      display: flex; align-items: center; justify-content: space-between;
      padding: 1.5rem 2.5rem;
      z-index: 1000;
      background: linear-gradient(to bottom, rgba(13,12,10,.97) 0%, transparent 100%);
      backdrop-filter: blur(6px);
      border-bottom: .5px solid var(--rule);
      transition: background .3s;
    }
    .nav.scrolled { background: rgba(13,12,10,.97); }
    .nav-logo {
      display: flex; align-items: center; gap: 10px;
      font-family: var(--serif); font-size: 1.4rem; letter-spacing: .1em;
      color: var(--gold);
    }
    .nav-logo-img { height: 40px; width: auto; display: block; }
    .nav-logo span { font-size: .7rem; display: block; letter-spacing: .25em; color: var(--cream-muted); font-family: var(--sans); }
    .nav-links { display: flex; gap: 2rem; list-style: none; align-items: center; }
    .nav-links a { font-size: .68rem; letter-spacing: .18em; text-transform: uppercase; color: var(--cream-muted); transition: color .2s; }
    .nav-links a:hover { color: var(--gold); }

    /* Dropdown */
    .nav-item { position: relative; }
    .nav-dropdown {
      position: absolute; top: calc(100% + 1rem); left: 50%;
      transform: translateX(-50%);
      background: var(--obsidian); border: .5px solid var(--rule);
      padding: .75rem 0; min-width: 240px;
      opacity: 0; visibility: hidden; pointer-events: none;
      z-index: 300;
      /* visibility retardée de .3s : le menu pardonne un trajet de souris en diagonale */
      transition: opacity .2s, transform .2s, visibility 0s .3s;
      transform: translateX(-50%) translateY(8px);
    }
    /* Pont invisible : garde le survol actif entre le bouton et le menu */
    .nav-dropdown::before {
      content: ''; position: absolute;
      top: -1rem; left: 0; right: 0; height: 1rem;
    }
    .nav-item:hover .nav-dropdown,
    .nav-item:focus-within .nav-dropdown {
      opacity: 1; visibility: visible; pointer-events: auto;
      transform: translateX(-50%) translateY(0);
      transition-delay: 0s;
    }
    .nav-dropdown a {
      display: flex; align-items: center; gap: .75rem;
      padding: .65rem 1.25rem; font-size: .65rem; letter-spacing: .14em;
      color: var(--cream-muted); transition: color .15s, background .15s;
    }
    .nav-dropdown a:hover { color: var(--gold); background: var(--obsidian-3); }
    .dd-num { color: var(--gold); font-family: var(--serif); font-style: italic; font-size: .8rem; }

    /* ── Toggle langue ─────────────────────────────────── */
    .lang-toggle {
      font-size: .62rem; letter-spacing: .2em; text-transform: uppercase;
      color: var(--cream-muted); border: .5px solid var(--rule);
      padding: .35rem .75rem; transition: color .2s, border-color .2s;
      cursor: pointer;
    }
    .lang-toggle:hover { color: var(--gold); border-color: var(--gold); }

    /* ── CTA nav ───────────────────────────────────────── */
    .nav-cta {
      font-size: .68rem; letter-spacing: .18em; text-transform: uppercase;
      border: .5px solid var(--gold); color: var(--gold);
      padding: .55rem 1.4rem; transition: background .2s, color .2s;
    }
    .nav-cta:hover { background: var(--gold); color: var(--obsidian); }

    /* ── Hero ──────────────────────────────────────────── */
    .page-hero {
      min-height: 55vh; display: flex; align-items: flex-end;
      padding: 10rem 0 5rem; background: var(--obsidian-2);
      position: relative; overflow: hidden;
    }
    .page-hero::before {
      content: ''; position: absolute; inset: 0;
      background: radial-gradient(ellipse at 30% 60%, rgba(200,169,110,.07) 0%, transparent 60%);
    }
    .hero-eyebrow {
      font-size: .65rem; letter-spacing: .25em; text-transform: uppercase;
      color: var(--gold); margin-bottom: 1.5rem; display: flex; align-items: center; gap: 1rem;
    }
    .hero-eyebrow::before { content: ''; display: block; width: 40px; height: .5px; background: var(--gold); }
    .hero-rule { width: 80px; height: 1px; background: var(--gold); opacity: .4; margin: 2rem 0; }

    /* ── Breadcrumb ────────────────────────────────────── */
    .breadcrumb {
      display: flex; gap: .5rem; align-items: center;
      font-size: .65rem; letter-spacing: .12em; text-transform: uppercase;
      color: var(--cream-muted); margin-bottom: 2rem;
    }
    .breadcrumb a { color: var(--cream-muted); transition: color .2s; }
    .breadcrumb a:hover { color: var(--gold); }
    .breadcrumb-sep { opacity: .35; }

    /* ── Specs grid ────────────────────────────────────── */
    .specs-grid {
      display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1px; background: var(--rule); margin: 4rem 0;
    }
    .spec-item { background: var(--obsidian); padding: 2rem 1.5rem; }
    .spec-label { font-size: .6rem; letter-spacing: .2em; text-transform: uppercase; color: var(--gold); margin-bottom: .5rem; }
    .spec-value { font-family: var(--serif); font-size: 1.15rem; color: var(--cream); }

    /* ── Content grid ──────────────────────────────────── */
    .content-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 5rem; align-items: start; }
    @media (max-width: 768px) { .content-grid { grid-template-columns: 1fr; gap: 3rem; } }

    .service-list { list-style: none; margin-top: 2rem; }
    .service-list li {
      padding: 1.1rem 0; border-bottom: .5px solid var(--rule);
      display: flex; gap: 1rem; align-items: flex-start;
      font-size: .88rem; color: var(--cream-muted);
    }
    .service-list li::before { content: '—'; color: var(--gold); flex-shrink: 0; }

    /* ── FAQ ───────────────────────────────────────────── */
    .faq-item { border-bottom: .5px solid var(--rule); }
    .faq-q {
      width: 100%; background: none; border: none; cursor: pointer;
      display: flex; justify-content: space-between; align-items: center;
      padding: 1.5rem 0; text-align: left;
      font-family: var(--serif); font-size: 1.15rem; color: var(--cream); gap: 1rem;
    }
    .faq-q .faq-icon { color: var(--gold); font-size: 1.2rem; transition: transform .3s; flex-shrink: 0; }
    .faq-q[aria-expanded="true"] .faq-icon { transform: rotate(45deg); }
    .faq-a {
      max-height: 0; overflow: hidden; transition: max-height .4s ease;
      font-size: .9rem; color: var(--cream-muted); line-height: 1.8; padding-right: 2rem;
    }
    .faq-a p { max-width: 100%; padding-bottom: 1.5rem; }

    /* ── CTA band ──────────────────────────────────────── */
    .cta-band {
      background: var(--obsidian-3); border-top: .5px solid var(--rule);
      border-bottom: .5px solid var(--rule); text-align: center; padding: 5rem 2rem;
    }
    .cta-band h2 { margin-bottom: 1rem; }
    .cta-band p  { margin: 0 auto 2.5rem; }
    .btn-gold {
      display: inline-block; font-size: .68rem; letter-spacing: .2em; text-transform: uppercase;
      background: var(--gold); color: var(--obsidian); padding: 1rem 2.5rem; font-weight: 500;
      transition: background .2s, transform .15s;
    }
    .btn-gold:hover { background: var(--gold-light); transform: translateY(-1px); }
    .btn-outline {
      display: inline-block; font-size: .68rem; letter-spacing: .2em; text-transform: uppercase;
      border: .5px solid var(--gold); color: var(--gold);
      padding: 1rem 2.5rem; margin-left: 1rem; font-weight: 400;
      transition: background .2s, color .2s;
    }
    .btn-outline:hover { background: var(--gold); color: var(--obsidian); }

    /* ── Related cards ─────────────────────────────────── */
    .related-grid {
      display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 1px; background: var(--rule);
    }
    .related-card { background: var(--obsidian); padding: 2.5rem 2rem; transition: background .25s; }
    .related-card:hover { background: var(--obsidian-3); }
    .related-card .rc-num { font-size: .6rem; letter-spacing: .2em; color: var(--gold); margin-bottom: 1rem; display: block; }
    .related-card h3 { font-size: 1.2rem; margin-bottom: .75rem; }
    .related-card p  { font-size: .85rem; margin-bottom: 1.25rem; }
    .rc-link {
      font-size: .62rem; letter-spacing: .18em; text-transform: uppercase;
      color: var(--gold); border-bottom: .5px solid var(--gold);
      padding-bottom: 2px; transition: opacity .2s;
    }
    .rc-link:hover { opacity: .7; }

    /* ── Utility ───────────────────────────────────────── */
    .gold-rule { width: 60px; height: .5px; background: var(--gold); margin: 2rem 0; }
    .label-sm  { font-size: .62rem; letter-spacing: .2em; text-transform: uppercase; color: var(--gold); }
    .mt-1 { margin-top: 1rem; }
    .mt-2 { margin-top: 2rem; }
    .mt-3 { margin-top: 3rem; }

    /* ── Reveal animation ──────────────────────────────── */
    .reveal { opacity: 0; transform: translateY(28px); transition: opacity .9s ease-out, transform .9s ease-out; }
    .reveal.in { opacity: 1; transform: translateY(0); }

    /* ── Mobile ────────────────────────────────────────── */
    @media (max-width: 768px) {
      .nav { padding: 1.2rem 1.25rem; }
      .nav-links { display: none; }
      .nav-cta { display: none; }
    }
  </style>
</head>
<body>

<nav class="nav" id="nav" role="navigation" aria-label="<?= $lang === 'fr' ? 'Navigation principale' : 'Main navigation' ?>">
  <a class="nav-logo" href="https://taxisaintpaul.fr/<?= $lang === 'fr' ? '?lang=fr' : '' ?>">
    <picture>
      <source srcset="assets/logo-tspdv-120.webp" type="image/webp">
      <img src="assets/logo-tspdv-120.png" alt="Logo TSPDV" class="nav-logo-img">
    </picture>
    <div>
      TSPDV
      <span>Saint-Paul-de-Vence</span>
    </div>
  </a>
  <ul class="nav-links">
    <li><a href="https://taxisaintpaul.fr/<?= $lang === 'fr' ? '?lang=fr' : '' ?>#philosophy"><?= _t('nav_philosophy') ?></a></li>
    <li class="nav-item">
      <a href="https://taxisaintpaul.fr/<?= $lang === 'fr' ? '?lang=fr' : '' ?>#services"><?= _t('nav_services') ?> &#9662;</a>
      <div class="nav-dropdown">
        <a href="/airport-transfer-nice.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>"><span class="dd-num">01</span> <?= $lang === 'fr' ? 'Transfert Aéroport Nice' : 'Airport Transfer Nice' ?></a>
        <a href="/yacht-side-service-antibes.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>"><span class="dd-num">02</span> <?= $lang === 'fr' ? 'Service Yacht-Side' : 'Yacht-Side Service' ?></a>
        <a href="/villa-transfers-provence.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>"><span class="dd-num">03</span> <?= $lang === 'fr' ? 'Transferts de Villa' : 'Villa Transfers' ?></a>
        <a href="/event-chauffeur-cannes.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>"><span class="dd-num">04</span> <?= $lang === 'fr' ? 'Coordination Événementielle' : 'Event Coordination' ?></a>
        <a href="/private-chauffeur-monaco.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>"><span class="dd-num">05</span> <?= $lang === 'fr' ? 'Chauffeur Monaco' : 'Monaco Chauffeur' ?></a>
        <a href="/chauffeur-prive-cote-dazur.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>"><span class="dd-num">06</span> <?= $lang === 'fr' ? 'Chauffeur Privé CDA' : 'Private Chauffeur CDA' ?></a>
      </div>
    </li>
    <li><a href="https://taxisaintpaul.fr/<?= $lang === 'fr' ? '?lang=fr' : '' ?>#fleet"><?= _t('nav_fleet') ?></a></li>
    <li><a href="https://taxisaintpaul.fr/<?= $lang === 'fr' ? '?lang=fr' : '' ?>#audiences"><?= _t('nav_clientele') ?></a></li>
    <li><a href="/french-riviera-travel-guide.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>">Guide</a></li>
    <li>
      <a class="lang-toggle" href="<?= htmlspecialchars($toggle_url) ?>" aria-label="<?= $lang === 'fr' ? 'Switch to English' : 'Passer en français' ?>">
        <?= $toggle_label ?>
      </a>
    </li>
  </ul>
  <a class="nav-cta" href="https://taxisaintpaul.fr/<?= $lang === 'fr' ? '?lang=fr' : '' ?>#contact"><?= _t('nav_reserve') ?></a>
</nav>
