<?php
require_once __DIR__ . '/_inc/i18n.php';

/* ═══════════════════════════════════════════════════════════════
   Primary  (EN): private airport transfer Nice NCE | chauffeur to Cannes Monaco
   Primary  (FR): transfert aéroport Nice chauffeur privé | NCE Cannes Monaco
═══════════════════════════════════════════════════════════════ */

$strings = [
  'title' => [
    'en' => 'Private Airport Transfer Nice NCE — Chauffeur to Cannes, Monaco & Riviera | TSPDV',
    'fr' => 'Transfert Aéroport Nice NCE — Chauffeur Privé vers Cannes & Monaco | TSPDV',
  ],
  'desc' => [
    'en' => 'Private chauffeur meet-and-greet at Nice Airport (NCE). Real-time flight tracking, FBO terminal service, luggage assistance. Silent transfer to Cannes, Monaco, Antibes or your villa. Book TSPDV.',
    'fr' => 'Chauffeur privé accueil personnalisé à l\'aéroport de Nice (NCE). Suivi de vol en temps réel, service terminal FBO, assistance bagages. Transfert silencieux vers Cannes, Monaco, Antibes ou votre villa.',
  ],
  'hero_eyebrow' => ['en' => 'Airport Liaison · NCE · Cannes-Mandelieu · Monaco Heliport',
                      'fr' => 'Liaison Aéroport · NCE · Cannes-Mandelieu · Héliport Monaco'],
  'hero_h1'      => ['en' => "Private Airport Transfer\n<em>Nice Côte d'Azur</em>",
                      'fr' => "Transfert Aéroport Privé\n<em>Nice Côte d'Azur</em>"],
  'hero_p'       => ['en' => 'Your flight lands. Your chauffeur is already waiting — name board in hand, flight monitored, vehicle cooled. From the arrivals hall to your destination on the Riviera, not a single detail is left to chance.',
                      'fr' => 'Votre vol atterrit. Votre chauffeur attend déjà — panneau nominatif en main, vol suivi, véhicule climatisé. Du hall des arrivées à votre destination sur la Riviera, aucun détail n\'est laissé au hasard.'],
  'svc_h2'       => ['en' => "Meet-and-greet from gate\nto <em>destination</em>",
                      'fr' => "Accueil personnalisé\nde la porte à <em>destination</em>"],
  'svc_p1'       => ['en' => 'Nice Côte d\'Azur Airport (NCE) is the gateway to the French Riviera for private clients, yacht owners, and five-star hotel guests arriving from across the world. TSPDV has been providing discreet, anticipatory airport transfers since our founding — treating every arrival as the opening act of a seamless journey.',
                      'fr' => 'L\'aéroport de Nice Côte d\'Azur (NCE) est la porte d\'entrée de la Riviera française pour les clients privés, les propriétaires de yachts et les clients d\'hôtels cinq étoiles arrivant du monde entier. TSPDV assure des transferts aéroportuaires discrets et anticipatoires depuis notre fondation — traitant chaque arrivée comme le premier acte d\'un voyage sans accroc.'],
  'svc_p2'       => ['en' => 'Your chauffeur enters the terminal on your behalf, monitors your flight in real time, and adjusts silently to any delay. Luggage is handled from baggage claim to vehicle boot. The drive — to Cannes, Monaco, Antibes, Saint-Paul-de-Vence, or any villa in the hills of Provence — is conducted without haste, without noise, and without interruption.',
                      'fr' => 'Votre chauffeur entre dans le terminal en votre nom, surveille votre vol en temps réel et s\'adapte silencieusement à tout retard. Les bagages sont pris en charge du tapis roulant au coffre du véhicule. Le trajet — vers Cannes, Monaco, Antibes, Saint-Paul-de-Vence, ou toute villa dans les collines de Provence — s\'effectue sans hâte, sans bruit et sans interruption.'],
  'svc_p3'       => ['en' => 'We serve Nice Côte d\'Azur Airport (NCE), Cannes-Mandelieu Airport (CEQ), Monaco Heliport, and private FBO terminals across the Riviera.',
                      'fr' => 'Nous desservons l\'aéroport de Nice Côte d\'Azur (NCE), l\'aéroport de Cannes-Mandelieu (CEQ), l\'héliport de Monaco et les terminaux FBO privés sur toute la Riviera.'],
  'incl_h'       => ['en' => 'What is included',          'fr' => 'Ce qui est inclus'],
  'appr_h2'      => ['en' => "Anticipated, never <em>improvised</em>",
                      'fr' => "Anticipé, jamais <em>improvisé</em>"],
  'appr_p1'      => ['en' => 'The difference between a taxi and a private chauffeur house is anticipation. We do not wait for you to call. We know your flight number, your ETA, and your destination before you land. The vehicle is positioned, the climate is set, and the route is planned — accounting for traffic, construction, and the rhythm of the Riviera in season.',
                      'fr' => 'La différence entre un taxi et une maison de chauffeur privé, c\'est l\'anticipation. Nous n\'attendons pas votre appel. Nous connaissons votre numéro de vol, votre heure d\'arrivée prévue et votre destination avant votre atterrissage. Le véhicule est positionné, la climatisation est réglée et l\'itinéraire est planifié — tenant compte du trafic, des travaux et du rythme de la Riviera en saison.'],
  'appr_p2'      => ['en' => 'For guests arriving at private FBO terminals or via helicopter at Monaco Heliport, our service is tailored to the confidentiality and precision those arrivals demand.',
                      'fr' => 'Pour les clients arrivant aux terminaux FBO privés ou en hélicoptère à l\'héliport de Monaco, notre service est adapté à la confidentialité et à la précision que ces arrivées exigent.'],
  'trust_h'      => ['en' => 'Trusted by',                'fr' => 'Fait confiance par'],
  'cta_h2'       => ['en' => 'Reserve your airport transfer',  'fr' => 'Réserver votre transfert aéroport'],
  'cta_p'        => ['en' => 'Each enquiry receives a personal response within the working day.',
                      'fr' => 'Chaque demande reçoit une réponse personnelle dans la journée.'],
  'faq_h2'       => ['en' => "Everything you need to <em>know</em>", 'fr' => "Tout ce que vous devez <em>savoir</em>"],
  'related_h2'   => ['en' => "Related <em>services</em>",   'fr' => "Services <em>associés</em>"],
  'bc_page'      => ['en' => 'Airport Transfer Nice',        'fr' => 'Transfert Aéroport Nice'],
];

