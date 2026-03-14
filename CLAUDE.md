# RWW Bouw — Design System

## Kleurenpalet

Afgeleid van het logo (zwart met donkerrode accenten):

| Naam | Hex | Gebruik |
|------|-----|---------|
| rww-dark | `#1C1917` | Donkere achtergronden, header, footer |
| rww-red | `#991B1B` | Primaire accentkleur, knoppen, iconen |
| rww-red-light | `#B91C1C` | Hover-state van knoppen |
| rww-light | `#FAFAF9` | Lichte achtergrond (stone-50) |
| rww-text | `#44403C` | Bodytekst (stone-700) |
| rww-muted | `#78716C` | Muted tekst (stone-500) |
| rww-stone | `#D6D3D1` | Borders, subtiele lijnen |

## Typografie

- **Display/Headings:** Playfair Display (serif) — ambachtelijk, niet corporate
- **Body:** Inter (sans-serif) — leesbaar, modern
- Geladen via Google Fonts CDN

## Stack

- Statische HTML
- Tailwind CSS via CDN (`cdn.tailwindcss.com`)
- Tailwind config inline in `<script>` tag
- Google Fonts via CDN
- Vanilla JavaScript (geen frameworks)
- Geen npm, geen build tools

## Bestandsstructuur

```
rww-website/
├── index.html          ← Complete homepage met alle secties
├── polski.html         ← Poolse landingspagina (lang="pl")
├── 404.html            ← Styled 404 pagina
├── css/custom.css      ← Aanvullende styles (animaties, hover-effecten)
├── js/main.js          ← Mobiel menu, smooth scroll, fade-in animaties
├── Fotos/              ← Echte projectfoto's
├── rwwbouw-logo.png    ← Logo (zwart met rode accenten)
└── CLAUDE.md           ← Dit bestand
```

## CMS-voorbereiding

- HTML-comments markeren secties: `<!-- SECTION: hero -->`, `<!-- SECTION: diensten -->`, etc.
- `data-field` attributen op bewerkbare content-elementen
- Header en footer als aparte blokken voor toekomstige PHP-includes

## Secties op homepage

1. **Hero** — Grote projectfoto, hoofdkop, twee CTA's
2. **Werkwijze** — "Eerst tekenen, dan bouwen" in 4 stappen
3. **Diensten** — 6 diensten in grid met foto's
4. **Projecten** — Fotogrid met hover-overlays
5. **Reviews** — Google (6) + Werkspot (6) reviews
6. **Over ons** — Verhaal Raphaël + Agnieszka, statistieken
7. **Contact** — Formulier + contactgegevens
8. **Footer** — Bedrijfsinfo, diensten, "Powered by EASEO"

## Tone of Voice

- Nederlands
- Eerlijk, direct, menselijk
- Geen: "ontzorgen", "full service", "van A tot Z", "droomhuis", "jong dynamisch team"
- Wel: concrete omschrijvingen, klantwoorden uit reviews, "eerst tekenen, dan bouwen"

## Poolse landingspagina (polski.html)

- Volledig in het Pools, zelfde design/kleuren/fonts als hoofdsite
- Reviews in Nederlands met Poolse samenvattingen erboven
- Header: NL-link naar index.html | index.html heeft PL-link naar polski.html
- Doelgroep: 200.000+ Polen in Nederland die een Poolssprekende aannemer zoeken

## Poolse Google Ads zoektermen

Bijna geen concurrentie op deze termen — geschikt voor Google Ads campagnes:

- polski wykonawca holandia
- polski wykonawca amersfoort
- remont łazienki holandia
- polska ekipa remontowa utrecht
- polski glazurnik holandia
- remont kuchni holandia
- polskie firmy budowlane w holandii
- polski tynkarz holandia
- remont mieszkania holandia
- polska firma remontowa amersfoort
