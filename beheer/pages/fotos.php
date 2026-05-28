<?php
/**
 * EASEO CMS — Projectfoto's per dienstpagina
 * Upload, alt-tekst bewerken en verwijderen.
 */
require_once EASEO_ROOT . '/includes/service-fotos.php';

$diensten = [
    'badkamer'  => 'Badkamer renovatie',
    'keuken'    => 'Keuken renovatie',
    'afbouw'    => 'Afbouw',
    'interieur' => 'Interieur',
    'stucwerk'  => 'Stucwerk',
    'vloeren'   => 'Vloeren',
    'nieuwbouw' => 'Nieuwbouw',
    'renovatie' => 'Renovatie',
];

// ── Upload ────────────────────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['foto_file'])) {
    if (!verify_csrf()) {
        $_SESSION['flash_error'] = 'Ongeldig CSRF token.';
    } else {
        $slug = trim($_POST['dienst_slug'] ?? '');
        $alt  = trim($_POST['foto_alt']    ?? '');
        if (!array_key_exists($slug, $diensten)) {
            $_SESSION['flash_error'] = 'Onbekende dienst.';
        } elseif ($alt === '') {
            $_SESSION['flash_error'] = 'Vul een alt-tekst in voor de foto.';
        } else {
            $result = add_service_foto($slug, $_FILES['foto_file'], $alt);
            if ($result['success']) {
                $_SESSION['flash_success'] = 'Foto geüpload.';
                audit_log('service_foto_upload', "{$slug}: " . $_FILES['foto_file']['name']);
            } else {
                $_SESSION['flash_error'] = $result['error'] ?? 'Upload mislukt.';
            }
        }
    }
    header('Location: /beheer/?tab=fotos#' . urlencode($slug ?? ''));
    exit;
}

// ── Alt-tekst bijwerken ───────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_alt'])) {
    if (!verify_csrf()) {
        $_SESSION['flash_error'] = 'Ongeldig CSRF token.';
    } else {
        $slug = trim($_POST['dienst_slug'] ?? '');
        $id   = trim($_POST['foto_id']    ?? '');
        $alt  = trim($_POST['foto_alt']   ?? '');
        if (array_key_exists($slug, $diensten) && $id !== '') {
            update_service_foto_alt($slug, $id, $alt);
            $_SESSION['flash_success'] = 'Alt-tekst bijgewerkt.';
        }
    }
    header('Location: /beheer/?tab=fotos#' . urlencode($slug ?? ''));
    exit;
}

// ── Verwijderen ───────────────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_foto'])) {
    if (!verify_csrf()) {
        $_SESSION['flash_error'] = 'Ongeldig CSRF token.';
    } else {
        $slug = trim($_POST['dienst_slug'] ?? '');
        $id   = trim($_POST['foto_id']    ?? '');
        if (array_key_exists($slug, $diensten) && $id !== '') {
            delete_service_foto($slug, $id);
            $_SESSION['flash_success'] = 'Foto verwijderd.';
            audit_log('service_foto_verwijderd', "{$slug}: {$id}");
        }
    }
    header('Location: /beheer/?tab=fotos#' . urlencode($slug ?? ''));
    exit;
}
?>

<div class="flex items-center justify-between mb-8">
    <h1 class="text-2xl font-bold text-white">Projectfoto's</h1>
    <span class="text-sm text-gray-500">Foto's per dienstpagina — alleen alt-tekst vereist</span>
</div>

<?php foreach ($diensten as $slug => $naam):
    $fotos = get_service_fotos($slug);
    $aantalFotos = count($fotos);
