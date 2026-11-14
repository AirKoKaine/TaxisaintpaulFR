<?php
require __DIR__ . '/_inc/lang.php';
require_once __DIR__ . '/_inc/i18n.php';

$schema = json_encode(["@context"=>"https://schema.org","@type"=>"WebPage","name"=>"Mentions Légales — TSPDV Chauffeur Privé Côte d'Azur","url"=>"https://taxisaintpaul.fr/mentions-legales.php"], JSON_UNESCAPED_SLASHES);

$page = [
  'title'       => 'Mentions Légales — TSPDV Chauffeur Privé Côte d\'Azur',
  'description' => 'Mentions légales, politique de confidentialité et informations légales de TSPDV, service de chauffeur privé sur la Côte d\'Azur.',
  'canonical'   => 'https://taxisaintpaul.fr/mentions-legales.php',
  'og_title'    => 'Mentions Légales — TSPDV',
  'og_image'    => 'https://taxisaintpaul.fr/assets/og-home.jpg',
  'schema'      => $schema,
  'lang'        => $LANG,
  'hreflang_en' => 'https://taxisaintpaul.fr/mentions-legales.php',
  'hreflang_fr' => 'https://taxisaintpaul.fr/mentions-legales.php?lang=fr',
];

require __DIR__ . '/_inc/header.php';
?>

<section class="hero hero--sub" style="min-height:28vh;">
  <div class="container" style="position:relative;z-index:1;">
    <div class="tag"><?= $LANG==='fr' ? 'Informations légales' : 'Legal Information' ?></div>
    <h1 class="hero__h1" style="font-size:clamp(1.8rem,4vw,3rem);"><?= $LANG==='fr' ? 'Mentions Légales' : 'Legal Notice' ?></h1>
  </div>
</section>

