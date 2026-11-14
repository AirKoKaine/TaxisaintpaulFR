<?php
require_once __DIR__ . '/_inc/i18n.php';
$L = $lang;

$strings = [
  'title' => [
    'en' => 'Private Chauffeur Monaco & Monte-Carlo — Grand Prix, Casino & Full-Day | TSPDV',
    'fr' => 'Chauffeur Privé Monaco & Monte-Carlo — Grand Prix, Casino & Mise à Disposition | TSPDV',
  ],
  'desc' => [
    'en' => 'Dedicated private chauffeur in Monaco: half-day, full-day and Grand Prix week. Port Hercule, Casino Square, Hôtel de Paris, private residences. TSPDV — French Riviera chauffeur house.',
    'fr' => 'Chauffeur privé dédié à Monaco : demi-journée, journée complète et semaine Grand Prix. Port Hercule, Casino de Monte-Carlo, Hôtel de Paris, résidences privées. TSPDV — maison de chauffeur.',
  ],
  'hero_eyebrow' => ['en'=>'Monte-Carlo · Port Hercule · Casino · Fontvieille','fr'=>'Monte-Carlo · Port Hercule · Casino · Fontvieille'],
  'hero_h1'      => ['en'=>"Private Chauffeur\n<em>Monaco</em>",'fr'=>"Chauffeur Privé\n<em>Monaco</em>"],
  'hero_p'       => ['en'=>'In a principality where privacy is a currency, your driver should be indistinguishable from the landscape. TSPDV provides Monaco\'s most discreet private chauffeur service — from a morning run to Casino Square to a late return from the Port.','fr'=>'Dans une principauté où la vie privée est une monnaie d\'échange, votre chauffeur doit se fondre dans le décor. TSPDV offre le service de chauffeur privé le plus discret de Monaco — d\'une matinée à Casino Square à un retour tardif depuis le Port.'],
  'cta_h2' => ['en'=>'Reserve your Monaco chauffeur','fr'=>'Réserver votre chauffeur Monaco'],
  'cta_p'  => ['en'=>'Half-day, full-day or Grand Prix week — each enquiry receives a personal response.','fr'=>'Demi-journée, journée complète ou semaine Grand Prix — chaque demande reçoit une réponse personnelle.'],
];

$schema = json_encode([
  "@context"=>"https://schema.org","@graph"=>[
    ["@type"=>"Service","@id"=>"https://taxisaintpaul.fr/private-chauffeur-monaco.php#service",
     "name"=>"Private Chauffeur Monaco & Monte-Carlo — Grand Prix, Casino & Full-Day",
     "description"=>"Exclusive private chauffeur in Monaco. Half-day, full-day or multi-day reservations. Grand Prix transport, Port Hercule, Casino Square, Hôtel de Paris and private residences.",
     "provider"=>["@type"=>"LocalBusiness","@id"=>"https://taxisaintpaul.fr/#business","name"=>"TSPDV — Private Chauffeur","telephone"=>"+33609285536"],
     "areaServed"=>["Monaco","Monte-Carlo","Fontvieille","La Condamine","Menton","Beaulieu-sur-Mer"],
     "serviceType"=>"Private Chauffeur Monaco","url"=>"https://taxisaintpaul.fr/private-chauffeur-monaco.php"],
    ["@type"=>"FAQPage","mainEntity"=>[
      ["@type"=>"Question","name"=>"Can a French-registered vehicle operate in Monaco?","acceptedAnswer"=>["@type"=>"Answer","text"=>"Yes. French-registered vehicles, including our Mercedes-Benz V-Class, circulate freely throughout Monaco. TSPDV operates regularly in the Principality with no restrictions."]],
      ["@type"=>"Question","name"=>"Do you provide chauffeur service during the Monaco Grand Prix?","acceptedAnswer"=>["@type"=>"Answer","text"=>"Yes. We recommend booking 6–8 weeks in advance. During race weekend, we manage transfers between Nice Airport, Monaco Heliport, Port Hercule, yachts, paddock pass holders, and private terraces."]],
      ["@type"=>"Question","name"=>"Can I book a chauffeur for the full day in Monaco?","acceptedAnswer"=>["@type"=>"Answer","text"=>"Yes. Our Monaco service is available by the half-day (4 hours) or full day (8 hours). A dedicated vehicle and chauffeur are assigned exclusively to you for the duration."]],
      ["@type"=>"Question","name"=>"Do you collect from Port Hercule?","acceptedAnswer"=>["@type"=>"Answer","text"=>"Yes. Port Hercule is one of our primary collection points in Monaco. We work closely with yacht crews docked in the Principality."]],
    ]]
  ]
], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);

