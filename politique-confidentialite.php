<?php
require __DIR__ . '/_inc/lang.php';
require_once __DIR__ . '/_inc/i18n.php';

$schema = json_encode(["@context"=>"https://schema.org","@type"=>"WebPage","name"=>"Politique de Confidentialité — TSPDV Chauffeur Privé Côte d'Azur","url"=>"https://taxisaintpaul.fr/politique-confidentialite.php"], JSON_UNESCAPED_SLASHES);

$page = [
  'title'       => 'Politique de Confidentialité — TSPDV Chauffeur Privé',
  'description' => 'Politique de confidentialité et protection des données personnelles de TSPDV, chauffeur privé Côte d\'Azur. Conformité RGPD.',
  'canonical'   => 'https://taxisaintpaul.fr/politique-confidentialite.php',
  'og_title'    => 'Politique de Confidentialité — TSPDV',
  'og_image'    => 'https://taxisaintpaul.fr/assets/og-home.jpg',
  'schema'      => $schema,
  'lang'        => $LANG,
  'hreflang_en' => 'https://taxisaintpaul.fr/politique-confidentialite.php',
  'hreflang_fr' => 'https://taxisaintpaul.fr/politique-confidentialite.php?lang=fr',
];

require __DIR__ . '/_inc/header.php';
?>

<section class="hero hero--sub" style="min-height:28vh;">
  <div class="container" style="position:relative;z-index:1;">
    <div class="tag"><?= $LANG==='fr' ? 'Protection des données' : 'Data Protection' ?></div>
    <h1 class="hero__h1" style="font-size:clamp(1.8rem,4vw,3rem);">
      <?= $LANG==='fr' ? 'Politique de Confidentialité' : 'Privacy Policy' ?>
    </h1>
  </div>
</section>

