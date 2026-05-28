<?php
/**
 * EASEO CMS — Eenvoudig foto's per dienst-pagina beheren
 * Opslag: data/service-fotos.json
 * Elk item: { id, url, thumb, alt }
 */
require_once __DIR__ . '/content.php';
require_once __DIR__ . '/media-engine.php';

/**
 * Haal alle foto's op voor één dienst-slug.
 */
function get_service_fotos(string $slug): array {
    $data = load_json('service-fotos.json');
    return $data[$slug] ?? [];
}

/**
 * Upload een foto en koppel hem aan de dienst.
 * Geeft ['success' => true] of ['success' => false, 'error' => '...'] terug.
 */
function add_service_foto(string $slug, array $file, string $alt): array {
    $result = upload_media($file);
    if (!$result['success']) {
        return $result;
    }

    $data = load_json('service-fotos.json');
    if (!isset($data[$slug]) || !is_array($data[$slug])) {
        $data[$slug] = [];
    }

    $data[$slug][] = [
        'id'    => $result['file']['id'],
        'url'   => $result['file']['url'],
        'thumb' => $result['file']['thumb'],
        'alt'   => trim($alt),
    ];

    save_json('service-fotos.json', $data);
    return ['success' => true];
}

/**
 * Verwijder een foto uit de dienst én van schijf.
 */
function delete_service_foto(string $slug, string $id): bool {
    $data = load_json('service-fotos.json');
    if (!isset($data[$slug])) return false;

    foreach ($data[$slug] as $idx => $foto) {
        if ($foto['id'] === $id) {
            delete_media($id);
            array_splice($data[$slug], $idx, 1);
            save_json('service-fotos.json', $data);
            return true;
        }
    }
    return false;
}

/**
 * Pas de alt-tekst van een bestaande foto aan.
 */
function update_service_foto_alt(string $slug, string $id, string $alt): bool {
    $data = load_json('service-fotos.json');
    if (!isset($data[$slug])) return false;

    foreach ($data[$slug] as &$foto) {
        if ($foto['id'] === $id) {
            $foto['alt'] = trim($alt);
            save_json('service-fotos.json', $data);
            return true;
        }
    }
    return false;
}