<section class="section section--dark">
  <div class="container">
    <div style="max-width:800px; margin:0 auto; display:flex; flex-direction:column; gap:56px;">

      <!-- 1. Éditeur -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '1. Éditeur du site' : '1. Website Publisher' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9;">
          <strong style="color:var(--ivory);">TSPDV — Chauffeur Privé</strong><br>
          <?= $LANG==='fr' ? 'Exploitant individuel' : 'Sole trader' ?><br>
          Jean-Marc Meuret<br>
          Saint-Paul-de-Vence, 06570<br>
          Alpes-Maritimes, France<br><br>
          <?= $LANG==='fr' ? 'Téléphone' : 'Phone' ?> : <a href="tel:+33609285536">+33 6 09 28 55 36</a><br>
          Email : <a href="mailto:jmmeuret@outlook.com">jmmeuret@outlook.com</a><br>
          WhatsApp : <a href="https://wa.me/33609285536" target="_blank" rel="noopener">wa.me/33609285536</a>
        </p>
      </div>

      <!-- 2. Hébergeur -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '2. Hébergement' : '2. Hosting' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9;">
          <strong style="color:var(--ivory);">OVHcloud</strong><br>
          SAS au capital de 10 069 020 €<br>
          RCS Lille Métropole 424 761 419 00045<br>
          2 rue Kellermann, 59100 Roubaix, France<br>
          <a href="https://www.ovhcloud.com" target="_blank" rel="noopener">www.ovhcloud.com</a>
        </p>
      </div>

      <!-- 3. Propriété intellectuelle -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '3. Propriété intellectuelle' : '3. Intellectual Property' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9;">
          <?= $LANG==='fr'
            ? 'L\'ensemble du contenu de ce site (textes, images, logos, structure, mise en page) est la propriété exclusive de TSPDV ou de ses partenaires et est protégé par les lois françaises et internationales relatives au droit d\'auteur et à la propriété intellectuelle. Toute reproduction, représentation, modification, publication ou adaptation, totale ou partielle, est strictement interdite sans autorisation écrite préalable de TSPDV.'
            : 'All content on this website (texts, images, logos, structure, layout) is the exclusive property of TSPDV or its partners and is protected by French and international laws relating to copyright and intellectual property. Any reproduction, representation, modification, publication or adaptation, in whole or in part, is strictly prohibited without the prior written authorisation of TSPDV.' ?>
        </p>
      </div>

      <!-- 4. Données personnelles / RGPD -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '4. Données personnelles (RGPD)' : '4. Personal Data (GDPR)' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9; margin-bottom:16px;">
          <?= $LANG==='fr'
            ? 'Conformément au Règlement Général sur la Protection des Données (RGPD — Règlement UE 2016/679), vous disposez des droits suivants concernant vos données personnelles :'
            : 'In accordance with the General Data Protection Regulation (GDPR — EU Regulation 2016/679), you have the following rights regarding your personal data:' ?>
        </p>
        <ul style="list-style:none; display:flex; flex-direction:column; gap:8px; margin-bottom:20px; padding-left:0;">
          <?php
          $rights = $LANG==='fr' ? [
            'Droit d\'accès à vos données',
            'Droit de rectification des données inexactes',
            'Droit à l\'effacement (droit à l\'oubli)',
            'Droit à la limitation du traitement',
            'Droit à la portabilité de vos données',
            'Droit d\'opposition au traitement',
          ] : [
            'Right of access to your data',
            'Right to rectification of inaccurate data',
            'Right to erasure (right to be forgotten)',
            'Right to restriction of processing',
            'Right to data portability',
            'Right to object to processing',
          ];
          foreach ($rights as $r): ?>
            <li style="display:flex; align-items:center; gap:10px; font-size:0.88rem; color:#bbb;">
              <span style="width:6px; height:6px; background:var(--gold); border-radius:50%; flex-shrink:0; display:inline-block;"></span>
              <?= $r ?>
            </li>
          <?php endforeach; ?>
        </ul>
        <p style="line-height:1.9;">
          <?= $LANG==='fr'
            ? 'Pour exercer ces droits, contactez : <a href="mailto:jmmeuret@outlook.com" style="color:var(--gold);">jmmeuret@outlook.com</a>. Les données collectées via le site (formulaire de contact, WhatsApp) sont utilisées exclusivement pour répondre à vos demandes de réservation et ne sont jamais cédées à des tiers.'
            : 'To exercise these rights, contact: <a href="mailto:jmmeuret@outlook.com" style="color:var(--gold);">jmmeuret@outlook.com</a>. Data collected via the site (contact form, WhatsApp) is used exclusively to respond to your booking enquiries and is never shared with third parties.' ?>
        </p>
      </div>

      <!-- 5. Cookies -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '5. Cookies' : '5. Cookies' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9;">
          <?= $LANG==='fr'
            ? 'Ce site n\'utilise aucun cookie publicitaire ni aucun traceur tiers. Seul un paramètre de langue (via l\'URL) est utilisé pour mémoriser votre préférence linguistique lors de votre navigation. Aucune donnée n\'est transmise à des services d\'analyse ou de publicité.'
            : 'This site uses no advertising cookies and no third-party trackers. Only a language parameter (via the URL) is used to remember your language preference during navigation. No data is transmitted to analytics or advertising services.' ?>
        </p>
      </div>

      <!-- 6. Responsabilité -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '6. Limitation de responsabilité' : '6. Limitation of Liability' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9;">
          <?= $LANG==='fr'
            ? 'TSPDV s\'efforce de maintenir les informations publiées sur ce site aussi précises et à jour que possible, mais ne saurait être tenu responsable des omissions, inexactitudes ou lacunes dans la mise à jour. Les informations disponibles sur ce site ne constituent pas un engagement contractuel.'
            : 'TSPDV endeavours to keep the information published on this site as accurate and up to date as possible, but cannot be held responsible for omissions, inaccuracies or gaps in updates. The information available on this site does not constitute a contractual commitment.' ?>
        </p>
      </div>

      <!-- 7. Droit applicable -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '7. Droit applicable' : '7. Applicable Law' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9;">
          <?= $LANG==='fr'
            ? 'Le présent site et ses mentions légales sont soumis au droit français. En cas de litige et à défaut de résolution amiable, les tribunaux français seront seuls compétents.'
            : 'This site and its legal notices are governed by French law. In the event of a dispute and in the absence of an amicable resolution, French courts shall have sole jurisdiction.' ?>
        </p>
      </div>

      <!-- Retour -->
      <div>
        <a href="/index.php?lang=<?= $LANG ?>" class="btn"><?= t('back_home') ?></a>
      </div>

    </div>
  </div>
</section>

<?php require __DIR__ . '/_inc/footer.php'; ?>