?>
<div class="admin-card mb-6" id="<?= e($slug) ?>">

    <!-- Koptekst -->
    <div class="flex items-center justify-between border-b border-gray-700 pb-4 mb-5">
        <div>
            <h2 class="text-lg font-semibold text-white"><?= e($naam) ?></h2>
            <span class="text-xs text-gray-500"><?= $aantalFotos ?> foto<?= $aantalFotos !== 1 ? '\'s' : '' ?></span>
        </div>
        <a href="/<?= e($slug) ?>.php" target="_blank"
           class="text-xs text-blue-400 hover:text-blue-300 flex items-center gap-1">
            Bekijk pagina
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
            </svg>
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- ── Links: upload ──────────────────────────────────────────────── -->
        <div>
            <form method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="dienst_slug" value="<?= e($slug) ?>">

                <!-- Dropzone -->
                <label for="file-<?= e($slug) ?>"
                       class="flex flex-col items-center justify-center gap-2 border-2 border-dashed border-gray-600 rounded-lg p-6 text-center hover:border-blue-500 transition-colors cursor-pointer mb-3">
                    <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                    </svg>
                    <span class="text-gray-400 text-sm">Klik om een foto te kiezen</span>
                    <span class="text-gray-600 text-xs">JPEG, PNG, WebP — max 10 MB</span>
                    <input type="file" id="file-<?= e($slug) ?>" name="foto_file"
                           accept="image/*" class="hidden" required>
                </label>

                <!-- Alt-tekst -->
                <div class="mb-3">
                    <label class="block text-sm text-gray-400 mb-1">
                        Alt-tekst
                        <span class="text-gray-600 font-normal">(verplicht, helpt SEO)</span>
                    </label>
                    <input type="text" name="foto_alt"
                           placeholder="Bijv. &quot;Moderne badkamer renovatie Amersfoort&quot;"
                           class="admin-input w-full text-sm" required>
                </div>

                <button type="submit" class="btn-admin btn-admin-primary text-sm w-full">
                    + Foto toevoegen
                </button>
            </form>
        </div>

        <!-- ── Rechts: bestaande foto's ──────────────────────────────────── -->
        <div>
            <?php if (empty($fotos)): ?>
            <div class="flex items-center justify-center h-full min-h-[120px] text-gray-600 text-sm">
                Nog geen foto's — upload er een links.
            </div>
            <?php else: ?>
            <div class="space-y-3 max-h-[420px] overflow-y-auto pr-1">
                <?php foreach ($fotos as $foto): ?>
                <div class="flex items-start gap-3 p-3 bg-gray-800/60 rounded-lg">

                    <!-- Thumbnail -->
                    <img src="<?= e($foto['thumb'] ?? $foto['url']) ?>"
                         alt="<?= e($foto['alt']) ?>"
                         class="w-20 h-20 object-cover rounded flex-shrink-0 bg-gray-700">

                    <!-- Alt-tekst bewerken -->
                    <form method="POST" class="flex-1 min-w-0 flex flex-col gap-1.5">
                        <?= csrf_field() ?>
                        <input type="hidden" name="dienst_slug" value="<?= e($slug) ?>">
                        <input type="hidden" name="foto_id"    value="<?= e($foto['id']) ?>">
                        <div class="flex gap-2">
                            <input type="text" name="foto_alt"
                                   value="<?= e($foto['alt']) ?>"
                                   placeholder="Alt-tekst"
                                   class="admin-input flex-1 text-sm py-1.5">
                            <button type="submit" name="update_alt"
                                    class="btn-admin-sm shrink-0 text-xs">
                                Opslaan
                            </button>
                        </div>
                        <p class="text-xs text-gray-600 truncate" title="<?= e($foto['url']) ?>">
                            <?= e($foto['url']) ?>
                        </p>
                    </form>

                    <!-- Verwijderen -->
                    <form method="POST" class="shrink-0"
                          onsubmit="return confirm('Foto verwijderen? Dit kan niet ongedaan worden.')">
                        <?= csrf_field() ?>
                        <input type="hidden" name="dienst_slug" value="<?= e($slug) ?>">
                        <input type="hidden" name="foto_id"    value="<?= e($foto['id']) ?>">
                        <button type="submit" name="delete_foto"
                                class="p-1.5 rounded text-gray-500 hover:text-red-400 hover:bg-red-900/30 transition-colors"
                                title="Verwijderen">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </form>

                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>

    </div>
</div>
<?php endforeach; ?>
