# Claude Code Opdracht: Dynamische Pagina's Aanmaken

## Context

Het EASEO CMS heeft nu een vaste set pagina's die bij de setup worden aangemaakt. Klanten kunnen de content bewerken maar geen nieuwe pagina's toevoegen. Dat moet veranderen.

Klanten moeten vanuit het admin panel nieuwe pagina's kunnen aanmaken. Elke pagina gebruikt automatisch de standaard header en footer, krijgt een slug, en kan optioneel in het menu verschijnen (inclusief als sub-item).

---

## 1. Datastructuur

### data/pages.json (NIEUW)

```json
{
  "pages": [
    {
      "id": "p_abc123",
      "title": "Over ons",
      "slug": "over-ons",
      "content": "<p>HTML content hier</p>",
      "parent": null,
      "sort_order": 1,
      "status": "published",
      "show_in_menu": true,
      "menu_label": "Over ons",
      "seo_title": "",
      "seo_description": "",
      "image": "",
      "template": "default",
      "created_at": "2026-03-06",
      "updated_at": "2026-03-06"
    },
    {
      "id": "p_def456",
      "title": "Ons team",
      "slug": "over-ons/ons-team",
      "content": "<p>Subpagina content</p>",
      "parent": "p_abc123",
      "sort_order": 1,
      "status": "published",
      "show_in_menu": true,
      "menu_label": "Ons team",
      "seo_title": "",
      "seo_description": "",
      "image": "",
      "template": "default",
      "created_at": "2026-03-06",
      "updated_at": "2026-03-06"
    }
  ]
}
```

### Templates

Elke pagina heeft een `template` veld. Start met twee:

- `default` — Gewoon header + content + footer. Content is vrije HTML.
- `contact` — Header + content + contactformulier + footer.

Later uitbreidbaar maar nu niet meer nodig.

---

## 2. URL Routing

### .htaccess aanpassing

Voeg een rewrite rule toe die dynamische pagina's afvangt. De logica:

1. Bestaande PHP-bestanden (index.php, blog.php, contact.php, etc.) hebben voorrang
2. Bestaande bestanden en mappen hebben voorrang
3. Alles wat overblijft gaat naar `pagina-router.php`

```apache
# Dynamische pagina's (NA bestaande regels, VOOR de 404)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^([a-z0-9-]+)/?$ pagina-router.php?slug=$1 [L,QSA]
RewriteRule ^([a-z0-9-]+)/([a-z0-9-]+)/?$ pagina-router.php?slug=$1/$2 [L,QSA]
```

### pagina-router.php (NIEUW)

```php
<?php
require_once __DIR__ . '/includes/content.php';

$slug = $_GET['slug'] ?? '';
$slug = rtrim($slug, '/');

// Laad pages.json
$pages_file = __DIR__ . '/data/pages.json';
if (!file_exists($pages_file)) {
    include __DIR__ . '/404.php';
    exit;
}

$pages_data = json_decode(file_get_contents($pages_file), true);
$page = null;

foreach ($pages_data['pages'] as $p) {
    if ($p['slug'] === $slug && $p['status'] === 'published') {
        $page = $p;
        break;
    }
}

if (!$page) {
    include __DIR__ . '/404.php';
    exit;
}

// SEO
$seo_title = $page['seo_title'] ?: $page['title'] . ' | ' . site('company.name');
$seo_description = $page['seo_description'] ?: '';

// Render
include __DIR__ . '/includes/header.php';
?>

<main>
  <section style="max-width: 800px; margin: 0 auto; padding: 2rem 1rem;">
    <h1><?= htmlspecialchars($page['title']) ?></h1>
    <div class="page-content">
      <?= $page['content'] ?>
    </div>
  </section>

  <?php if ($page['template'] === 'contact'): ?>
    <?php include __DIR__ . '/includes/contact-form.php'; ?>
  <?php endif; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
```

---

## 3. Admin Panel — Pagina's beheren

### Nieuw menu-item in sidebar

Voeg "Pagina's" toe aan de admin sidebar, tussen "Content" en "Blog". Icoon: een document-icoon of vergelijkbaar.

### beheer/pages/paginas.php (NIEUW)

**Overzichtspagina:**
- Tabel met alle pagina's: titel, slug, status, menu-positie, acties (bewerken/verwijderen)
- Subpagina's ingesprongen onder hun parent
- Knop "Nieuwe pagina" bovenaan
- Drag & drop of volgorde-nummering voor sortering

**Bewerkpagina (action=edit of action=new):**

Formuliervelden:

