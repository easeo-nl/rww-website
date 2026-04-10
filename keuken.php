<?php
require_once __DIR__ . '/includes/content.php';
require_once __DIR__ . '/includes/blog-engine.php';
require_once __DIR__ . '/includes/form-engine.php';

$pageTitle = page_content('keuken', 'seo_title', 'Keukenrenovatie in Amersfoort | RWW Bouw');
$metaDescription = page_content('keuken', 'seo_description', 'Complete keukenrenovatie door RWW Bouw. Van opmeting tot oplevering. Bel voor een gratis adviesgesprek.');
$htmlLang = 'nl';

require_once __DIR__ . '/includes/header.php';
?>


  <!-- SECTION: hero -->
  <section id="hero" class="relative min-h-screen flex items-center">
    <div class="absolute inset-0">
      <img src="<?= e(page_content('keuken', 'hero_image', '/images/uploads/20230329_151355.jpg')) ?>" alt="Keukenrenovatie door RWW Bouw" class="w-full h-full object-cover">
      <div class="hero-overlay absolute inset-0"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
      <div class="max-w-2xl">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Keukenrenovatie</span>
        <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl text-white font-bold leading-tight mt-4 mb-6">
          <?= page_content('keuken', 'hero_titel', 'Nieuwe keuken laten plaatsen?') ?>
        </h1>
        <p class="text-stone-300 text-lg sm:text-xl mb-8 leading-relaxed">
          <?= e(page_content('keuken', 'hero_subtitel', 'Agnieszka tekent uw keuken op maat. Raphaël en zijn team plaatsen hem precies zoals gepland. Maatwerk kasten, tegelwerk, elektra en loodgieterwerk — alles door één team.')) ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
          <a href="#contact" class="bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded text-lg font-semibold transition-colors text-center">
            Offerte aanvragen
          </a>
          <a href="tel:<?= e(site('company.phone')) ?>" class="border-2 border-white/30 hover:border-white/60 text-white px-8 py-4 rounded text-lg font-medium transition-colors text-center">
            <svg class="w-5 h-5 inline mr-2 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            Bel direct: 06 160 357 54
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


  <!-- SECTION: diensten -->
  <section id="diensten" class="py-20 md:py-28 bg-rww-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Wat wij doen</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">
          Complete keukenrenovatie
        </h2>
        <p class="text-rww-muted text-lg">Eén team voor het hele traject — van maatwerk kasten en werkblad tot elektra en loodgieterwerk.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">
        <?php
        $diensten = [
          [
            'titel' => 'Keukenplaatsing',
            'tekst' => 'Complete keuken monteren en installeren. Van maatwerk kastjes en werkblad tot inbouwapparatuur — strak en op maat.',
            'img'   => '/images/uploads/96.jpg',
            'alt'   => 'Keukenplaatsing door RWW Bouw',
          ],
          [
            'titel' => 'Elektra & loodgieterwerk',
            'tekst' => 'Alle aansluitingen voor apparatuur, water en afvoer. Geen losse onderaannemers — één team regelt alles van A tot Z.',
            'img'   => '/images/uploads/20230329_151355.jpg',
            'alt'   => 'Elektra en loodgieterwerk keuken',
          ],
          [
            'titel' => 'Maatwerk kasten',
            'tekst' => 'Op maat gemaakte keukenkastjes en werkblad die precies passen in uw ruimte. Agnieszka adviseert over indeling, materiaal en kleur.',
            'img'   => '/images/uploads/69.jpg',
            'alt'   => 'Maatwerk keukenkastjes',
          ],
        ];
        foreach ($diensten as $d): ?>
        <div class="project-card group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
          <div class="aspect-[4/3] overflow-hidden">
            <img src="<?= e($d['img']) ?>" alt="<?= e($d['alt']) ?>" class="w-full h-full object-cover" loading="lazy">
          </div>
          <div class="p-6">
            <h3 class="font-display text-xl text-rww-dark font-semibold mb-2"><?= e($d['titel']) ?></h3>
            <p class="text-rww-muted text-sm leading-relaxed"><?= e($d['tekst']) ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- /SECTION: diensten -->


  <!-- SECTION: werkwijze -->
  <section id="werkwijze" class="py-20 md:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Onze werkwijze</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">
          Zo werken wij
        </h2>
      </div>

      <div class="werkwijze-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 fade-in">

        <?php
        $stappen = [
          [
            'nr'    => '1',
            'img'   => '/images/uploads/53.jpg',
            'titel' => 'Kennismaking & Wensen',
            'items' => [
              'We bespreken jouw wensen, stijl en budget',
              'We bekijken de ruimte en mogelijkheden',
              'Je deelt inspiratie en ideeën',
            ],
            'cta'   => 'Samen leggen we de basis voor jouw ideale keuken',
          ],
          [
            'nr'    => '2',
            'img'   => '/images/uploads/66.jpg',
            'titel' => 'Ontwerp & 3D Visualisatie',
            'items' => [
              'We maken een persoonlijk keukenontwerp',
              'Je ziet jouw keuken in een realistische 3D weergave',
              'Aanpassingen worden verwerkt tot het perfect is',
            ],
            'cta'   => 'Zo weet je precies hoe jouw keuken eruit komt te zien',
          ],
          [
            'nr'    => '3',
            'img'   => '/images/uploads/69.jpg',
            'titel' => 'Productie & Voorbereiding',
            'items' => [
              'Materialen worden besteld en op maat gemaakt',
              'We plannen de plaatsing',
              'Eventuele voorbereidingen worden gedaan',
            ],
            'cta'   => 'Hier wordt jouw keuken écht werkelijkheid',
          ],
          [
            'nr'    => '4',
            'img'   => '/images/uploads/60.jpg',
            'titel' => 'Levering & Installatie',
            'items' => [
              'De keuken wordt geleverd en geplaatst',
              'Alles wordt netjes afgewerkt',
              'We leveren jouw keuken volledig op',
            ],
            'cta'   => 'Binnen enkele dagen geniet je van jouw nieuwe keuken',
          ],
        ];
        foreach ($stappen as $stap): ?>
        <div class="werkwijze-card">
          <div class="aspect-[4/3] rounded-lg overflow-hidden mb-6">
            <img src="<?= e($stap['img']) ?>" alt="Stap <?= $stap['nr'] ?>: <?= e($stap['titel']) ?>" class="w-full h-full object-cover" loading="lazy">
          </div>
          <div class="flex items-center gap-3 mb-3">
            <span class="bg-stone-700 text-white font-display text-sm font-bold px-3 py-1 rounded"><?= $stap['nr'] ?></span>
            <h3 class="font-display text-xl text-rww-dark font-semibold"><?= e($stap['titel']) ?></h3>
          </div>
          <ul class="space-y-1 mb-4">
            <?php foreach ($stap['items'] as $item): ?>
            <li class="flex items-start gap-2 text-rww-muted text-sm leading-relaxed">
              <span class="text-rww-red mt-1">&#8226;</span>
              <span><?= e($item) ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
          <p class="text-rww-dark text-sm font-medium italic">👉 <?= e($stap['cta']) ?></p>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>
  <!-- /SECTION: werkwijze -->


  <!-- SECTION: projecten -->
  <?php
  $keuken_fotos = array_filter(
      get_published_posts(),
      fn($p) => ($p['categorie'] ?? '') === 'projecten' && ($p['groep'] ?? '') === 'keuken'
  );
  usort($keuken_fotos, fn($a, $b) => strcmp($b['datum'] ?? '', $a['datum'] ?? ''));
  $keuken_fotos = array_values($keuken_fotos);
  ?>
  <?php if (!empty($keuken_fotos)): ?>
  <section class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Ons werk</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-white mt-4 mb-6 font-bold">Onze keukens</h2>
      </div>
      <div class="fade-in">
        <div class="slider-container" data-slider>
          <div class="slider-track" data-slider-track>
            <?php foreach ($keuken_fotos as $project): ?>
            <div class="slider-slide">
              <div class="project-card group relative rounded-lg overflow-hidden aspect-[4/3]">
                <img src="<?= e($project['afbeelding'] ?? '') ?>" alt="<?= e($project['titel'] ?? '') ?>" class="w-full h-full object-cover" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                  <div class="absolute bottom-0 left-0 right-0 p-5">
                    <h4 class="text-white font-display text-lg font-semibold"><?= e($project['titel'] ?? '') ?></h4>
                    <p class="text-stone-300 text-sm"><?= e($project['samenvatting'] ?? '') ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <?php if (count($keuken_fotos) > 1): ?>
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
    </div>
  </section>
  <?php endif; ?>
  <!-- /SECTION: projecten -->


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
            Plan een inmeting voor uw keuken
          </h2>
          <p class="text-stone-400 text-lg leading-relaxed mb-8">Vertel ons over uw keuken. We nemen snel contact met u op voor een vrijblijvende inmeting en offerte.</p>

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
              <div><p class="font-semibold text-lg">Bel Raphaël</p><p class="text-stone-400">06 274 544 16</p></div>
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