$page = [
  'title'       => $strings['title'][$L],
  'description' => $strings['desc'][$L],
  'canonical'   => 'https://taxisaintpaul.fr/private-chauffeur-monaco.php',
  'og_title'    => $L==='fr' ? 'Chauffeur Privé Monaco & Monte-Carlo | TSPDV' : 'Private Chauffeur Monaco & Monte-Carlo | TSPDV',
  'og_image'    => 'https://taxisaintpaul.fr/assets/og-monaco.jpg',
  'schema'      => $schema, 'lang'=>$L,
  'hreflang_en' => 'https://taxisaintpaul.fr/private-chauffeur-monaco.php',
  'hreflang_fr' => 'https://taxisaintpaul.fr/private-chauffeur-monaco.php?lang=fr',
];
require __DIR__ . '/_inc/header.php';

$faqs = [
  'en'=>[
    ["Can a French-registered vehicle operate in Monaco?","Yes. French-registered vehicles, including our Mercedes-Benz V-Class, circulate freely throughout Monaco. TSPDV operates regularly in the Principality with no restrictions, serving Port Hercule, Casino Square, the Hôtel de Paris, and private residences throughout Monte-Carlo and Fontvieille."],
    ["Do you provide chauffeur service during the Monaco Grand Prix?","Yes, the Monaco Grand Prix is one of our peak periods. We recommend booking 6–8 weeks in advance. During race weekend, we manage transfers between Nice Airport, Monaco Heliport, Port Hercule, yachts, paddock pass holders, and private terraces — coordinating with the road closure schedule to ensure punctuality."],
    ["Can I book a chauffeur for the full day in Monaco?","Yes. Our Monaco service is available by the half-day (4 hours) or full day (8 hours), with extensions available. A dedicated vehicle and chauffeur are assigned exclusively to you for the duration."],
    ["Do you collect from Port Hercule?","Yes. Port Hercule is one of our primary collection points in Monaco. We work closely with yacht crews docked in the Principality, collecting guests from the quay and returning them on any schedule the vessel requires."],
  ],
  'fr'=>[
    ["Un véhicule immatriculé en France peut-il circuler à Monaco ?","Oui. Les véhicules immatriculés en France, dont notre Mercedes-Benz V-Class, circulent librement dans toute la Principauté. TSPDV opère régulièrement à Monaco sans aucune restriction, desservant Port Hercule, Casino Square, l'Hôtel de Paris et les résidences privées de Monte-Carlo et Fontvieille."],
    ["Assurez-vous le service durant le Grand Prix de Monaco ?","Oui, le Grand Prix de Monaco est l'une de nos périodes de pointe. Nous recommandons de réserver 6 à 8 semaines à l'avance. Nous gérons les transferts entre l'aéroport de Nice, l'héliport de Monaco, Port Hercule, les yachts, les détenteurs de pass paddock et les terrasses privées."],
    ["Puis-je réserver un chauffeur pour la journée complète à Monaco ?","Oui. Notre service Monaco est disponible à la demi-journée (4 heures) ou à la journée complète (8 heures), avec extensions disponibles. Un véhicule et un chauffeur dédiés vous sont attribués exclusivement pour toute la durée."],
    ["Assurez-vous les collectes depuis Port Hercule ?","Oui. Port Hercule est l'un de nos principaux points de collecte à Monaco. Nous travaillons en étroite collaboration avec les équipages des yachts amarrés dans la Principauté."],
  ],
];
?>
<section class="page-hero" style="background-image:linear-gradient(to bottom, rgba(13,12,10,.55) 0%, rgba(13,12,10,.82) 70%, rgba(13,12,10,.97) 100%),url('assets/limousine-mercedes-fleet.webp');background-size:cover;background-position:center;" aria-label="Page introduction">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="https://taxisaintpaul.fr/<?= $L==='fr'?'?lang=fr':'' ?>"><?= _t('breadcrumb_home') ?></a><span class="breadcrumb-sep">·</span>
      <a href="https://taxisaintpaul.fr/<?= $L==='fr'?'?lang=fr':'' ?>#services"><?= _t('breadcrumb_svc') ?></a><span class="breadcrumb-sep">·</span>
      <span aria-current="page"><?= $L==='fr' ? 'Chauffeur Monaco' : 'Monaco Chauffeur' ?></span>
    </nav>
    <div class="hero-eyebrow"><?= $strings['hero_eyebrow'][$L] ?></div>
    <h1><?= nl2br($strings['hero_h1'][$L]) ?></h1>
    <div class="hero-rule"></div>
    <p style="max-width:52ch;font-size:1rem;color:var(--cream-muted);line-height:1.8;"><?= $strings['hero_p'][$L] ?></p>
  </div>
