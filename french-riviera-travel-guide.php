<?php
require_once __DIR__ . '/_inc/i18n.php';

/* ═══════════════════════════════════════════════════════════════
   Primary  (EN): french riviera travel guide | south of france côte d'azur
   Primary  (FR): guide voyage côte d'azur | nice cannes monaco èze saint-tropez
═══════════════════════════════════════════════════════════════ */

$strings = [
  'title' => [
    'en' => "French Riviera Travel Guide — Nice, Cannes, Monaco, Èze & Saint-Tropez | TSPDV",
    'fr' => "Guide de la Côte d'Azur — Nice, Cannes, Monaco, Èze & Saint-Tropez | TSPDV",
  ],
  'desc' => [
    'en' => "The French Riviera seen through the eyes of a private chauffeur house: when to come, where to go, how to move between Nice, Cannes, Monaco, Èze, Saint-Paul-de-Vence and Saint-Tropez — without ever thinking about the road.",
    'fr' => "La Côte d'Azur vue par une maison de chauffeur privé : quand venir, où aller, comment circuler entre Nice, Cannes, Monaco, Èze, Saint-Paul-de-Vence et Saint-Tropez — sans jamais penser à la route.",
  ],
  'hero_eyebrow' => ['en' => 'Travel Guide · Menton → Saint-Tropez',
                      'fr' => 'Guide de Voyage · Menton → Saint-Tropez'],
  'hero_h1'      => ['en' => "The French Riviera,\n<em>composed</em>",
                      'fr' => "La Côte d'Azur,\n<em>composée</em>"],
  'hero_p'       => ['en' => "Thirty kilometres of coastline hold more legend per metre than anywhere else in Europe. This is our home ground. Here is how we would show it to you — town by town, season by season, with a chauffeur at the wheel and nothing left to chance.",
                      'fr' => "Trente kilomètres de littoral concentrent plus de légende au mètre que partout ailleurs en Europe. C'est notre terrain. Voici comment nous vous la ferions découvrir — ville par ville, saison par saison, un chauffeur au volant et rien laissé au hasard."],
  'svc_h2'       => ['en' => "The Riviera,\ntown by <em>town</em>",
                      'fr' => "La Riviera,\nville par <em>ville</em>"],
  'svc_p1'       => ['en' => "Nice is the natural gateway — Promenade des Anglais, the old town's morning markets, and the airport twenty minutes from almost everything. Cannes trades on cinema and the Croisette; its palaces, the Carlton first among them, still set the tone of the whole bay. Monaco is a world of its own: the Rocher, Casino Square, the harbour where the largest yachts in the Mediterranean spend their summers.",
                      'fr' => "Nice est la porte d'entrée naturelle — Promenade des Anglais, marchés matinaux du Vieux-Nice, et l'aéroport à vingt minutes de presque tout. Cannes vit du cinéma et de la Croisette ; ses palaces, le Carlton en tête, donnent encore le ton de toute la baie. Monaco est un monde en soi : le Rocher, la place du Casino, le port où les plus grands yachts de Méditerranée passent l'été."],
  'svc_p2'       => ['en' => "Between the capitals, the Riviera keeps its quietest treasures. Èze, suspended four hundred metres above the sea, deserves the golden hour. Saint-Paul-de-Vence — our own village — combines ramparts, art galleries and the legacy of the painters who made it famous. Villefranche-sur-Mer and Saint-Jean-Cap-Ferrat share the most beautiful bay on the coast; Antibes guards the old port and the Picasso museum; Menton, at the Italian border, grows lemons and keeps its Belle Époque calm.",
                      'fr' => "Entre les capitales, la Riviera garde ses trésors les plus discrets. Èze, suspendue à quatre cents mètres au-dessus de la mer, mérite l'heure dorée. Saint-Paul-de-Vence — notre village — mêle remparts, galeries d'art et l'héritage des peintres qui l'ont rendu célèbre. Villefranche-sur-Mer et Saint-Jean-Cap-Ferrat se partagent la plus belle rade de la côte ; Antibes veille sur le vieux port et le musée Picasso ; Menton, à la frontière italienne, cultive ses citrons et son calme Belle Époque."],
  'svc_p3'       => ['en' => "Further west, Saint-Tropez remains the myth it always was — best approached early in the morning or out of season, when the village belongs to its fishermen again. Inland, Grasse perfumes the hills and the villages of Provence begin.",
                      'fr' => "Plus à l'ouest, Saint-Tropez reste le mythe qu'il a toujours été — à aborder tôt le matin ou hors saison, quand le village appartient de nouveau à ses pêcheurs. Dans l'arrière-pays, Grasse parfume les collines et les villages de Provence commencent."],
  'incl_h'       => ['en' => 'Not to be missed',          'fr' => 'Les incontournables'],
  'appr_h2'      => ['en' => "Moving around,\nwithout <em>thinking about it</em>",
                      'fr' => "Se déplacer,\nsans y <em>penser</em>"],
  'appr_p1'      => ['en' => "The Riviera is short in kilometres and long in corniches. Parking does not exist in Èze or Saint-Paul in season, the coast road slows to a crawl in August, and the finest addresses — a villa above Villefranche, a table at La Chèvre d'Or, a quay in the port of Monaco — are precisely the ones a rental car struggles to reach. This is why the region has always travelled by chauffeur: the road becomes part of the pleasure instead of the price of it.",
                      'fr' => "La Riviera est courte en kilomètres et longue en corniches. Le stationnement n'existe pas à Èze ni à Saint-Paul en saison, la route du bord de mer se fige en août, et les plus belles adresses — une villa au-dessus de Villefranche, une table à La Chèvre d'Or, un quai du port de Monaco — sont précisément celles qu'une voiture de location atteint difficilement. C'est pourquoi la région s'est toujours parcourue en voiture avec chauffeur : la route devient une part du plaisir au lieu d'en être le prix."],
  'appr_p2'      => ['en' => "TSPDV composes each day around you: a morning market in Nice, lunch on the port of Saint-Jean, the Grande Corniche at sunset, a helicopter connection at Monaco Heliport or a quayside collection beside your yacht. One chauffeur, one vehicle, the whole coast.",
                      'fr' => "TSPDV compose chaque journée autour de vous : un marché le matin à Nice, un déjeuner sur le port de Saint-Jean, la Grande Corniche au coucher du soleil, une correspondance hélicoptère à l'héliport de Monaco ou une prise en charge à quai au pied de votre yacht. Un chauffeur, un véhicule, toute la côte."],
  'trust_h'      => ['en' => 'Signature journeys',        'fr' => 'Trajets signature'],
  'cta_h2'       => ['en' => 'Compose your Riviera itinerary',  'fr' => 'Composez votre itinéraire Riviera'],
  'cta_p'        => ['en' => 'Each enquiry receives a personal response within the working day.',
                      'fr' => 'Chaque demande reçoit une réponse personnelle dans la journée.'],
  'faq_h2'       => ['en' => "Everything you need to <em>know</em>", 'fr' => "Tout ce que vous devez <em>savoir</em>"],
  'related_h2'   => ['en' => "Related <em>services</em>",   'fr' => "Services <em>associés</em>"],
  'bc_page'      => ['en' => 'French Riviera Travel Guide',  'fr' => "Guide de la Côte d'Azur"],
];

