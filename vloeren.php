<?php
require_once __DIR__ . '/includes/content.php';
require_once __DIR__ . '/includes/blog-engine.php';
require_once __DIR__ . '/includes/form-engine.php';

$pageTitle = page_content('vloeren', 'seo_title', 'Vloeren en tegelwerk op maat — RWW Bouw');
$metaDescription = page_content('vloeren', 'seo_description', 'Vakkundig tegelwerk, vloerverwarming en egalisatie in Amersfoort en omgeving. RWW Bouw voor uw nieuwe vloer.');
$htmlLang = 'nl';

require_once __DIR__ . '/includes/header.php';
?>


  <!-- SECTION: hero -->
  <section id="hero" class="relative min-h-screen flex items-center">
    <div class="absolute inset-0">
      <img src="<?= e(page_content('vloeren', 'hero_image', '/images/uploads/20180410_104638.jpg')) ?>" alt="Vloeren en tegelwerk door RWW Bouw" class="w-full h-full object-cover">
      <div class="hero-overlay absolute inset-0"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
      <div class="max-w-2xl">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Vloeren & tegelwerk</span>
        <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl text-white font-bold leading-tight mt-4 mb-6">
          <?= page_content('vloeren', 'hero_titel', 'Vloeren op maat —<br>van tegel tot vloerverwarming') ?>
        </h1>
        <p class="text-stone-300 text-lg sm:text-xl mb-8 leading-relaxed">
          <?= e(page_content('vloeren', 'hero_subtitel', 'Of het nu gaat om groot formaat tegels, een patroonvloer of vloerverwarming — RWW Bouw legt het vakkundig. Van egalisatie tot de laatste voeg.')) ?>
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

  <!-- SECTION: diensten -->
  <section id="diensten" class="py-20 md:py-28 bg-rww-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Wat wij doen</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">
          Vloeren en tegelwerk op maat
        </h2>
        <p class="text-rww-muted text-lg">Vakkundig tegelwerk in elk formaat en patroon, vloerverwarming en perfecte egalisatie als basis.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">
        <?php
        $diensten = [
          [
            'titel' => 'Tegelwerk en patroonvloeren',
            'tekst' => 'Groot formaat tegels, visgraatpatroon, Spaans verband — alles is mogelijk. Strak gevoegd en perfect waterpas gelegd.',
            'img'   => '/images/uploads/20180410_104638.jpg',
            'alt'   => 'Tegelwerk vloer',
          ],
          [
            'titel' => 'Vloerverwarming',
            'tekst' => 'Elektrische of water-gedragen vloerverwarming, inclusief egalisatie en aansluiting. Warm comfort onder uw voeten.',
            'img'   => '/images/uploads/20230329_151355.jpg',
            'alt'   => 'Vloerverwarming installatie',
          ],
          [
            'titel' => 'Egalisatie en ondergrond',
            'tekst' => 'Een vlakke ondergrond is de basis van een mooie vloer. We egaliseren, grunderen en bereiden alles voor op de definitieve afwerking.',
            'img'   => '/images/uploads/185.jpg',
            'alt'   => 'Egalisatie vloer voorbereiding',
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
            'img'   => '/images/uploads/177.jpg',
            'titel' => 'Opname en advies',
            'items' => [
              'We bekijken de ruimte en de staat van de bestaande vloer',
              'We bespreken uw wensen: materiaal, formaat, patroon',
              'We adviseren over de beste aanpak voor uw situatie',
            ],
            'cta'   => 'U weet precies wat u kunt verwachten',
          ],
          [
            'nr'    => '2',
            'img'   => '/images/uploads/172.jpg',
            'titel' => 'Sloopwerk en egalisatie',
            'items' => [
              'Bestaande vloer wordt verwijderd indien nodig',
              'Ondergrond wordt geëgaliseerd en vlak gemaakt',
              'Bij vloerverwarming: systeem wordt aangebracht voor de egalisatie',
            ],
            'cta'   => 'Een perfecte basis voor een perfecte vloer',
          ],
          [
            'nr'    => '3',
            'img'   => '/images/uploads/170.jpg',
            'titel' => 'Tegels leggen',
            'items' => [
              'Tegels worden op maat gezaagd en vakkundig gelegd',
              'Waterpas gecontroleerd, recht en strak',
              'Voegwerk aangebracht in de gewenste kleur',
            ],
            'cta'   => 'Vakwerk zichtbaar tot in de puntjes',
          ],
          [
            'nr'    => '4',
            'img'   => '/images/uploads/108.jpg',
            'titel' => 'Oplevering',
            'items' => [
              'Eindcontrole op vlakheid en afwerking',
              'Voegwerk schoongemaakt, ruimte netjes achtergelaten',
              'Direct klaar voor gebruik',
            ],
            'cta'   => 'Een vloer om trots op te zijn',
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
  $vloeren_fotos = array_filter(
      get_published_posts(),
      fn($p) => ($p['categorie'] ?? '') === 'projecten' && ($p['groep'] ?? '') === 'vloeren'
  );
  usort($vloeren_fotos, fn($a, $b) => strcmp($b['datum'] ?? '', $a['datum'] ?? ''));
  $vloeren_fotos = array_values($vloeren_fotos);
  ?>
  <?php if (!empty($vloeren_fotos)): ?>
  <section class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Ons werk</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-white mt-4 mb-6 font-bold">Onze vloerprojecten</h2>
      </div>
      <div class="fade-in">
        <div class="slider-container" data-slider>
          <div class="slider-track" data-slider-track>
            <?php foreach ($vloeren_fotos as $project): ?>
            <div class="slider-slide">
              <?php $hasLink = !empty($project['slug']); ?>
              <?= $hasLink ? '<a href="/blog-post.php?slug=' . e($project['slug']) . '" class="block">' : '<div>' ?>
              <div class="project-card group relative rounded-lg overflow-hidden aspect-[4/3]">
                <img src="<?= e($project['afbeelding'] ?? '') ?>" alt="<?= e($project['titel'] ?? '') ?>" class="w-full h-full object-cover" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                  <div class="absolute bottom-0 left-0 right-0 p-5">
                    <h4 class="text-white font-display text-lg font-semibold"><?= e($project['titel'] ?? '') ?></h4>
                    <p class="text-stone-300 text-sm"><?= e($project['samenvatting'] ?? '') ?></p>
                    <?php if ($hasLink): ?><span class="text-rww-red text-sm font-semibold mt-1 inline-block">Lees meer →</span><?php endif; ?>
                  </div>
                </div>
              </div>
              <?= $hasLink ? '</a>' : '</div>' ?>
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
            Vrijblijvende offerte voor uw vloer
          </h2>
          <p class="text-stone-400 text-lg leading-relaxed mb-8">Vertel ons over uw project. We nemen snel contact op voor een bezichtiging en offerte op maat.</p>

          <div class="space-y-6">
            <a href="tel:0616035754" class="flex items-center gap-4 text-white hover:text-rww-red transition-colors group">
              <div class="w-12 h-12 bg-rww-red/20 group-hover:bg-rww-red/30 rounded-full flex items-center justify-center transition-colors">
                <svg class="w-5 h-5 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              </div>
              <div><p class="font-semibold text-lg">WhatsApp</p><p class="text-stone-400">06 160 357 54</p></div>
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