</section>
<main id="main-content">
<section class="section"><div class="container">
  <div class="content-grid">
    <div>
      <span class="label-sm"><?= _t('svc_the_service') ?></span><div class="gold-rule"></div>
      <h2><?= $L==='fr' ? "Monaco, composé<br>selon <em>votre agenda</em>" : "Monaco, composed<br>to <em>your agenda</em>" ?></h2>
      <p class="mt-1"><?= $L==='fr' ? 'Monaco est la destination de luxe la plus densément desservie de la Côte d\'Azur — et pourtant, un service de chauffeur privé de qualité y reste réellement rare. TSPDV est basé à Saint-Paul-de-Vence et opère à Monaco depuis notre fondation. Nous connaissons les zones autorisées, les points d\'accès au quai, les protocoles d\'entrée du Casino et les adresses résidentielles qui exigent une discrétion particulière.' : 'Monaco is the most densely served luxury destination on the Côte d\'Azur — and yet, quality private chauffeur service remains genuinely rare. TSPDV is based in Saint-Paul-de-Vence and has been operating in Monaco for our entire history. We know the permitted zones, the quay access points, the Casino entrance protocols, and the residential addresses that require particular discretion.' ?></p>
      <p class="mt-1"><?= $L==='fr' ? 'Que vous ayez besoin d\'un simple transfert depuis l\'aéroport de Nice vers Port Hercule, ou d\'un véhicule dédié pour trois jours pendant le Grand Prix, TSPDV assigne le même véhicule et le même chauffeur pour toute la durée — construisant une familiarité et une précision qui s\'améliorent d\'heure en heure.' : 'Whether you require a single transfer from Nice Airport to Port Hercule, or a dedicated vehicle for three days during the Grand Prix, TSPDV assigns the same vehicle and the same chauffeur for the duration — building familiarity and precision that improves with each hour.' ?></p>
    </div>
    <div>
      <span class="label-sm"><?= $L==='fr' ? 'Destinations desservies' : 'Destinations Served' ?></span><div class="gold-rule"></div>
      <ul class="service-list" role="list">
        <?php $destinations = $L==='fr' ? ['Casino de Monte-Carlo & Casino Square','Port Hercule — collecte & retour depuis le quai','Hôtel de Paris, Hermitage, Métropole, Monte-Carlo Bay','Plage du Larvotto & beach clubs privés','Fontvieille — adresses professionnelles & résidentielles privées','Palais Princier & Jardins de Monaco','Boutiques de luxe & shopping privé','Aéroport de Nice (30 min) — transfert direct','Connexions héliport de Monaco','Frontière italienne — Vintimille & San Remo sur demande'] : ['Casino de Monte-Carlo & Casino Square','Port Hercule — yacht berth collection & return','Hôtel de Paris, Hermitage, Métropole, Monte-Carlo Bay','Larvotto Beach & private beach clubs','Fontvieille — private business & residential addresses','Palais Princier & Jardins de Monaco','Élysée Palace Boutiques & designer shopping','Nice Côte d\'Azur Airport (30 min) — direct transfer','Monaco Heliport connections','Italian border — Ventimiglia & San Remo on request'];
        foreach ($destinations as $d): ?><li><?= htmlspecialchars($d) ?></li><?php endforeach; ?>
      </ul>
    </div>
  </div>
  <div class="specs-grid">
    <?php $specs = $L==='fr' ? [['Durée','Demi-journée · Journée · Multi-jours'],['Véhicule','Mercedes-Benz V-Class · 7 pax'],['Accès Principauté','Total — aucune restriction'],['Grand Prix','Réserver 6–8 semaines à l\'avance'],['Port Hercule','Collecte à quai disponible'],['Service de nuit','Disponible 24h sur réservation']] : [['Duration','Half-day · Full-day · Multi-day'],['Vehicle','Mercedes-Benz V-Class · 7 pax'],['Principality access','Full — no restrictions'],['Grand Prix','Book 6–8 weeks in advance'],['Port Hercule','Quayside collection available'],['Night service','Available 24 h on reservation']];
    foreach ($specs as $s): ?>
    <div class="spec-item"><div class="spec-label"><?= $s[0] ?></div><div class="spec-value"><?= $s[1] ?></div></div>
    <?php endforeach; ?>
  </div>
