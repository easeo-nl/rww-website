<?php
require_once __DIR__ . '/includes/content.php';
require_once __DIR__ . '/includes/blog-engine.php';
require_once __DIR__ . '/includes/form-engine.php';

$pageTitle = page_content('stucwerk', 'seo_title', 'Stucwerk Amersfoort — RWW Bouw | Binnen en buiten stucwerk');
$metaDescription = page_content('stucwerk', 'seo_description', 'Professioneel stucwerk in Amersfoort en omgeving. Glad stucwerk, beton ciré, microbeton en buitenstucwerk. Vaste prijs na gratis inmeting. Bel ons direct.');
$htmlLang = 'nl';

require_once __DIR__ . '/includes/header.php';
?>


  <!-- SECTION: breadcrumb -->
  <?php
  $breadcrumb_items = [
    ['label' => 'Home',     'url' => '/'],
    ['label' => 'Stucwerk', 'url' => '/stucwerk.php'],
  ];
  ?>
  <nav aria-label="Breadcrumb" class="bg-rww-light border-b border-rww-stone">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
      <ol class="flex items-center gap-2 text-sm text-rww-muted">
        <?php foreach ($breadcrumb_items as $i => $item): ?>
        <li class="flex items-center gap-2">
          <?php if ($i > 0): ?>
          <svg class="w-4 h-4 text-rww-stone" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          <?php endif; ?>
          <?php if ($i < count($breadcrumb_items) - 1): ?>
          <a href="<?= e($item['url']) ?>" class="hover:text-rww-red transition-colors"><?= e($item['label']) ?></a>
          <?php else: ?>
          <span class="text-rww-dark font-medium"><?= e($item['label']) ?></span>
          <?php endif; ?>
        </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </nav>
  <!-- /SECTION: breadcrumb -->


  <!-- SECTION: hero -->
  <section id="hero" class="relative min-h-screen flex items-center">
    <div class="absolute inset-0">
      <img src="<?= e(page_content('stucwerk', 'hero_image', '/images/uploads/177.jpg')) ?>" alt="Stucwerk door RWW Bouw" class="w-full h-full object-cover">
      <div class="hero-overlay absolute inset-0"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
      <div class="max-w-2xl">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Stucwerk & afwerking</span>
        <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl text-white font-bold leading-tight mt-4 mb-6">
          <?= page_content('stucwerk', 'hero_titel', 'Stucwerk in Amersfoort —<br>strak en vakkundig afgewerkt') ?>
        </h1>
        <p class="text-stone-300 text-lg sm:text-xl mb-8 leading-relaxed">
          <?= e(page_content('stucwerk', 'hero_subtitel', 'Glad stucwerk, beton ciré, microbeton en buitenstucwerk — allemaal door hetzelfde team. Actief in Amersfoort en omgeving. We werken met Knauf MP 75 en leveren altijd een strak resultaat.')) ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
          <a href="#contact" class="bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded text-lg font-semibold transition-colors text-center">
            Gratis inmeting aanvragen
          </a>
          <a href="tel:<?= e(site('company.phone')) ?>" class="border-2 border-white/30 hover:border-white/60 text-white px-8 py-4 rounded text-lg font-medium transition-colors text-center">
            <svg class="w-5 h-5 inline mr-2 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            Bel direct: +31 6 274 544 16
          </a>
        </div>
        <div class="mt-8 flex items-center gap-3">
          <div class="stars text-lg">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <span class="text-stone-400 text-sm">5.0 op Google &middot; Meer dan 50 tevreden klanten</span>
          <a href="#reviews" class="text-rww-red text-sm font-semibold hover:underline">Lees onze reviews →</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: hero -->


  <!-- SECTION: usps -->
  <?php
  $usp_items = [
    [
      'icoon' => 'check',
      'titel' => 'Binnen én buiten stucwerk',
      'tekst' => 'Van glad gipsstuc tot zwaar buitenstucwerk op cementbasis.',
    ],
    [
      'icoon' => 'check',
      'titel' => '5 jaar garantie',
      'tekst' => 'Op al ons stucwerk, binnen en buiten.',
    ],
    [
      'icoon' => 'check',
      'titel' => 'Vaste prijs na inmeting',
      'tekst' => 'Geen verrassingen achteraf. U weet vooraf precies wat het kost.',
    ],
    [
      'icoon' => 'check',
      'titel' => 'Actief in Amersfoort en omgeving',
      'tekst' => 'Snel ter plaatse, korte lijnen en persoonlijk contact.',
    ],
  ];
  ?>
  <section class="py-12 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php foreach ($usp_items as $usp): ?>
        <div class="flex items-start gap-4">
          <div class="w-10 h-10 bg-rww-red/20 rounded-full flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
          </div>
          <div>
            <h3 class="font-semibold text-white text-sm mb-1"><?= e($usp['titel']) ?></h3>
            <p class="text-stone-400 text-sm leading-relaxed"><?= e($usp['tekst']) ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- /SECTION: usps -->


  <!-- SECTION: diensten -->
  <section id="diensten" class="py-20 md:py-28 bg-rww-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Wat wij doen</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">
          Stucwerk op maat
        </h2>
        <p class="text-rww-muted text-lg">Van traditioneel sierpleister tot modern beton ciré — wij verzorgen de afwerking die bij uw ruimte past.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">
        <?php
        $diensten = [
          [
            'titel' => 'Sierpleister & spachtelputz',
            'tekst' => 'Klassieke sierpleister of moderne spachtelputz voor wanden en plafonds. Handmatig aangebracht, naadloos afgewerkt en duurzaam.',
            'img'   => '/images/uploads/177.jpg',
            'alt'   => 'Sierpleister stucwerk',
          ],
          [
            'titel' => 'Beton ciré en microbeton',
            'tekst' => 'Betonlook-afwerking voor wanden, vloeren en meubels. Waterdicht, naadloos en ongelooflijk strak. Agnieszka adviseert over kleur en textuur.',
            'img'   => '/images/uploads/IMG-20230330-WA0002.jpg',
            'alt'   => 'Beton ciré afwerking',
          ],
          [
            'titel' => 'Schilderwerk en eindafwerking',
            'tekst' => 'Na het stucwerk verzorgen wij ook de schilderwerken. Één team voor het hele traject — geen losse onderaannemers, geen gedoe.',
            'img'   => '/images/uploads/185.jpg',
            'alt'   => 'Schilderwerk afwerking',
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
          <?= page_content('stucwerk', 'werkwijze_titel', 'Zo werkt stucwerk in Amersfoort') ?>
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
              'We bekijken de wanden en de staat van het onderwerk',
              'We bespreken welke afwerking bij uw ruimte past',
              'We geven eerlijk advies over haalbaarheid en budget',
            ],
            'cta'   => 'U weet precies wat u kunt verwachten',
          ],
          [
            'nr'    => '2',
            'img'   => '/images/uploads/172.jpg',
            'titel' => 'Voorbereiding',
            'items' => [
              'Bestaand stucwerk wordt gecontroleerd en indien nodig verwijderd',
              'Scheuren en oneffenheden worden gedicht',
              'Ondergrond wordt voorgestreken voor optimale hechting',
            ],
            'cta'   => 'Een goede voorbereiding is het halve werk',
          ],
          [
            'nr'    => '3',
            'img'   => '/images/uploads/170.jpg',
            'titel' => 'Stucwerk aanbrengen',
            'items' => [
              'Stucwerk of afwerking wordt vakkundig aangebracht',
              'Meerdere lagen voor een perfect resultaat',
              'Nauwkeurig gewerkt rondom kozijnen, hoeken en aansluitingen',
            ],
            'cta'   => 'Vakwerk dat direct opvalt',
          ],
          [
            'nr'    => '4',
            'img'   => '/images/uploads/108.jpg',
            'titel' => 'Oplevering',
            'items' => [
              'Eindcontrole op vlakheid en afwerking',
              'Ruimte wordt schoon achtergelaten',
              'Klaar voor schilderwerk of direct als eindafwerking',
            ],
            'cta'   => 'Strakke wanden, tevreden klant',
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


  <!-- SECTION: voor-na -->
  <?php
  $voor_na_items = [
    [
      'label'    => 'Glad stucwerk — Amersfoort',
      'voor_img' => '/images/uploads/voor-stucwerk-1.jpg',
      'na_img'   => '/images/uploads/na-stucwerk-1.jpg',
      'voor_alt' => 'Wand voor stucwerk Amersfoort',
      'na_alt'   => 'Wand na stucwerk Amersfoort',
    ],
    [
      'label'    => 'Beton ciré afwerking — Bunschoten-Spakenburg',
      'voor_img' => '/images/uploads/voor-stucwerk-2.jpg',
      'na_img'   => '/images/uploads/na-stucwerk-2.jpg',
      'voor_alt' => 'Wand voor beton ciré Bunschoten-Spakenburg',
      'na_alt'   => 'Wand na beton ciré Bunschoten-Spakenburg',
    ],
  ];
  ?>
  <section class="py-20 md:py-28 bg-rww-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Resultaten</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">Voor en na</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 fade-in">
        <?php foreach ($voor_na_items as $item): ?>
        <div class="bg-white rounded-lg overflow-hidden shadow-sm">
          <div class="grid grid-cols-2">
            <div class="relative">
              <img src="<?= e($item['voor_img']) ?>" alt="<?= e($item['voor_alt']) ?>" class="w-full h-48 object-cover" loading="lazy">
              <span class="absolute bottom-2 left-2 bg-black/60 text-white text-xs px-2 py-1 rounded">Voor</span>
            </div>
            <div class="relative">
              <img src="<?= e($item['na_img']) ?>" alt="<?= e($item['na_alt']) ?>" class="w-full h-48 object-cover" loading="lazy">
              <span class="absolute bottom-2 left-2 bg-rww-red text-white text-xs px-2 py-1 rounded">Na</span>
            </div>
          </div>
          <div class="p-4">
            <p class="text-rww-dark font-semibold text-sm"><?= e($item['label']) ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- /SECTION: voor-na -->


  <!-- SECTION: projecten -->
  <?php
  $stucwerk_fotos = array_filter(
      get_published_posts(),
      fn($p) => ($p['categorie'] ?? '') === 'projecten' && ($p['groep'] ?? '') === 'stucwerk'
  );
  usort($stucwerk_fotos, fn($a, $b) => strcmp($b['datum'] ?? '', $a['datum'] ?? ''));
  $stucwerk_fotos = array_values($stucwerk_fotos);
  ?>
  <?php if (!empty($stucwerk_fotos)): ?>
  <section class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Ons werk</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-white mt-4 mb-6 font-bold">
          <?= page_content('stucwerk', 'projecten_titel', 'Onze stucwerkprojecten in de regio Amersfoort') ?>
        </h2>
      </div>
      <div class="fade-in">
        <div class="slider-container" data-slider>
          <div class="slider-track" data-slider-track>
            <?php foreach ($stucwerk_fotos as $project): ?>
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
          <?php if (count($stucwerk_fotos) > 1): ?>
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


  <!-- SECTION: faq -->
  <?php
  $faq_items = [
    [
      'vraag'    => 'Welke soorten stucwerk bieden jullie aan?',
      'antwoord' => 'We doen glad stucwerk op gipsbasis voor binnenwanden en plafonds, stucwerk op cementbasis voor natte ruimtes zoals badkamers, en decoratief stucwerk zoals beton ciré, base beton en microbeton. Dit laatste wordt veel toegepast als alternatief voor tegels in badkamers of boven aanrechtbladen.',
    ],
    [
      'vraag'    => 'Wat is het verschil tussen beton ciré, base beton en microbeton?',
      'antwoord' => 'Ze lijken sterk op elkaar en worden allemaal voor binnen toegepast. Het zijn stucachtige afwerkingen die een betonlook geven zonder dat er echt beton aan te pas komt. Ze zijn waterdicht te maken en daardoor geschikt voor badkamers en keukens.',
    ],
    [
      'vraag'    => 'Doen jullie ook buitenstucwerk?',
      'antwoord' => 'Ja, maar buitenstucwerk is een vak apart. Het wordt in drie lagen aangebracht op cementbasis en vraagt meer tijd en vakkennis dan binnenstucwerk. Niet elk bedrijf doet dit goed — wij wel.',
    ],
    [
      'vraag'    => 'Welk materiaal gebruiken jullie voor binnenstucwerk?',
      'antwoord' => 'We werken met Knauf MP 75, een professioneel gipspleister. Voor natte ruimtes zoals badkamers gebruiken we gips dat geschikt is voor vochtige omgevingen of een op cement gebaseerd alternatief.',
    ],
    [
      'vraag'    => 'Kan stucwerk ook over bestaande muren aangebracht worden?',
      'antwoord' => 'Dat hangt af van de staat van de ondergrond. We bekijken dit altijd eerst voordat we beginnen. Soms moet er eerst gesaneerd of voorbehandeld worden voor een goed resultaat.',
    ],
    [
      'vraag'    => 'Hoeveel garantie krijg ik op het stucwerk?',
      'antwoord' => 'U krijgt 5 jaar garantie op alle werkzaamheden, inclusief het stucwerk. Mocht er iets niet goed zitten, dan lossen we dat op.',
    ],
  ];
  ?>
  <section class="py-20 md:py-28 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Veelgestelde vragen</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">Vragen over stucwerk</h2>
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
  <section id="reviews">
    <div>
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-black mt-4 mb-6 font-bold">
          <?= page_content('stucwerk', 'reviews_titel', 'Wat klanten zeggen over ons stucwerk') ?>
        </h2>
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
            Plan een gratis inmeting voor stucwerk in Amersfoort
          </h2>
          <p class="text-stone-400 text-lg leading-relaxed mb-8">Vertel ons over uw project. We nemen snel contact op voor een bezichtiging en offerte op maat.</p>

          <div class="space-y-6">
            <a href="tel:<?= e(site('company.phone')) ?>" class="flex items-center gap-4 text-white hover:text-rww-red transition-colors group">
              <div class="w-12 h-12 bg-rww-red/20 group-hover:bg-rww-red/30 rounded-full flex items-center justify-center transition-colors">
                <svg class="w-5 h-5 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              </div>
              <div><p class="font-semibold text-lg">Whatsapp</p><p class="text-stone-400">+31 6 160 357 54</p></div>
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
          <div class="bg-stone-900 rounded-lg p-6 sm:p-8">
            <?= render_form('contact') ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: contact -->


<?php require_once __DIR__ . '/includes/footer.php'; ?>
