<?php
/* ═══════════════════════════════════════════════════════════════
   TSPDV — Language Toggle System
   Langue via $_GET['lang'] uniquement — zéro session, zéro cookie.
   Compatible tous hébergements OVH.
═══════════════════════════════════════════════════════════════ */

$LANG = (isset($_GET['lang']) && $_GET['lang'] === 'fr') ? 'fr' : 'en';

$current_url = strtok(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/', '?');
$toggle_lang = ($LANG === 'en') ? 'fr' : 'en';
$TOGGLE_URL  = $current_url . '?lang=' . $toggle_lang;


$TRANSLATIONS = [
  'nav_services'   => ['en' => 'Services',         'fr' => 'Services'],
  'nav_airport'    => ['en' => 'Airport Transfer',  'fr' => 'Transfert Aéroport'],
  'nav_monaco'     => ['en' => 'Monaco',            'fr' => 'Monaco'],
  'nav_events'     => ['en' => 'Events',            'fr' => 'Événements'],
  'nav_yacht'      => ['en' => 'Yacht Service',     'fr' => 'Service Yacht'],
  'nav_villa'      => ['en' => 'Villa Transfers',   'fr' => 'Transferts Villa'],
  'nav_book'       => ['en' => 'Book Now',          'fr' => 'Réserver'],
  'nav_contact'    => ['en' => 'Contact',           'fr' => 'Contact'],
  'footer_tagline' => ['en' => 'French Riviera private chauffeur house', 'fr' => 'Chauffeur privé Côte d\'Azur'],
  'footer_services'=> ['en' => 'Services',          'fr' => 'Services'],
  'footer_legal'   => ['en' => 'Legal Notice',      'fr' => 'Mentions Légales'],
  'footer_privacy' => ['en' => 'Privacy Policy',    'fr' => 'Politique de Confidentialité'],
  'footer_copy'    => ['en' => '© 2026 TSPDV. All rights reserved.', 'fr' => '© 2026 TSPDV. Tous droits réservés.'],
  'footer_contact' => ['en' => 'Contact',           'fr' => 'Contact'],
  'footer_based'   => ['en' => 'Based in Saint-Paul-de-Vence — serving the entire Côte d\'Azur', 'fr' => 'Basé à Saint-Paul-de-Vence — service sur toute la Côte d\'Azur'],
  'cta_whatsapp'   => ['en' => 'WhatsApp',          'fr' => 'WhatsApp'],
  'cta_call'       => ['en' => 'Call',              'fr' => 'Appeler'],
  'cta_email'      => ['en' => 'Email',             'fr' => 'Email'],
  'cta_book_title' => ['en' => 'Reserve your transfer', 'fr' => 'Réserver votre transfert'],
  'cta_book_sub'   => ['en' => 'Available 24 / 7 — response within the hour', 'fr' => 'Disponible 24 h / 24 — réponse sous une heure'],
  'home_hero_tag'  => ['en' => 'French Riviera Private Chauffeur', 'fr' => 'Chauffeur Privé Côte d\'Azur'],
  'home_hero_h1'   => ['en' => 'Private Chauffeur<br>French Riviera', 'fr' => 'Chauffeur Privé<br>Côte d\'Azur'],
  'home_hero_sub'  => ['en' => 'Cannes · Monaco · Nice · Saint-Tropez · Antibes', 'fr' => 'Cannes · Monaco · Nice · Saint-Tropez · Antibes'],
  'home_hero_cta'  => ['en' => 'Reserve your transfer', 'fr' => 'Réserver votre transfert'],
  'home_services_title' => ['en' => 'Our Services', 'fr' => 'Nos Services'],
  'home_about_title'    => ['en' => 'TSPDV — A different standard', 'fr' => 'TSPDV — Un autre standard'],
  'home_about_p1'  => ['en' => 'TSPDV is a private chauffeur service on the French Riviera, available for airport transfers, Grand Prix Monaco, Cannes Film Festival, superyacht shore service and villa transfers. One vehicle, one English-speaking chauffeur, one absolute standard.', 'fr' => 'TSPDV est un service de chauffeur privé sur la Côte d\'Azur, disponible pour les transferts aéroport, le Grand Prix de Monaco, le Festival de Cannes, la mise à disposition chauffeur pour superyacht et les transferts villa. Un véhicule, un chauffeur anglophone, un standard absolu.'],
  'home_about_p2'  => ['en' => 'Every transfer — whether to Nice Airport, Monaco, Cannes, Antibes or a private villa in Provence — is handled personally by Jean-Marc Meuret, an English-speaking private chauffeur with fifteen years on the Riviera.', 'fr' => 'Chaque transfert — vers l\'aéroport de Nice, Monaco, Cannes, Antibes ou une villa privée en Provence — est géré personnellement par Jean-Marc Meuret, chauffeur privé anglophone avec quinze ans d\'expérience sur la Riviera.'],
  'home_vehicle_title' => ['en' => 'The Vehicle', 'fr' => 'Le Véhicule'],
  'home_vehicle_desc'  => ['en' => 'Mercedes-Benz V-Class First-Class Edition — obsidian black, full beige leather, up to 7 passengers, climate-controlled luggage compartment.', 'fr' => 'Mercedes-Benz V-Class First-Class Edition — noir obsidienne, cuir beige intégral, jusqu\'à 7 passagers, compartiment bagages climatisé.'],
  'home_faq_title' => ['en' => 'Frequently Asked Questions', 'fr' => 'Questions Fréquentes'],
  'svc_airport_title' => ['en' => 'Airport Transfer Nice', 'fr' => 'Transfert Aéroport Nice'],
  'svc_airport_desc'  => ['en' => 'Meet-and-greet at NCE, real-time flight tracking, FBO terminal service.', 'fr' => 'Accueil personnalisé à NCE, suivi vol en temps réel, service terminal FBO.'],
  'svc_monaco_title'  => ['en' => 'Private Chauffeur Monaco', 'fr' => 'Chauffeur Privé Monaco'],
  'svc_monaco_desc'   => ['en' => 'Half-day, full-day and Grand Prix week in the Principality.', 'fr' => 'Demi-journée, journée complète et semaine du Grand Prix en Principauté.'],
  'svc_event_title'   => ['en' => 'Event Chauffeur Cannes', 'fr' => 'Chauffeur Événementiel Cannes'],
  'svc_event_desc'    => ['en' => 'Film Festival, MIPIM, VVIP galas and weddings on the Riviera.', 'fr' => 'Festival de Cannes, MIPIM, galas VVIP et mariages sur la Riviera.'],
  'svc_yacht_title'   => ['en' => 'Superyacht Chauffeur Service', 'fr' => 'Service Chauffeur Superyacht'],
  'svc_yacht_desc'    => ['en' => 'Quayside transfers coordinated with your captain — Antibes, Monaco, Cannes.', 'fr' => 'Transferts à quai coordonnés avec votre capitaine — Antibes, Monaco, Cannes.'],
  'svc_villa_title'   => ['en' => 'Villa Transfers Provence', 'fr' => 'Transferts Villa Provence'],
  'svc_villa_desc'    => ['en' => 'Discreet chauffeur from your estate to restaurants, ports and airports.', 'fr' => 'Chauffeur discret de votre propriété vers restaurants, ports et aéroports.'],
  'svc_learn_more'    => ['en' => 'Learn more', 'fr' => 'En savoir plus'],
  'ap_hero_tag'  => ['en' => 'Airport Transfer', 'fr' => 'Transfert Aéroport'],
  'ap_hero_h1'   => ['en' => 'Private Airport Transfer<br>Nice Côte d\'Azur (NCE)', 'fr' => 'Transfert Aéroport Privé<br>Nice Côte d\'Azur (NCE)'],
  'ap_hero_sub'  => ['en' => 'Meet-and-greet · Real-time flight tracking · FBO terminal · Luggage assistance', 'fr' => 'Accueil personnalisé · Suivi vol temps réel · Terminal FBO · Assistance bagages'],
  'ap_intro'     => ['en' => 'From the moment your wheels touch the runway at Nice-Côte d\'Azur Airport (NCE), TSPDV takes charge. Your English-speaking chauffeur is already positioned in the arrivals hall, monitoring your flight live. No waiting, no uncertainty.', 'fr' => 'Dès que vos roues touchent la piste de l\'aéroport Nice Côte d\'Azur (NCE), TSPDV prend en charge. Votre chauffeur anglophone est déjà positionné dans le hall des arrivées, suivant votre vol en direct. Pas d\'attente, pas d\'incertitude.'],
  'ap_faq_title' => ['en' => 'Airport Transfer FAQ', 'fr' => 'FAQ Transfert Aéroport'],
  'mc_hero_h1'   => ['en' => 'Private Chauffeur<br>Monaco & Monte-Carlo', 'fr' => 'Chauffeur Privé<br>Monaco & Monte-Carlo'],
  'mc_hero_sub'  => ['en' => 'Half-Day · Full-Day · Grand Prix · Port Hercule · Casino Square', 'fr' => 'Demi-journée · Journée · Grand Prix · Port Hercule · Place du Casino'],
  'mc_intro'     => ['en' => 'Monaco demands a chauffeur who moves as precisely as the Principality itself. TSPDV operates in Monte-Carlo with the familiarity of a resident and the discretion the Principality expects.', 'fr' => 'Monaco exige un chauffeur qui se déplace aussi précisément que la Principauté elle-même. TSPDV opère à Monte-Carlo avec la familiarité d\'un résident et la discrétion qu\'exige la Principauté.'],
  'mc_faq_title' => ['en' => 'Monaco Chauffeur FAQ', 'fr' => 'FAQ Chauffeur Monaco'],
  'ev_hero_h1'   => ['en' => 'Event Chauffeur<br>Cannes & French Riviera', 'fr' => 'Chauffeur Événementiel<br>Cannes & Côte d\'Azur'],
  'ev_hero_sub'  => ['en' => 'Film Festival · MIPIM · Cannes Lions · VVIP Galas · Weddings', 'fr' => 'Festival de Cannes · MIPIM · Cannes Lions · Galas VVIP · Mariages'],
  'ev_intro'     => ['en' => 'The Côte d\'Azur hosts the world\'s most demanding events. TSPDV deploys multi-vehicle coordinations for Film Festival, MIPIM, Monaco Grand Prix, corporate galas and private weddings with absolute precision.', 'fr' => 'La Côte d\'Azur accueille les événements les plus exigeants du monde. TSPDV déploie des coordinations multi-véhicules pour le Festival de Cannes, MIPIM, le Grand Prix de Monaco, les galas d\'entreprise et les mariages privés avec une précision absolue.'],
  'ev_faq_title' => ['en' => 'Event Chauffeur FAQ', 'fr' => 'FAQ Chauffeur Événementiel'],
  'yt_hero_h1'   => ['en' => 'Superyacht Chauffeur Service<br>Antibes, Cannes & Monaco', 'fr' => 'Service Chauffeur Superyacht<br>Antibes, Cannes & Monaco'],
  'yt_hero_sub'  => ['en' => 'Port Vauban · Port Hercule · Cannes · Saint-Tropez', 'fr' => 'Port Vauban · Port Hercule · Cannes · Saint-Tropez'],
  'yt_intro'     => ['en' => 'TSPDV is the shore-side chauffeur of choice for superyacht owners and charter guests along the Côte d\'Azur. We coordinate directly with captains and chief stewardesses to deliver a seamless land experience.', 'fr' => 'TSPDV est le chauffeur à terre privilégié des propriétaires de superyachts et des clients en charter sur la Côte d\'Azur. Nous coordonnons directement avec les capitaines et les chefs stewardesses pour offrir une expérience terrestre sans faille.'],
  'yt_faq_title' => ['en' => 'Yacht Service FAQ', 'fr' => 'FAQ Service Yacht'],
  'vl_hero_h1'   => ['en' => 'Private Villa Transfers<br>Provence & Côte d\'Azur', 'fr' => 'Transferts Villa Privée<br>Provence & Côte d\'Azur'],
  'vl_hero_sub'  => ['en' => 'Luberon · Var · Alpes-Maritimes · Saint-Paul-de-Vence · Grasse', 'fr' => 'Luberon · Var · Alpes-Maritimes · Saint-Paul-de-Vence · Grasse'],
  'vl_intro'     => ['en' => 'Staying in a private villa in Provence or the hills above the Riviera? TSPDV provides the invisible thread connecting your estate to restaurants, vineyards, ports, and airports — without timetables, without rush.', 'fr' => 'Séjournez-vous dans une villa privée en Provence ou sur les hauteurs de la Riviera ? TSPDV constitue le fil invisible reliant votre propriété aux restaurants, vignobles, ports et aéroports — sans horaires, sans précipitation.'],
  'vl_faq_title' => ['en' => 'Villa Transfer FAQ', 'fr' => 'FAQ Transferts Villa'],
  'contact_title' => ['en' => 'Contact & Reservations', 'fr' => 'Contact & Réservations'],
  'contact_sub'   => ['en' => 'Available 24 hours — response within the hour', 'fr' => 'Disponible 24 heures — réponse sous une heure'],
  'contact_form_name'    => ['en' => 'Your name', 'fr' => 'Votre nom'],
  'contact_form_email'   => ['en' => 'Your email', 'fr' => 'Votre email'],
  'contact_form_phone'   => ['en' => 'Phone / WhatsApp', 'fr' => 'Téléphone / WhatsApp'],
  'contact_form_service' => ['en' => 'Service', 'fr' => 'Service'],
  'contact_form_date'    => ['en' => 'Date of transfer', 'fr' => 'Date du transfert'],
  'contact_form_msg'     => ['en' => 'Details (from / to, passengers, luggage…)', 'fr' => 'Détails (départ / arrivée, passagers, bagages…)'],
  'contact_form_send'    => ['en' => 'Send enquiry', 'fr' => 'Envoyer la demande'],
  'read_more'  => ['en' => 'Read more', 'fr' => 'Lire la suite'],
  'faq_label'  => ['en' => 'FAQ', 'fr' => 'FAQ'],
  'back_home'  => ['en' => 'Back to home', 'fr' => 'Retour à l\'accueil'],
  'lang_en'    => ['en' => 'EN', 'fr' => 'EN'],
  'lang_fr'    => ['en' => 'FR', 'fr' => 'FR'],
];

function t($key) {
    global $TRANSLATIONS, $LANG;
    if (isset($TRANSLATIONS[$key][$LANG])) return $TRANSLATIONS[$key][$LANG];
    if (isset($TRANSLATIONS[$key]['en'])) return $TRANSLATIONS[$key]['en'];
    return '[' . $key . ']';
}

function hreflang_pair($en_url, $fr_url) {
    return '<link rel="alternate" hreflang="en" href="' . $en_url . '">' . "\n" .
           '    <link rel="alternate" hreflang="fr" href="' . $fr_url . '">' . "\n" .
           '    <link rel="alternate" hreflang="x-default" href="' . $en_url . '">';
}