$L = $lang; // shorthand

$schema = json_encode([
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type"=>"Service","@id"=>"https://taxisaintpaul.fr/airport-transfer-nice.php#service",
     "name"        => "Private Airport Transfer Nice NCE — Chauffeur Côte d'Azur",
     "description" => "Meet-and-greet private chauffeur at Nice Côte d'Azur Airport. Real-time flight tracking, FBO terminal service, luggage assistance. Silent transfer to Cannes, Monaco, Antibes or any villa on the French Riviera.",
     "provider"    => ["@type"=>"LocalBusiness","@id"=>"https://taxisaintpaul.fr/#business","name"=>"TSPDV — Private Chauffeur","telephone"=>"+33609285536"],
     "areaServed"  => ["Nice","Cannes","Monaco","Antibes","Saint-Tropez","Saint-Paul-de-Vence","Menton","Côte d'Azur"],
     "serviceType" => "Airport Chauffeur Transfer",
     "url"         => "https://taxisaintpaul.fr/airport-transfer-nice.php"],
    ["@type"=>"BreadcrumbList","itemListElement"=>[
      ["@type"=>"ListItem","position"=>1,"name"=>"Home","item"=>"https://taxisaintpaul.fr/"],
      ["@type"=>"ListItem","position"=>2,"name"=>"Services","item"=>"https://taxisaintpaul.fr/#services"],
      ["@type"=>"ListItem","position"=>3,"name"=>"Airport Transfer Nice","item"=>"https://taxisaintpaul.fr/airport-transfer-nice.php"]]],
    ["@type"=>"FAQPage","mainEntity"=>[
      ["@type"=>"Question","name"=>"How far in advance should I book a private airport transfer from Nice?","acceptedAnswer"=>["@type"=>"Answer","text"=>"We recommend booking at least 24 hours in advance. For peak season (July–August) and multi-vehicle requests, 48–72 hours ahead ensures your preferred vehicle and chauffeur are reserved exclusively for your party."]],
      ["@type"=>"Question","name"=>"Do you track my flight in real time?","acceptedAnswer"=>["@type"=>"Answer","text"=>"Yes. Your chauffeur monitors your flight live. If your arrival is delayed, we adjust the meet-and-greet time automatically — no additional waiting charges for the first 60 minutes of delay."]],
      ["@type"=>"Question","name"=>"Do you serve private FBO terminals and business aviation arrivals?","acceptedAnswer"=>["@type"=>"Answer","text"=>"Yes. TSPDV coordinates directly with FBO handlers at Nice NCE, Cannes-Mandelieu CEQ, and Monaco Heliport. For private jet arrivals, the vehicle is positioned as close to the aircraft as the apron permits."]],
      ["@type"=>"Question","name"=>"Which destinations do you serve from Nice airport?","acceptedAnswer"=>["@type"=>"Answer","text"=>"We serve the entire Côte d'Azur: Cannes, Monaco, Antibes, Saint-Tropez, Saint-Paul-de-Vence, Menton, Èze, Grasse and private villas throughout Provence. Long-distance transfers to Italy or Switzerland are available on request."]],
    ]]
  ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$page = [
  'title'       => $strings['title'][$L],
  'description' => $strings['desc'][$L],
  'canonical'   => 'https://taxisaintpaul.fr/airport-transfer-nice.php',
  'og_title'    => $L === 'fr' ? 'Transfert Aéroport Nice — Chauffeur vers Cannes & Monaco | TSPDV'
                               : 'Private Airport Transfer Nice — Chauffeur to Cannes & Monaco | TSPDV',
  'og_image'    => 'https://taxisaintpaul.fr/assets/og-nice-airport.jpg',
  'schema'      => $schema,
  'lang'        => $L,
  'hreflang_en' => 'https://taxisaintpaul.fr/airport-transfer-nice.php',
  'hreflang_fr' => 'https://taxisaintpaul.fr/airport-transfer-nice.php?lang=fr',
];

require __DIR__ . '/_inc/header.php';

$faqs = [
  'en' => [
    ["How far in advance should I book?","We recommend booking at least 24 hours in advance for standard transfers. For peak season (July–August) and multi-vehicle requests, 48–72 hours ahead ensures your preferred vehicle and chauffeur are reserved exclusively for your party."],
    ["Do you track my flight in real time?","Yes. Your chauffeur monitors your flight live using professional aviation tracking. If your arrival is delayed, we adjust the meet-and-greet time automatically — there are no additional waiting charges for the first 60 minutes of delay."],
    ["Do you serve private FBO terminals?","Yes. TSPDV coordinates directly with FBO handlers at Nice NCE, Cannes-Mandelieu CEQ, and Monaco Heliport. For private jet arrivals, the vehicle is positioned as close to the aircraft as the apron permits — guests transfer without entering the public terminal."],
    ["Which destinations do you serve from Nice airport?","We serve the entire Côte d'Azur and beyond: Cannes, Monaco, Antibes, Saint-Tropez, Saint-Paul-de-Vence, Vence, Menton, Èze, Grasse, and private villas throughout the hills of Provence. Long-distance transfers to Italy or Switzerland are available on request."],
    ["Is there a meet-and-greet inside the terminal?","Yes. Your chauffeur meets you in the arrivals hall with a discreet name board, assists with all luggage, and escorts you directly to the vehicle. We handle the journey from gate to car door — you simply walk."],
  ],
  'fr' => [
    ["Combien de temps à l'avance dois-je réserver ?","Nous recommandons de réserver au moins 24 heures à l'avance pour les transferts standard. En haute saison (juillet–août) et pour les demandes multi-véhicules, 48 à 72 heures à l'avance garantissent votre véhicule et chauffeur préférés."],
    ["Suivez-vous mon vol en temps réel ?","Oui. Votre chauffeur surveille votre vol en direct via un suivi d'aviation professionnel. En cas de retard, l'heure d'accueil est ajustée automatiquement — aucun frais supplémentaire pour les 60 premières minutes de retard."],
    ["Assurez-vous le service aux terminaux FBO privés ?","Oui. TSPDV coordonne directement avec les handlers FBO à Nice NCE, Cannes-Mandelieu CEQ et l'héliport de Monaco. Pour les arrivées en jet privé, le véhicule est positionné au plus proche de l'appareil."],
    ["Quelles destinations desservez-vous depuis l'aéroport de Nice ?","Nous desservons toute la Côte d'Azur : Cannes, Monaco, Antibes, Saint-Tropez, Saint-Paul-de-Vence, Vence, Menton, Èze, Grasse et les villas privées de Provence. Les transferts longue distance vers l'Italie ou la Suisse sont disponibles sur demande."],
    ["Y a-t-il un service d'accueil dans le terminal ?","Oui. Votre chauffeur vous accueille dans le hall des arrivées avec un panneau nominatif discret, prend en charge tous les bagages et vous escorte directement jusqu'au véhicule."],
  ],
];
?>

<section class="page-hero" style="background-image:linear-gradient(to bottom, rgba(13,12,10,.55) 0%, rgba(13,12,10,.82) 70%, rgba(13,12,10,.97) 100%),url('assets/private-luxury-jet-airport-terminal.webp');background-size:cover;background-position:center;" aria-label="<?= $L === 'fr' ? 'Introduction de la page' : 'Page introduction' ?>">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="https://taxisaintpaul.fr/<?= $L==='fr'?'?lang=fr':'' ?>"><?= _t('breadcrumb_home') ?></a>
      <span class="breadcrumb-sep">·</span>
      <a href="https://taxisaintpaul.fr/<?= $L==='fr'?'?lang=fr':'' ?>#services"><?= _t('breadcrumb_svc') ?></a>
      <span class="breadcrumb-sep">·</span>
      <span aria-current="page"><?= $strings['bc_page'][$L] ?></span>
    </nav>
    <div class="hero-eyebrow"><?= $strings['hero_eyebrow'][$L] ?></div>
    <h1><?= nl2br($strings['hero_h1'][$L]) ?></h1>
    <div class="hero-rule"></div>
    <p style="max-width:52ch; font-size:1rem; color:var(--cream-muted); line-height:1.8;"><?= $strings['hero_p'][$L] ?></p>
  </div>
</section>

<main id="main-content">
<section class="section">
  <div class="container">
    <div class="content-grid">
      <div>
        <span class="label-sm"><?= _t('svc_the_service') ?></span>
        <div class="gold-rule"></div>
        <h2><?= nl2br($strings['svc_h2'][$L]) ?></h2>
        <p class="mt-1"><?= $strings['svc_p1'][$L] ?></p>
        <p class="mt-1"><?= $strings['svc_p2'][$L] ?></p>
        <p class="mt-1"><?= $strings['svc_p3'][$L] ?></p>
      </div>
      <div>
        <span class="label-sm"><?= $strings['incl_h'][$L] ?></span>
        <div class="gold-rule"></div>
        <ul class="service-list" role="list">
          <?php
          $items = $L === 'fr' ? [
            'Suivi de vol en temps réel — ajustement automatique des retards',
            'Accueil personnalisé dans le hall des arrivées avec panneau nominatif discret',
            'Assistance bagages complète du carrousel au véhicule',
            'Mercedes-Benz V-Class dernier modèle, jusqu\'à 7 passagers',
            'Chauffeur bilingue FR/EN en tenue formelle',
            'Transfert vers toute destination sur la Côte d\'Azur ou en Provence',
            'Eau minérale fraîche et rafraîchissements à bord',
            '60 minutes d\'attente gratuite pour les retards de vol',
            'Siège enfant disponible sur demande (préavis requis)',
            'Service terminal FBO & aviation d\'affaires disponible',
          ] : [
            'Real-time flight tracking — automatic adjustment for delays',
            'Meet-and-greet in arrivals hall with discrete name board',
            'Full luggage assistance from carousel to vehicle',
            'Late-model Mercedes-Benz V-Class, up to 7 passengers',
            'English-speaking chauffeur in formal attire',
            'Transfer to any destination on the Côte d\'Azur or Provence',
            'Chilled still water and soft refreshments on board',
            '60 minutes complimentary waiting time for flight delays',
            'Child seat available on request (advance notice required)',
            'FBO & private terminal service available',
          ];
          foreach ($items as $item): ?>
          <li><?= htmlspecialchars($item) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="specs-grid" role="region" aria-label="<?= $L === 'fr' ? 'Itinéraires clés' : 'Key routes' ?>">
      <?php
      $routes = [
        ['Nice → Cannes',                '35 min · 35 km'],
        ['Nice → Monaco',                '30 min · 22 km'],
        ['Nice → Antibes',               '25 min · 23 km'],
        ['Nice → Saint-Paul-de-Vence',   '25 min · 20 km'],
        ['Nice → Saint-Tropez',          '90 min · 100 km'],
        [$L === 'fr' ? 'Attente incluse' : 'Waiting time included', $L === 'fr' ? '60 min gratuit' : '60 min free'],
      ];
      foreach ($routes as $r): ?>
      <div class="spec-item">
        <div class="spec-label"><?= htmlspecialchars($r[0]) ?></div>
        <div class="spec-value"><?= htmlspecialchars($r[1]) ?></div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="content-grid mt-3">
      <div>
        <span class="label-sm"><?= $L === 'fr' ? 'Notre approche' : 'Our Approach' ?></span>
        <div class="gold-rule"></div>
        <h2><?= nl2br($strings['appr_h2'][$L]) ?></h2>
        <p class="mt-1"><?= $strings['appr_p1'][$L] ?></p>
        <p class="mt-1"><?= $strings['appr_p2'][$L] ?></p>
      </div>
      <div>
        <span class="label-sm"><?= $strings['trust_h'][$L] ?></span>
        <div class="gold-rule"></div>
        <?php $trust_items = $L === 'fr' ? [
          'Conciergeries 5 étoiles — Chèvre d\'Or, Château Saint-Martin, Hôtel du Cap-Eden-Roc',
          'Gestionnaires de mega-yachts — Antibes, Cannes & Monaco',
          'Family offices organisant des visites multi-jours sur la Riviera',
          'Organisateurs d\'événements corporate pour arrivées d\'executives',
          'Intendants de villas gérant les programmes des clients des propriétés',
        ] : [
          'Five-star hotel concierges — Chèvre d\'Or, Château Saint-Martin, Hôtel du Cap-Eden-Roc',
          'Mega-yacht managers across the ports of Antibes, Cannes & Monaco',
          'Private family offices organising multi-day Riviera visits',
          'Corporate event planners for executive arrivals',
          'Villa stewards managing property guest programmes',
        ]; ?>
        <ul class="service-list mt-1" role="list">
          <?php foreach ($trust_items as $item): ?>
          <li><?= htmlspecialchars($item) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section" aria-labelledby="faq-nice-heading">
  <div class="container">
    <div style="max-width:720px; margin: 0 auto;">
      <span class="label-sm"><?= _t('label_faq') ?></span>
      <div class="gold-rule"></div>
      <h2 id="faq-nice-heading"><?= nl2br($strings['faq_h2'][$L]) ?></h2>
      <?php foreach ($faqs[$L] as $i => $faq): ?>
      <div class="faq-item">
        <button class="faq-q" aria-expanded="false" aria-controls="faq-n-<?= $i ?>">
          <?= htmlspecialchars($faq[0]) ?><span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-a" id="faq-n-<?= $i ?>" role="region">
          <p><?= htmlspecialchars($faq[1]) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="cta-band">
  <h2><?= $strings['cta_h2'][$L] ?></h2>
  <p><?= $strings['cta_p'][$L] ?></p>
  <a class="btn-gold" href="tel:+33609285536">+33 6 09 28 55 36</a>
  <a class="btn-outline" href="https://taxisaintpaul.fr/<?= $L==='fr'?'?lang=fr':'' ?>#contact"><?= _t('btn_enquire') ?></a>
</div>

<section class="section" aria-labelledby="related-n-heading">
  <div class="container">
    <span class="label-sm"><?= _t('label_related') ?></span>
    <div class="gold-rule"></div>
    <h2 id="related-n-heading" style="margin-bottom:2rem"><?= nl2br($strings['related_h2'][$L]) ?></h2>
    <div class="related-grid" role="list">
      <div class="related-card" role="listitem">
        <span class="rc-num">02</span>
        <h3><?= $L === 'fr' ? 'Service Yacht-Side' : 'Yacht-Side Service' ?></h3>
        <p><?= $L === 'fr' ? 'Collecte à quai à Antibes, Cannes, Saint-Tropez & Monaco pour propriétaires et clients charter.' : 'Quayside collection in Antibes, Cannes, Saint-Tropez & Monaco for owners and charter guests.' ?></p>
        <a class="rc-link" href="/yacht-side-service-antibes.php<?= $L === 'fr' ? '?lang=fr' : '' ?>"><?= _t('btn_discover') ?></a>
      </div>
      <div class="related-card" role="listitem">
        <span class="rc-num">03</span>
        <h3><?= $L === 'fr' ? 'Transferts de Villa' : 'Villa Transfers' ?></h3>
        <p><?= $L === 'fr' ? 'Transport discret entre villas privées, restaurants et propriétés partenaires en Provence.' : 'Discreet transport between private villas, fine restaurants, and partner properties across Provence.' ?></p>
        <a class="rc-link" href="/villa-transfers-provence.php<?= $L === 'fr' ? '?lang=fr' : '' ?>"><?= _t('btn_discover') ?></a>
      </div>
      <div class="related-card" role="listitem">
        <span class="rc-num">05</span>
        <h3><?= $L === 'fr' ? 'Chauffeur Monaco' : 'Monaco Chauffeur' ?></h3>
        <p><?= $L === 'fr' ? 'Chauffeur privé dédié en demi-journée ou journée complète dans la Principauté de Monaco.' : 'Private half-day or full-day chauffeur service in and around the Principality of Monaco.' ?></p>
        <a class="rc-link" href="/private-chauffeur-monaco.php<?= $L === 'fr' ? '?lang=fr' : '' ?>"><?= _t('btn_discover') ?></a>
      </div>
    </div>
  </div>
</section>
</main>

<?php require __DIR__ . '/_inc/footer.php'; ?>
