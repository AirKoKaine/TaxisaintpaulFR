<?php
require_once __DIR__ . '/_inc/i18n.php';
$L = $lang;
$strings = [
  'title'=>['en'=>'Event Chauffeur Cannes — Film Festival, MIPIM, Weddings & VVIP Galas | TSPDV','fr'=>'Chauffeur Événementiel Cannes — Festival, MIPIM, Mariages & Galas VVIP | TSPDV'],
  'desc' =>['en'=>'Multi-vehicle chauffeur coordination for Cannes Film Festival, MIPIM, Monaco Grand Prix, weddings and private galas. VVIP protocol, staggered rotations, on-site logistics. TSPDV — French Riviera.','fr'=>'Coordination multi-véhicules pour le Festival de Cannes, le MIPIM, le Grand Prix de Monaco, les mariages et galas privés. Protocole VVIP, rotations décalées, logistique sur site. TSPDV — Riviera.'],
  'hero_eyebrow'=>['en'=>'Cannes Film Festival · MIPIM · Monaco Grand Prix · Private Weddings','fr'=>'Festival de Cannes · MIPIM · Grand Prix Monaco · Mariages Privés'],
  'hero_h1'=>['en'=>"Event Chauffeur\n<em>Coordination</em>",'fr'=>"Coordination\nChauffeur <em>Événementiel</em>"],
  'hero_p'=>['en'=>'The French Riviera hosts events of global significance every year. When the guest list is high-profile and the logistics are complex, TSPDV brings the same rigour and discretion we apply to every private journey — multiplied across an entire fleet.','fr'=>'La Riviera française accueille chaque année des événements d\'envergure mondiale. Lorsque la liste des invités est très exposée et que la logistique est complexe, TSPDV apporte la même rigueur et discrétion que pour chaque voyage privé — multipliée sur toute une flotte.'],
  'cta_h2'=>['en'=>'Plan your event transport','fr'=>'Planifier votre transport événementiel'],
  'cta_p' =>['en'=>'Contact us with your event date and guest numbers. We will build a tailored transport plan.','fr'=>'Contactez-nous avec la date de votre événement et le nombre d\'invités. Nous élaborons un plan de transport sur mesure.'],
];
$schema = json_encode(["@context"=>"https://schema.org","@graph"=>[["@type"=>"Service","@id"=>"https://taxisaintpaul.fr/event-chauffeur-cannes.php#service","name"=>"Event Chauffeur Cannes — Film Festival, MIPIM, Weddings & VVIP Galas","description"=>"Multi-vehicle chauffeur deployments for Cannes Film Festival, MIPIM, Monaco Grand Prix, weddings and corporate galas on the Côte d'Azur. VVIP protocol, staggered rotations, on-site logistics coordinator.","provider"=>["@type"=>"LocalBusiness","@id"=>"https://taxisaintpaul.fr/#business","name"=>"TSPDV — Private Chauffeur","telephone"=>"+33609285536"],"areaServed"=>["Cannes","Monaco","Nice","Antibes","Saint-Tropez","Côte d'Azur"],"serviceType"=>"Event Chauffeur Coordination","url"=>"https://taxisaintpaul.fr/event-chauffeur-cannes.php"]]],JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
$page=['title'=>$strings['title'][$L],'description'=>$strings['desc'][$L],'canonical'=>'https://taxisaintpaul.fr/event-chauffeur-cannes.php','og_title'=>$L==='fr'?'Chauffeur Événementiel Cannes — Festival, VVIP & Mariages | TSPDV':'Event Chauffeur Cannes — Film Festival, VVIP & Weddings | TSPDV','og_image'=>'https://taxisaintpaul.fr/assets/og-event.jpg','schema'=>$schema,'lang'=>$L,'hreflang_en'=>'https://taxisaintpaul.fr/event-chauffeur-cannes.php','hreflang_fr'=>'https://taxisaintpaul.fr/event-chauffeur-cannes.php?lang=fr'];
require __DIR__ . '/_inc/header.php';
$faqs=['en'=>[["How early should we book for the Cannes Film Festival?","The Cannes Film Festival (May) and MIPIM (March) are our two highest-demand periods. We strongly recommend contacting us at least 6–8 weeks in advance for festival dates. For weddings and private galas, 2–3 months ahead is ideal."],["Can you manage transport for 50 or more guests?","Yes. For large events, we coordinate a fleet of Mercedes-Benz V-Class vehicles with a lead driver acting as on-site logistics coordinator. All vehicles depart and return on a staggered schedule to avoid congestion."],["Do you provide wedding chauffeur services in Provence?","Yes, wedding transport is one of our key event services. We manage the bridal vehicle, guest transfers, and the choreography of arrivals and departures. We have experience at Domaine du Mas de Pierre, Château de la Napoule, Villa Ephrussi de Rothschild, and private estate weddings throughout Alpes-Maritimes and Var."],["Do you handle VVIP protocol for private events?","Yes. TSPDV coordinates VVIP transport for high-profile guests, including liaison with security teams and protocol officers. Chauffeurs are briefed on confidentiality expectations. NDAs available on request."]],'fr'=>[["Combien de temps à l'avance réserver pour le Festival de Cannes ?","Le Festival de Cannes (mai) et le MIPIM (mars) sont nos deux périodes les plus chargées. Nous recommandons fortement de nous contacter au moins 6 à 8 semaines à l'avance pour les dates de festival. Pour les mariages et galas privés, 2 à 3 mois à l'avance est idéal."],["Pouvez-vous gérer le transport pour 50 invités ou plus ?","Oui. Pour les grands événements, nous coordonnons une flotte de Mercedes-Benz V-Class avec un chauffeur principal agissant comme coordinateur logistique sur site. Tous les véhicules partent et reviennent selon un calendrier décalé pour éviter les embouteillages."],["Assurez-vous le transport de mariage en Provence ?","Oui, le transport de mariage est l'un de nos services événementiels clés. Nous gérons le véhicule de la mariée, les transferts des invités et la chorégraphie des arrivées. Nous avons de l'expérience au Domaine du Mas de Pierre, Château de la Napoule, Villa Ephrussi de Rothschild."],["Gérez-vous le protocole VVIP pour les événements privés ?","Oui. TSPDV coordonne le transport VVIP pour les invités de haut profil, notamment la liaison avec les équipes de sécurité et les officiers de protocole. Les chauffeurs sont briefés sur les exigences de confidentialité. NDA disponible sur demande."]]];
?>
<section class="page-hero" style="background-image:linear-gradient(to bottom, rgba(13,12,10,.55) 0%, rgba(13,12,10,.82) 70%, rgba(13,12,10,.97) 100%),url('assets/hotel-carlton-cannes.webp');background-size:cover;background-position:center;" aria-label="Page introduction"><div class="container">
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="https://taxisaintpaul.fr/<?= $L==='fr'?'?lang=fr':'' ?>"><?= _t('breadcrumb_home') ?></a><span class="breadcrumb-sep">·</span>
    <a href="https://taxisaintpaul.fr/<?= $L==='fr'?'?lang=fr':'' ?>#services"><?= _t('breadcrumb_svc') ?></a><span class="breadcrumb-sep">·</span>
    <span aria-current="page"><?= $L==='fr'?'Coordination Événementielle':'Event Coordination' ?></span>
  </nav>
  <div class="hero-eyebrow"><?= $strings['hero_eyebrow'][$L] ?></div>
  <h1><?= nl2br($strings['hero_h1'][$L]) ?></h1>
  <div class="hero-rule"></div>
  <p style="max-width:52ch;font-size:1rem;color:var(--cream-muted);line-height:1.8;"><?= $strings['hero_p'][$L] ?></p>
</div></section>
<main id="main-content">
<section class="section"><div class="container">
  <div class="content-grid">
    <div>
      <span class="label-sm"><?= _t('svc_the_service') ?></span><div class="gold-rule"></div>
      <h2><?= $L==='fr' ? "Un ballet de transport<br><em>composé pour votre événement</em>" : "A transport <em>ballet</em>,<br>composed for your event" ?></h2>
      <p class="mt-1"><?= $L==='fr' ? 'Que vous gériez un dîner privé de 12 personnes au Domaine du Mas de Pierre ou que vous coordonniez les arrivées à l\'aéroport de 80 délégués pendant le MIPIM, TSPDV applique le même standard : chaque véhicule, chaque chauffeur, chaque départ est pris en compte avant l\'arrivée d\'un seul invité.' : 'Whether you are managing a 12-person private dinner at Domaine du Mas de Pierre or coordinating airport arrivals for 80 delegates during MIPIM, TSPDV applies the same standard: every vehicle, every chauffeur, every departure is accounted for before a single guest arrives.' ?></p>
      <p class="mt-1"><?= $L==='fr' ? 'Nous déployons un coordinateur principal sur place — un chauffeur TSPDV qui supervise tous les véhicules, communique avec l\'organisateur de l\'événement et l\'équipe du lieu, et s\'assure que le flux des arrivées et des départs se déroule sans friction.' : 'We deploy a lead coordinator on the day — a TSPDV driver who oversees all vehicles, communicates with the event planner and venue team, and ensures the flow of arrivals and departures runs without friction.' ?></p>
    </div>
    <div>
      <span class="label-sm"><?= $L==='fr'?'Événements desservis':'Events We Serve' ?></span><div class="gold-rule"></div>
      <ul class="service-list" role="list">
        <?php $events=$L==='fr'?['Festival de Cannes — mai','MIPIM Sommet Immobilier — mars, Cannes','Grand Prix de Monaco — mai','Cannes Lions Festival International — juin','TFWA World Exhibition — octobre, Cannes','Autumn TV — octobre, Cannes','Mariages privés dans les châteaux & domaines','Lancements de produits & événements de marque','Célébrations familiales & événements de prestige','Dîners de gala dans des établissements cinq étoiles']:['Cannes Film Festival — May','MIPIM Real Estate Summit — March, Cannes','Monaco Grand Prix — May','Cannes Lions International Festival — June','TFWA World Exhibition — October, Cannes','Autumn TV — October, Cannes','Private weddings at châteaux & estates','Corporate product launches & brand events','Family celebrations & milestone events','Gala dinners at five-star venues'];foreach($events as $e):?><li><?= htmlspecialchars($e) ?></li><?php endforeach;?>
      </ul>
    </div>
  </div>
  <div class="specs-grid">
    <?php $specs=$L==='fr'?[['Taille de flotte','Plusieurs véhicules sur demande'],['Coordination sur site','Chauffeur principal logisticien'],['Capacité par invité','7 par véhicule · Sans limite'],['Planification des transferts','Rotations décalées incluses'],['Planification préalable','Plan de transport complet fourni'],['Tenue','Formelle — smoking sur demande']]:[['Fleet size','Multiple vehicles on request'],['On-site coordination','Lead driver logistics manager'],['Guest capacity','7 per vehicle · No ceiling'],['Transfer scheduling','Staggered rotations included'],['Advance planning','Full transport plan provided'],['Attire','Formal — black tie on request']];
    foreach($specs as $s):?><div class="spec-item"><div class="spec-label"><?= $s[0] ?></div><div class="spec-value"><?= $s[1] ?></div></div><?php endforeach;?>
  </div>
</div></section>
<section class="section" aria-labelledby="faq-ev-h"><div class="container"><div style="max-width:720px;margin:0 auto;">
  <span class="label-sm"><?= _t('label_faq') ?></span><div class="gold-rule"></div>
  <h2 id="faq-ev-h"><?= $L==='fr'?"Questions sur le transport <em>événementiel</em>":"Event transport <em>questions</em>" ?></h2>
  <?php foreach($faqs[$L] as $i=>$faq):?>
  <div class="faq-item"><button class="faq-q" aria-expanded="false" aria-controls="faq-ev-<?= $i ?>"><?= htmlspecialchars($faq[0]) ?><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a" id="faq-ev-<?= $i ?>" role="region"><p><?= htmlspecialchars($faq[1]) ?></p></div></div>
  <?php endforeach;?>
</div></div></section>
<div class="cta-band"><h2><?= $strings['cta_h2'][$L] ?></h2><p><?= $strings['cta_p'][$L] ?></p><a class="btn-gold" href="tel:+33609285536">+33 6 09 28 55 36</a><a class="btn-outline" href="https://taxisaintpaul.fr/<?= $L==='fr'?'?lang=fr':'' ?>#contact"><?= _t('btn_enquire') ?></a></div>
<section class="section" aria-labelledby="related-ev-h"><div class="container">
  <span class="label-sm"><?= _t('label_related') ?></span><div class="gold-rule"></div>
  <h2 id="related-ev-h" style="margin-bottom:2rem"><?= $L==='fr'?"Services <em>associés</em>":"Related <em>services</em>" ?></h2>
  <div class="related-grid" role="list">
    <div class="related-card" role="listitem"><span class="rc-num">01</span><h3><?= $L==='fr'?'Transfert Aéroport Nice':'Airport Transfer Nice' ?></h3><p><?= $L==='fr'?'Arrivées de délégués à NCE gérées avec suivi de vol, collectes décalées et assistance bagages.':'Delegate arrivals at NCE managed with flight tracking, staggered collections and luggage assistance.' ?></p><a class="rc-link" href="/airport-transfer-nice.php<?= $L==='fr'?'?lang=fr':'' ?>"><?= _t('btn_discover') ?></a></div>
    <div class="related-card" role="listitem"><span class="rc-num">02</span><h3><?= $L==='fr'?'Service Yacht-Side':'Yacht-Side Service' ?></h3><p><?= $L==='fr'?'Invités arrivant en yacht — collecte à quai et retour à Cannes, Monaco & Antibes.':'Event guests arriving by yacht — quayside collection and return in Cannes, Monaco & Antibes.' ?></p><a class="rc-link" href="/yacht-side-service-antibes.php<?= $L==='fr'?'?lang=fr':'' ?>"><?= _t('btn_discover') ?></a></div>
    <div class="related-card" role="listitem"><span class="rc-num">05</span><h3><?= $L==='fr'?'Chauffeur Monaco':'Monaco Chauffeur' ?></h3><p><?= $L==='fr'?'Véhicule et chauffeur dédiés pour toute la durée du Grand Prix ou de tout événement monégasque.':'Dedicated vehicle and chauffeur for the duration of the Grand Prix or any Monaco event.' ?></p><a class="rc-link" href="/private-chauffeur-monaco.php<?= $L==='fr'?'?lang=fr':'' ?>"><?= _t('btn_discover') ?></a></div>
  </div>
</div></section>
<?php require_once __DIR__ . '/_inc/vehira.php'; echo vehira_lien('cannes', $L); ?>
</main>
<?php require __DIR__ . '/_inc/footer.php'; ?>
