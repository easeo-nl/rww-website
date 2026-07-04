<?php
require_once __DIR__ . '/includes/content.php';
require_once __DIR__ . '/includes/blog-engine.php';
require_once __DIR__ . '/includes/form-engine.php';

$pageTitle = page_content('diensten', 'seo_title', 'Onze diensten — RWW Bouw Amersfoort');
$metaDescription = page_content('diensten', 'seo_description', 'Nieuwbouw, afbouw, renovatie, badkamer, keuken, stucwerk en interieurontwerp in Amersfoort en omgeving. Alles door één team.');
$htmlLang = 'nl';

require_once __DIR__ . '/includes/header.php';
?>


  <!-- SECTION: hero -->
  <section id="hero" class="relative min-h-screen flex items-center overflow-hidden">

    <div class="absolute inset-0">
      <img
        src="<?= e(page_content('diensten', 'hero_image', '/images/uploads/woonkamer/PHOTO-2026-04-09-08-37-35 2.jpg')) ?>"
        alt="RWW Bouw — vakmanschap in Amersfoort"
        class="w-full h-full object-cover object-center">
      <div class="absolute inset-0" style="background: linear-gradient(100deg, #1C1917 0%, rgba(28,25,23,0.93) 28%, rgba(28,25,23,0.6) 52%, rgba(28,25,23,0.15) 75%, transparent 100%)"></div>
      <div class="absolute bottom-0 inset-x-0 h-40" style="background: linear-gradient(to top, rgba(28,25,23,0.55), transparent)"></div>
    </div>

    <div class="relative z-10 w-full">
      <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14 xl:px-20 py-36 lg:py-44">
        <div class="max-w-xl lg:max-w-2xl">

          <span class="inline-flex items-center gap-3 text-rww-red font-semibold text-sm uppercase tracking-widest mb-6">
            <span class="w-8 h-px bg-rww-red inline-block"></span>
            <?= e(page_content('diensten', 'hero_eyebrow', 'Onze diensten · Amersfoort')) ?>
          </span>

          <h1 class="font-display text-5xl sm:text-6xl xl:text-7xl text-white font-bold leading-tight mb-6">
            <?= page_content('diensten', 'hero_titel', 'Alles onder<br><em class="italic text-rww-red">één</em><br>dak.') ?>
          </h1>

          <p class="text-stone-300 text-lg leading-relaxed mb-10 max-w-lg">
            <?= e(page_content('diensten', 'hero_subtitel', 'Badkamer, keuken, nieuwbouw, renovatie, stucwerk of vloeren — Rafael en zijn team bouwen, verbouwen en renoveren. Agnieszka tekent. Één aanspreekpunt, van begin tot eind.')) ?>
          </p>

          <div class="flex flex-col sm:flex-row gap-3 mb-10">
            <a href="offerte.php" class="bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded-full text-base font-semibold transition-colors text-center">
              Offerte aanvragen
            </a>
            <a href="tel:<?= e(site('company.phone')) ?>" class="border border-white/30 hover:border-white/60 text-white px-8 py-4 rounded-full text-base font-medium transition-colors text-center flex items-center justify-center gap-2">
              <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              Bel direct: +31 6 274 544 16
            </a>
          </div>

          <div class="flex items-center gap-3">
            <div class="stars text-lg">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <span class="text-stone-400 text-sm">5.0 op Google &middot; Aanbevolen op Werkspot</span>
          </div>

        </div>
      </div>
    </div>

  </section>
  <!-- /SECTION: hero -->


  <!-- SECTION: usps -->
  <section class="py-8 bg-rww-light border-b border-rww-stone overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="ubi-track">
        <?php
        $usps = [
          ['label' => 'Gratis 3D-ontwerp',       'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><rect x="3" y="4" width="26" height="19" rx="2"/><line x1="10" y1="23" x2="10" y2="29"/><line x1="22" y1="23" x2="22" y2="29"/><line x1="6" y1="29" x2="26" y2="29"/><rect x="7" y="8" width="8" height="11" rx="1"/><rect x="17" y="8" width="8" height="4" rx="1"/><rect x="17" y="15" width="8" height="4" rx="1"/></svg>'],
          ['label' => 'Vaste prijs,<br>geen meerwerk', 'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><rect x="6" y="3" width="20" height="26" rx="2"/><line x1="10" y1="11" x2="22" y2="11"/><line x1="10" y1="16" x2="22" y2="16"/><line x1="10" y1="21" x2="16" y2="21"/><path d="M18 23l2 2 4-4"/></svg>'],
          ['label' => 'Eigen vakmensen',          'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><circle cx="11" cy="8" r="4"/><path d="M3 26a8 8 0 0116 0"/><circle cx="23" cy="9" r="3"/><path d="M27 26a6 6 0 00-8-5.6"/></svg>'],
          ['label' => 'Eén aanspreekpunt',        'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><path d="M21 15a2 2 0 01-2 2H9l-4 4V5a2 2 0 012-2h12a2 2 0 012 2z"/></svg>'],
          ['label' => '5 jaar garantie',          'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><path d="M16 3l3 8h9l-7 5 3 8-8-5-8 5 3-8-7-5h9z"/></svg>'],
          ['label' => 'Amersfoort<br>en omgeving', 'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><path d="M16 3a9 9 0 019 9c0 7-9 17-9 17S7 19 7 12a9 9 0 019-9z"/><circle cx="16" cy="12" r="3"/></svg>'],
        ];
        foreach ($usps as $usp): ?>
        <div class="ubi-item">
          <div class="ubi-blob"><?= $usp['icon'] ?></div>
          <p class="font-semibold text-rww-dark text-sm leading-snug"><?= $usp['label'] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- /SECTION: usps -->


  <!-- SECTION: diensten-grid -->
  <section class="py-20 md:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Wat wij doen</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">
          Alles in eigen hand
        </h2>
        <p class="text-rww-muted text-lg leading-relaxed">Geen gedoe met losse aannemers. Rafael coördineert het hele traject — van eerste tekening tot sleuteloverdracht.</p>
      </div>

      <?php
      $diensten = [
        [
          'slug'   => 'badkamer',
          'url'    => '/badkamer.php',
          'foto'   => '/images/uploads/badkamer/PHOTO-2026-04-09-08-47-01.jpg',
          'label'  => 'Badkamers',
          'titel'  => 'Badkamerrenovatie',
          'tekst'  => 'Van sloopwerk tot sleuteloverdracht. Tegelwerk, sanitair, beton ciré en vloerverwarming door één team.',
          'punten' => ['Gratis 3D-ontwerp door Agnieszka', 'Tegelwerk en sanitair op maat', 'Inloopdouche, bad of beide'],
        ],
        [
          'slug'   => 'keuken',
          'url'    => '/keuken.php',
          'foto'   => '/images/uploads/keuken/PHOTO-2026-04-09-09-24-05.jpg',
          'label'  => 'Keukens',
          'titel'  => 'Keukenrenovatie',
          'tekst'  => 'Keukenplaatsing op maat, inclusief tegelwerk, elektra en leidingwerk. Van ontwerp tot aansluiting.',
          'punten' => ['3D-visualisatie van uw keuken', 'Keukenplaatsing en maatwerk', 'Elektra, gas en wateraansluiting'],
        ],
        [
          'slug'   => 'nieuwbouw',
          'url'    => '/nieuwbouw.php',
          'foto'   => '/images/uploads/uitbouw/PHOTO-2026-04-09-08-30-56.jpg',
          'label'  => 'Nieuwbouw',
          'titel'  => 'Nieuwbouw & uitbouw',
          'tekst'  => 'Uitbouwen, opbouwen of nieuwbouw tot 50m². Agnieszka tekent, Rafael bouwt — van fundering tot dak.',
          'punten' => ['Metselwerk en ruwbouw', 'Kozijnen en gevelbekleding', 'Dakinwerken en isolatie'],
        ],
        [
          'slug'   => 'renovatie',
          'url'    => '/renovatie.php',
          'foto'   => '/images/uploads/woonkamer/PHOTO-2026-04-09-08-37-35 3.jpg',
          'label'  => 'Renovatie',
          'titel'  => 'Woningrenovatie',
          'tekst'  => 'Heel de woning — één aanspreekpunt. Badkamer, keuken, vloeren en stucwerk door één team in de juiste volgorde.',
          'punten' => ['Complete verbouwing van A tot Z', 'Vaste prijs, vaste planning', 'Eén team, geen losse aannemers'],
        ],
        [
          'slug'   => 'afbouw',
          'url'    => '/afbouw.php',
          'foto'   => '/images/uploads/woonkamer/PHOTO-2026-04-09-08-46-57.jpg',
          'label'  => 'Afbouw',
          'titel'  => 'Afbouw & afwerking',
          'tekst'  => 'Na de ruwbouw: wanden, plafonds, deuren, kozijnen en alle afwerking. Strak en vakkundig, klaar om in te wonen.',
          'punten' => ['Stucwerk en schilderwerk', 'Kozijnen en binnendeuren', 'Installaties netjes afsluiten'],
        ],
        [
          'slug'   => 'stucwerk',
          'url'    => '/stucwerk.php',
          'foto'   => '/images/uploads/stucwerk/PHOTO-2026-04-09-08-46-57 2.jpg',
          'label'  => 'Stucwerk',
          'titel'  => 'Stucwerk',
          'tekst'  => 'Glad stucwerk, sierpleister of beton ciré — voor wanden, plafonds en meubels. Handmatig aangebracht, duurzaam afgewerkt.',
          'punten' => ['Glad stucwerk en sierpleister', 'Beton ciré en microbeton', 'Buitenstucwerk op cement'],
        ],
        [
          'slug'   => 'vloeren',
          'url'    => '/vloeren.php',
          'foto'   => '/images/uploads/vloeren/PHOTO-2026-04-09-09-05-23 7.jpg',
          'label'  => 'Vloeren',
          'titel'  => 'Vloeren & tegelwerk',
          'tekst'  => 'Tegels, PVC, laminaat of beton ciré — strak en waterpas gelegd. Inclusief egalisatie en vloerverwarming.',
          'punten' => ['Groot formaat en patroonvloeren', 'Vloerverwarming inbegrepen', 'Egalisatie als eerste stap'],
        ],
        [
          'slug'   => 'interieur',
          'url'    => '/interieur.php',
          'foto'   => '/images/uploads/tekeningen/PHOTO-2026-04-09-09-05-22 4.jpg',
          'label'  => 'Interieurontwerp',
          'titel'  => 'Interieurontwerp',
          'tekst'  => 'onze architect tekent uw ruimte op maat — fotorealistisch in 3D. U ziet het resultaat tot op de centimeter voordat er ook maar iets gebouwd wordt.',
          'punten' => ['Fotorealistische 3D-visualisatie', 'Kleur- en materiaaladvies', 'Gratis bij uitvoering door RWW Bouw'],
        ],
      ];
      ?>

      <!-- Eerste twee: groot naast elkaar -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6 fade-in">
        <?php foreach (array_slice($diensten, 0, 2) as $d): ?>
        <a href="<?= e($d['url']) ?>" class="group relative rounded-2xl overflow-hidden aspect-[4/3] block">
          <img src="<?= e($d['foto']) ?>" alt="<?= e($d['titel']) ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(28,25,23,0.92) 0%, rgba(28,25,23,0.5) 50%, transparent 100%)"></div>
          <div class="absolute inset-0 p-8 flex flex-col justify-end">
            <span class="text-rww-red font-semibold text-xs uppercase tracking-widest mb-2"><?= e($d['label']) ?></span>
            <h3 class="font-display text-2xl sm:text-3xl text-white font-bold mb-3"><?= e($d['titel']) ?></h3>
            <p class="text-stone-300 text-sm leading-relaxed mb-4 max-w-sm"><?= e($d['tekst']) ?></p>
            <ul class="space-y-1 mb-5">
              <?php foreach ($d['punten'] as $punt): ?>
              <li class="flex items-center gap-2 text-stone-300 text-sm">
                <svg class="w-4 h-4 text-rww-red flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                <?= e($punt) ?>
              </li>
              <?php endforeach; ?>
            </ul>
            <span class="inline-flex items-center gap-2 text-white font-semibold text-sm group-hover:text-rww-red transition-colors">
              Meer informatie
              <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </span>
          </div>
        </a>
        <?php endforeach; ?>
      </div>

      <!-- Middelste drie: iets kleiner -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6 fade-in">
        <?php foreach (array_slice($diensten, 2, 3) as $d): ?>
        <a href="<?= e($d['url']) ?>" class="group relative rounded-2xl overflow-hidden aspect-[3/2] block">
          <img src="<?= e($d['foto']) ?>" alt="<?= e($d['titel']) ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(28,25,23,0.92) 0%, rgba(28,25,23,0.4) 55%, transparent 100%)"></div>
          <div class="absolute inset-0 p-6 flex flex-col justify-end">
            <span class="text-rww-red font-semibold text-xs uppercase tracking-widest mb-1"><?= e($d['label']) ?></span>
            <h3 class="font-display text-xl sm:text-2xl text-white font-bold mb-2"><?= e($d['titel']) ?></h3>
            <p class="text-stone-300 text-xs leading-relaxed mb-3 hidden sm:block"><?= e($d['tekst']) ?></p>
            <ul class="space-y-1 mb-4">
              <?php foreach ($d['punten'] as $punt): ?>
              <li class="flex items-center gap-2 text-stone-300 text-xs">
                <svg class="w-3.5 h-3.5 text-rww-red flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                <?= e($punt) ?>
              </li>
              <?php endforeach; ?>
            </ul>
            <span class="inline-flex items-center gap-2 text-white font-semibold text-sm group-hover:text-rww-red transition-colors">
              Meer informatie
              <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </span>
          </div>
        </a>
        <?php endforeach; ?>
      </div>

      <!-- Laatste drie: iets kleiner -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">
        <?php foreach (array_slice($diensten, 5, 3) as $d): ?>
        <a href="<?= e($d['url']) ?>" class="group relative rounded-2xl overflow-hidden aspect-[3/2] block">
          <img src="<?= e($d['foto']) ?>" alt="<?= e($d['titel']) ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(28,25,23,0.92) 0%, rgba(28,25,23,0.4) 55%, transparent 100%)"></div>
          <div class="absolute inset-0 p-6 flex flex-col justify-end">
            <span class="text-rww-red font-semibold text-xs uppercase tracking-widest mb-1"><?= e($d['label']) ?></span>
            <h3 class="font-display text-xl sm:text-2xl text-white font-bold mb-2"><?= e($d['titel']) ?></h3>
            <p class="text-stone-300 text-xs leading-relaxed mb-3 hidden sm:block"><?= e($d['tekst']) ?></p>
            <ul class="space-y-1 mb-4">
              <?php foreach ($d['punten'] as $punt): ?>
              <li class="flex items-center gap-2 text-stone-300 text-xs">
                <svg class="w-3.5 h-3.5 text-rww-red flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                <?= e($punt) ?>
              </li>
              <?php endforeach; ?>
            </ul>
            <span class="inline-flex items-center gap-2 text-white font-semibold text-sm group-hover:text-rww-red transition-colors">
              Meer informatie
              <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </span>
          </div>
        </a>
        <?php endforeach; ?>
      </div>

    </div>
  </section>
  <!-- /SECTION: diensten-grid -->


  <!-- SECTION: team -->
  <section class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

        <div class="fade-in">
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Het team</span>
          <h2 class="font-display text-4xl sm:text-5xl lg:text-6xl text-white font-bold leading-tight mt-4 mb-6">
            Eerst tekenen.<br><em class="italic text-rww-red">Dan</em> bouwen.
          </h2>
          <p class="text-stone-300 text-lg leading-relaxed mb-8">
            Onze architect tekent uw ruimte tot op de centimeter — in 3D, met de materialen die u zelf kiest. Rafael en zijn team bouwen hem precies zoals gepland. Samen vormen ze een team dat het overzicht houdt van begin tot eind.
          </p>
          <div class="space-y-4 mb-10">
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-full bg-rww-red/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-5 h-5 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>
              <div>
                <p class="text-white font-semibold">Geen losse onderaannemers</p>
                <p class="text-stone-400 text-sm mt-0.5">Eigen vakmensen voor elk onderdeel. Eén planning, één verantwoordelijkheid.</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-full bg-rww-red/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-5 h-5 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>
              <div>
                <p class="text-white font-semibold">Vaste prijs na offerte</p>
                <p class="text-stone-400 text-sm mt-0.5">U ontvangt een heldere offerte. Geen meerwerk achteraf, geen verrassingen.</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-full bg-rww-red/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-5 h-5 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
              </div>
              <div>
                <p class="text-white font-semibold">5 jaar garantie</p>
                <p class="text-stone-400 text-sm mt-0.5">Op alle werkzaamheden, elk onderdeel, elk project.</p>
              </div>
            </div>
          </div>
          <a href="offerte.php" class="inline-flex items-center gap-2 bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded-full text-base font-semibold transition-colors">
            Offerte aanvragen
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Statistieken & foto -->
        <div class="fade-in">
          <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/10 aspect-[4/3]">
            <img
              src="<?= e(page_content('diensten', 'team_afbeelding', '/images/uploads/tekeningen/PHOTO-2026-04-09-09-05-22 4.jpg')) ?>"
              alt="RWW Bouw — Agnieszka en Rafael"
              class="w-full h-full object-cover">
            <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(28,25,23,0.7) 0%, transparent 60%)"></div>
            <!-- Statistieken overlay -->
            <div class="absolute bottom-0 inset-x-0 p-6">
              <div class="grid grid-cols-3 gap-4">
                <div class="text-center">
                  <p class="font-display text-3xl text-white font-bold">50+</p>
                  <p class="text-stone-400 text-xs mt-0.5">tevreden klanten</p>
                </div>
                <div class="text-center border-x border-white/20">
                  <p class="font-display text-3xl text-white font-bold">5.0</p>
                  <p class="text-stone-400 text-xs mt-0.5">op Google</p>
                </div>
                <div class="text-center">
                  <p class="font-display text-3xl text-white font-bold">5jr</p>
                  <p class="text-stone-400 text-xs mt-0.5">garantie</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- /SECTION: team -->


  <!-- SECTION: reviews -->
  <section class="py-20 md:py-28 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Reviews</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 font-bold">Klanten aan het woord</h2>
      </div>
      <script defer async src='https://cdn.trustindex.io/loader.js?08389c960054733e4b062cdded1'></script>
      <div class="flex items-center justify-center gap-4 mt-8">
        <button id="reviews-prev" class="slider-btn-prev" aria-label="Vorige review">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <button id="reviews-next" class="slider-btn-next" aria-label="Volgende review">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </button>
      </div>
    </div>
  </section>

  <script>
  (function () {
    var prevBtn = document.getElementById('reviews-prev');
    var nextBtn = document.getElementById('reviews-next');
    function hook() {
      var tiPrev = document.querySelector('.ti-controls .ti-prev');
      var tiNext = document.querySelector('.ti-controls .ti-next');
      if (!tiPrev || !tiNext) return false;
      prevBtn.onclick = function () { tiPrev.click(); };
      nextBtn.onclick = function () { tiNext.click(); };
      return true;
    }
    var attempts = 0;
    var interval = setInterval(function () {
      if (hook() || ++attempts >= 20) clearInterval(interval);
    }, 500);
  })();
  </script>
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
            <a href="https://wa.me/31616035754" class="flex items-center gap-4 text-white hover:text-rww-red transition-colors group">
              <div class="w-12 h-12 bg-rww-red/20 group-hover:bg-rww-red/30 rounded-full flex items-center justify-center transition-colors">
                <svg class="w-5 h-5 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
              </div>
              <div><p class="font-semibold text-lg">WhatsApp</p><p class="text-stone-400">+31 6 160 357 54</p></div>
            </a>
            <a href="tel:<?= e(site('company.phone')) ?>" class="flex items-center gap-4 text-white hover:text-rww-red transition-colors group">
              <div class="w-12 h-12 bg-rww-red/20 group-hover:bg-rww-red/30 rounded-full flex items-center justify-center transition-colors">
                <svg class="w-5 h-5 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              </div>
              <div><p class="font-semibold text-lg">Bel Rafael</p><p class="text-stone-400">+31 6 274 544 16</p></div>
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
          <div class="bg-stone-900 rounded-2xl p-6 sm:p-8">
            <?= render_form('contact') ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: contact -->


<?php require_once __DIR__ . '/includes/footer.php'; ?>
