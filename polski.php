<?php
require_once __DIR__ . '/includes/content.php';
require_once __DIR__ . '/includes/blog-engine.php';
require_once __DIR__ . '/includes/form-engine.php';

$pageTitle = page_content('polski', 'seo_title', 'Polski wykonawca w Holandii | RWW Bouw');
$metaDescription = page_content('polski', 'seo_description', '');
$htmlLang = 'pl';

require_once __DIR__ . '/includes/header.php';
?>


  <!-- SECTION: hero -->
  <section id="hero" class="relative min-h-screen flex items-center">
    <div class="absolute inset-0">
      <img src="<?= e(page_content('polski', 'hero_image', 'Fotos/20230329_151355.jpg')) ?>" alt="Remont łazienki przez RWW Bouw" class="w-full h-full object-cover">
      <div class="hero-overlay absolute inset-0"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
      <div class="max-w-2xl">
        <h1 data-field="hero_titel" class="font-display text-4xl sm:text-5xl lg:text-6xl text-white font-bold leading-tight mb-6">
          <?= page_content('polski', 'hero_titel', 'Remonty i przebudowy<br>w Holandii') ?>
        </h1>
        <p data-field="hero_subtitel" class="text-stone-300 text-lg sm:text-xl mb-8 leading-relaxed">
          <?= e(page_content('polski', 'hero_subtitel', '')) ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
          <a href="#kontakt" class="bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded text-lg font-semibold transition-colors text-center">Zapytaj o wycenę</a>
          <a href="tel:<?= e(site('company.phone')) ?>" class="border-2 border-white/30 hover:border-white/60 text-white px-8 py-4 rounded text-lg font-medium transition-colors text-center">
            <svg class="w-5 h-5 inline mr-2 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            Zadzwoń: 06 160 357 54
          </a>
        </div>
        <div class="mt-8 flex items-center gap-3">
          <div class="stars text-lg">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <span class="text-stone-400 text-sm">5.0 na Google &middot; Polecany na Werkspot</span>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: hero -->


  <!-- SECTION: dlaczego -->
  <section id="dlaczego" class="py-20 md:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Dlaczego my</span>
        <h2 data-field="dlaczego_titel" class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold">
          <?= e(page_content('polski', 'dlaczego_titel', 'Polski wykonawca, holenderska jakość')) ?>
        </h2>
        <p class="text-rww-muted text-lg leading-relaxed"><?= e(page_content('polski', 'dlaczego_tekst', '')) ?></p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 fade-in">
        <div class="text-center p-8 bg-rww-light rounded-lg">
          <div class="w-16 h-16 bg-rww-red/10 rounded-full flex items-center justify-center mx-auto mb-5">
            <svg class="w-7 h-7 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
          </div>
          <h3 class="font-display text-xl text-rww-dark font-semibold mb-3">Mówimy po polsku</h3>
          <p class="text-rww-muted text-sm leading-relaxed">Cała komunikacja po polsku. Żadnych nieporozumień, żadnej bariery językowej. Od pierwszej rozmowy do odbioru końcowego.</p>
        </div>
        <div class="text-center p-8 bg-rww-light rounded-lg">
          <div class="w-16 h-16 bg-rww-red/10 rounded-full flex items-center justify-center mx-auto mb-5">
            <svg class="w-7 h-7 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"/></svg>
          </div>
          <h3 class="font-display text-xl text-rww-dark font-semibold mb-3">Najpierw projekt, potem budowa</h3>
          <p class="text-rww-muted text-sm leading-relaxed">Agnieszka, nasza architektka i projektantka, przygotowuje rysunki budowlane i wizualizacje 3D zanim ruszamy z remontem. Wiesz dokładnie, co dostajesz.</p>
        </div>
        <div class="text-center p-8 bg-rww-light rounded-lg">
          <div class="w-16 h-16 bg-rww-red/10 rounded-full flex items-center justify-center mx-auto mb-5">
            <svg class="w-7 h-7 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="font-display text-xl text-rww-dark font-semibold mb-3">Doświadczenie w Holandii i Polsce</h3>
          <p class="text-rww-muted text-sm leading-relaxed">Realizacje zarówno w Holandii, jak i w Polsce. Znamy holenderskie przepisy budowlane i polską etykę pracy.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: dlaczego -->


  <!-- SECTION: uslugi -->
  <section id="uslugi" class="py-20 md:py-28 bg-rww-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Usługi</span>
        <h2 data-field="uslugi_titel" class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold"><?= e(page_content('polski', 'uslugi_titel', 'Co robimy')) ?></h2>
        <p class="text-rww-muted text-lg">Jeden wykonawca, jeden kontakt, jeden harmonogram. Od łazienki po poddasze.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">
        <?php
        $uslugi = [
          ['titel' => 'Łazienki na wymiar', 'tekst' => 'Kompleksowy remont łazienki: glazura, armatura, meble na wymiar z betonu ciré.', 'img' => 'Fotos/20230329_151357.jpg'],
          ['titel' => 'Kuchnie na wymiar', 'tekst' => 'Od projektu do montażu. Agnieszka projektuje, Raphaël buduje. Włącznie z instalacją i wykończeniem.', 'img' => 'Fotos/20230329_151320.jpg'],
          ['titel' => 'Kompleksowe remonty mieszkań', 'tekst' => 'Łazienka, kuchnia, podłogi, poddasze, malowanie — wszystko naraz, jeden zespół.', 'img' => 'Fotos/IMG-20230330-WA0000 (1).jpeg'],
          ['titel' => 'Tynkowanie i wykończenia', 'tekst' => 'Gładkie ściany i sufity. Beton ciré, mikrobeton i tradycyjne tynki. Perfekcyjnie gładkie wykończenie.', 'img' => 'Fotos/IMG-20230330-WA0002.jpg'],
          ['titel' => 'Podłogi i glazura', 'tekst' => 'Ogrzewanie podłogowe, wylewki, wyrównanie i glazura. Profesjonalna robota do ostatniego detalu.', 'img' => 'Fotos/20180410_104638.jpg'],
          ['titel' => 'Projekt wnętrz i wizualizacja', 'tekst' => 'Agnieszka zaprojektuje Twoje wnętrze i przygotuje wizualizacje 3D. Zobaczysz efekt zanim zaczniemy.', 'img' => 'Fotos/20230329_151317.jpg'],
        ];
        foreach ($uslugi as $u): ?>
        <div class="project-card group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow">
          <div class="aspect-[4/3] overflow-hidden">
            <img src="<?= e($u['img']) ?>" alt="<?= e($u['titel']) ?>" class="w-full h-full object-cover" loading="lazy">
          </div>
          <div class="p-6">
            <h3 class="font-display text-xl text-rww-dark font-semibold mb-2"><?= e($u['titel']) ?></h3>
            <p class="text-rww-muted text-sm leading-relaxed"><?= e($u['tekst']) ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- /SECTION: uslugi -->


  <!-- SECTION: realizacje -->
  <section id="realizacje" class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Nasze prace</span>
        <h2 data-field="realizacje_titel" class="font-display text-3xl sm:text-4xl lg:text-5xl text-white mt-4 mb-6 font-bold"><?= e(page_content('polski', 'realizacje_titel', 'Realizacje')) ?></h2>
        <p class="text-stone-400 text-lg">Od remontów łazienek po kompleksowe przebudowy. Wybór naszych prac z regionu.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 fade-in">
        <?php
        $projecten = array_filter(get_published_posts(), fn($p) => ($p['categorie'] ?? '') === 'projecten');
        usort($projecten, fn($a, $b) => strcmp($b['datum'] ?? '', $a['datum'] ?? ''));
        $projecten = array_slice($projecten, 0, 6);
        foreach ($projecten as $project): ?>
        <div class="project-card group relative rounded-lg overflow-hidden aspect-[4/3]">
          <img src="<?= e($project['afbeelding'] ?? '') ?>" alt="<?= e($project['titel'] ?? '') ?>" class="w-full h-full object-cover" loading="lazy">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
            <div class="absolute bottom-0 left-0 right-0 p-5">
              <h3 class="text-white font-display text-lg font-semibold"><?= e($project['titel'] ?? '') ?></h3>
              <p class="text-stone-300 text-sm"><?= e($project['samenvatting'] ?? '') ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- /SECTION: realizacje -->


  <!-- SECTION: opinie -->
  <section id="opinie" class="py-20 md:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
        <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Opinie</span>
        <h2 data-field="opinie_titel" class="font-display text-3xl sm:text-4xl lg:text-5xl text-rww-dark mt-4 mb-6 font-bold"><?= e(page_content('polski', 'opinie_titel', 'Co mówią nasi klienci')) ?></h2>
        <div class="flex items-center justify-center gap-2 mb-4">
          <div class="stars text-2xl">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <p class="text-rww-muted text-lg">5.0 na Google. Prawdziwe opinie holenderskich klientów — w oryginale.</p>
      </div>

      <?php $reviews_lang = 'pl'; include __DIR__ . '/includes/reviews.php'; ?>
    </div>
  </section>
  <!-- /SECTION: opinie -->


  <!-- SECTION: o-nas -->
  <section id="o-nas" class="py-20 md:py-28 bg-rww-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center fade-in">
        <div>
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">O nas</span>
          <h2 data-field="onas_titel" class="font-display text-3xl sm:text-4xl text-rww-dark mt-4 mb-6 font-bold"><?= e(page_content('polski', 'onas_titel', '')) ?></h2>
          <div class="space-y-4 text-rww-text leading-relaxed">
            <p data-field="onas_tekst_1"><?= e(page_content('polski', 'onas_tekst_1', '')) ?></p>
            <p data-field="onas_tekst_2"><?= e(page_content('polski', 'onas_tekst_2', '')) ?></p>
            <p data-field="onas_tekst_3"><?= e(page_content('polski', 'onas_tekst_3', '')) ?></p>
          </div>
          <div class="mt-8 flex flex-col sm:flex-row gap-6">
            <div><p class="text-rww-red font-display text-3xl font-bold">20+</p><p class="text-rww-muted text-sm">lat doświadczenia</p></div>
            <div><p class="text-rww-red font-display text-3xl font-bold">5.0</p><p class="text-rww-muted text-sm">ocena na Google</p></div>
            <div><p class="text-rww-red font-display text-3xl font-bold">100%</p><p class="text-rww-muted text-sm">polecany na Werkspot</p></div>
          </div>
        </div>
        <div class="relative">
          <img src="Fotos/20230329_151355.jpg" alt="Prace RWW Bouw" class="rounded-lg shadow-xl w-full" loading="lazy">
          <div class="absolute -bottom-6 -left-6 bg-rww-dark text-white p-6 rounded-lg shadow-lg hidden lg:block">
            <p class="font-display text-lg font-semibold">&ldquo;Najpierw projekt,<br>potem budowa.&rdquo;</p>
          </div>
        </div>
      </div>

      <div class="mt-16 pt-12 border-t border-stone-200 fade-in">
        <h3 class="font-display text-xl text-rww-dark font-semibold mb-4">Obszar działania</h3>
        <p class="text-rww-muted">RWW Bouw działa w <strong class="text-rww-text">Amersfoort</strong>, <strong class="text-rww-text">Bunschoten-Spakenburg</strong>, <strong class="text-rww-text">Utrecht</strong> i okolicach. Przyjeżdżamy do Ciebie na bezpłatną wycenę.</p>
      </div>
    </div>
  </section>
  <!-- /SECTION: o-nas -->


  <!-- SECTION: kontakt -->
  <section id="kontakt" class="py-20 md:py-28 bg-rww-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
        <div class="fade-in">
          <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Kontakt</span>
          <h2 data-field="kontakt_titel" class="font-display text-3xl sm:text-4xl text-white mt-4 mb-6 font-bold"><?= e(page_content('polski', 'kontakt_titel', 'Umów się na wycenę')) ?></h2>
          <p class="text-stone-400 text-lg leading-relaxed mb-8">Opowiedz nam o swoim projekcie. Odpowiadamy po polsku w ciągu 24 godzin.</p>

          <div class="space-y-6">
            <a href="tel:<?= e(site('company.phone')) ?>" class="flex items-center gap-4 text-white hover:text-rww-red transition-colors group">
              <div class="w-12 h-12 bg-rww-red/20 group-hover:bg-rww-red/30 rounded-full flex items-center justify-center transition-colors">
                <svg class="w-5 h-5 text-rww-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              </div>
              <div><p class="font-semibold text-lg">Zadzwoń do Raphaëla</p><p class="text-stone-400">06 160 357 54</p></div>
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
            <?= render_form('contact-pl') ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /SECTION: kontakt -->


<?php require_once __DIR__ . '/includes/footer.php'; ?>
