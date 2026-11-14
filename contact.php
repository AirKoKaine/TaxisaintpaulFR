<?php
require __DIR__ . '/_inc/lang.php';
require_once __DIR__ . '/_inc/i18n.php';

$schema = json_encode([
  "@context"=>"https://schema.org",
  "@type"=>"ContactPage",
  "name"=>"Contact TSPDV — Private Chauffeur French Riviera",
  "url"=>"https://taxisaintpaul.fr/contact.php",
  "mainEntity"=>["@type"=>"LocalBusiness","@id"=>"https://taxisaintpaul.fr/#business","name"=>"TSPDV — Private Chauffeur","telephone"=>"+33609285536"]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$page = [
  'title'       => 'Book a Private Chauffeur — French Riviera | TSPDV',
  'description' => 'Reserve your private chauffeur on the French Riviera. WhatsApp, phone or email — TSPDV responds within the hour. Airport transfers, Monaco, events, yacht and villa service.',
  'canonical'   => 'https://taxisaintpaul.fr/contact.php',
  'og_title'    => 'Book TSPDV — Private Chauffeur French Riviera',
  'og_image'    => 'https://taxisaintpaul.fr/assets/og-home.jpg',
  'schema'      => $schema,
  'lang'        => $LANG,
  'hreflang_en' => 'https://taxisaintpaul.fr/contact.php',
  'hreflang_fr' => 'https://taxisaintpaul.fr/contact.php?lang=fr',
];

require __DIR__ . '/_inc/header.php';
?>

<section class="hero hero--sub">
  <div class="container" style="position:relative;z-index:1;">
    <div class="tag"><?= $LANG==='fr' ? 'Réservations' : 'Reservations' ?></div>
    <h1 class="hero__h1"><?= t('contact_title') ?></h1>
    <span class="gold-line"></span>
    <p class="hero__sub"><?= t('contact_sub') ?></p>
  </div>
</section>

<section class="section section--dark">
  <div class="container">
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:start;" class="contact-grid">

      <!-- Contact channels -->
      <div>
        <h2 style="margin-bottom:16px;"><?= $LANG==='fr' ? 'Nous contacter' : 'Get in touch' ?></h2>
        <span class="gold-line"></span>
        <p style="margin-bottom:40px;">
          <?= $LANG==='fr'
            ? 'La voie la plus rapide est WhatsApp. Nous répondons généralement sous 30 minutes.'
            : 'The quickest route is WhatsApp. We typically respond within 30 minutes.' ?>
        </p>

        <div style="display:flex; flex-direction:column; gap:20px;">
          <!-- WhatsApp -->
          <a href="https://wa.me/33609285536" target="_blank" rel="noopener"
             style="display:flex; align-items:center; gap:20px; padding:24px; border:1px solid rgba(201,168,76,0.25); background:rgba(201,168,76,0.04); transition:border-color 0.3s;"
             onmouseover="this.style.borderColor='rgba(201,168,76,0.6)'" onmouseout="this.style.borderColor='rgba(201,168,76,0.25)'">
            <span style="font-size:1.5rem;">💬</span>
            <div>
              <div style="font-family:var(--font-serif); font-size:1.1rem; color:var(--ivory);">WhatsApp</div>
              <div style="font-size:0.82rem; color:var(--muted);">+33 6 09 28 55 36</div>
            </div>
          </a>
          <!-- Phone -->
          <a href="tel:+33609285536"
             style="display:flex; align-items:center; gap:20px; padding:24px; border:1px solid rgba(201,168,76,0.25); background:rgba(201,168,76,0.04); transition:border-color 0.3s;"
             onmouseover="this.style.borderColor='rgba(201,168,76,0.6)'" onmouseout="this.style.borderColor='rgba(201,168,76,0.25)'">
            <span style="font-size:1.5rem;">📞</span>
            <div>
              <div style="font-family:var(--font-serif); font-size:1.1rem; color:var(--ivory);"><?= t('cta_call') ?></div>
              <div style="font-size:0.82rem; color:var(--muted);">+33 6 09 28 55 36</div>
            </div>
          </a>
          <!-- Réservation en ligne -->
          <a href="https://reservation.maison-vehira.fr/<?= $lang === 'fr' ? '' : '?lang=en' ?>"
             style="display:flex; align-items:center; gap:20px; padding:24px; border:1px solid rgba(201,168,76,0.25); background:rgba(201,168,76,0.04); transition:border-color 0.3s;"
             onmouseover="this.style.borderColor='rgba(201,168,76,0.6)'" onmouseout="this.style.borderColor='rgba(201,168,76,0.25)'">
            <span style="font-size:1.5rem;">→</span>
            <div>
              <div style="font-family:var(--font-serif); font-size:1.1rem; color:var(--ivory);"><?= $lang === 'fr' ? 'Réserver en ligne' : 'Book online' ?></div>
              <div style="font-size:0.82rem; color:var(--muted);">reservation.maison-vehira.fr</div>
            </div>
          </a>
        </div>

        <div style="margin-top:40px; padding:24px; border-left:2px solid var(--gold);">
          <p style="font-size:0.85rem; color:#888; line-height:1.8;">
            <?= $LANG==='fr'
              ? 'Jean-Marc Meuret<br>TSPDV — Chauffeur Privé<br>Saint-Paul-de-Vence, Alpes-Maritimes<br>Disponible 24h/24, 7j/7'
              : 'Jean-Marc Meuret<br>TSPDV — Private Chauffeur<br>Saint-Paul-de-Vence, Alpes-Maritimes<br>Available 24 hours, 7 days a week' ?>
          </p>
        </div>
      </div>

      <!-- Additional info -->
      <div>
        <h2 style="margin-bottom:16px;"><?= $LANG==='fr' ? 'Informations pratiques' : 'Practical information' ?></h2>
        <span class="gold-line"></span>
        <div style="display:flex; flex-direction:column; gap:20px;">
          <div style="padding:28px; border:1px solid rgba(201,168,76,0.18); background:rgba(201,168,76,0.03);">
            <div style="font-family:var(--font-serif); font-size:1.1rem; color:var(--ivory); margin-bottom:10px;"><?= $LANG==='fr' ? 'Délai de réponse' : 'Response time' ?></div>
            <p style="font-size:0.88rem; color:var(--muted);"><?= $LANG==='fr' ? 'Réponse sous 30 minutes via WhatsApp, sous 1 heure par email. Disponible 24h/24.' : 'Reply within 30 minutes on WhatsApp, within 1 hour by email. Available 24 hours.' ?></p>
          </div>
          <div style="padding:28px; border:1px solid rgba(201,168,76,0.18); background:rgba(201,168,76,0.03);">
            <div style="font-family:var(--font-serif); font-size:1.1rem; color:var(--ivory); margin-bottom:10px;"><?= $LANG==='fr' ? 'Délai de réservation' : 'Booking lead time' ?></div>
            <p style="font-size:0.88rem; color:var(--muted);"><?= $LANG==='fr' ? '24h minimum pour un transfert standard. 48–72h en haute saison (juillet–août). 6–8 semaines pour les événements (Festival de Cannes, Grand Prix).' : '24h minimum for a standard transfer. 48–72h in peak season (July–August). 6–8 weeks for events (Cannes Festival, Grand Prix).' ?></p>
          </div>
          <div style="padding:28px; border:1px solid rgba(201,168,76,0.18); background:rgba(201,168,76,0.03);">
            <div style="font-family:var(--font-serif); font-size:1.1rem; color:var(--ivory); margin-bottom:10px;"><?= $LANG==='fr' ? 'Langue' : 'Language' ?></div>
            <p style="font-size:0.88rem; color:var(--muted);"><?= $LANG==='fr' ? 'Jean-Marc Meuret parle couramment le français et l\'anglais.' : 'Jean-Marc Meuret speaks fluent French and English.' ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/_inc/footer.php'; ?>