<section class="section section--dark">
  <div class="container">
    <div style="max-width:800px; margin:0 auto; display:flex; flex-direction:column; gap:56px;">

      <!-- Intro -->
      <div>
        <p style="line-height:1.9; color:#bbb;">
          <?= $LANG==='fr'
            ? 'TSPDV accorde une importance primordiale à la protection de vos données personnelles. La présente politique de confidentialité vous informe de la façon dont nous collectons, utilisons et protégeons vos informations, conformément au Règlement Général sur la Protection des Données (RGPD — UE 2016/679) et à la loi Informatique et Libertés.'
            : 'TSPDV attaches the utmost importance to the protection of your personal data. This privacy policy informs you of how we collect, use and protect your information, in accordance with the General Data Protection Regulation (GDPR — EU 2016/679) and the French Data Protection Act.' ?>
        </p>
        <p style="line-height:1.9; color:#888; font-size:0.85rem; margin-top:12px;">
          <?= $LANG==='fr' ? 'Dernière mise à jour : mai 2026' : 'Last updated: May 2026' ?>
        </p>
      </div>

      <!-- 1. Responsable du traitement -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '1. Responsable du traitement' : '1. Data Controller' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9;">
          <strong style="color:var(--ivory);">TSPDV — Jean-Marc Meuret</strong><br>
          Saint-Paul-de-Vence, 06570, Alpes-Maritimes, France<br>
          <a href="mailto:jmmeuret@outlook.com" style="color:var(--gold);">jmmeuret@outlook.com</a><br>
          <a href="tel:+33609285536" style="color:var(--gold);">+33 6 09 28 55 36</a>
        </p>
      </div>

      <!-- 2. Données collectées -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '2. Données collectées' : '2. Data Collected' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9; margin-bottom:20px;">
          <?= $LANG==='fr'
            ? 'Nous collectons uniquement les données que vous nous transmettez volontairement lors d\'une prise de contact ou d\'une réservation :'
            : 'We collect only the data you voluntarily provide when contacting us or making a booking:' ?>
        </p>
        <?php
        $data_types = $LANG==='fr' ? [
          ['Nom et prénom', 'Pour personnaliser votre accueil et confirmer la réservation'],
          ['Numéro de téléphone / WhatsApp', 'Pour vous contacter et confirmer les détails du transfert'],
          ['Adresse email', 'Pour l\'envoi de la confirmation écrite de réservation'],
          ['Informations de voyage', 'Numéro de vol, heure d\'arrivée, adresse de prise en charge et de destination'],
          ['Nombre de passagers et bagages', 'Pour adapter le véhicule à vos besoins'],
        ] : [
          ['Name', 'To personalise your welcome and confirm the booking'],
          ['Phone / WhatsApp number', 'To contact you and confirm transfer details'],
          ['Email address', 'For sending the written booking confirmation'],
          ['Travel information', 'Flight number, arrival time, pick-up and destination address'],
          ['Number of passengers and luggage', 'To adapt the vehicle to your needs'],
        ];
        ?>
        <div style="display:flex; flex-direction:column; gap:12px;">
          <?php foreach ($data_types as $d): ?>
          <div style="display:flex; gap:16px; padding:16px 20px; border:1px solid rgba(201,168,76,0.12); background:rgba(201,168,76,0.02);">
            <span style="color:var(--gold); font-size:0.72rem; letter-spacing:0.1em; text-transform:uppercase; min-width:180px; flex-shrink:0; padding-top:2px;"><?= $d[0] ?></span>
            <span style="color:#999; font-size:0.85rem; line-height:1.6;"><?= $d[1] ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- 3. Finalités -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '3. Finalités du traitement' : '3. Purposes of Processing' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9; margin-bottom:16px;">
          <?= $LANG==='fr' ? 'Vos données sont traitées exclusivement pour :' : 'Your data is processed exclusively for:' ?>
        </p>
        <ul style="list-style:none; display:flex; flex-direction:column; gap:10px;">
          <?php
          $purposes = $LANG==='fr' ? [
            'La gestion et la confirmation de vos réservations de chauffeur privé',
            'La coordination opérationnelle du transfert (suivi de vol, coordination avec les équipages de yacht, etc.)',
            'La communication avant, pendant et après votre prestation',
            'La facturation si applicable',
          ] : [
            'Managing and confirming your private chauffeur bookings',
            'Operational coordination of the transfer (flight tracking, coordination with yacht crews, etc.)',
            'Communication before, during and after your service',
            'Invoicing where applicable',
          ];
          foreach ($purposes as $p): ?>
          <li style="display:flex; align-items:flex-start; gap:12px; font-size:0.88rem; color:#bbb; line-height:1.7;">
            <span style="width:6px; height:6px; background:var(--gold); border-radius:50%; flex-shrink:0; margin-top:8px; display:inline-block;"></span>
            <?= $p ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- 4. Base légale -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '4. Base légale' : '4. Legal Basis' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9;">
          <?= $LANG==='fr'
            ? 'Le traitement de vos données repose sur l\'exécution d\'un contrat (article 6.1.b du RGPD) : vous nous fournissez vos données afin que nous puissions exécuter la prestation de transport que vous avez demandée. Pour les communications ultérieures, la base légale est votre consentement (article 6.1.a du RGPD).'
            : 'The processing of your data is based on the performance of a contract (Article 6.1.b GDPR): you provide us with your data so that we can carry out the transport service you have requested. For subsequent communications, the legal basis is your consent (Article 6.1.a GDPR).' ?>
        </p>
      </div>

      <!-- 5. Conservation -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '5. Durée de conservation' : '5. Retention Period' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9;">
          <?= $LANG==='fr'
            ? 'Vos données sont conservées pendant une durée maximale de 3 ans à compter de votre dernière interaction avec TSPDV, conformément aux obligations comptables et fiscales françaises. À l\'issue de cette période, vos données sont supprimées ou anonymisées.'
            : 'Your data is retained for a maximum of 3 years from your last interaction with TSPDV, in accordance with French accounting and tax obligations. After this period, your data is deleted or anonymised.' ?>
        </p>
      </div>

      <!-- 6. Partage des données -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '6. Partage des données' : '6. Data Sharing' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9; margin-bottom:16px;">
          <?= $LANG==='fr'
            ? 'Vos données personnelles ne sont jamais vendues ni cédées à des tiers à des fins commerciales. Elles peuvent être partagées uniquement dans les cas suivants :'
            : 'Your personal data is never sold or transferred to third parties for commercial purposes. It may be shared only in the following cases:' ?>
        </p>
        <ul style="list-style:none; display:flex; flex-direction:column; gap:10px;">
          <?php
          $sharing = $LANG==='fr' ? [
            'Avec les équipages de superyacht ou les gestionnaires de villa, dans le cadre strict de la coordination de votre transfert, et avec votre accord',
            'Avec les autorités compétentes si la loi l\'exige',
          ] : [
            'With superyacht crews or villa managers, strictly for the coordination of your transfer, and with your agreement',
            'With competent authorities if required by law',
          ];
          foreach ($sharing as $s): ?>
          <li style="display:flex; align-items:flex-start; gap:12px; font-size:0.88rem; color:#bbb; line-height:1.7;">
            <span style="width:6px; height:6px; background:var(--gold); border-radius:50%; flex-shrink:0; margin-top:8px; display:inline-block;"></span>
            <?= $s ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- 7. Vos droits -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '7. Vos droits' : '7. Your Rights' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9; margin-bottom:20px;">
          <?= $LANG==='fr'
            ? 'Conformément au RGPD, vous disposez à tout moment des droits suivants sur vos données personnelles :'
            : 'In accordance with the GDPR, you have the following rights over your personal data at any time:' ?>
        </p>
        <?php
        $rights = $LANG==='fr' ? [
          ['Droit d\'accès', 'Obtenir une copie de vos données détenues par TSPDV'],
          ['Droit de rectification', 'Corriger des données inexactes ou incomplètes'],
          ['Droit à l\'effacement', 'Demander la suppression de vos données'],
          ['Droit à la limitation', 'Restreindre l\'utilisation de vos données dans certains cas'],
          ['Droit à la portabilité', 'Recevoir vos données dans un format structuré et lisible'],
          ['Droit d\'opposition', 'Vous opposer au traitement de vos données'],
          ['Droit de retrait du consentement', 'Retirer votre consentement à tout moment sans préjudice'],
        ] : [
          ['Right of access', 'Obtain a copy of your data held by TSPDV'],
          ['Right to rectification', 'Correct inaccurate or incomplete data'],
          ['Right to erasure', 'Request deletion of your data'],
          ['Right to restriction', 'Restrict the use of your data in certain cases'],
          ['Right to portability', 'Receive your data in a structured, readable format'],
          ['Right to object', 'Object to the processing of your data'],
          ['Right to withdraw consent', 'Withdraw your consent at any time without prejudice'],
        ];
        ?>
        <div style="display:flex; flex-direction:column; gap:10px; margin-bottom:24px;">
          <?php foreach ($rights as $r): ?>
          <div style="display:flex; gap:16px; padding:14px 20px; border:1px solid rgba(201,168,76,0.1); background:rgba(201,168,76,0.02);">
            <span style="color:var(--gold); font-size:0.78rem; font-weight:600; min-width:180px; flex-shrink:0;"><?= $r[0] ?></span>
            <span style="color:#999; font-size:0.85rem; line-height:1.6;"><?= $r[1] ?></span>
          </div>
          <?php endforeach; ?>
        </div>
        <p style="line-height:1.9;">
          <?= $LANG==='fr'
            ? 'Pour exercer l\'un de ces droits, contactez-nous par email à <a href="mailto:jmmeuret@outlook.com" style="color:var(--gold);">jmmeuret@outlook.com</a>. Nous nous engageons à répondre dans un délai d\'un mois. En cas de litige, vous pouvez également saisir la <a href="https://www.cnil.fr" target="_blank" rel="noopener" style="color:var(--gold);">CNIL</a> (Commission Nationale de l\'Informatique et des Libertés).'
            : 'To exercise any of these rights, contact us by email at <a href="mailto:jmmeuret@outlook.com" style="color:var(--gold);">jmmeuret@outlook.com</a>. We undertake to respond within one month. In the event of a dispute, you may also contact the <a href="https://www.cnil.fr" target="_blank" rel="noopener" style="color:var(--gold);">CNIL</a> (French Data Protection Authority).' ?>
        </p>
      </div>

      <!-- 8. Sécurité -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '8. Sécurité des données' : '8. Data Security' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9;">
          <?= $LANG==='fr'
            ? 'TSPDV met en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos données contre tout accès non autorisé, perte, destruction ou divulgation. Le site utilise le protocole HTTPS pour chiffrer toutes les communications. Vos données de contact sont conservées dans des systèmes sécurisés accessibles uniquement par Jean-Marc Meuret.'
            : 'TSPDV implements appropriate technical and organisational measures to protect your data against unauthorised access, loss, destruction or disclosure. The site uses the HTTPS protocol to encrypt all communications. Your contact data is stored in secure systems accessible only by Jean-Marc Meuret.' ?>
        </p>
      </div>

      <!-- 9. Modifications -->
      <div>
        <h2 style="font-size:1.3rem; margin-bottom:12px;"><?= $LANG==='fr' ? '9. Modifications de la politique' : '9. Policy Updates' ?></h2>
        <span class="gold-line"></span>
        <p style="line-height:1.9;">
          <?= $LANG==='fr'
            ? 'TSPDV se réserve le droit de modifier la présente politique de confidentialité à tout moment. Toute modification sera publiée sur cette page avec une date de mise à jour. Nous vous encourageons à consulter régulièrement cette page.'
            : 'TSPDV reserves the right to modify this privacy policy at any time. Any changes will be published on this page with an updated date. We encourage you to check this page regularly.' ?>
        </p>
      </div>

      <!-- Retour -->
      <div style="display:flex; gap:16px; flex-wrap:wrap;">
        <a href="/index.php?lang=<?= $LANG ?>" class="btn"><?= t('back_home') ?></a>
        <a href="/mentions-legales.php?lang=<?= $LANG ?>" class="btn btn--white"><?= t('footer_legal') ?></a>
      </div>

    </div>
  </div>
</section>

<?php require __DIR__ . '/_inc/footer.php'; ?>
