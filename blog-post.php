<?php
require_once __DIR__ . '/includes/content.php';
require_once __DIR__ . '/includes/blog-engine.php';
check_setup();

$slug = $_GET['slug'] ?? '';
$post = get_post_by_slug($slug);

if (!$post || ($post['status'] ?? 'concept') !== 'gepubliceerd') {
    http_response_code(404);
    require_once __DIR__ . '/404.php';
    exit;
}

$groepLinks = [
    'badkamer'  => ['url' => '/badkamer.php',  'naam' => 'Badkamers'],
    'keuken'    => ['url' => '/keuken.php',    'naam' => 'Keukens'],
    'stucwerk'  => ['url' => '/stucwerk.php',  'naam' => 'Stucwerk'],
    'vloeren'   => ['url' => '/vloeren.php',   'naam' => 'Vloeren'],
    'renovatie'  => ['url' => '/renovatie.php',  'naam' => 'Renovatie'],
    'interieur'  => ['url' => '/interieur.php',  'naam' => 'Interieur'],
    'nieuwbouw'  => ['url' => '/nieuwbouw.php',  'naam' => 'Nieuwbouw'],
    'afbouw'     => ['url' => '/afbouw.php',     'naam' => 'Afbouw'],
];

$groep = $post['groep'] ?? '';
$dienst = $groepLinks[$groep] ?? null;

$pageTitle = ($post['meta_title'] ?: $post['titel']) . ' | ' . site('company.name', 'RWW Bouw');
$metaDescription = $post['meta_description'] ?: $post['samenvatting'] ?: '';
$htmlLang = 'nl';

require_once __DIR__ . '/includes/header.php';

$dateISO = date('c', strtotime($post['datum']));
?>

<!-- Schema.org Article -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": <?= json_encode($post['titel']) ?>,
    "description": <?= json_encode($post['samenvatting'] ?? '') ?>,
    <?php if ($post['afbeelding']): ?>
    "image": "<?= e($post['afbeelding']) ?>",
    <?php endif; ?>
    "author": {
        "@type": "Organization",
        "name": <?= json_encode(site('company.name', 'RWW Bouw')) ?>
    },
    "publisher": {
        "@type": "Organization",
        "name": <?= json_encode(site('company.name', 'RWW Bouw')) ?>
    },
    "datePublished": "<?= $dateISO ?>"
}
</script>

<!-- SECTION: hero -->
<?php if ($post['afbeelding']): ?>
<section class="relative h-[60vh] min-h-[400px] flex items-end">
  <div class="absolute inset-0">
    <img src="<?= e($post['afbeelding']) ?>" alt="<?= e($post['titel']) ?>" class="w-full h-full object-cover">
    <div class="hero-overlay absolute inset-0"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12 w-full">
    <!-- Breadcrumb -->
    <nav class="text-sm text-stone-400 mb-4">
      <a href="/" class="hover:text-white transition-colors">Home</a>
      <span class="mx-2">/</span>
      <?php if ($dienst): ?>
      <a href="<?= e($dienst['url']) ?>" class="hover:text-white transition-colors"><?= e($dienst['naam']) ?></a>
      <span class="mx-2">/</span>
      <?php endif; ?>
      <span class="text-stone-300"><?= e($post['titel']) ?></span>
    </nav>
    <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl text-white font-bold leading-tight max-w-3xl">
      <?= e($post['titel']) ?>
    </h1>
    <?php if ($post['samenvatting']): ?>
    <p class="text-stone-300 text-lg mt-4 max-w-2xl"><?= e($post['samenvatting']) ?></p>
    <?php endif; ?>
  </div>
</section>
<?php else: ?>
<section class="bg-rww-dark pt-32 pb-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <nav class="text-sm text-stone-400 mb-4">
      <a href="/" class="hover:text-white transition-colors">Home</a>
      <span class="mx-2">/</span>
      <?php if ($dienst): ?>
      <a href="<?= e($dienst['url']) ?>" class="hover:text-white transition-colors"><?= e($dienst['naam']) ?></a>
      <span class="mx-2">/</span>
      <?php endif; ?>
      <span class="text-stone-300"><?= e($post['titel']) ?></span>
    </nav>
    <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl text-white font-bold leading-tight max-w-3xl">
      <?= e($post['titel']) ?>
    </h1>
    <?php if ($post['samenvatting']): ?>
    <p class="text-stone-300 text-lg mt-4 max-w-2xl"><?= e($post['samenvatting']) ?></p>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>
<!-- /SECTION: hero -->

<!-- SECTION: inhoud -->
<section class="py-16 md:py-24 bg-rww-light">
  <div class="max-w-3xl mx-auto px-4 sm:px-6">

    <?php if ($post['inhoud']): ?>
    <div class="prose prose-lg max-w-none text-rww-text leading-relaxed">
      <?= nl2br(e($post['inhoud'])) ?>
    </div>
    <?php endif; ?>

    <?php if ($post['tags']): ?>
    <div class="mt-10 pt-6 border-t border-rww-stone flex flex-wrap gap-2">
      <?php foreach (explode(',', $post['tags']) as $tag): ?>
      <span class="px-3 py-1 bg-white border border-rww-stone text-rww-muted rounded-full text-sm"><?= e(trim($tag)) ?></span>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <!-- Terug-knop -->
    <div class="mt-10 pt-6 border-t border-rww-stone">
      <?php if ($dienst): ?>
      <a href="<?= e($dienst['url']) ?>" class="inline-flex items-center gap-2 text-rww-red hover:text-rww-red-light font-semibold transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        Terug naar <?= e($dienst['naam']) ?>
      </a>
      <?php else: ?>
      <a href="/" class="inline-flex items-center gap-2 text-rww-red hover:text-rww-red-light font-semibold transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        Terug naar home
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- /SECTION: inhoud -->

<!-- SECTION: cta -->
<section class="py-16 md:py-20 bg-rww-dark">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 text-center">
    <span class="text-rww-red font-semibold text-sm uppercase tracking-widest">Interesse?</span>
    <h2 class="font-display text-2xl sm:text-3xl text-white mt-4 mb-4 font-bold">
      Ziet u dit ook in uw woning?
    </h2>
    <p class="text-stone-400 text-lg mb-8">Vertel ons over uw project. We nemen snel contact op voor een vrijblijvende offerte.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="<?= $dienst ? e($dienst['url']) . '#contact' : '/index.php#contact' ?>" class="bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded text-lg font-semibold transition-colors">
        Offerte aanvragen
      </a>
      <a href="tel:<?= e(site('company.phone')) ?>" class="border-2 border-white/30 hover:border-white/60 text-white px-8 py-4 rounded text-lg font-medium transition-colors">
        <svg class="w-5 h-5 inline mr-2 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
        Bel direct: 06 274 544 16
      </a>
    </div>
  </div>
</section>
<!-- /SECTION: cta -->

<?php require_once __DIR__ . '/includes/footer.php'; ?>
