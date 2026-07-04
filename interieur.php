<?php
require_once __DIR__ . '/includes/content.php';
require_once __DIR__ . '/includes/blog-engine.php';
require_once __DIR__ . '/includes/form-engine.php';
require_once __DIR__ . '/includes/service-fotos.php';

$pageTitle = page_content('interieur', 'seo_title', 'Interieurontwerp Amersfoort — Agnieszka van RWW Bouw | 3D-visualisatie');
$metaDescription = page_content('interieur', 'seo_description', 'Professioneel interieurontwerp in Amersfoort. Agnieszka maakt 3D-visualisaties van uw badkamer, keuken of woonkamer. Gratis bij uitvoering door RWW Bouw.');
$htmlLang = 'nl';

require_once __DIR__ . '/includes/header.php';
?>


  <!-- SECTION: hero -->
  <section id="hero" class="relative min-h-screen flex items-center overflow-hidden">

    <!-- Achtergrond foto (volledig scherm) -->
    <div class="absolute inset-0">
      <img
        src="<?= e(page_content('interieur', 'hero_image', '/images/uploads/tekeningen/PHOTO-2026-04-09-09-05-22 4.jpg')) ?>"
        alt="Interieurontwerp door Agnieszka van RWW Bouw"
        class="w-full h-full object-cover object-center">
      <!-- Directionele gradient: donker links (tekst) → transparant rechts (foto zichtbaar) -->
      <div class="absolute inset-0" style="background: linear-gradient(100deg, #1C1917 0%, rgba(28,25,23,0.93) 28%, rgba(28,25,23,0.6) 52%, rgba(28,25,23,0.15) 75%, transparent 100%)"></div>
      <!-- Lichte vloer-gradient voor sfeer -->
      <div class="absolute bottom-0 inset-x-0 h-40" style="background: linear-gradient(to top, rgba(28,25,23,0.55), transparent)"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 w-full">
      <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14 xl:px-20 py-36 lg:py-44">
        <div class="max-w-xl lg:max-w-2xl">

          <span class="inline-flex items-center gap-3 text-rww-red font-semibold text-sm uppercase tracking-widest mb-6">
            <span class="w-8 h-px bg-rww-red inline-block"></span>
            <?= e(page_content('interieur', 'hero_eyebrow', 'Interieurontwerp · Amersfoort')) ?>
          </span>

          <h1 class="font-display text-5xl sm:text-6xl xl:text-7xl text-white font-bold leading-tight mb-6">
            <?= page_content('interieur', 'hero_titel', 'Uw ruimte in 3D —<br><em class="italic text-rww-red">voordat er</em><br>ook maar één tegel ligt.') ?>
          </h1>

          <p class="text-stone-300 text-lg leading-relaxed mb-10 max-w-lg">
            <?= e(page_content('interieur', 'hero_subtitel', 'Agnieszka is binnenhuisarchitect en ontwerpt uw badkamer, keuken of woonkamer tot op de centimeter. U ziet het resultaat in 3D voordat Rafael en zijn team beginnen.')) ?>
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
          [
            'label' => 'Gratis 3D-visualisatie',
            'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><rect x="3" y="4" width="26" height="19" rx="2"/><line x1="10" y1="23" x2="10" y2="29"/><line x1="22" y1="23" x2="22" y2="29"/><line x1="6" y1="29" x2="26" y2="29"/><rect x="7" y="8" width="8" height="11" rx="1"/><rect x="17" y="8" width="8" height="4" rx="1"/><rect x="17" y="15" width="8" height="4" rx="1"/></svg>',
          ],
          [
            'label' => 'Kleur- en<br>materiaaladvies',
            'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><circle cx="16" cy="16" r="12"/><path d="M16 4a12 12 0 000 24"/><path d="M4 16h24"/><circle cx="10" cy="10" r="2" fill="#991B1B" stroke="none"/><circle cx="22" cy="10" r="2" fill="#991B1B" stroke="none"/><circle cx="10" cy="22" r="2" fill="#991B1B" stroke="none"/><circle cx="22" cy="22" r="2" fill="#991B1B" stroke="none"/></svg>',
          ],
          [
            'label' => 'Binnenhuisarchitect',
            'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><path d="M16 3l13 9v17H3V12z"/><rect x="12" y="18" width="8" height="11" rx="1"/><path d="M10 12h12v6H10z"/></svg>',
          ],
          [
            'label' => 'Badkamer, keuken<br>&amp; woonkamer',
            'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><rect x="3" y="3" width="12" height="12" rx="1.5"/><rect x="17" y="3" width="12" height="12" rx="1.5"/><rect x="3" y="17" width="12" height="12" rx="1.5"/><rect x="17" y="17" width="12" height="12" rx="1.5"/></svg>',
          ],
          [
            'label' => 'Ontwerp bij<br>uitvoering gratis',
            'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><circle cx="16" cy="16" r="12"/><path d="M10 16l4 4 8-8"/></svg>',
          ],
          [
            'label' => 'Amersfoort<br>en omgeving',
            'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><path d="M16 3a9 9 0 019 9c0 7-9 17-9 17S7 19 7 12a9 9 0 019-9z"/><circle cx="16" cy="12" r="3"/></svg>',
          ],
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

  <!-- SECTION: highlight -->
  <section class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

        <!-- Links: tekst -->
        <div class="fade-in">
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Fotorealistische 3D-visualisatie</span>
          <h2 class="font-display text-4xl sm:text-5xl lg:text-6xl text-white font-bold leading-tight mt-4 mb-6">
            <?= page_content('interieur', 'visualisatie_titel', 'Drie opties.<br><em class="italic text-rww-red">U</em> kiest.') ?>
          </h2>
          <p class="text-stone-300 text-lg leading-relaxed mb-8">
            <?= e(page_content('interieur', 'visualisatie_tekst', 'Voor een badkamer of keuken maakt Agnieszka soms wel drie verschillende visualisaties — drie mogelijkheden met verschillende materialen en indelingen — zodat u kunt kiezen wat het beste bij u past.')) ?>
          </p>
          <div>
            <a href="offerte.php" class="inline-flex items-center gap-2 bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded-full text-base font-semibold transition-colors">
              Plan uw gratis 3D-advies
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
            <p class="text-stone-500 text-sm mt-3">Vrijblijvend · geen verplichting</p>
          </div>
        </div>

        <!-- Rechts: visualisatie afbeelding -->
        <div class="fade-in">
          <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/10">
            <!-- Badge linksboven op de foto -->
            <div class="absolute top-4 left-4 z-10 bg-rww-red text-white text-xs font-bold uppercase tracking-widest px-3 py-1.5 rounded">
              Voorbeeld visualisatie
            </div>
            <img
              src="<?= e(page_content('interieur', 'visualisatie_afbeelding', '/images/uploads/tekeningen/PHOTO-2026-04-09-09-05-19 8.jpg')) ?>"
              alt="3D-visualisatie interieurontwerp door Agnieszka van RWW Bouw"
              class="w-full aspect-[4/3] object-cover object-top"
              loading="lazy">
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- /SECTION: highlight -->


  <!-- SECTION: werkwijze -->
  <section id="werkwijze" class="py-20 md:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Onze werkwijze</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">
          <?= e(page_content('interieur', 'werkwijze_titel', 'Helder. Eerlijk. Zonder verrassingen.')) ?>
        </h2>
        <p class="text-rww-muted text-lg"><?= e(page_content('interieur', 'werkwijze_intro_tekst', 'Van eerste contact tot uw ontworpen ruimte — u weet precies wat u kunt verwachten.')) ?></p>
      </div>

      <div class="zwh-grid fade-in">
        <?php
        $stappen = [
          [
            'nr'    => '01',
            'titel' => 'Contact opnemen',
            'tekst' => 'Bel, app of mail — we reageren altijd binnen één werkdag.',
            'pill'  => 'Gratis',
            'icon'  => '<svg viewBox="0 0 64 64" fill="none" stroke="#1C1917" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="52" height="52"><path d="M10 10h15l5 12-6 4c3 6 9 12 15 15l4-6 12 5v15a5 5 0 01-5 5C19 59 5 41 5 15a5 5 0 015-5z"/></svg>',
          ],
          [
            'nr'    => '02',
            'titel' => 'Wensen inventariseren',
            'tekst' => 'We bespreken uw wensen, stijlvoorkeur en budget. Agnieszka luistert en stelt de juiste vragen.',
            'pill'  => 'Vrijblijvend',
            'icon'  => '<svg viewBox="0 0 64 64" fill="none" stroke="#1C1917" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="52" height="52"><path d="M32 10c-12 0-22 8-22 18 0 5 2.5 9.5 6.5 12.5L14 54l14-7c1.3.2 2.6.3 4 .3 12 0 22-8 22-18s-10-19-22-19z"/><line x1="22" y1="28" x2="42" y2="28"/><line x1="22" y1="22" x2="36" y2="22"/></svg>',
          ],
          [
            'nr'    => '03',
            'titel' => 'Opmeten en ontwerpen',
            'tekst' => 'Agnieszka meet uw ruimte op en maakt een eerste ontwerp.',
            'pill'  => 'Gratis',
            'icon'  => '<svg viewBox="0 0 64 64" fill="none" stroke="#1C1917" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="52" height="52"><rect x="10" y="28" width="44" height="10" rx="2"/><line x1="18" y1="28" x2="18" y2="20"/><line x1="26" y1="28" x2="26" y2="17"/><line x1="34" y1="28" x2="34" y2="20"/><line x1="42" y1="28" x2="42" y2="17"/><line x1="10" y1="42" x2="54" y2="42"/></svg>',
          ],
          [
            'nr'    => '04',
            'titel' => '3D-visualisatie',
            'tekst' => 'U ontvangt een fotorealistisch 3D-beeld — u ziet precies hoe het eruit komt te zien. Aanpassingen zijn mogelijk.',
            'pill'  => 'Gratis ontwerp',
            'icon'  => '<svg viewBox="0 0 64 64" fill="none" stroke="#1C1917" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="52" height="52"><rect x="8" y="8" width="48" height="36" rx="3"/><line x1="20" y1="44" x2="20" y2="56"/><line x1="44" y1="44" x2="44" y2="56"/><line x1="14" y1="56" x2="50" y2="56"/><rect x="16" y="16" width="14" height="20" rx="1"/><rect x="34" y="16" width="14" height="8" rx="1"/><rect x="34" y="28" width="14" height="8" rx="1"/></svg>',
          ],
          [
            'nr'    => '05',
            'titel' => 'Uitvoering door RWW Bouw',
            'tekst' => 'Als u kiest voor uitvoering door ons team, zijn het ontwerp en alle visualisaties gratis.',
            'pill'  => 'Ontwerp gratis bij uitvoering',
            'icon'  => '<svg viewBox="0 0 64 64" fill="none" stroke="#1C1917" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="52" height="52"><path d="M32 10l5 14h15l-12 9 5 14-13-9-13 9 5-14-12-9h15z"/></svg>',
          ],
        ];
        foreach ($stappen as $stap): ?>
        <div class="zwh-item">
          <div class="zwh-circle">
            <?= $stap['icon'] ?>
            <span class="zwh-badge"><?= $stap['nr'] ?></span>
          </div>
          <div class="zwh-item-text mt-5">
            <h3 class="font-display text-lg text-rww-dark font-semibold mb-1"><?= e($stap['titel']) ?></h3>
            <p class="text-rww-muted text-sm leading-relaxed"><?= e($stap['tekst']) ?></p>
            <span class="zwh-pill"><?= e($stap['pill']) ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="text-center mt-14 fade-in">
        <a href="offerte.php" class="inline-flex items-center gap-2 bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded-full text-base font-semibold transition-colors">
          Offerte aanvragen
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>
    </div>
  </section>
  <!-- /SECTION: werkwijze -->


   <!-- SECTION: projecten -->
  <?php $interieur_fotos = get_service_fotos('interieur'); ?>
  <?php if (!empty($interieur_fotos)): ?>
  <section class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Ons werk</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-white mt-4 mb-6 font-bold">Onze ontwerpen</h2>
      </div>
      <div class="fade-in">
        <div class="slider-container" data-slider data-slider-focus>
          <div class="slider-track" data-slider-track>
            <?php foreach ($interieur_fotos as $foto): ?>
            <div class="slider-slide">
              <div class="project-card rounded-lg overflow-hidden aspect-[4/3]">
                <img src="<?= e($foto['url']) ?>" alt="<?= e($foto['alt']) ?>" class="w-full h-full object-cover" loading="lazy">
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <?php if (count($interieur_fotos) > 1): ?>
          <div class="slider-controls flex items-center justify-center gap-4 mt-6">
            <button class="slider-btn-prev" aria-label="Vorige">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <div class="slider-dots" data-slider-dots></div>
            <button class="slider-btn-next" aria-label="Volgende">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="text-center mt-12 fade-in">
        <!-- Placeholder for future "bekijk alle projecten" link -->
      </div>
    </div>
  </section>
  <?php endif; ?>
  <!-- /SECTION: projecten -->


    <!-- SECTION: voor-na -->
  <section class="py-20 md:py-28 bg-rww-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

        <!-- Links: tekst -->
        <div class="fade-in order-2 lg:order-1">
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Transformatie</span>
          <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark font-bold leading-tight mt-4 mb-6">
            <?= page_content('interieur', 'voorna_titel', 'Van leeg schetsboek naar uw droomruimte —<br>zie het verschil zelf.') ?>
          </h2>
          <p class="text-rww-muted text-lg leading-relaxed mb-8">
            <?= e(page_content('interieur', 'voorna_tekst', 'Het begint met een gesprek en een meting. Het eindigt met een ruimte die precies zo is geworden als de 3D-visualisatie beloofde. Geen verrassingen, geen teleurstellingen.')) ?>
          </p>
          <ul class="space-y-3 mb-8 text-rww-text">
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-rww-red mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              <span>Fotorealistisch 3D-ontwerp — u ziet het van tevoren</span>
            </li>
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-rww-red mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              <span>Agnieszka begeleidt het hele bouwproces</span>
            </li>
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-rww-red mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              <span>Ontwerp gratis als RWW Bouw ook uitvoert</span>
            </li>
          </ul>
        </div>

        <!-- Rechts: voor/na image toggle -->
        <div class="fade-in order-1 lg:order-2 flex justify-center">
          <div class="relative w-full max-w-lg">

            <!-- Foto frame -->
            <div class="relative rounded-2xl overflow-hidden shadow-2xl aspect-[4/3] bg-stone-200">
              <img id="vn-voor"
                src="<?= e(page_content('interieur', 'voor_afbeelding', '/images/uploads/tekeningen/PHOTO-2026-04-09-09-05-19 5.jpg')) ?>"
                alt="Interieurontwerp schets vóór uitvoering"
                class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500">
              <img id="vn-na"
                src="<?= e(page_content('interieur', 'na_afbeelding', '/images/uploads/woonkamer/PHOTO-2026-04-09-08-37-35 2.jpg')) ?>"
                alt="Interieur na uitvoering door RWW Bouw"
                class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0">
            </div>

            <!-- Toggle pill -->
            <div class="absolute -bottom-5 left-1/2 -translate-x-1/2">
              <div class="relative flex items-center bg-white rounded-full shadow-xl p-1">
                <div id="vn-indicator" class="absolute top-1 left-1 w-28 h-8 rounded-full bg-rww-red transition-transform duration-300 ease-in-out"></div>
                <button id="vn-btn-voor" class="relative z-10 w-28 h-8 text-sm font-semibold rounded-full" style="color:#ffffff">Voor</button>
                <button id="vn-btn-na"   class="relative z-10 w-28 h-8 text-sm font-semibold rounded-full" style="color:#78716C">Na</button>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <script>
  (function () {
    var state   = 'voor';
    var imgVoor = document.getElementById('vn-voor');
    var imgNa   = document.getElementById('vn-na');
    var ind     = document.getElementById('vn-indicator');
    var btnVoor = document.getElementById('vn-btn-voor');
    var btnNa   = document.getElementById('vn-btn-na');

    function vnSwitch(to) {
      if (to === state) return;
      state = to;
      if (to === 'na') {
        imgVoor.classList.add('opacity-0');
        imgNa.classList.remove('opacity-0');
        ind.style.transform = 'translateX(7rem)';
        btnVoor.style.color = '#78716C';
        btnNa.style.color   = '#ffffff';
      } else {
        imgNa.classList.add('opacity-0');
        imgVoor.classList.remove('opacity-0');
        ind.style.transform = 'translateX(0)';
        btnVoor.style.color = '#ffffff';
        btnNa.style.color   = '#78716C';
      }
    }

    btnVoor.addEventListener('click', function () { vnSwitch('voor'); });
    btnNa.addEventListener('click',   function () { vnSwitch('na'); });
  })();
  </script>
  <!-- /SECTION: voor-na -->


  <!-- SECTION: diensten -->
  <section id="diensten" class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

        <!-- Links: tekst -->
        <div class="fade-in lg:sticky lg:top-28">
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Wat wij doen</span>
          <h2 class="font-display text-4xl sm:text-5xl lg:text-6xl text-white font-bold leading-tight mt-4 mb-6">
            <?= page_content('interieur', 'diensten_titel', 'Alles door<br><em class="italic text-rww-red">één</em> team.') ?>
          </h2>
          <p class="text-stone-400 text-lg leading-relaxed mb-8">
            <?= e(page_content('interieur', 'diensten_tekst', 'Van eerste schets tot opgeleverde ruimte — u heeft één ontwerper en één uitvoeringsteam. Geen losse onderaannemers, geen miscommunicatie.')) ?>
          </p>
          <a href="offerte.php" class="inline-flex items-center gap-2 bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded-full text-base font-semibold transition-colors">
            Offerte aanvragen
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <p class="text-stone-600 text-sm mt-3">Vrijblijvend · binnen één werkdag reactie</p>
        </div>

        <!-- Rechts: service-items -->
        <div class="fade-in divide-y divide-white/10">
          <?php
          $diensten = [
            [
              'titel' => '3D-visualisatie en ontwerp',
              'tekst' => 'Een fotorealistisch 3D-beeld van uw toekomstige ruimte. U ziet de indeling, materialen en kleuren precies zoals het wordt — geen verrassingen.',
              'icon'  => '<svg viewBox="0 0 40 40" fill="none" stroke="#991B1B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><rect x="3" y="5" width="34" height="24" rx="2"/><line x1="12" y1="29" x2="12" y2="36"/><line x1="28" y1="29" x2="28" y2="36"/><line x1="7" y1="36" x2="33" y2="36"/><rect x="7" y="9" width="10" height="15" rx="1"/><rect x="21" y="9" width="10" height="6" rx="1"/><rect x="21" y="18" width="10" height="6" rx="1"/></svg>',
            ],
            [
              'titel' => 'Materiaal- en kleuradvies',
              'tekst' => 'Welke tegels passen bij uw stijl? Welke kleur muur versterkt de ruimte? Agnieszka adviseert op basis van uw wensen en de mogelijkheden.',
              'icon'  => '<svg viewBox="0 0 40 40" fill="none" stroke="#991B1B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><circle cx="20" cy="20" r="14"/><circle cx="13" cy="14" r="3" fill="#991B1B" stroke="none"/><circle cx="27" cy="14" r="3" fill="#991B1B" stroke="none"/><circle cx="13" cy="26" r="3" fill="#991B1B" stroke="none"/><circle cx="27" cy="26" r="3" fill="#991B1B" stroke="none"/><circle cx="20" cy="20" r="3" fill="#991B1B" stroke="none"/></svg>',
            ],
            [
              'titel' => 'Van tekening naar werkelijkheid',
              'tekst' => 'Het ontwerp wordt uitgevoerd door hetzelfde team. De ontwerper begeleidt het bouwproces — zo wordt het precies zoals gepland.',
              'icon'  => '<svg viewBox="0 0 40 40" fill="none" stroke="#991B1B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><path d="M8 32L28 12M22 6l8 8-4 4-8-8zM8 32l4-4-4-4-4 4z"/><path d="M30 10l2-2a2 2 0 00-3-3l-2 2"/></svg>',
            ],
            [
              'titel' => 'Projectbegeleiding',
              'tekst' => 'Agnieszka is aanwezig bij de opstart en controleert tussentijds of alles klopt met het ontwerp. U hoeft niets bij te houden.',
              'icon'  => '<svg viewBox="0 0 40 40" fill="none" stroke="#991B1B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><circle cx="20" cy="20" r="15"/><path d="M13 20l5 5 9-10"/></svg>',
            ],
          ];
          foreach ($diensten as $d): ?>
          <div class="py-8 flex gap-5 items-start group">
            <div class="w-12 h-12 flex-shrink-0 rounded-xl bg-rww-red/10 group-hover:bg-rww-red/20 transition-colors flex items-center justify-center">
              <?= $d['icon'] ?>
            </div>
            <div>
              <h3 class="font-display text-xl text-white font-semibold mb-2"><?= e($d['titel']) ?></h3>
              <p class="text-stone-400 text-sm leading-relaxed"><?= e($d['tekst']) ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </section>
  <!-- /SECTION: diensten -->


  <!-- SECTION: faq -->
  <?php
  $faq_items = [
    [
      'vraag'    => 'Wat doet Agnieszka precies als binnenhuisarchitect?',
      'antwoord' => 'Agnieszka combineert haar oog voor design met technische kennis van wat uitvoerbaar is. Ze meet op, adviseert over indeling, materialen en kleuren, en maakt 3D visualisaties zodat u het resultaat ziet voordat er ook maar één tegel ligt.',
    ],
    [
      'vraag'    => 'Hoeveel visualisaties maken jullie?',
      'antwoord' => 'Voor een badkamer of keuken maken we soms wel drie verschillende visualisaties — drie mogelijkheden — zodat u kunt kiezen wat het beste bij u past.',
    ],
    [
      'vraag'    => 'Wat kost een ontwerp en visualisatie?',
      'antwoord' => 'Als wij ook de werkzaamheden uitvoeren, betaalt u niets voor het ontwerp en de visualisaties. De kosten zijn inbegrepen bij het project.',
    ],
    [
      'vraag'    => 'Maken jullie ook ontwerpen voor projecten die jullie niet zelf uitvoeren?',
      'antwoord' => 'In principe richten we ons op projecten die we ook zelf uitvoeren. Zo kunnen we garanderen dat het ontwerp en de uitvoering op elkaar aansluiten.',
    ],
    [
      'vraag'    => 'Hoe lang duurt het ontwerp- en visualisatieproces?',
      'antwoord' => 'Dat hangt af van de omvang en het aantal aanpassingsrondes. We nemen de tijd die nodig is om het goed te doen — u beslist pas als u tevreden bent met het ontwerp.',
    ],
    [
      'vraag'    => 'Kan Agnieszka ook adviseren over materialen en kleuren?',
      'antwoord' => 'Absoluut. Kleur- en materiaaladvies is een belangrijk onderdeel van haar werk. Ze adviseert op basis van uw smaak, de ruimte en wat technisch haalbaar is.',
    ],
  ];
  ?>
  <section class="py-20 md:py-28 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Veelgestelde vragen</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">Vragen over interieurontwerp</h2>
      </div>
      <div class="space-y-4 fade-in">
        <?php foreach ($faq_items as $faq): ?>
        <details class="group bg-rww-light rounded-lg">
          <summary class="flex items-center justify-between p-6 cursor-pointer font-semibold text-rww-dark">
            <?= e($faq['vraag']) ?>
            <svg class="w-5 h-5 text-rww-muted group-open:rotate-180 transition-transform flex-shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </summary>
          <div class="px-6 pb-6 text-rww-muted leading-relaxed">
            <?= e($faq['antwoord']) ?>
          </div>
        </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- /SECTION: faq -->


  <!-- SECTION: reviews -->
  <section class="py-20 md:py-28 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Reviews</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 font-bold">Klanten aan het woord</h2>
      </div>
      <script defer async src='https://cdn.trustindex.io/loader.js?08389c960054733e4b062cdded1'></script>
      <!-- Pijltjes onderaan, zelfde stijl als "Ons werk" -->
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


<?php require_once __DIR__ . '/includes/footer.php'; ?>
