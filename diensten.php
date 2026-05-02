<?php
require_once __DIR__ . '/includes/content.php';
require_once __DIR__ . '/includes/blog-engine.php';
require_once __DIR__ . '/includes/form-engine.php';

// Laad alle diensten-foto's gegroepeerd per groep
$diensten_fotos = [];
foreach (array_filter(get_published_posts(), fn($p) => ($p['categorie'] ?? '') === 'diensten') as $p) {
    $g = $p['groep'] ?? '';
    if ($g) $diensten_fotos[$g][] = $p;
}

$pageTitle = page_content('diensten', 'seo_title', 'Onze diensten — RWW Bouw Amersfoort');
$metaDescription = page_content('diensten', 'seo_description', 'Nieuwbouw, afbouw, renovatie, stucwerk, tegelwerk en interieurontwerp in Amersfoort en omgeving. Alles door één team.');
$htmlLang = 'nl';

require_once __DIR__ . '/includes/header.php';
?>


  <!-- SECTION: hero -->
  <section id="hero" class="relative min-h-screen flex items-center">
    <div class="absolute inset-0">
      <img src="<?= e(page_content('diensten', 'hero_image', '/images/uploads/20230329_151355.jpg')) ?>" alt="RWW Bouw — vakmanschap in Amersfoort" class="w-full h-full object-cover">
      <div class="hero-overlay absolute inset-0"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
      <div class="max-w-2xl">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Onze diensten</span>
        <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl text-white font-bold leading-tight mt-4 mb-6">
          <?= page_content('diensten', 'hero_titel', 'Van nieuwbouw<br>tot renovatie') ?>
        </h1>
        <p class="text-stone-300 text-lg sm:text-xl mb-8 leading-relaxed">
          <?= e(page_content('diensten', 'hero_subtitel', 'Raphaël en zijn team bouwen, verbouwen en renoveren. Van ruw casco tot afgewerkt interieur — alles door één team in Amersfoort en omgeving.')) ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
          <a href="#contact" class="bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded text-lg font-semibold transition-colors text-center">
            Offerte aanvragen
          </a>
          <a href="tel:<?= e(site('company.phone')) ?>" class="border-2 border-white/30 hover:border-white/60 text-white px-8 py-4 rounded text-lg font-medium transition-colors text-center">
            <svg class="w-5 h-5 inline mr-2 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            Bel direct: 06 274 544 16
          </a>
        </div>
        <div class="mt-8 flex items-center gap-3">
          <div class="stars text-lg">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <span class="text-stone-400 text-sm">5.0 op Google &middot; Aanbevolen op Werkspot</span>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: hero -->


  <!-- SECTION: diensten-overzicht -->
  <section id="diensten-overzicht" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Wat wij doen</span>
        <h2 class="font-display text-3xl sm:text-4xl text-rww-dark mt-4 mb-4 font-bold">Alles onder één dak</h2>
        <p class="text-rww-muted text-lg leading-relaxed">Geen gedoe met losse aannemers. Raphaël coördineert het hele traject — van eerste tekening tot sleuteloverdracht.</p>
      </div>

      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-7 gap-4 fade-in">
        <?php
        $overzicht = [
          ['anchor' => '#nieuwbouw',           'label' => 'Nieuwbouw',                       'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>'],
          ['anchor' => '#afbouw',              'label' => 'Afbouw',                           'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>'],
          ['anchor' => '#renovatie',           'label' => 'Renovatie',                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>'],
          ['anchor' => '#woningrenovatie',     'label' => 'Complete renovatie',               'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>'],
          ['anchor' => '#stucwerk',            'label' => 'Stucwerk',                         'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>'],
          ['anchor' => '#vloeren',             'label' => 'Vloeren & tegels',                 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>'],
          ['anchor' => '#interieur',           'label' => 'Interieurontwerp',                 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>'],
        ];
        foreach ($overzicht as $item): ?>
        <a href="<?= e($item['anchor']) ?>" class="flex flex-col items-center gap-3 p-4 rounded-lg hover:bg-rww-light transition-colors group text-center">
          <div class="w-12 h-12 bg-rww-red/10 group-hover:bg-rww-red/20 rounded-full flex items-center justify-center transition-colors">
            <svg class="w-6 h-6 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><?= $item['icon'] ?></svg>
          </div>
          <span class="text-rww-dark text-sm font-medium leading-tight"><?= e($item['label']) ?></span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- /SECTION: diensten-overzicht -->


  <!-- SECTION: nieuwbouw -->
  <section id="nieuwbouw" class="py-20 md:py-28 bg-rww-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <div class="fade-in">
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Nieuwbouw</span>
          <h2 class="font-display text-3xl sm:text-4xl text-rww-dark mt-4 mb-6 font-bold">Van fundering tot afwerking</h2>
          <p class="text-rww-muted text-lg leading-relaxed mb-6">RWW Bouw verzorgt nieuwbouwprojecten van begin tot eind. We bouwen op basis van een duidelijk plan, zodat u precies weet wat u krijgt en wat het kost — voordat de eerste steen wordt gelegd.</p>
          <ul class="space-y-3 mb-8">
            <?php foreach (['Metselwerk en ruwbouw', 'Kozijnen en gevelbekleding', 'Dakinwerken en isolatie', 'Complete coördinatie op de bouwplaats'] as $punt): ?>
            <li class="flex items-start gap-3 text-rww-text">
              <svg class="w-5 h-5 text-rww-red shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <?= e($punt) ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <a href="#contact" class="inline-block bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded text-lg font-semibold transition-colors">Offerte aanvragen</a>
        </div>
        <div class="fade-in">
          <?php $fotos = $diensten_fotos['nieuwbouw'] ?? []; ?>
          <div class="aspect-[4/3] rounded-lg shadow-lg relative" data-slider data-slider-per-view="1">
            <div class="slider-container absolute inset-0 overflow-hidden rounded-lg">
              <div class="slider-track h-full" data-slider-track>
                <?php if (!empty($fotos)): foreach ($fotos as $foto): ?>
                <div class="slider-slide h-full">
                  <img src="<?= e($foto['afbeelding'] ?? '') ?>" alt="<?= e($foto['titel'] ?? '') ?>" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endforeach; else: ?>
                <div class="slider-slide h-full">
                  <img src="/images/uploads/20180410_104638.jpg" alt="Nieuwbouw door RWW Bouw" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endif; ?>
              </div>
            </div>
            <?php if (count($fotos) > 1): ?>
            <div class="slider-controls absolute bottom-3 left-0 right-0 flex items-center justify-center gap-3 z-10">
              <button class="slider-btn-prev" aria-label="Vorige"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></button>
              <div class="slider-dots" data-slider-dots></div>
              <button class="slider-btn-next" aria-label="Volgende"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></button>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: nieuwbouw -->


  <!-- SECTION: afbouw -->
  <section id="afbouw" class="py-20 md:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <div class="fade-in order-2 lg:order-1">
          <?php $fotos = $diensten_fotos['afbouw'] ?? []; ?>
          <div class="aspect-[4/3] rounded-lg shadow-lg relative" data-slider data-slider-per-view="1">
            <div class="slider-container absolute inset-0 overflow-hidden rounded-lg">
              <div class="slider-track h-full" data-slider-track>
                <?php if (!empty($fotos)): foreach ($fotos as $foto): ?>
                <div class="slider-slide h-full">
                  <img src="<?= e($foto['afbeelding'] ?? '') ?>" alt="<?= e($foto['titel'] ?? '') ?>" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endforeach; else: ?>
                <div class="slider-slide h-full">
                  <img src="/images/uploads/IMG-20230330-WA0000.jpeg" alt="Afbouw door RWW Bouw" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endif; ?>
              </div>
            </div>
            <?php if (count($fotos) > 1): ?>
            <div class="slider-controls absolute bottom-3 left-0 right-0 flex items-center justify-center gap-3 z-10">
              <button class="slider-btn-prev" aria-label="Vorige"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></button>
              <div class="slider-dots" data-slider-dots></div>
              <button class="slider-btn-next" aria-label="Volgende"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></button>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="fade-in order-1 lg:order-2">
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Afbouw</span>
          <h2 class="font-display text-3xl sm:text-4xl text-rww-dark mt-4 mb-6 font-bold">Het casco staat — wij zorgen voor de rest</h2>
          <p class="text-rww-muted text-lg leading-relaxed mb-6">Na de ruwbouw begint de afbouw: de fase die uw huis echt tot woonruimte maakt. Wanden, plafonds, deuren, kozijnen en alle afwerking — strak en vakkundig uitgevoerd.</p>
          <ul class="space-y-3 mb-8">
            <?php foreach (['Wanden stucen en schilderen', 'Plafonds afwerken', 'Binnenkozijnen en deuren plaatsen', 'Elektra- en leidingwerk afsluiten'] as $punt): ?>
            <li class="flex items-start gap-3 text-rww-text">
              <svg class="w-5 h-5 text-rww-red shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <?= e($punt) ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <a href="#contact" class="inline-block bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded text-lg font-semibold transition-colors">Offerte aanvragen</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: afbouw -->


  <!-- SECTION: renovatie -->
  <section id="renovatie" class="py-20 md:py-28 bg-rww-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <div class="fade-in">
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Renovatie</span>
          <h2 class="font-display text-3xl sm:text-4xl text-rww-dark mt-4 mb-6 font-bold">Uw woning in nieuwstaat</h2>
          <p class="text-rww-muted text-lg leading-relaxed mb-6">Een gerichte renovatie haalt het meeste uit uw woning — zonder alles te slopen. We kijken wat er moet, maken een plan en voeren het uit. Netjes, op tijd en zonder verborgen meerwerk.</p>
          <ul class="space-y-3 mb-8">
            <?php foreach (['Gedeeltelijke verbouwingen', 'Sloopwerk en herindeling', 'Gevelherstel en voegwerk', 'Isolatie en verduurzaming'] as $punt): ?>
            <li class="flex items-start gap-3 text-rww-text">
              <svg class="w-5 h-5 text-rww-red shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <?= e($punt) ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <a href="#contact" class="inline-block bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded text-lg font-semibold transition-colors">Offerte aanvragen</a>
        </div>
        <div class="fade-in">
          <?php $fotos = $diensten_fotos['renovatie'] ?? []; ?>
          <div class="aspect-[4/3] rounded-lg shadow-lg relative" data-slider data-slider-per-view="1">
            <div class="slider-container absolute inset-0 overflow-hidden rounded-lg">
              <div class="slider-track h-full" data-slider-track>
                <?php if (!empty($fotos)): foreach ($fotos as $foto): ?>
                <div class="slider-slide h-full">
                  <img src="<?= e($foto['afbeelding'] ?? '') ?>" alt="<?= e($foto['titel'] ?? '') ?>" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endforeach; else: ?>
                <div class="slider-slide h-full">
                  <img src="/images/uploads/IMG-20230330-WA0000 (1).jpeg" alt="Renovatie door RWW Bouw" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endif; ?>
              </div>
            </div>
            <?php if (count($fotos) > 1): ?>
            <div class="slider-controls absolute bottom-3 left-0 right-0 flex items-center justify-center gap-3 z-10">
              <button class="slider-btn-prev" aria-label="Vorige"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></button>
              <div class="slider-dots" data-slider-dots></div>
              <button class="slider-btn-next" aria-label="Volgende"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></button>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: renovatie -->


  <!-- SECTION: woningrenovatie -->
  <section id="woningrenovatie" class="py-20 md:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <div class="fade-in order-2 lg:order-1">
          <?php $fotos = $diensten_fotos['woningrenovatie'] ?? []; ?>
          <div class="aspect-[4/3] rounded-lg shadow-lg relative" data-slider data-slider-per-view="1">
            <div class="slider-container absolute inset-0 overflow-hidden rounded-lg">
              <div class="slider-track h-full" data-slider-track>
                <?php if (!empty($fotos)): foreach ($fotos as $foto): ?>
                <div class="slider-slide h-full">
                  <img src="<?= e($foto['afbeelding'] ?? '') ?>" alt="<?= e($foto['titel'] ?? '') ?>" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endforeach; else: ?>
                <div class="slider-slide h-full">
                  <img src="/images/uploads/20230329_151320.jpg" alt="Complete woningrenovatie door RWW Bouw" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endif; ?>
              </div>
            </div>
            <?php if (count($fotos) > 1): ?>
            <div class="slider-controls absolute bottom-3 left-0 right-0 flex items-center justify-center gap-3 z-10">
              <button class="slider-btn-prev" aria-label="Vorige"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></button>
              <div class="slider-dots" data-slider-dots></div>
              <button class="slider-btn-next" aria-label="Volgende"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></button>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="fade-in order-1 lg:order-2">
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Complete woningrenovatie</span>
          <h2 class="font-display text-3xl sm:text-4xl text-rww-dark mt-4 mb-6 font-bold">Heel de woning — één aanspreekpunt</h2>
          <p class="text-rww-muted text-lg leading-relaxed mb-6">Van keuken tot badkamer, van woonkamer tot slaapkamer — een complete woningrenovatie vraagt om één team dat het overzicht houdt. Dat zijn wij. Agnieszka maakt het ontwerp, Raphaël bouwt het.</p>
          <ul class="space-y-3 mb-8">
            <?php foreach (['Interieurontwerp voor de gehele woning', 'Vaste volgorde: tekenen, dan bouwen', 'Geen losse onderaannemers', 'Heldere prijsafspraken vooraf'] as $punt): ?>
            <li class="flex items-start gap-3 text-rww-text">
              <svg class="w-5 h-5 text-rww-red shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <?= e($punt) ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="/renovatie.php" class="inline-block bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded text-lg font-semibold transition-colors">Meer informatie</a>
            <a href="#contact" class="inline-block border-2 border-rww-red text-rww-red hover:bg-rww-red hover:text-white px-8 py-4 rounded text-lg font-semibold transition-colors">Offerte aanvragen</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: woningrenovatie -->


  <!-- SECTION: stucwerk -->
  <section id="stucwerk" class="py-20 md:py-28 bg-rww-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <div class="fade-in">
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Stucwerk en afwerking</span>
          <h2 class="font-display text-3xl sm:text-4xl text-rww-dark mt-4 mb-6 font-bold">Strakke wanden, nette oplevering</h2>
          <p class="text-rww-muted text-lg leading-relaxed mb-6">Stucwerk is het verschil tussen een ruwe verbouwing en een afgewerkte woning. Wij stuken wanden en plafonds tot een glad, spuitklaar oppervlak — of geven ze een specifieke afwerking zoals beton ciré of microbeton.</p>
          <ul class="space-y-3 mb-8">
            <?php foreach (['Glad stucwerk op wanden en plafonds', 'Beton ciré en microbeton', 'Schilderwerk en kitwerk', 'Reparaties en herstelwerk'] as $punt): ?>
            <li class="flex items-start gap-3 text-rww-text">
              <svg class="w-5 h-5 text-rww-red shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <?= e($punt) ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="/stucwerk.php" class="inline-block bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded text-lg font-semibold transition-colors">Meer informatie</a>
            <a href="#contact" class="inline-block border-2 border-rww-red text-rww-red hover:bg-rww-red hover:text-white px-8 py-4 rounded text-lg font-semibold transition-colors">Offerte aanvragen</a>
          </div>
        </div>
        <div class="fade-in">
          <?php $fotos = $diensten_fotos['stucwerk'] ?? []; ?>
          <div class="aspect-[4/3] rounded-lg shadow-lg relative" data-slider data-slider-per-view="1">
            <div class="slider-container absolute inset-0 overflow-hidden rounded-lg">
              <div class="slider-track h-full" data-slider-track>
                <?php if (!empty($fotos)): foreach ($fotos as $foto): ?>
                <div class="slider-slide h-full">
                  <img src="<?= e($foto['afbeelding'] ?? '') ?>" alt="<?= e($foto['titel'] ?? '') ?>" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endforeach; else: ?>
                <div class="slider-slide h-full">
                  <img src="/images/uploads/stucwerk/PHOTO-2026-04-09-09-05-23 3.jpg" alt="Stucwerk en afwerking door RWW Bouw" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endif; ?>
              </div>
            </div>
            <?php if (count($fotos) > 1): ?>
            <div class="slider-controls absolute bottom-3 left-0 right-0 flex items-center justify-center gap-3 z-10">
              <button class="slider-btn-prev" aria-label="Vorige"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></button>
              <div class="slider-dots" data-slider-dots></div>
              <button class="slider-btn-next" aria-label="Volgende"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></button>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: stucwerk -->


  <!-- SECTION: vloeren -->
  <section id="vloeren" class="py-20 md:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <div class="fade-in order-2 lg:order-1">
          <?php $fotos = $diensten_fotos['vloeren'] ?? []; ?>
          <div class="aspect-[4/3] rounded-lg shadow-lg relative" data-slider data-slider-per-view="1">
            <div class="slider-container absolute inset-0 overflow-hidden rounded-lg">
              <div class="slider-track h-full" data-slider-track>
                <?php if (!empty($fotos)): foreach ($fotos as $foto): ?>
                <div class="slider-slide h-full">
                  <img src="<?= e($foto['afbeelding'] ?? '') ?>" alt="<?= e($foto['titel'] ?? '') ?>" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endforeach; else: ?>
                <div class="slider-slide h-full">
                  <img src="/images/uploads/20230329_151357.jpg" alt="Vloeren en tegelwerk door RWW Bouw" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endif; ?>
              </div>
            </div>
            <?php if (count($fotos) > 1): ?>
            <div class="slider-controls absolute bottom-3 left-0 right-0 flex items-center justify-center gap-3 z-10">
              <button class="slider-btn-prev" aria-label="Vorige"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></button>
              <div class="slider-dots" data-slider-dots></div>
              <button class="slider-btn-next" aria-label="Volgende"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></button>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="fade-in order-1 lg:order-2">
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Vloeren en tegelwerk</span>
          <h2 class="font-display text-3xl sm:text-4xl text-rww-dark mt-4 mb-6 font-bold">Strak gelegd, netjes afgewerkt</h2>
          <p class="text-rww-muted text-lg leading-relaxed mb-6">Van groot formaat tegels tot patroonvloeren — wij leggen ze waterpas en strak. In de badkamer, keuken, hal of woonkamer. Agnieszka helpt u met de keuze; Raphaël legt ze neer.</p>
          <ul class="space-y-3 mb-8">
            <?php foreach (['Vloer- en wandtegels in elk formaat', 'Patroonvloeren en visgraat', 'Tegelwerk in badkamer en keuken', 'Voegwerk en afkitwerk'] as $punt): ?>
            <li class="flex items-start gap-3 text-rww-text">
              <svg class="w-5 h-5 text-rww-red shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <?= e($punt) ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="/vloeren.php" class="inline-block bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded text-lg font-semibold transition-colors">Meer informatie</a>
            <a href="#contact" class="inline-block border-2 border-rww-red text-rww-red hover:bg-rww-red hover:text-white px-8 py-4 rounded text-lg font-semibold transition-colors">Offerte aanvragen</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: vloeren -->


  <!-- SECTION: interieur -->
  <section id="interieur" class="py-20 md:py-28 bg-rww-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <div class="fade-in">
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Interieurontwerp en visualisatie</span>
          <h2 class="font-display text-3xl sm:text-4xl text-rww-dark mt-4 mb-6 font-bold">U ziet het eerst op papier</h2>
          <p class="text-rww-muted text-lg leading-relaxed mb-6">Agnieszka Sejfryd is interieurarchitect en maakt professionele bouwtekeningen en 3D-visualisaties. U ziet uw verbouwing precies zoals hij wordt — voordat er één steen wordt verplaatst. De kosten voor de tekening worden verrekend met de vervolgopdracht.</p>

          <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6 mb-8 p-5 bg-white rounded-lg shadow-sm">
            <div class="w-20 h-20 rounded-full overflow-hidden shrink-0 border-4 border-rww-red/20">
              <img src="/images/AgnieszkaSejfrydArchitect.png" alt="Agnieszka Sejfryd" class="w-full h-full object-cover">
            </div>
            <div>
              <p class="font-display text-rww-dark font-semibold">Agnieszka Sejfryd</p>
              <p class="text-rww-red text-sm font-medium mb-1">Interieurarchitect en designer</p>
              <p class="text-rww-muted text-sm">Opleiding interieurarchitectuur. Werkt uitsluitend op maat — geen standaardontwerpen.</p>
            </div>
          </div>

          <ul class="space-y-3 mb-8">
            <?php foreach (['Professionele bouwtekeningen op maat', '3D-visualisaties en materiaaladvies', 'Tekening verrekend bij vervolgopdracht', 'Voor badkamer, keuken of hele woning'] as $punt): ?>
            <li class="flex items-start gap-3 text-rww-text">
              <svg class="w-5 h-5 text-rww-red shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              <?= e($punt) ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="/interieur.php" class="inline-block bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded text-lg font-semibold transition-colors">Meer informatie</a>
            <a href="#contact" class="inline-block border-2 border-rww-red text-rww-red hover:bg-rww-red hover:text-white px-8 py-4 rounded text-lg font-semibold transition-colors">Afspraak plannen</a>
          </div>
        </div>
        <div class="fade-in">
          <?php $fotos = $diensten_fotos['interieur'] ?? []; ?>
          <div class="aspect-[4/3] rounded-lg shadow-lg relative" data-slider data-slider-per-view="1">
            <div class="slider-container absolute inset-0 overflow-hidden rounded-lg">
              <div class="slider-track h-full" data-slider-track>
                <?php if (!empty($fotos)): foreach ($fotos as $foto): ?>
                <div class="slider-slide h-full">
                  <img src="<?= e($foto['afbeelding'] ?? '') ?>" alt="<?= e($foto['titel'] ?? '') ?>" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endforeach; else: ?>
                <div class="slider-slide h-full">
                  <img src="/images/uploads/20230329_151317.jpg" alt="Interieurontwerp door Agnieszka Sejfryd" class="w-full h-full object-cover" loading="lazy">
                </div>
                <?php endif; ?>
              </div>
            </div>
            <?php if (count($fotos) > 1): ?>
            <div class="slider-controls absolute bottom-3 left-0 right-0 flex items-center justify-center gap-3 z-10">
              <button class="slider-btn-prev" aria-label="Vorige"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></button>
              <div class="slider-dots" data-slider-dots></div>
              <button class="slider-btn-next" aria-label="Volgende"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></button>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: interieur -->


   <!-- SECTION: reviews -->
    <section>
    <div>
      <div class="text-center max-w-3.2xl mx-auto mb-16 fade-in">
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-black mt-4 mb-6 font-bold">Klanten aan het woord</h2>
        <script defer async src='https://cdn.trustindex.io/loader.js?08389c960054733e4b062cdded1'></script>
      </div>
    </div>
   </section>
  <!-- /SECTION: reviews -->


  <!-- SECTION: contact -->
  <section id="contact" class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
        <div class="fade-in">
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Contact</span>
          <h2 class="font-display text-3xl sm:text-4xl text-white mt-4 mb-6 font-bold">
            Vertel ons over uw project
          </h2>
          <p class="text-stone-400 text-lg leading-relaxed mb-8">Nieuwbouw, renovatie of een losse klus — we nemen snel contact met u op voor een vrijblijvend gesprek en offerte.</p>

          <div class="space-y-6">
            <a href="tel:<?= e(site('company.phone')) ?>" class="flex items-center gap-4 text-white hover:text-rww-red transition-colors group">
              <div class="w-12 h-12 bg-rww-red/20 group-hover:bg-rww-red/30 rounded-full flex items-center justify-center transition-colors">
                <svg class="w-5 h-5 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              </div>
              <div><p class="font-semibold text-lg">Whatsapp</p><p class="text-stone-400">06 160 357 54</p></div>
            </a>
            <a href="tel:<?= e(site('company.phone')) ?>" class="flex items-center gap-4 text-white hover:text-rww-red transition-colors group">
              <div class="w-12 h-12 bg-rww-red/20 group-hover:bg-rww-red/30 rounded-full flex items-center justify-center transition-colors">
                <svg class="w-5 h-5 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              </div>
              <div><p class="font-semibold text-lg">Bel Rafael</p><p class="text-stone-400">06 274 544 16</p></div>
            </a>
            <a href="mailto:<?= e(site('company.email')) ?>" class="flex items-center gap-4 text-white hover:text-rww-red transition-colors group">
              <div class="w-12 h-12 bg-rww-red/20 group-hover:bg-rww-red/30 rounded-full flex items-center justify-center transition-colors">
                <svg class="w-5 h-5 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              </div>
              <div><p class="font-semibold text-lg">E-mail</p><p class="text-stone-400"><?= e(site('company.email')) ?></p></div>
            </a>
          </div>
        </div>

        <div class="fade-in">
          <div class="bg-stone-900 rounded-lg p-6 sm:p-8">
            <?= render_form('contact') ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: contact -->


<?php require_once __DIR__ . '/includes/footer.php'; ?>