</div></section>

<section class="section" aria-labelledby="faq-mc-h"><div class="container"><div style="max-width:720px;margin:0 auto;">
  <span class="label-sm"><?= _t('label_faq') ?></span><div class="gold-rule"></div>
  <h2 id="faq-mc-h"><?= $L==='fr' ? "Questions sur le chauffeur <em>Monaco</em>" : "Monaco chauffeur <em>questions</em>" ?></h2>
  <?php foreach ($faqs[$L] as $i=>$faq): ?>
  <div class="faq-item">
    <button class="faq-q" aria-expanded="false" aria-controls="faq-mc-<?= $i ?>"><?= htmlspecialchars($faq[0]) ?><span class="faq-icon" aria-hidden="true">+</span></button>
    <div class="faq-a" id="faq-mc-<?= $i ?>" role="region"><p><?= htmlspecialchars($faq[1]) ?></p></div>
  </div>
  <?php endforeach; ?>
</div></div></section>

<div class="cta-band">
  <h2><?= $strings['cta_h2'][$L] ?></h2>
  <p><?= $strings['cta_p'][$L] ?></p>
  <a class="btn-gold" href="tel:+33609285536">+33 6 09 28 55 36</a>
  <a class="btn-outline" href="https://taxisaintpaul.fr/<?= $L==='fr'?'?lang=fr':'' ?>#contact"><?= _t('btn_enquire') ?></a>
</div>

<section class="section" aria-labelledby="related-mc-h"><div class="container">
  <span class="label-sm"><?= _t('label_related') ?></span><div class="gold-rule"></div>
  <h2 id="related-mc-h" style="margin-bottom:2rem"><?= $L==='fr' ? "Services <em>associés</em>" : "Related <em>services</em>" ?></h2>
  <div class="related-grid" role="list">
    <div class="related-card" role="listitem"><span class="rc-num">01</span><h3><?= $L==='fr'?'Transfert Aéroport Nice':'Airport Transfer Nice' ?></h3><p><?= $L==='fr'?'Transfert privé direct depuis Nice NCE vers Monaco — 30 minutes, vol suivi, bagages inclus.':'Direct private transfer from Nice NCE to Monaco — 30 minutes, flight-tracked, luggage included.' ?></p><a class="rc-link" href="/airport-transfer-nice.php<?= $L==='fr'?'?lang=fr':'' ?>"><?= _t('btn_discover') ?></a></div>
    <div class="related-card" role="listitem"><span class="rc-num">02</span><h3><?= $L==='fr'?'Service Yacht-Side':'Yacht-Side Service' ?></h3><p><?= $L==='fr'?'Collecte à quai depuis Port Hercule — coordonnée directement avec votre capitaine.':'Quayside collection from Port Hercule — coordinated directly with your captain.' ?></p><a class="rc-link" href="/yacht-side-service-antibes.php<?= $L==='fr'?'?lang=fr':'' ?>"><?= _t('btn_discover') ?></a></div>
    <div class="related-card" role="listitem"><span class="rc-num">04</span><h3><?= $L==='fr'?'Coordination Événementielle':'Event Coordination' ?></h3><p><?= $L==='fr'?'Grand Prix, Gala Monte-Carlo — déploiement multi-véhicules pour les grands événements de Monaco.':'Grand Prix, Monte-Carlo Gala — multi-vehicle deployment for Monaco\'s major events.' ?></p><a class="rc-link" href="/event-chauffeur-cannes.php<?= $L==='fr'?'?lang=fr':'' ?>"><?= _t('btn_discover') ?></a></div>
  </div>
</div></section>
<?php require_once __DIR__ . '/_inc/vehira.php'; echo vehira_lien('monaco', $L); ?>
</main>
<?php require __DIR__ . '/_inc/footer.php'; ?>
