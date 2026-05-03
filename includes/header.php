<?php
/**
 * RWW Bouw — Site header (custom voor RWW, CMS-integrated)
 */
if (session_status() === PHP_SESSION_NONE) session_start();

require_once __DIR__ . '/content.php';
require_once __DIR__ . '/brand.php';

check_setup();

$page_title = $pageTitle ?? site('company.name', 'RWW Bouw');
$meta_desc = $metaDescription ?? '';
$html_lang = $htmlLang ?? 'nl';
$is_polski = ($html_lang === 'pl');
?>
<!DOCTYPE html>
<html lang="<?= $html_lang ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($page_title) ?></title>
  <?php if ($meta_desc): ?>
  <meta name="description" content="<?= e($meta_desc) ?>">
  <?php endif; ?>

  <?php if (site('brand.favicon')): ?>
  <link rel="icon" href="<?= e(site('brand.favicon')) ?>">
  <link rel="apple-touch-icon" href="<?= e(site('brand.favicon')) ?>">
  <?php endif; ?>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'rww-dark': '<?= e(site('brand.color_dark', '#1C1917')) ?>',
            'rww-red': '<?= e(site('brand.color_primary', '#991B1B')) ?>',
            'rww-red-light': '<?= e(site('brand.color_secondary', '#B91C1C')) ?>',
            'rww-light': '#FAFAF9',
            'rww-text': '<?= e(site('brand.color_text', '#44403C')) ?>',
            'rww-muted': '<?= e(site('brand.color_muted', '#78716C')) ?>',
            'rww-stone': '#D6D3D1',
          },
          fontFamily: {
            'display': ['Playfair Display', 'serif'],
            'body': ['Inter', 'sans-serif'],
          },
        },
      },
    }
  </script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/css/custom.css?v=<?= filemtime(__DIR__ . '/../css/custom.css') ?>">

  <?php include __DIR__ . '/tracking-head.php'; ?>
</head>

