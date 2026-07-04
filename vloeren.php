<?php
require_once __DIR__ . '/includes/content.php';
require_once __DIR__ . '/includes/blog-engine.php';
require_once __DIR__ . '/includes/form-engine.php';
require_once __DIR__ . '/includes/service-fotos.php';

$pageTitle = page_content('vloeren', 'seo_title', 'Vloeren leggen Amersfoort — RWW Bouw | Tegels, PVC en vloerverwarming');
$metaDescription = page_content('vloeren', 'seo_description', 'Professioneel vloeren leggen in Amersfoort en omgeving. Tegels, PVC, laminaat, beton ciré en vloerverwarming. Vaste prijs na gratis inmeting.');
$htmlLang = 'nl';

require_once __DIR__ . '/includes/header.php';
?>


  <!-- SECTION: hero -->
  <section id="hero" class="relative min-h-screen flex items-center overflow-hidden">

    <!-- Achtergrond foto (volledig scherm) -->
    <div class="absolute inset-0">
      <img
        src="<?= e(page_content('vloeren', 'hero_image', '/images/uploads/vloeren/PHOTO-2026-04-09-09-05-23 7.jpg')) ?>"
        alt="Vloeren leggen door RWW Bouw"
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
            <?= e(page_content('vloeren', 'hero_eyebrow', 'Vloeren · Amersfoort')) ?>
          </span>

          <h1 class="font-display text-5xl sm:text-6xl xl:text-7xl text-white font-bold leading-tight mb-6">
            <?= page_content('vloeren', 'hero_titel', 'Vloer op maat —<br><em class="italic text-rww-red">van inmeting</em><br>tot oplevering.') ?>
          </h1>

          <p class="text-stone-300 text-lg leading-relaxed mb-10 max-w-lg">
            <?= e(page_content('vloeren', 'hero_subtitel', 'Tegels, PVC, laminaat of beton ciré — vakkundig gelegd door één team. We egaliseren, verwarmen en leveren strak op.')) ?>
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
            'label' => 'Gratis inmeting',
            'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><rect x="10" y="3" width="18" height="7" rx="1.5"/><line x1="10" y1="6.5" x2="3" y2="6.5"/><line x1="3" y1="3" x2="3" y2="29"/><line x1="10" y1="29" x2="3" y2="29"/><line x1="10" y1="13" x2="7" y2="13"/><line x1="10" y1="18" x2="5" y2="18"/><line x1="10" y1="23" x2="7" y2="23"/></svg>',
          ],
          [
            'label' => 'Vaste prijs,<br>geen meerwerk',
            'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><rect x="6" y="3" width="20" height="26" rx="2"/><line x1="10" y1="11" x2="22" y2="11"/><line x1="10" y1="16" x2="22" y2="16"/><line x1="10" y1="21" x2="16" y2="21"/><path d="M18 23l2 2 4-4"/></svg>',
          ],
          [
            'label' => 'Eigen vakmannen',
            'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><circle cx="11" cy="8" r="4"/><path d="M3 26a8 8 0 0116 0"/><circle cx="23" cy="9" r="3"/><path d="M27 26a6 6 0 00-8-5.6"/></svg>',
          ],
          [
            'label' => 'Tegelwerk<br>& PVC & laminaat',
            'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><rect x="3" y="3" width="12" height="12" rx="1.5"/><rect x="17" y="3" width="12" height="12" rx="1.5"/><rect x="3" y="17" width="12" height="12" rx="1.5"/><rect x="17" y="17" width="12" height="12" rx="1.5"/></svg>',
          ],
          [
            'label' => '5 jaar garantie',
            'icon'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#991B1B" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><path d="M16 3l3 8h9l-7 5 3 8-8-5-8 5 3-8-7-5h9z"/></svg>',
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
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Gratis inmeting</span>
          <h2 class="font-display text-4xl sm:text-5xl lg:text-6xl text-white font-bold leading-tight mt-4 mb-6">
            <?= page_content('vloeren', 'inmeting_titel', 'Eerst inmeten.<br><em class="italic text-rww-red">Dan</em> offerte.') ?>
          </h2>
          <p class="text-stone-300 text-lg leading-relaxed mb-8">
            <?= e(page_content('vloeren', 'inmeting_tekst', 'We komen bij u thuis, meten uw vloer op en bespreken welke afwerking het beste past bij uw situatie en budget. Pas dan sturen we een offerte.')) ?>
          </p>
          <div>
            <a href="offerte.php" class="inline-flex items-center gap-2 bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded-full text-base font-semibold transition-colors">
              Plan uw gratis inmeting
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
            <p class="text-stone-500 text-sm mt-3">Vrijblijvend · geen verplichting</p>
          </div>
        </div>

        <!-- Rechts: afbeelding -->
        <div class="fade-in">
          <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/10">
            <!-- Badge linksboven op de foto -->
            <div class="absolute top-4 left-4 z-10 bg-rww-red text-white text-xs font-bold uppercase tracking-widest px-3 py-1.5 rounded">
              Tegelwerk voorbeeld
            </div>
            <img
              src="<?= e(page_content('vloeren', 'inmeting_afbeelding', '/images/uploads/vloeren/PHOTO-2026-04-09-09-05-24.jpg')) ?>"
              alt="Tegelwerk voorbeeld door RWW Bouw"
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
          <?= e(page_content('vloeren', 'werkwijze_titel', 'Helder. Eerlijk. Zonder verrassingen.')) ?>
        </h2>
        <p class="text-rww-muted text-lg"><?= e(page_content('vloeren', 'werkwijze_intro_tekst', 'Van eerste contact tot uw nieuwe vloer — u weet precies wat u kunt verwachten.')) ?></p>
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
            'titel' => 'Gratis inmeting',
            'tekst' => 'We komen bij u thuis, meten uw vloer op en bespreken welke afwerking het beste past.',
            'pill'  => 'Vrijblijvend',
            'icon'  => '<svg viewBox="0 0 64 64" fill="none" stroke="#1C1917" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="52" height="52"><rect x="10" y="28" width="44" height="10" rx="2"/><line x1="18" y1="28" x2="18" y2="20"/><line x1="26" y1="28" x2="26" y2="17"/><line x1="34" y1="28" x2="34" y2="20"/><line x1="42" y1="28" x2="42" y2="17"/><line x1="10" y1="42" x2="54" y2="42"/></svg>',
          ],
          [
            'nr'    => '03',
            'titel' => 'Materiaaladvies',
            'tekst' => 'We bespreken samen welke vloer het beste past — tegels, PVC, laminaat of beton ciré.',
            'pill'  => 'Gratis advies',
            'icon'  => '<svg viewBox="0 0 64 64" fill="none" stroke="#1C1917" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="52" height="52"><rect x="8" y="8" width="48" height="36" rx="3"/><line x1="20" y1="44" x2="20" y2="56"/><line x1="44" y1="44" x2="44" y2="56"/><line x1="14" y1="56" x2="50" y2="56"/><rect x="16" y="16" width="14" height="20" rx="1"/><rect x="34" y="16" width="14" height="8" rx="1"/><rect x="34" y="28" width="14" height="8" rx="1"/></svg>',
          ],
          [
            'nr'    => '04',
            'titel' => 'Vaste offerte',
            'tekst' => 'U ontvangt een heldere offerte — vaste prijs, geen meerwerk achteraf.',
            'pill'  => 'Vaste prijs',
            'icon'  => '<svg viewBox="0 0 64 64" fill="none" stroke="#1C1917" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="52" height="52"><rect x="14" y="8" width="36" height="48" rx="3"/><line x1="22" y1="22" x2="42" y2="22"/><line x1="22" y1="30" x2="42" y2="30"/><line x1="22" y1="38" x2="32" y2="38"/><path d="M36 44l3 3 6-6"/></svg>',
          ],
          [
            'nr'    => '05',
            'titel' => 'Leggen & oplevering',
            'tekst' => 'Rafael en zijn team gaan aan de slag — netjes, op tijd, met 5 jaar garantie.',
            'pill'  => '5 jaar garantie',
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
  <?php $vloeren_fotos = get_service_fotos('vloeren'); ?>
  <?php if (!empty($vloeren_fotos)): ?>
  <section class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Ons werk</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-white mt-4 mb-6 font-bold">Onze vloeren</h2>
      </div>
      <div class="fade-in">
        <div class="slider-container" data-slider data-slider-focus>
          <div class="slider-track" data-slider-track>
            <?php foreach ($vloeren_fotos as $foto): ?>
            <div class="slider-slide">
              <div class="project-card rounded-lg overflow-hidden aspect-[4/3]">
                <img src="<?= e($foto['url']) ?>" alt="<?= e($foto['alt']) ?>" class="w-full h-full object-cover" loading="lazy">
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <?php if (count($vloeren_fotos) > 1): ?>
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
        <!-- <a href="" class="inline-flex items-center gap-2 border border-white/25 hover:border-white/60 text-white px-8 py-4 rounded-full text-base font-medium transition-colors">
          Bekijk alle projecten
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a> -->
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
            <?= page_content('vloeren', 'voorna_titel', 'Van kale ondergrond naar perfecte vloer —<br>zie het verschil zelf.') ?>
          </h2>
          <p class="text-rww-muted text-lg leading-relaxed mb-8">
            <?= e(page_content('vloeren', 'voorna_tekst', 'Elke vloer begint met een goede basis. We egaliseren, bereiden voor en leggen de definitieve vloer strak en waterpas neer.')) ?>
          </p>
          <ul class="space-y-3 mb-8 text-rww-text">
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-rww-red mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              <span>Ondergrond geëgaliseerd en vlak gemaakt</span>
            </li>
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-rww-red mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              <span>Eigen vakmannen — tegelzetters en vloerleggers</span>
            </li>
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-rww-red mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
              <span>Netjes opgeleverd — inclusief schoonmaak</span>
            </li>
          </ul>
        </div>

        <!-- Rechts: voor/na image toggle -->
        <div class="fade-in order-1 lg:order-2 flex justify-center">
          <div class="relative w-full max-w-lg">

            <!-- Foto frame -->
            <div class="relative rounded-2xl overflow-hidden shadow-2xl aspect-[4/3] bg-stone-200">
              <img id="vn-voor"
                src="<?= e(page_content('vloeren', 'voor_afbeelding', '/images/uploads/vloeren/PHOTO-2026-04-09-09-05-25 6.jpg')) ?>"
                alt="Vloer vóór leggen"
                class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500">
              <img id="vn-na"
                src="<?= e(page_content('vloeren', 'na_afbeelding', '/images/uploads/vloeren/PHOTO-2026-04-09-09-05-23 7.jpg')) ?>"
                alt="Vloer na leggen door RWW Bouw"
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
            <?= page_content('vloeren', 'diensten_titel', 'Alles door<br><em class="italic text-rww-red">één</em> team.') ?>
          </h2>
          <p class="text-stone-400 text-lg leading-relaxed mb-8">
            <?= e(page_content('vloeren', 'diensten_tekst', 'Van egalisatie en leidingwerk tot de definitieve vloer — u heeft één aanspreekpunt, één offerte, geen losse onderaannemers.')) ?>
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
              'titel' => 'Tegelwerk & patroonvloeren',
              'tekst' => 'Groot formaat tegels, visgraatpatroon, Spaans verband — alles mogelijk. Strak gevoegd en perfect waterpas gelegd.',
              'icon'  => '<svg viewBox="0 0 40 40" fill="none" stroke="#991B1B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><rect x="4" y="4" width="14" height="14" rx="1.5"/><rect x="22" y="4" width="14" height="14" rx="1.5"/><rect x="4" y="22" width="14" height="14" rx="1.5"/><rect x="22" y="22" width="14" height="14" rx="1.5"/></svg>',
            ],
            [
              'titel' => 'PVC en laminaat',
              'tekst' => 'Kwaliteits-PVC en laminaat vakkundig gelegd — snel, clean en betaalbaar. Ook op niet-vlakke ondergronden.',
              'icon'  => '<svg viewBox="0 0 40 40" fill="none" stroke="#991B1B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><rect x="4" y="10" width="32" height="6" rx="1.5"/><rect x="4" y="20" width="32" height="6" rx="1.5"/><rect x="4" y="30" width="32" height="6" rx="1.5"/><line x1="16" y1="10" x2="16" y2="16"/><line x1="28" y1="20" x2="28" y2="26"/></svg>',
            ],
            [
              'titel' => 'Vloerverwarming',
              'tekst' => 'Elektrische of water-gedragen vloerverwarming, inclusief egalisatie en aansluiting. Warm comfort onder uw voeten.',
              'icon'  => '<svg viewBox="0 0 40 40" fill="none" stroke="#991B1B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><path d="M8 32h24M8 32V12a4 4 0 018 0v12a4 4 0 008 0V12a4 4 0 018 0v20"/><path d="M14 36h12"/></svg>',
            ],
            [
              'titel' => 'Egalisatie & ondergrond',
              'tekst' => 'Een vlakke ondergrond is de basis van een mooie vloer. We egaliseren, grunderen en bereiden alles voor.',
              'icon'  => '<svg viewBox="0 0 40 40" fill="none" stroke="#991B1B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="28" height="28"><line x1="4" y1="28" x2="36" y2="28"/><path d="M8 28V18l6-8h12l6 8v10"/><line x1="4" y1="34" x2="36" y2="34"/></svg>',
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
      'vraag'    => 'Welke soorten vloeren leggen jullie?',
      'antwoord' => 'We leggen tegels, PVC, laminaat en beton ciré. Ook egaliseren we de ondervloer als dat nodig is. Voor zandcement vloeren werken we met een gespecialiseerd bedrijf.',
    ],
    [
      'vraag'    => 'Doen jullie ook vloerverwarming?',
      'antwoord' => 'Ja. Elektrische vloerverwarming leggen we zelf, zowel de droge als de natte variant met buisjes. Vloerverwarming op water wordt uitgevoerd door onze vaste loodgieter.',
    ],
    [
      'vraag'    => 'Is er een minimale hoeveelheid m2 die jullie leggen?',
      'antwoord' => 'Nee. We leggen ook 1 m2 als dat nodig is. We werken op basis van een prijs per project, niet per m2. Hoe meer meters, hoe voordeliger het per m2 uitvalt — maar een minimumafname is er niet.',
    ],
    [
      'vraag'    => 'Moet ik zelf de tegels aanschaffen?',
      'antwoord' => 'Ja, de tegels regelt u zelf. Wij zorgen voor het leggen, egaliseren en afwerken. Heeft u hulp nodig bij de keuze? Dan denken we graag mee.',
    ],
    [
      'vraag'    => 'Egaliseren jullie de vloer ook als die niet vlak is?',
      'antwoord' => 'Ja, egaliseren doen we zelf. Dat is altijd de eerste stap voordat er een vloer gelegd wordt, zodat het eindresultaat perfect vlak is.',
    ],
    [
      'vraag'    => 'Hoeveel garantie krijg ik op het tegelwerk of de vloer?',
      'antwoord' => 'U krijgt 5 jaar garantie op alle uitgevoerde werkzaamheden. Dat geldt ook voor het tegelwerk en de vloerlegwerkzaamheden.',
    ],
  ];
  ?>
  <section class="py-20 md:py-28 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Veelgestelde vragen</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">Vragen over vloeren</h2>
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