$L = $lang; // shorthand

$schema = json_encode([
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type"=>"Article","@id"=>"https://taxisaintpaul.fr/french-riviera-travel-guide.php#article",
     "headline"    => "French Riviera Travel Guide — Nice, Cannes, Monaco, Èze & Saint-Tropez",
     "description" => "The French Riviera seen through the eyes of a private chauffeur house: when to come, where to go, and how to move between Nice, Cannes, Monaco, Èze, Saint-Paul-de-Vence and Saint-Tropez.",
     "image"       => "https://taxisaintpaul.fr/assets/location-voiture-cote-azur-cannes-nice-monaco-french-riviera.webp",
     "author"      => ["@type"=>"Organization","@id"=>"https://taxisaintpaul.fr/#business","name"=>"TSPDV — Private Chauffeur"],
     "publisher"   => ["@type"=>"Organization","@id"=>"https://taxisaintpaul.fr/#business","name"=>"TSPDV — Private Chauffeur"],
     "about"       => ["Nice","Cannes","Monaco","Antibes","Èze","Saint-Paul-de-Vence","Villefranche-sur-Mer","Saint-Jean-Cap-Ferrat","Saint-Tropez","Menton","Grasse","Côte d'Azur","French Riviera"],
     "url"         => "https://taxisaintpaul.fr/french-riviera-travel-guide.php"],
    ["@type"=>"BreadcrumbList","itemListElement"=>[
      ["@type"=>"ListItem","position"=>1,"name"=>"Home","item"=>"https://taxisaintpaul.fr/"],
      ["@type"=>"ListItem","position"=>2,"name"=>"French Riviera Travel Guide","item"=>"https://taxisaintpaul.fr/french-riviera-travel-guide.php"]]],
    ["@type"=>"FAQPage","mainEntity"=>[
      ["@type"=>"Question","name"=>"When is the best time to visit the French Riviera?","acceptedAnswer"=>["@type"=>"Answer","text"=>"May, June and September offer the finest balance: warm sea, open terraces, light traffic on the corniches. July and August are the height of the season — vibrant, but every journey should be planned ahead. Winter reveals a confidential Riviera, mild and almost private."]],
      ["@type"=>"Question","name"=>"How many days do you need on the Côte d'Azur?","acceptedAnswer"=>["@type"=>"Answer","text"=>"Four to five days cover the essentials — Nice, Monaco, Èze, Saint-Paul-de-Vence and Cannes — at a civilised pace. A full week adds Saint-Tropez, Menton and the villages of the Provençal hinterland."]],
      ["@type"=>"Question","name"=>"Do I need to rent a car on the French Riviera?","acceptedAnswer"=>["@type"=>"Answer","text"=>"Distances are short but parking is scarce and the hilltop villages are pedestrian. Most private visitors prefer a chauffeured car: door-to-door journeys, no parking, and the freedom to enjoy the corniche roads. TSPDV serves the entire coast from Menton to Saint-Tropez."]],
      ["@type"=>"Question","name"=>"How long is the drive from Nice to Monaco or Saint-Tropez?","acceptedAnswer"=>["@type"=>"Answer","text"=>"Nice to Monaco takes about 30 minutes, Nice to Cannes about 35 minutes, Nice to Èze 20 minutes, and Nice to Saint-Tropez roughly 90 minutes outside peak traffic."]],
    ]]
  ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$page = [
  'title'       => $strings['title'][$L],
  'description' => $strings['desc'][$L],
  'canonical'   => 'https://taxisaintpaul.fr/french-riviera-travel-guide.php',
  'og_title'    => $L === 'fr' ? "Guide de la Côte d'Azur — Nice, Cannes, Monaco & Saint-Tropez | TSPDV"
                               : "French Riviera Travel Guide — Nice, Cannes, Monaco & Saint-Tropez | TSPDV",
  'og_image'    => 'https://taxisaintpaul.fr/assets/location-voiture-cote-azur-cannes-nice-monaco-french-riviera.webp',
  'schema'      => $schema,
  'lang'        => $L,
  'hreflang_en' => 'https://taxisaintpaul.fr/french-riviera-travel-guide.php',
  'hreflang_fr' => 'https://taxisaintpaul.fr/french-riviera-travel-guide.php?lang=fr',
];

require __DIR__ . '/_inc/header.php';

$faqs = [
  'en' => [
    ["When is the best time to visit the French Riviera?","May, June and September offer the finest balance: warm sea, open terraces, light traffic on the corniches. July and August are the height of the season — vibrant, glamorous, but every journey should be planned ahead. Winter reveals a confidential Riviera, mild and almost private, which many of our regular guests prefer."],
    ["How many days do you need on the Côte d'Azur?","Four to five days cover the essentials — Nice, Monaco, Èze, Saint-Paul-de-Vence and Cannes — at a civilised pace. A full week adds Saint-Tropez, Menton and the villages of the Provençal hinterland without ever hurrying."],
    ["Do I need to rent a car?","Distances are short but parking is scarce, the corniche roads demand attention, and the hilltop villages are pedestrian. Most private visitors prefer a chauffeured car: door-to-door journeys, no parking, and the freedom to actually look at the view. TSPDV serves the entire coast from Menton to Saint-Tropez, and beyond into Italy and the Alps."],
    ["How long are the journeys between towns?","From Nice: Monaco in about 30 minutes, Cannes in 35, Èze in 20, Saint-Paul-de-Vence in 25, Saint-Tropez in roughly 90 outside peak traffic. The Riviera rewards those who travel it at the right hours — which is precisely what a local chauffeur knows."],
    ["Can you build a complete multi-day itinerary?","Yes. This is the heart of our work with concierges, villa stewards and yacht managers: a single chauffeur and vehicle assigned to your party for the duration of your stay, with each day composed around your wishes — markets, museums, tables, beaches, and the roads between them."],
  ],
  'fr' => [
    ["Quelle est la meilleure période pour visiter la Côte d'Azur ?","Mai, juin et septembre offrent le meilleur équilibre : mer chaude, terrasses ouvertes, corniches fluides. Juillet et août sont le sommet de la saison — vibrante, glamour, mais chaque trajet doit être anticipé. L'hiver révèle une Riviera confidentielle, douce et presque privée, que beaucoup de nos habitués préfèrent."],
    ["Combien de jours faut-il sur la Côte d'Azur ?","Quatre à cinq jours couvrent l'essentiel — Nice, Monaco, Èze, Saint-Paul-de-Vence et Cannes — à un rythme civilisé. Une semaine complète ajoute Saint-Tropez, Menton et les villages de l'arrière-pays provençal, sans jamais se presser."],
    ["Faut-il louer une voiture ?","Les distances sont courtes mais le stationnement est rare, les corniches demandent de l'attention et les villages perchés sont piétons. La plupart des visiteurs privés préfèrent la voiture avec chauffeur : trajets porte-à-porte, aucun parking, et la liberté de vraiment regarder le paysage. TSPDV dessert toute la côte de Menton à Saint-Tropez, et au-delà vers l'Italie et les Alpes."],
    ["Combien de temps entre les villes ?","Depuis Nice : Monaco en 30 minutes environ, Cannes en 35, Èze en 20, Saint-Paul-de-Vence en 25, Saint-Tropez en 90 hors trafic de pointe. La Riviera récompense ceux qui la parcourent aux bonnes heures — ce qu'un chauffeur local sait précisément."],
    ["Composez-vous des itinéraires complets sur plusieurs jours ?","Oui. C'est le cœur de notre travail avec les concierges, intendants de villa et yacht managers : un chauffeur et un véhicule dédiés à votre groupe pour toute la durée du séjour, chaque journée composée autour de vos envies — marchés, musées, tables, plages, et les routes entre eux."],
  ],
];
?>

<section class="page-hero" style="background-image:linear-gradient(to bottom, rgba(13,12,10,.55) 0%, rgba(13,12,10,.82) 70%, rgba(13,12,10,.97) 100%),url('assets/location-voiture-cote-azur-cannes-nice-monaco-french-riviera.webp');background-size:cover;background-position:center;" aria-label="<?= $L === 'fr' ? 'Introduction de la page' : 'Page introduction' ?>">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="https://taxisaintpaul.fr/<?= $L==='fr'?'?lang=fr':'' ?>"><?= _t('breadcrumb_home') ?></a>
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
        <span class="label-sm"><?= $L === 'fr' ? 'Le guide' : 'The Guide' ?></span>
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
            'Nice — Promenade des Anglais, Vieux-Nice et le cours Saleya au petit matin',
            'Cannes — la Croisette et les palaces historiques, Carlton en tête',
            'Monaco — le Rocher, la place du Casino et le port Hercule',
            'Èze — le village perché et son jardin exotique à l\'heure dorée',
            'Saint-Paul-de-Vence — remparts, galeries et la Fondation Maeght',
            'Villefranche-sur-Mer & Saint-Jean-Cap-Ferrat — la plus belle rade de la côte',
            'Antibes — le vieux port, le marché provençal et le musée Picasso',
            'Saint-Tropez — le mythe, de préférence tôt le matin ou hors saison',
            'Menton — citrons, jardins et calme Belle Époque à la frontière italienne',
            'Grasse & l\'arrière-pays — parfumeries et villages de Provence',
          ] : [
            'Nice — Promenade des Anglais, the old town and cours Saleya at first light',
            'Cannes — the Croisette and its historic palaces, the Carlton first among them',
            'Monaco — the Rocher, Casino Square and Port Hercule',
            'Èze — the hilltop village and its exotic garden at golden hour',
            'Saint-Paul-de-Vence — ramparts, galleries and the Fondation Maeght',
            'Villefranche-sur-Mer & Saint-Jean-Cap-Ferrat — the most beautiful bay on the coast',
            'Antibes — the old port, the Provençal market and the Picasso museum',
            'Saint-Tropez — the myth, best early in the morning or out of season',
            'Menton — lemons, gardens and Belle Époque calm at the Italian border',
            'Grasse & the hinterland — perfume houses and the villages of Provence',
          ];
          foreach ($items as $item): ?>
          <li><?= htmlspecialchars($item) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="specs-grid" role="region" aria-label="<?= $L === 'fr' ? 'Saisons et distances' : 'Seasons and distances' ?>">
      <?php
      $routes = [
        [$L === 'fr' ? 'Mai – Juin' : 'May – June',           $L === 'fr' ? 'Lumière idéale, routes fluides' : 'Ideal light, quiet roads'],
        [$L === 'fr' ? 'Juillet – Août' : 'July – August',     $L === 'fr' ? 'Haute saison — tout anticiper' : 'High season — plan everything'],
        [$L === 'fr' ? 'Septembre' : 'September',              $L === 'fr' ? 'Mer chaude, côte apaisée' : 'Warm sea, calmer coast'],
        ['Nice → Monaco',                                       '30 min · 22 km'],
        ['Nice → Cannes',                                       '35 min · 35 km'],
        ['Nice → Saint-Tropez',                                 '90 min · 100 km'],
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
        <span class="label-sm"><?= $L === 'fr' ? 'Se déplacer' : 'Getting Around' ?></span>
        <div class="gold-rule"></div>
        <h2><?= nl2br($strings['appr_h2'][$L]) ?></h2>
        <p class="mt-1"><?= $strings['appr_p1'][$L] ?></p>
        <p class="mt-1"><?= $strings['appr_p2'][$L] ?></p>
      </div>
      <div>
        <span class="label-sm"><?= $strings['trust_h'][$L] ?></span>
        <div class="gold-rule"></div>
        <?php $trust_items = $L === 'fr' ? [
          'La Grande Corniche au coucher du soleil, d\'Èze à La Turbie',
          'Journée marchés & galeries — Vieux-Nice le matin, Saint-Paul-de-Vence l\'après-midi',
          'Monaco en soirée — dîner, Casino et retour de nuit par la Moyenne Corniche',
          'Saint-Tropez hors saison — départ matinal, déjeuner sur le port, retour par l\'Estérel',
          'Correspondances hélicoptère & yacht — héliport de Monaco, quais d\'Antibes et de Cannes',
        ] : [
          'The Grande Corniche at sunset, from Èze to La Turbie',
          'Markets & galleries day — old Nice in the morning, Saint-Paul-de-Vence in the afternoon',
          'Monaco by night — dinner, the Casino, and a midnight return along the Moyenne Corniche',
          'Saint-Tropez out of season — early departure, lunch on the port, return through the Estérel',
          'Helicopter & yacht connections — Monaco Heliport, the quays of Antibes and Cannes',
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

<section class="section" aria-labelledby="faq-guide-heading">
  <div class="container">
    <div style="max-width:720px; margin: 0 auto;">
      <span class="label-sm"><?= _t('label_faq') ?></span>
      <div class="gold-rule"></div>
      <h2 id="faq-guide-heading"><?= nl2br($strings['faq_h2'][$L]) ?></h2>
      <?php foreach ($faqs[$L] as $i => $faq): ?>
      <div class="faq-item">
        <button class="faq-q" aria-expanded="false" aria-controls="faq-g-<?= $i ?>">
          <?= htmlspecialchars($faq[0]) ?><span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-a" id="faq-g-<?= $i ?>" role="region">
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

<section class="section" aria-labelledby="related-g-heading">
  <div class="container">
    <span class="label-sm"><?= _t('label_related') ?></span>
    <div class="gold-rule"></div>
    <h2 id="related-g-heading" style="margin-bottom:2rem"><?= nl2br($strings['related_h2'][$L]) ?></h2>
    <div class="related-grid" role="list">
      <div class="related-card" role="listitem">
        <span class="rc-num">01</span>
        <h3><?= $L === 'fr' ? 'Transfert Aéroport Nice' : 'Airport Transfer Nice' ?></h3>
        <p><?= $L === 'fr' ? 'Accueil personnalisé à NCE, suivi de vol en temps réel et transfert silencieux vers toute la Riviera.' : 'Meet-and-greet at NCE, real-time flight tracking and a silent transfer to anywhere on the Riviera.' ?></p>
        <a class="rc-link" href="/airport-transfer-nice.php<?= $L === 'fr' ? '?lang=fr' : '' ?>"><?= _t('btn_discover') ?></a>
      </div>
      <div class="related-card" role="listitem">
        <span class="rc-num">05</span>
        <h3><?= $L === 'fr' ? 'Chauffeur Monaco' : 'Monaco Chauffeur' ?></h3>
        <p><?= $L === 'fr' ? 'Chauffeur privé dédié en demi-journée ou journée complète dans la Principauté de Monaco.' : 'Private half-day or full-day chauffeur service in and around the Principality of Monaco.' ?></p>
        <a class="rc-link" href="/private-chauffeur-monaco.php<?= $L === 'fr' ? '?lang=fr' : '' ?>"><?= _t('btn_discover') ?></a>
      </div>
      <div class="related-card" role="listitem">
        <span class="rc-num">06</span>
        <h3><?= $L === 'fr' ? 'Chauffeur Privé Côte d\'Azur' : 'Private Chauffeur Côte d\'Azur' ?></h3>
        <p><?= $L === 'fr' ? 'Mise à disposition de chauffeur privé sur toute la Côte d\'Azur, de Menton à Saint-Tropez.' : 'Private chauffeur hire across the entire Côte d\'Azur, from Menton to Saint-Tropez.' ?></p>
        <a class="rc-link" href="/chauffeur-prive-cote-dazur.php<?= $L === 'fr' ? '?lang=fr' : '' ?>"><?= _t('btn_discover') ?></a>
      </div>
    </div>
  </div>
</section>
</main>

<?php require __DIR__ . '/_inc/footer.php'; ?>