<body class="font-body text-rww-text bg-rww-light">
  <?php include __DIR__ . '/tracking-body.php'; ?>

  <!-- HEADER -->
  <header class="site-header fixed top-0 left-0 right-0 z-50 bg-rww-dark/90 backdrop-blur-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16 md:h-20">
        <!-- Logo -->
        <a href="<?= $is_polski ? '/polski.php' : '/' ?>" class="flex items-center gap-3">
          <?php if (site('brand.logo')): ?>
            <img src="<?= e(site('brand.logo')) ?>" alt="<?= e(site('company.name')) ?> logo" class="h-10 md:h-12 w-auto">
          <?php endif; ?>
          <span class="text-white font-display text-xl md:text-2xl font-semibold tracking-wide"><?= e(site('company.name', 'RWW Bouw')) ?></span>
        </a>

        <!-- Desktop Nav -->
        <?php if ($is_polski): ?>
        <nav class="hidden md:flex items-center gap-8">
          <a href="#uslugi" class="text-stone-300 hover:text-white transition-colors text-sm font-medium">Us&#322;ugi</a>
          <a href="#realizacje" class="text-stone-300 hover:text-white transition-colors text-sm font-medium">Realizacje</a>
          <a href="#opinie" class="text-stone-300 hover:text-white transition-colors text-sm font-medium">Opinie</a>
          <a href="#kontakt" class="text-stone-300 hover:text-white transition-colors text-sm font-medium">Kontakt</a>
          <a href="/" class="text-stone-400 hover:text-white transition-colors text-xs font-medium border border-stone-700 px-2.5 py-1 rounded">NL</a>
          <a href="#kontakt" class="bg-rww-red hover:bg-rww-red-light text-white px-5 py-2.5 rounded text-sm font-semibold transition-colors">Zapytaj o wycen&#281;</a>
        </nav>
        <?php else: ?>
        <nav class="hidden md:flex items-center gap-8">
          <a href="index.php#werkwijze" class="text-stone-300 hover:text-white transition-colors text-sm font-medium">Werkwijze</a>
          <div class="relative group">
            <a href="/diensten.php" class="text-stone-300 hover:text-white transition-colors text-sm font-medium flex items-center gap-1">
              Diensten
              <svg class="w-3.5 h-3.5 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </a>
            <div class="absolute top-full left-1/2 -translate-x-1/2 pt-2 hidden group-hover:block">
              <div class="bg-stone-900 border border-stone-800 rounded-lg shadow-xl py-2 w-56">
                <a href="/badkamer.php" class="block px-4 py-2 text-stone-300 hover:text-white hover:bg-stone-800 text-sm transition-colors">Badkamers op maat</a>
                <a href="/keuken.php" class="block px-4 py-2 text-stone-300 hover:text-white hover:bg-stone-800 text-sm transition-colors">Keukens op maat</a>
                <a href="/stucwerk.php" class="block px-4 py-2 text-stone-300 hover:text-white hover:bg-stone-800 text-sm transition-colors">Stucwerk en afwerking</a>
                <a href="/vloeren.php" class="block px-4 py-2 text-stone-300 hover:text-white hover:bg-stone-800 text-sm transition-colors">Vloeren en tegelwerk</a>
                <a href="/renovatie.php" class="block px-4 py-2 text-stone-300 hover:text-white hover:bg-stone-800 text-sm transition-colors">Complete woningrenovatie</a>
                <a href="/interieur.php" class="block px-4 py-2 text-stone-300 hover:text-white hover:bg-stone-800 text-sm transition-colors">Interieurontwerp</a>
                <a href="/nieuwbouw.php" class="block px-4 py-2 text-stone-300 hover:text-white hover:bg-stone-800 text-sm transition-colors">Nieuwbouw</a>
                <a href="/afbouw.php" class="block px-4 py-2 text-stone-300 hover:text-white hover:bg-stone-800 text-sm transition-colors">Afbouw</a>
                <div class="border-t border-stone-800 my-1"></div>
                <a href="/diensten.php" class="block px-4 py-2 text-rww-red hover:text-rww-red-light text-sm font-medium transition-colors">Alle diensten →</a>
              </div>
            </div>
          </div>
          <a href="index.php#projecten" class="text-stone-300 hover:text-white transition-colors text-sm font-medium">Projecten</a>
          <a href="index.php#reviews" class="text-stone-300 hover:text-white transition-colors text-sm font-medium">Reviews</a>
          <a href="/over-ons.php" class="text-stone-300 hover:text-white transition-colors text-sm font-medium">Over ons</a>
          <a href="/contact.php" class="text-stone-300 hover:text-white transition-colors text-sm font-medium">Contact</a>
          <a href="/polski.php" class="text-stone-400 hover:text-white transition-colors text-xs font-medium border border-stone-700 px-2.5 py-1 rounded">PL</a>
          <a href="/offerte.php" class="bg-rww-red hover:bg-rww-red-light text-white px-5 py-2.5 rounded text-sm font-semibold transition-colors">Offerte aanvragen</a>
        </nav>
        <?php endif; ?>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="md:hidden text-white p-2" aria-label="Menu">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Menu Overlay -->
  <div id="menu-overlay" class="mobile-menu-overlay fixed inset-0 z-40 md:hidden hidden"></div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="mobile-menu fixed inset-y-0 right-0 w-72 z-50 shadow-2xl md:hidden">
    <div class="flex items-center justify-between p-4 border-b border-stone-800">
      <span class="text-white font-display text-lg">Menu</span>
      <button id="menu-close" class="text-white p-2" aria-label="Menu sluiten">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
    <nav class="flex flex-col p-6 gap-4">
      <?php if ($is_polski): ?>
      <a href="#uslugi" class="text-stone-300 hover:text-white text-lg py-2">Us&#322;ugi</a>
      <a href="#realizacje" class="text-stone-300 hover:text-white text-lg py-2">Realizacje</a>
      <a href="#opinie" class="text-stone-300 hover:text-white text-lg py-2">Opinie</a>
      <a href="#kontakt" class="text-stone-300 hover:text-white text-lg py-2">Kontakt</a>
      <a href="/" class="text-stone-400 hover:text-white text-sm py-2 border-t border-stone-800 mt-2 pt-4">Strona w j&#281;zyku niderlandzkim &rarr;</a>
      <a href="#kontakt" class="bg-rww-red text-white px-5 py-3 rounded text-center font-semibold mt-4">Zapytaj o wycen&#281;</a>
      <?php else: ?>
      <a href="index.php#werkwijze" class="text-stone-300 hover:text-white text-lg py-2">Werkwijze</a>
      <div>
        <a href="/diensten.php" class="text-stone-300 hover:text-white text-lg py-2 block">Diensten</a>
        <div class="pl-4 mt-1 space-y-1">
          <a href="/badkamer.php" class="block text-stone-400 hover:text-white text-sm py-1">Badkamers op maat</a>
          <a href="/keuken.php" class="block text-stone-400 hover:text-white text-sm py-1">Keukens op maat</a>
          <a href="/stucwerk.php" class="block text-stone-400 hover:text-white text-sm py-1">Stucwerk en afwerking</a>
          <a href="/vloeren.php" class="block text-stone-400 hover:text-white text-sm py-1">Vloeren en tegelwerk</a>
          <a href="/renovatie.php" class="block text-stone-400 hover:text-white text-sm py-1">Complete woningrenovatie</a>
          <a href="/interieur.php" class="block text-stone-400 hover:text-white text-sm py-1">Interieurontwerp</a>
          <a href="/nieuwbouw.php" class="block text-stone-400 hover:text-white text-sm py-1">Nieuwbouw</a>
          <a href="/afbouw.php" class="block text-stone-400 hover:text-white text-sm py-1">Afbouw</a>
        </div>
      </div>
      <a href="index.php#projecten" class="text-stone-300 hover:text-white text-lg py-2">Projecten</a>
      <a href="index.php#reviews" class="text-stone-300 hover:text-white text-lg py-2">Reviews</a>
      <a href="/over-ons.php" class="text-stone-300 hover:text-white text-lg py-2">Over ons</a>
      <a href="/contact.php" class="text-stone-300 hover:text-white text-lg py-2">Contact</a>
      <a href="/polski.php" class="text-stone-400 hover:text-white text-sm py-2 border-t border-stone-800 mt-2 pt-4">Strona polska &rarr;</a>
      <a href="/offerte.php" class="bg-rww-red text-white px-5 py-3 rounded text-center font-semibold mt-4">Offerte aanvragen</a>
      <?php endif; ?>
      <a href="tel:<?= e(site('company.phone')) ?>" class="text-stone-300 hover:text-white text-center py-2 mt-2">
        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
        06 274 544 16
      </a>
    </nav>
  </div>
  <!-- /HEADER -->
