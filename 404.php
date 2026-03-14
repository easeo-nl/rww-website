<?php
require_once __DIR__ . '/includes/content.php';

$pageTitle = 'Pagina niet gevonden — ' . site('company.name', 'RWW Bouw');
$metaDescription = '';
$htmlLang = 'nl';

require_once __DIR__ . '/includes/header.php';
?>

  <div class="min-h-[70vh] flex items-center justify-center">
    <div class="text-center px-6">
      <h1 class="font-display text-6xl sm:text-8xl text-rww-dark font-bold mb-4">404</h1>
      <p class="text-rww-muted text-lg mb-8">Deze pagina bestaat niet. Misschien is hij verhuisd, net als een muur tijdens een renovatie.</p>
      <a href="/" class="inline-block bg-rww-red hover:bg-rww-red-light text-white px-8 py-4 rounded font-semibold transition-colors">
        Terug naar de homepage
      </a>
    </div>
  </div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
