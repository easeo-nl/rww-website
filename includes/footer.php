<?php
/**
 * RWW Bouw — Site footer (custom voor RWW, CMS-integrated)
 */
$is_polski = ($htmlLang ?? 'nl') === 'pl';
?>

  <!-- FOOTER -->
  <footer class="bg-stone-950 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
          <div class="flex items-center gap-3 mb-4">
            <?php if (site('brand.logo')): ?>
            <img src="<?= e(site('brand.logo')) ?>" alt="<?= e(site('company.name')) ?>" class="h-8 w-auto">
            <?php endif; ?>
            <span class="text-white font-display text-lg font-semibold"><?= e(site('company.name', 'RWW Bouw')) ?></span>
          </div>
          <p class="text-stone-500 text-sm leading-relaxed">
            <?php if ($is_polski): ?>
            Remonty i przebudowy w Amersfoort, Bunschoten-Spakenburg i okolicach. Najpierw projekt, potem budowa.
            <?php else: ?>
            Renovatie en verbouwing in Amersfoort, Bunschoten-Spakenburg en omgeving. Eerst tekenen, dan bouwen.
            <?php endif; ?>
          </p>
        </div>

        <div>
          <h4 class="text-white font-semibold text-sm mb-4"><?= $is_polski ? 'Usługi' : 'Diensten' ?></h4>
          <ul class="space-y-2 text-stone-500 text-sm">
            <?php if ($is_polski): ?>
            <li><a href="#uslugi" class="hover:text-stone-300 transition-colors">Łazienki na wymiar</a></li>
            <li><a href="#uslugi" class="hover:text-stone-300 transition-colors">Kuchnie na wymiar</a></li>
            <li><a href="#uslugi" class="hover:text-stone-300 transition-colors">Kompleksowe remonty</a></li>
            <li><a href="#uslugi" class="hover:text-stone-300 transition-colors">Tynkowanie i wykończenia</a></li>
            <li><a href="#uslugi" class="hover:text-stone-300 transition-colors">Podłogi i glazura</a></li>
            <?php else: ?>
            <li><a href="/badkamer.php" class="hover:text-stone-300 transition-colors">Badkamers op maat</a></li>
            <li><a href="/keuken.php" class="hover:text-stone-300 transition-colors">Keukens op maat</a></li>
            <li><a href="#diensten" class="hover:text-stone-300 transition-colors">Complete woningrenovatie</a></li>
            <li><a href="#diensten" class="hover:text-stone-300 transition-colors">Stucwerk en afwerking</a></li>
            <li><a href="#diensten" class="hover:text-stone-300 transition-colors">Vloeren en tegelwerk</a></li>
            <?php endif; ?>
          </ul>
        </div>

        <div>
          <h4 class="text-white font-semibold text-sm mb-4">Contact</h4>
          <ul class="space-y-2 text-stone-500 text-sm">
            <li><a href="tel:<?= e(site('company.phone')) ?>" class="hover:text-stone-300 transition-colors">06 274 544 16</a></li>
            <li><a href="mailto:<?= e(site('company.email')) ?>" class="hover:text-stone-300 transition-colors"><?= e(site('company.email')) ?></a></li>
            <li>Amersfoort en Bunschoten-Spakenburg</li>
          </ul>
          <?php if ($is_polski): ?>
          <div class="mt-4">
            <a href="/" class="text-stone-500 hover:text-stone-300 transition-colors text-sm">Strona w języku niderlandzkim &rarr;</a>
          </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="mt-10 pt-8 border-t border-stone-800 flex flex-col sm:flex-row items-center justify-between gap-4">
        <p class="text-stone-600 text-xs">&copy; <?= e(site('company.copyright_year', date('Y'))) ?> <?= e(site('company.name', 'RWW Bouw')) ?>. <?= $is_polski ? 'Wszelkie prawa zastrzeżone.' : 'Alle rechten voorbehouden.' ?></p>
        <p class="text-stone-700 text-xs">Powered by <a href="https://easeo.nl" target="_blank" rel="noopener" class="text-stone-600 hover:text-stone-400 transition-colors">EASEO</a></p>
      </div>
    </div>
  </footer>
  <!-- /FOOTER -->

  <!-- Floating CTA mobile -->
  <div class="fixed bottom-6 right-6 md:hidden z-40">
    <a href="tel:<?= e(site('company.phone')) ?>" class="floating-cta flex items-center justify-center w-14 h-14 bg-rww-red rounded-full shadow-lg text-white">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
    </a>
  </div>

  <?php include __DIR__ . '/cookie-consent.php'; ?>

  <!-- JavaScript -->
  <script src="/js/main.js"></script>
</body>
</html>
