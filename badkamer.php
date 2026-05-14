<?php
require_once __DIR__ . '/includes/content.php';
require_once __DIR__ . '/includes/blog-engine.php';
require_once __DIR__ . '/includes/form-engine.php';

$pageTitle = page_content('badkamer', 'seo_title', 'Badkamerrenovatie Amersfoort — RWW Bouw | Gratis inmeting');
$metaDescription = page_content('badkamer', 'seo_description', 'Complete badkamerrenovatie in Amersfoort en omgeving. Tegelwerk, sanitair en inloopdouche door één team. Vaste prijs na gratis inmeting. Bel ons direct.');
$htmlLang = 'nl';

require_once __DIR__ . '/includes/header.php';
?>


  <!-- SECTION: hero -->
  <section id="hero" class="relative min-h-screen flex items-center">
    <div class="absolute inset-0">
      <img src="<?= e(page_content('badkamer', 'hero_image', '/images/uploads/20230329_151355.jpg')) ?>" alt="Badkamerrenovatie door RWW Bouw" class="w-full h-full object-cover">
      <div class="hero-overlay absolute inset-0"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
      <div class="max-w-2xl">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Badkamerrenovatie</span>
        <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl text-white font-bold leading-tight mt-4 mb-6">
          <?= page_content('badkamer', 'hero_titel', 'Badkamerrenovatie in Amersfoort —<br>van tekening tot tegels') ?>
        </h1>
        <p class="text-stone-300 text-lg sm:text-xl mb-8 leading-relaxed">
          <?= e(page_content('badkamer', 'hero_subtitel', 'Agnieszka tekent uw badkamer op maat. Rafael en zijn team bouwen hem precies zoals gepland — actief in Amersfoort en omgeving. Tegelwerk, sanitair, beton ciré — alles door één team.')) ?>
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
          <div>
            <span class="text-stone-300 text-sm">5.0 op Google &middot; Meer dan 50 tevreden klanten</span>
            <a href="#reviews" class="block text-rww-red text-sm hover:underline">Lees onze reviews &rarr;</a>
          </div>
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
      'titel' => 'Altijd één aanspreekpunt',
      'tekst' => 'Geen losse onderaannemers. Één team van begin tot eind.',
    ],
    [
      'icoon' => 'check',
      'titel' => '5 jaar garantie',
      'tekst' => 'Op al ons tegelwerk, sanitair en afwerking.',
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
  <section class="bg-rww-dark py-8 md:py-10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
        <?php foreach ($usp_items as $usp): ?>
        <div class="flex items-start gap-4">
          <svg class="w-6 h-6 text-rww-red shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
          <div>
            <p class="text-white font-semibold text-sm mb-1"><?= e($usp['titel']) ?></p>
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
          Complete badkamerrenovatie in Amersfoort en omgeving
        </h2>
        <p class="text-rww-muted text-lg">Eén team voor het hele traject — van sloopwerk en leidingwerk tot tegels en de laatste afwerking.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">
        <?php
        $diensten = [
          [
            'titel' => 'Tegelwerk op maat',
            'tekst' => 'Vloer- en wandtegels in elk formaat, inclusief patroonvloeren en voegwerk. Strak gelegd, netjes afgewerkt.',
            'img'   => '/images/uploads/20230329_151357.jpg',
            'alt'   => 'Tegelwerk badkamer',
          ],
          [
            'titel' => 'Sanitair plaatsen',
            'tekst' => 'Inloopdouche, bad, toilet, wastafel — inclusief al het leidingwerk. Alles door één team, geen losse onderaannemers.',
            'img'   => '/images/uploads/20230329_151355.jpg',
            'alt'   => 'Sanitair badkamer',
          ],
          [
            'titel' => 'Beton ciré en microbeton',
            'tekst' => 'Betonlook-afwerking op wanden en vloer. Naadloos, waterdicht en super strak. Agnieszka adviseert over kleur en textuur.',
            'img'   => '/images/uploads/IMG-20230330-WA0002.jpg',
            'alt'   => 'Beton ciré badkamer',
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
            'titel' => 'Kennismaking en Wensen',
            'items' => [
              'We bespreken jouw wensen, stijl en budget',
              'We bekijken de ruimte en technische mogelijkheden',
              'Je deelt inspiratie (modern, hotelstijl, minimalistisch…',
            ],
            'cta'   => '👉 De basis voor jouw perfecte badkamer wordt gelegd',
          ],
          [
            'nr'    => '2',
            'img'   => '/images/uploads/172.jpg',
            'titel' => 'Ontwerp en Visualisatie',
            'items' => [
              'We maken een persoonlijk badkamerontwerp',
              'Je ziet jouw badkamer in een realistische 3D weergave',
              'Materialen, tegels en indeling worden gekozen',
            ],
            'cta'   => '👉 Je weet vooraf precies hoe het eruit komt te zien',
          ],
          [
            'nr'    => '3',
            'img'   => '/images/uploads/170.jpg',
            'titel' => 'Voorbereiding en Renovatie',
            'items' => [
              'Oude badkamer wordt verwijderd',
              'Leidingen, afvoer en elektra worden aangepast',
              'Alles wordt voorbereid voor plaatsing',
            ],
            'cta'   => '👉 Dit is de belangrijkste fase voor een perfect eindresultaat',
          ],
          [
            'nr'    => '4',
            'img'   => '/images/uploads/108.jpg',
            'titel' => 'Installatie en Oplevering',
            'items' => [
              'Nieuwe badkamer wordt geplaatst en afgewerkt',
              'Tegels, sanitair en details worden gemonteerd',
              'Alles wordt netjes opgeleverd',
            ],
            'cta'   => 'Binnen korte tijd geniet je van jouw nieuwe badkamer',
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
      'label'    => 'Complete renovatie — Amersfoort',
      'voor_img' => '/images/uploads/voor-1.jpg',
      'na_img'   => '/images/uploads/na-1.jpg',
      'voor_alt' => 'Badkamer voor renovatie Amersfoort',
      'na_alt'   => 'Badkamer na renovatie Amersfoort',
    ],
    [
      'label'    => 'Doucherenovatie — Nijkerk',
      'voor_img' => '/images/uploads/voor-2.jpg',
      'na_img'   => '/images/uploads/na-2.jpg',
      'voor_alt' => 'Douche voor renovatie Nijkerk',
      'na_alt'   => 'Douche na renovatie Nijkerk',
    ],
    [
      'label'    => 'Complete renovatie — Leusden',
      'voor_img' => '/images/uploads/voor-3.jpg',
      'na_img'   => '/images/uploads/na-3.jpg',
      'voor_alt' => 'Badkamer voor renovatie Leusden',
      'na_alt'   => 'Badkamer na renovatie Leusden',
    ],
  ];
  ?>
  <section class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Ons werk</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-white mt-4 mb-6 font-bold">Van oud naar nieuw — bekijk de transformatie</h2>
      </div>
      <div class="fade-in">
        <div class="slider-container" data-slider>
          <div class="slider-track" data-slider-track>
            <?php foreach ($voor_na_items as $item): ?>
            <div class="slider-slide">
              <div class="flex flex-col sm:flex-row gap-3">
                <div class="relative flex-1">
                  <div class="aspect-[4/3] overflow-hidden rounded-lg">
                    <img src="<?= e($item['voor_img']) ?>" alt="<?= e($item['voor_alt']) ?>" class="w-full h-full object-cover" loading="lazy">
                  </div>
                  <span class="absolute top-3 left-3 bg-white/90 text-rww-dark text-xs font-semibold px-2 py-1 rounded shadow-sm">Voor</span>
                </div>
                <div class="relative flex-1">
                  <div class="aspect-[4/3] overflow-hidden rounded-lg">
                    <img src="<?= e($item['na_img']) ?>" alt="<?= e($item['na_alt']) ?>" class="w-full h-full object-cover" loading="lazy">
                  </div>
                  <span class="absolute top-3 left-3 bg-white/90 text-rww-dark text-xs font-semibold px-2 py-1 rounded shadow-sm">Na</span>
                </div>
              </div>
              <p class="text-center text-stone-300 text-sm mt-4"><?= e($item['label']) ?></p>
            </div>
            <?php endforeach; ?>
          </div>
          <?php if (count($voor_na_items) > 1): ?>
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
  <!-- /SECTION: voor-na -->


  <!-- SECTION: projecten -->
  <?php
  $badkamer_fotos = array_filter(
      get_published_posts(),
      fn($p) => ($p['categorie'] ?? '') === 'projecten' && ($p['groep'] ?? '') === 'badkamer'
  );
  usort($badkamer_fotos, fn($a, $b) => strcmp($b['datum'] ?? '', $a['datum'] ?? ''));
  $badkamer_fotos = array_values($badkamer_fotos);
  ?>
  <?php if (!empty($badkamer_fotos)): ?>
  <section class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Ons werk</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-white mt-4 mb-6 font-bold">Onze badkamers</h2>
      </div>
      <div class="fade-in">
        <div class="slider-container" data-slider>
          <div class="slider-track" data-slider-track>
            <?php foreach ($badkamer_fotos as $project): ?>
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
          <?php if (count($badkamer_fotos) > 1): ?>
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
      'vraag'    => 'Wat kost een badkamerrenovatie?',
      'antwoord' => 'De kosten hangen af van de grootte van de badkamer, de materiaalkeuze en de hoeveelheid werk. We geven altijd een vaste prijs na een gratis inmeting bij u thuis, zodat u nooit voor verrassingen staat.',
    ],
    [
      'vraag'    => 'Hoe lang duurt een badkamerrenovatie?',
      'antwoord' => 'Een eenvoudige doucherenovatie doen we vaak in 1 tot 2 dagen. Een complete badkamerrenovatie duurt gemiddeld 1 tot 2 weken, afhankelijk van de wensen en de technische situatie.',
    ],
    [
      'vraag'    => 'Moeten we zelf tegels en sanitair regelen?',
      'antwoord' => 'Nee, wij regelen alles. Van ontwerp en materiaalkeuze tot het daadwerkelijke tegelwerk en sanitair. U hoeft nergens anders voor aan te kloppen.',
    ],
    [
      'vraag'    => 'Werken jullie ook bij oudere woningen of complexe situaties?',
      'antwoord' => 'Ja. We beginnen altijd met een gratis inmeting waarbij we de technische staat beoordelen. Leidingwerk, afvoer en elektra passen we indien nodig aan. We lossen eventuele problemen op voordat de renovatie begint.',
    ],
    [
      'vraag'    => 'Krijgen we garantie op het werk?',
      'antwoord' => 'Ja, we geven 5 jaar garantie op onze werkzaamheden. U kunt ons altijd bereiken als er iets is na de oplevering.',
    ],
    [
      'vraag'    => 'Hoe vraag ik een offerte aan?',
      'antwoord' => 'Heel eenvoudig: vraag een gratis inmeting aan via het contactformulier onderaan deze pagina of bel ons direct. We komen bij u langs, bekijken de situatie en sturen u een heldere offerte zonder verplichtingen.',
    ],
  ];
  ?>
  <section class="bg-rww-light py-20 md:py-28">
    <div class="max-w-3xl mx-auto px-6">
      <div class="text-center mb-12 fade-in">
        <p class="text-rww-red font-semibold uppercase tracking-widest text-sm">Veelgestelde vragen</p>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">Uw vragen, onze antwoorden</h2>
      </div>
      <div class="divide-y divide-rww-stone fade-in">
        <?php foreach ($faq_items as $i => $item): ?>
        <div>
          <button
            onclick="toggleFaq(this)"
            aria-expanded="false"
            aria-controls="faq-answer-<?= $i ?>"
            class="w-full flex justify-between items-center py-5 text-left gap-4 group">
            <span class="font-display text-lg font-semibold text-rww-dark"><?= e($item['vraag']) ?></span>
            <svg class="w-5 h-5 shrink-0 text-rww-red transition-transform duration-200 group-aria-expanded:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div id="faq-answer-<?= $i ?>" class="hidden pb-5 text-rww-muted leading-relaxed">
            <?= e($item['antwoord']) ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <script>
  function toggleFaq(btn) {
    var expanded = btn.getAttribute('aria-expanded') === 'true';
    btn.setAttribute('aria-expanded', String(!expanded));
    document.getElementById(btn.getAttribute('aria-controls')).classList.toggle('hidden');
  }
  </script>
  <!-- /SECTION: faq -->

  <script type="application/ld+json">
  <?= json_encode([
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(fn($item) => [
      '@type'          => 'Question',
      'name'           => $item['vraag'],
      'acceptedAnswer' => [
        '@type' => 'Answer',
        'text'  => $item['antwoord'],
      ],
    ], $faq_items),
  ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
  </script>

  <!-- SECTION: prijzen -->
  <?php
  $prijskaarten = [
    [
      'titel'     => 'Doucherenovatie',
      'prijs'     => 'Vanaf €3.500',
      'tijdsduur' => '1 tot 2 dagen',
      'items'     => [
        'Vervanging douche of bad',
        'Nieuw tegelwerk',
        'Nieuwe douchekraan en afvoer',
        'Nette oplevering',
      ],
      'primair'   => false,
    ],
    [
      'titel'     => 'Complete badkamerrenovatie',
      'prijs'     => 'Vanaf €8.500',
      'tijdsduur' => '1 tot 2 weken',
      'items'     => [
        'Volledige sloop en opbouw',
        'Tegelwerk, sanitair en meubels',
        'Elektra en leidingwerk indien nodig',
        'Inloopdouche of ligbad naar keuze',
        '5 jaar garantie',
      ],
      'primair'   => true,
    ],
    [
      'titel'     => 'Maatwerk renovatie',
      'prijs'     => 'Op aanvraag',
      'tijdsduur' => 'In overleg',
      'items'     => [
        'Beton ciré of speciale afwerking',
        'Vloerverwarming',
        'Inbouwspots en luxe sanitair',
        'Volledig op maat ontworpen',
        '5 jaar garantie',
      ],
      'primair'   => false,
    ],
  ];
  ?>
  <section class="bg-white py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-12 fade-in">
        <p class="text-rww-red font-semibold uppercase tracking-widest text-sm">Prijsindicatie</p>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-4 font-bold">Wat kost een badkamerrenovatie?</h2>
        <p class="text-rww-muted text-lg">Altijd een vaste prijs na een gratis inmeting bij u thuis.</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 fade-in">
        <?php foreach ($prijskaarten as $kaart): ?>
        <div class="flex flex-col bg-rww-light rounded-lg p-8 <?= $kaart['primair'] ? 'border-2 border-rww-red' : '' ?>">
          <h3 class="font-display text-xl text-rww-dark font-semibold mb-4"><?= e($kaart['titel']) ?></h3>
          <p class="font-display text-3xl font-bold text-rww-dark mb-1"><?= e($kaart['prijs']) ?></p>
          <p class="text-rww-muted text-sm mb-6"><?= e($kaart['tijdsduur']) ?></p>
          <ul class="space-y-3 mb-8 flex-1">
            <?php foreach ($kaart['items'] as $item): ?>
            <li class="flex items-start gap-3 text-rww-text text-sm leading-relaxed">
              <svg class="w-5 h-5 text-rww-red shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span><?= e($item) ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
          <a href="#contact" class="bg-rww-red hover:bg-rww-red-light text-white px-6 py-3 rounded font-semibold transition-colors text-center">
            Gratis inmeting aanvragen
          </a>
        </div>
        <?php endforeach; ?>
      </div>
      <p class="text-rww-muted text-sm text-center max-w-2xl mx-auto mt-8">
        Bovenstaande prijzen zijn indicaties. De exacte prijs hangt af van de grootte van uw badkamer, de materiaalkeuze en de technische situatie. Na een gratis inmeting ontvangt u altijd een vaste offerte zonder verrassingen.
      </p>
    </div>
  </section>
  <!-- /SECTION: prijzen -->

   <!-- SECTION: reviews -->
    <section id="reviews">
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
            Plan een gratis inmeting in Amersfoort en omgeving
          </h2>
          <p class="text-stone-400 text-lg leading-relaxed mb-8">Vertel ons over uw badkamer. We nemen snel contact met u op voor een vrijblijvende inmeting en offerte.</p>

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
