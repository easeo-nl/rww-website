<?php
require_once __DIR__ . '/includes/content.php';
require_once __DIR__ . '/includes/blog-engine.php';
require_once __DIR__ . '/includes/form-engine.php';

$pageTitle = page_content('home', 'seo_title', 'RWW Bouw — Renovatie & Verbouwing');
$metaDescription = page_content('home', 'seo_description', '');
$htmlLang = 'nl';

require_once __DIR__ . '/includes/header.php';
?>


  <!-- SECTION: hero -->
  <section id="hero" class="relative min-h-screen flex items-center">
    <div class="absolute inset-0">
      <img src="<?= e(page_content('home', 'hero_image', '/images/uploads/20230329_151355.jpg')) ?>" alt="Badkamerrenovatie door RWW Bouw" class="w-full h-full object-cover">
      <div class="hero-overlay absolute inset-0"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
      <div class="max-w-2xl">
        <h1 data-field="hero_titel" class="font-display text-4xl sm:text-5xl lg:text-6xl text-white font-bold leading-tight mb-6">
          <?= page_content('home', 'hero_titel', 'Renovatie &amp; verbouwing<br>met plan') ?>
        </h1>
        <p data-field="hero_subtitel" class="text-stone-300 text-lg sm:text-xl mb-8 leading-relaxed">
          <?= e(page_content('home', 'hero_subtitel', '')) ?>
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
        <h2 data-field="diensten_titel" class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">
          <?= e(page_content('home', 'diensten_titel', 'Het hele huis, niet één klus')) ?>
        </h2>
        <p class="text-rww-muted text-lg">Eén aannemer, één aanspreekpunt, één planning. Van badkamer tot zolder, van keuken tot buitenschilderwerk.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">
        <?php
        $diensten = [
          ['titel' => 'Badkamers op maat', 'tekst' => 'Complete badkamerrenovatie inclusief tegelwerk, sanitair en op maat gemaakte meubels van beton ciré.', 'img' => '/images/uploads/170.jpg', 'alt' => 'Badkamerrenovatie', 'link' => 'badkamer.php'],
          ['titel' => 'Keukens op maat', 'tekst' => 'Van ontwerp tot plaatsing. Agnieszka ontwerpt, Raphaël bouwt. Inclusief leidingwerk en afwerking.', 'img' => '/images/uploads/53.jpg', 'alt' => 'Keukenrenovatie', 'link' => 'keuken.php'],
          ['titel' => 'Complete woningrenovatie', 'tekst' => 'Badkamer, keuken, vloer, zolder, schilderwerk — alles in één keer, door één team.', 'img' => '/images/uploads/185.jpg', 'alt' => 'Complete woningrenovatie', 'link' => 'diensten.php#nieuwbouw'],
          ['titel' => 'Stucwerk & afwerking', 'tekst' => 'Strakke wanden en plafonds. Beton ciré, microbeton en traditioneel stucwerk. Super strak en mooi glad afgewerkt.', 'img' => '/images/uploads/177.jpg', 'alt' => 'Stucwerk', 'link' => 'diensten.php#stucwerk'],
          ['titel' => 'Vloeren & tegelwerk', 'tekst' => 'Vloerverwarming, broodjesvloer, egalisatie en tegelwerk. Vakwerk tot in de puntjes.', 'img' => '/images/uploads/20180410_104638.jpg', 'alt' => 'Vloerverwarming', 'link' => 'diensten.php#vloeren'],
          ['titel' => 'Interieurontwerp & visualisatie', 'tekst' => 'Agnieszka ontwerpt uw ruimte en maakt 3D-visualisaties. U ziet het resultaat voordat we beginnen.', 'img' => '/images/uploads/20230329_151317.jpg', 'alt' => 'Interieurontwerp', 'link' => 'diensten.php#interieur'],
        ];
        foreach ($diensten as $d): ?>
        <div class="project-card group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow flex flex-col">
          <div class="aspect-[4/3] overflow-hidden">
            <img src="<?= e($d['img']) ?>" alt="<?= e($d['alt']) ?>" class="w-full h-full object-cover" loading="lazy">
          </div>
          <div class="p-6 flex flex-col flex-1">
            <h3 class="font-display text-xl text-rww-dark font-semibold mb-2"><?= e($d['titel']) ?></h3>
            <p class="text-rww-muted text-sm leading-relaxed"><?= e($d['tekst']) ?></p>
            <a href="<?= e($d['link']) ?>" class="inline-flex items-center mt-auto pt-4 text-rww-red hover:text-rww-red-light font-semibold text-sm transition-colors">
              Meer informatie
              <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
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
        <h2 data-field="werkwijze_titel" class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">
          <?= e(page_content('home', 'werkwijze_titel', 'Eerst tekenen, dan bouwen')) ?>
        </h2>
        <p data-field="werkwijze_tekst" class="text-rww-muted text-lg leading-relaxed">
          <?= e(page_content('home', 'werkwijze_tekst', '')) ?>
        </p>
      </div>

      <div class="flex flex-col md:flex-row items-center gap-8 mb-16 fade-in">
        <div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden shadow-lg shrink-0 border-4 border-rww-red/20">
          <img src="/images/AgnieszkaSejfrydArchitect.png" alt="Agnieszka Sejfryd — Interieurarchitect" class="w-full h-full object-cover">
        </div>
        <div class="text-center md:text-left">
          <h3 class="font-display text-xl text-rww-dark font-semibold mb-2">Agnieszka Sejfryd</h3>
          <p class="text-rww-red text-sm font-medium mb-2">Interieurarchitect & designer</p>
          <p class="text-rww-muted text-sm leading-relaxed max-w-lg">Agnieszka maakt professionele bouwtekeningen en 3D-visualisaties voordat er een hamer wordt opgepakt. U ziet exact wat u krijgt. De kosten voor de tekening worden verrekend met de vervolgopdracht.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 fade-in">
        <?php
        $stappen = [
          ['nr' => '1', 'titel' => 'Inmeting & ontwerp', 'tekst' => 'Agnieszka komt bij u langs, meet alles op en maakt een professionele bouwtekening op maat.'],
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


  <!-- SECTION: projecten -->
  <section id="projecten" class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Ons werk</span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl text-white mt-4 mb-6 font-bold">Projecten</h2>
        <p class="text-stone-400 text-lg">Van badkamerrenovatie tot complete woningverbouwing. Bekijk een selectie van ons werk in de regio.</p>
      </div>

      <?php
      $all_projecten = array_filter(get_published_posts(), fn($p) => ($p['categorie'] ?? '') === 'projecten');
      usort($all_projecten, fn($a, $b) => strcmp($b['datum'] ?? '', $a['datum'] ?? ''));

      $slider_groups = [
          'badkamer' => ['label' => 'Badkamer',           'posts' => []],
          'keuken'   => ['label' => 'Keuken',              'posts' => []],
          'overig'   => ['label' => 'Toilet &amp; Vloer',  'posts' => []],
      ];

      foreach ($all_projecten as $project) {
          $groep = $project['groep'] ?? 'overig';
          if (!isset($slider_groups[$groep])) $groep = 'overig';
          $slider_groups[$groep]['posts'][] = $project;
      }
      ?>

      <?php foreach ($slider_groups as $groep_key => $groep): ?>
      <?php if (empty($groep['posts'])) continue; ?>
      <div class="mb-12 last:mb-0 fade-in">
        <h3 class="text-white font-display text-xl font-semibold mb-6"><?= $groep['label'] ?></h3>
        <div class="slider-container" data-slider>
          <div class="slider-track" data-slider-track>
            <?php foreach ($groep['posts'] as $project): ?>
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

          <?php if (count($groep['posts']) > 1): ?>
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
      <?php endforeach; ?>
    </div>
  </section>
  <!-- /SECTION: projecten -->


  <!-- SECTION: over-ons -->
  <section id="over-ons" class="py-20 md:py-28 bg-rww-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center fade-in">
        <div>
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Over RWW Bouw</span>
          <h2 data-field="over_titel" class="font-display text-3xl sm:text-4xl text-rww-dark mt-4 mb-6 font-bold">
            <?= e(page_content('home', 'over_titel', 'Vakmanschap met een menselijke kant')) ?>
          </h2>
          <div class="space-y-4 text-rww-text leading-relaxed">
            <p data-field="over_tekst_1"><?= e(page_content('home', 'over_tekst_1', '')) ?></p>
            <p data-field="over_tekst_2"><?= e(page_content('home', 'over_tekst_2', '')) ?></p>
            <p data-field="over_tekst_3"><?= e(page_content('home', 'over_tekst_3', '')) ?></p>
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

  <!-- SECTION: reviews -->
    <section id="reviews" class="py-20 md:py-28 bg-white">
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
          <h2 data-field="contact_titel" class="font-display text-3xl sm:text-4xl text-white mt-4 mb-6 font-bold">
            <?= e(page_content('home', 'contact_titel', 'Plan een inmeting')) ?>
          </h2>
          <p class="text-stone-400 text-lg leading-relaxed mb-8">Vertel ons over uw project. We nemen snel contact met u op voor een vrijblijvende inmeting en offerte.</p>

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
