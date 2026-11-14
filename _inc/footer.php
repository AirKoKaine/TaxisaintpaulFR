<!-- ═══════════════════════════════════════════
     FOOTER — TSPDV
═══════════════════════════════════════════ -->
<footer class="site-footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">

      <div class="footer-brand-col">
        <div class="footer-brand">TSPDV</div>
        <div class="footer-tagline">
          <?= $lang === 'fr'
            ? "Chauffeur Privé · Transport Conciergerie<br>Saint-Paul-de-Vence · Côte d'Azur · France"
            : "Private Chauffeur · Concierge Transport<br>Saint-Paul-de-Vence · Côte d'Azur · France" ?>
        </div>
        <div class="footer-principle">
          <?= $lang === 'fr'
            ? "Anticipé. Précis. Invisible jusqu'au moment nécessaire."
            : "Anticipated. Precise. Invisible until needed." ?>
        </div>
      </div>

      <div class="footer-col">
        <h4><?= _t('footer_services') ?></h4>
        <ul>
          <li><a href="/airport-transfer-nice.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>"><?= $lang === 'fr' ? 'Transfert Aéroport Nice' : 'Airport Transfer Nice' ?></a></li>
          <li><a href="/yacht-side-service-antibes.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>"><?= $lang === 'fr' ? 'Service Yacht-Side' : 'Yacht-Side Service' ?></a></li>
          <li><a href="/villa-transfers-provence.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>"><?= $lang === 'fr' ? 'Transferts de Villa' : 'Villa Transfers' ?></a></li>
          <li><a href="/event-chauffeur-cannes.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>"><?= $lang === 'fr' ? 'Coord. Événementielle' : 'Event Coordination' ?></a></li>
          <li><a href="/private-chauffeur-monaco.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>"><?= $lang === 'fr' ? 'Chauffeur Monaco' : 'Monaco Chauffeur' ?></a></li>
          <li><a href="/chauffeur-prive-cote-dazur.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>"><?= $lang === 'fr' ? 'Chauffeur Privé CDA' : 'Private Chauffeur CDA' ?></a></li>
          <li><a href="/french-riviera-travel-guide.php<?= $lang === 'fr' ? '?lang=fr' : '' ?>"><?= $lang === 'fr' ? 'Guide Côte d\'Azur' : 'Riviera Travel Guide' ?></a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4><?= _t('footer_contact') ?></h4>
        <ul>
          <li><a href="tel:+33609285536">+33 6 09 28 55 36</a></li>
          <li><a href="https://reservation.maison-vehira.fr/<?= $lang === 'fr' ? '' : '?lang=en' ?>"><?= $lang === 'fr' ? 'Réserver en ligne' : 'Book online' ?></a></li>
          <li><a href="/?download=brochure"><?= _t('footer_brochure') ?></a></li>
        </ul>
        <div class="footer-lang-switch">
          <a href="<?= htmlspecialchars($toggle_url) ?>" class="lang-toggle" style="margin-top:1.5rem; display:inline-block;">
            <?= $lang === 'fr' ? '🇬🇧 English' : '🇫🇷 Français' ?>
          </a>
        </div>
      </div>

    </div><!-- /.footer-grid -->

    <div class="footer-bottom">
      <span>© <?= date('Y') ?> TSPDV — Saint-Paul-de-Vence.
        <?= $lang === 'fr' ? 'Tous droits réservés.' : 'All rights reserved.' ?>
      </span>
      <span>Côte d'Azur · France</span>
    </div>
  </div>
</footer>

<style>
  .site-footer {
    background: var(--obsidian); padding: 4rem 0 2rem;
    border-top: .5px solid var(--rule);
  }
  .footer-grid {
    display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 4rem;
    margin-bottom: 3rem;
  }
  @media (max-width: 768px) { .footer-grid { grid-template-columns: 1fr; gap: 2rem; } }
  .footer-brand { font-family: var(--serif); font-size: 1.6rem; color: var(--gold); margin-bottom: .75rem; }
  .footer-tagline { font-size: .75rem; letter-spacing: .12em; color: var(--cream-muted); line-height: 2; }
  .footer-principle { margin-top: 1rem; font-family: var(--serif); font-style: italic; font-size: .9rem; color: var(--gold); opacity: .7; }
  .footer-col h4 { font-size: .6rem; letter-spacing: .2em; text-transform: uppercase; color: var(--gold); margin-bottom: 1.25rem; }
  .footer-col ul { list-style: none; }
  .footer-col ul li { margin-bottom: .6rem; }
  .footer-col ul li a { font-size: .82rem; color: var(--cream-muted); transition: color .2s; }
  .footer-col ul li a:hover { color: var(--gold); }
  .footer-bottom {
    border-top: .5px solid var(--rule); padding-top: 1.5rem;
    display: flex; justify-content: space-between; align-items: center;
    font-size: .65rem; letter-spacing: .1em; color: var(--cream-muted);
    flex-wrap: wrap; gap: .5rem;
  }
</style>

<script>
/* ── FAQ accordion ───────────────────────────── */
document.querySelectorAll('.faq-q').forEach(btn => {
  btn.addEventListener('click', function() {
    const expanded = this.getAttribute('aria-expanded') === 'true';
    document.querySelectorAll('.faq-q').forEach(b => {
      b.setAttribute('aria-expanded', 'false');
      if (b.nextElementSibling) b.nextElementSibling.style.maxHeight = '0';
    });
    if (!expanded) {
      this.setAttribute('aria-expanded', 'true');
      this.nextElementSibling.style.maxHeight = this.nextElementSibling.scrollHeight + 'px';
    }
  });
});

/* ── Reveal on scroll ────────────────────────── */
(function() {
  const items = document.querySelectorAll('.reveal');
  if (!('IntersectionObserver' in window)) { items.forEach(i => i.classList.add('in')); return; }
  const obs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) { entry.target.classList.add('in'); obs.unobserve(entry.target); }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
  items.forEach(i => obs.observe(i));
})();

/* ── Nav scroll background ───────────────────── */
(function() {
  const nav = document.getElementById('nav');
  if (!nav) return;
  const onScroll = () => { nav.classList.toggle('scrolled', window.scrollY > 60); };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();
</script>
</body>
</html>