| Veld | Type | Tooltip |
|------|------|---------|
| Titel | text | "De titel van de pagina. Wordt getoond als heading bovenaan de pagina." |
| Slug | text (auto uit titel) | "Het webadres van deze pagina. Wordt automatisch aangemaakt. Pas alleen aan als je een goede reden hebt." |
| Parent | select (dropdown) | "Maak dit een subpagina van een andere pagina. Laat leeg voor een hoofdpagina." |
| Content | textarea (HTML) | "De inhoud van de pagina in HTML. Gebruik <p> voor alinea's, <h2> voor tussenkopjes, <strong> voor vet, <a href=\"...\"> voor links." |
| Afbeelding | media picker | "Een optionele uitgelichte afbeelding voor deze pagina." |
| Template | select | "Default = standaard pagina. Contact = pagina met contactformulier onderaan." |
| Tonen in menu | checkbox | "Vink aan om deze pagina automatisch in het hoofdmenu te tonen." |
| Menu label | text | "De tekst die in het menu verschijnt. Laat leeg om de paginatitel te gebruiken." |
| Status | select (published/draft) | "Concept-pagina's zijn alleen zichtbaar in het beheerpanel." |
| SEO titel | text + 60 char teller | "Maximaal 60 tekens. Dit is wat Google toont als paginatitel." |
| SEO omschrijving | text + 155 char teller | "Maximaal 155 tekens. De beschrijving onder de paginatitel in Google." |

**Slug generatie:**
- Automatisch vanuit titel bij nieuwe pagina's
- Lowercase, spaties → hyphens, speciale tekens verwijderen
- Als er een parent is: parent-slug/eigen-slug
- Slug is bewerkbaar maar toont waarschuwing: "Het wijzigen van de slug breekt bestaande links. Stel een redirect in."

**Verwijderen:**
- Bevestigingsdialoog
- Als pagina subpagina's heeft: "Deze pagina heeft subpagina's. Verwijder eerst de subpagina's."
- Bij verwijdering: bied optie om automatisch een redirect aan te maken

---

## 4. Menu-integratie

### Aanpassing includes/navigation.php

De navigatie-rendering moet twee bronnen combineren:

1. **Handmatige menu-items** uit data/navigation.json (bestaande functionaliteit)
2. **Dynamische pagina's** uit data/pages.json waar `show_in_menu: true`

Logica:
- Handmatige items hebben altijd voorrang (ze staan in de volgorde die de gebruiker heeft bepaald)
- Dynamische pagina's worden ná de handmatige items getoond, tenzij ze al handmatig in het menu staan (check op URL-match)
- Subpagina's worden als dropdown/sub-items gerenderd onder hun parent

### Aanpassing beheer/pages/navigatie.php

Voeg een sectie toe die toont welke pagina's automatisch in het menu staan:

"Automatische menu-items — Deze pagina's worden automatisch in het menu getoond omdat 'Tonen in menu' is aangevinkt in de pagina-instellingen."

Met een link naar de pagina-editor om dit te wijzigen.

---

## 5. Sitemap en RSS

### sitemap.php aanpassen

Voeg dynamische pagina's (status: published) toe aan de sitemap.

### feed.php

Geen aanpassing nodig — RSS is alleen voor blogposts.

---

## 6. Aanpassingen bestaande bestanden

### install.php

Voeg `data/pages.json` toe aan de bestanden die bij installatie worden aangemaakt:

```json
{
  "pages": []
}
```

### site.template.json

Geen aanpassing nodig.

### .gitignore

Voeg `data/pages.json` toe aan de exclusielijst.

---

## 7. Volgorde

1. Maak `data/pages.json` met lege structuur
2. Maak `pagina-router.php` in de root
3. Pas `.htaccess` aan met rewrite rules voor dynamische pagina's
4. Maak `beheer/pages/paginas.php` — overzicht + editor
5. Voeg "Pagina's" toe aan de admin sidebar
6. Voeg slug-generatie JavaScript toe (auto vanuit titel)
7. Pas `includes/navigation.php` aan voor menu-integratie
8. Pas `sitemap.php` aan
9. Pas `install.php` aan
10. Voeg tooltips toe aan alle nieuwe velden
11. Test alles

## 8. Controleer na afloop

- [ ] Nieuwe pagina aanmaken via admin → verschijnt op juiste URL
- [ ] Subpagina aanmaken → URL is parent-slug/sub-slug
- [ ] "Tonen in menu" aan → pagina verschijnt in navigatie
- [ ] "Tonen in menu" uit → pagina verdwijnt uit navigatie
- [ ] Subpagina verschijnt als sub-item in menu
- [ ] Concept-pagina → niet zichtbaar op frontend, wel in admin
- [ ] Slug wordt auto-gegenereerd vanuit titel
- [ ] Slug handmatig aanpasbaar
- [ ] Parent dropdown toont alleen hoofdpagina's (geen sub-sub)
- [ ] Verwijderen met subpagina's → foutmelding
- [ ] Verwijderen zonder subpagina's → bevestiging → weg
- [ ] SEO-velden werken met karakter-tellers
- [ ] Media picker werkt voor afbeelding
- [ ] Template "contact" toont contactformulier
- [ ] Template "default" toont alleen content
- [ ] Onbekende slug → 404 pagina
- [ ] Bestaande PHP-pagina's (blog.php, contact.php etc.) werken nog
- [ ] Sitemap bevat dynamische pagina's
- [ ] Tooltips aanwezig op alle velden
- [ ] Pagina's in admin sidebar zichtbaar
- [ ] data/pages.json wordt aangemaakt bij install.php
- [ ] Geen PHP errors op frontend of backend
