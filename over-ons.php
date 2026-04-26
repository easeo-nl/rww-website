<?php
require_once __DIR__ . '/includes/content.php';

$pageTitle       = 'Over ons — RWW Bouw';
$metaDescription = 'Leer RWW Bouw kennen. Vakmanschap van Raphaël en Agnieszka in Amersfoort en Bunschoten-Spakenburg. Eerst tekenen, dan bouwen.';
$htmlLang        = 'nl';

require_once __DIR__ . '/includes/header.php';
?>

  <!-- SECTION: hero -->
  <section class="relative py-40 flex items-center">
    <div class="absolute inset-0">
      <img src="/images/uploads/20230329_151355.jpg" alt="RWW Bouw vakmanschap" class="w-full h-full object-cover">
      <div class="hero-overlay absolute inset-0"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-2xl">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Over RWW Bouw</span>
        <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl text-white font-bold leading-tight mt-4 mb-6">
          Vakmanschap met een menselijke kant
        </h1>
        <p class="text-stone-300 text-lg sm:text-xl leading-relaxed">
          Raphaël bouwt, Agnieszka ontwerpt. Samen zorgen ze dat u weet wat u krijgt — voordat de eerste hamer wordt opgepakt.
        </p>
      </div>
    </div>
  </section>
  <!-- /SECTION: hero -->


  <!-- SECTION: werkwijze -->
  <section id="werkwijze" class="py-20 md:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Onze werkwijze</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">
          <?= e(page_content('home', 'werkwijze_titel', 'Eerst tekenen, dan bouwen')) ?>
        </h2>
        <p class="text-rww-muted text-lg leading-relaxed">
          <?= e(page_content('home', 'werkwijze_tekst', '')) ?>
        </p>
      </div>

      <div class="flex flex-col md:flex-row items-center gap-8 mb-16 fade-in">
        <div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden shadow-lg shrink-0 border-4 border-rww-red/20">
          <img src="/images/AgnieszkaSejfrydArchitect.png" alt="Agnieszka Sejfryd — Interieurarchitect" class="w-full h-full object-cover">
        </div>
        <div class="text-center md:text-left">
          <h3 class="font-display text-xl text-rww-dark font-semibold mb-2">Agnieszka Sejfryd</h3>
          <p class="text-rww-red text-sm font-medium mb-2">Interieurarchitect en designer</p>
          <p class="text-rww-muted text-sm leading-relaxed max-w-lg">Agnieszka maakt professionele bouwtekeningen en 3D-visualisaties voordat er een hamer wordt opgepakt. U ziet exact wat u krijgt. De kosten voor de tekening worden verrekend met de vervolgopdracht.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 fade-in">
        <?php
        $stappen = [
          ['nr' => '1', 'titel' => 'Inmeting en ontwerp', 'tekst' => 'Agnieszka komt bij u langs, meet alles op en maakt een professionele bouwtekening op maat.'],
          ['nr' => '2', 'titel' => '3D-visualisatie', 'tekst' => 'U ziet exact hoe uw nieuwe ruimte eruitziet. Geen verrassingen, maar een helder beeld vooraf.'],
          ['nr' => '3', 'titel' => 'Heldere offerte', 'tekst' => 'Op basis van de tekening ontvangt u een duidelijke offerte. U weet precies wat het kost.'],
          ['nr' => '4', 'titel' => 'Vakkundige uitvoering', 'tekst' => 'Raphaël en zijn team bouwen precies wat getekend is. Tot in de puntjes afgewerkt.'],
        ];
        foreach ($stappen as $stap): ?>
        <div class="process-step relative text-center p-6">
          <div class="w-16 h-16 bg-rww-red/10 rounded-full flex items-center justify-center mx-auto mb-5">
            <span class="text-rww-red font-display text-2xl font-bold"><?= $stap['nr'] ?></span>
          </div>
          <h3 class="font-display text-xl text-rww-dark font-semibold mb-3"><?= e($stap['titel']) ?></h3>
          <p class="text-rww-muted text-sm leading-relaxed"><?= e($stap['tekst']) ?></p>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="mt-12 text-center fade-in">
        <p class="text-rww-muted text-sm italic">De kosten voor de tekening worden verrekend met de vervolgopdracht. U betaalt dus alleen als u doorgaat.</p>
      </div>
    </div>
  </section>
  <!-- /SECTION: werkwijze -->


  <!-- SECTION: over-ons -->
  <section id="over-ons" class="py-20 md:py-28 bg-rww-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center fade-in">
        <div>
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Over RWW Bouw</span>
          <h2 class="font-display text-3xl sm:text-4xl text-rww-dark mt-4 mb-6 font-bold">
            <?= e(page_content('home', 'over_titel', 'Vakmanschap met een menselijke kant')) ?>
          </h2>
          <div class="space-y-4 text-rww-text leading-relaxed">
            <p><?= e(page_content('home', 'over_tekst_1', '')) ?></p>
            <p><?= e(page_content('home', 'over_tekst_2', '')) ?></p>
            <p><?= e(page_content('home', 'over_tekst_3', '')) ?></p>
          </div>
          <div class="mt-8 flex flex-col sm:flex-row gap-6">
            <div><p class="text-rww-red font-display text-3xl font-bold">20+</p><p class="text-rww-muted text-sm">jaar ervaring</p></div>
            <div><p class="text-rww-red font-display text-3xl font-bold">5.0</p><p class="text-rww-muted text-sm">Google beoordeling</p></div>
            <div><p class="text-rww-red font-display text-3xl font-bold">100%</p><p class="text-rww-muted text-sm">aanbevolen op Werkspot</p></div>
          </div>
        </div>
        <div class="relative">
          <img src="/images/uploads/20230329_151355.jpg" alt="Vakwerk door RWW Bouw" class="rounded-lg shadow-xl w-full" loading="lazy">
          <div class="absolute -bottom-6 -left-6 bg-rww-dark text-white p-6 rounded-lg shadow-lg hidden lg:block">
            <p class="font-display text-lg font-semibold">&ldquo;Eerst tekenen,<br>dan bouwen.&rdquo;</p>
          </div>
        </div>
      </div>

      <div class="mt-16 pt-12 border-t border-stone-200 fade-in">
        <h3 class="font-display text-xl text-rww-dark font-semibold mb-4">Werkgebied</h3>
        <p class="text-rww-muted">RWW Bouw werkt in <strong class="text-rww-text">Amersfoort</strong>, <strong class="text-rww-text">Bunschoten-Spakenburg</strong> en omgeving. We komen bij u thuis voor een vrijblijvende inmeting.</p>
      </div>
    </div>
  </section>
  <!-- /SECTION: over-ons -->

<?php require_once __DIR__ . '/includes/footer.php'; ?>
