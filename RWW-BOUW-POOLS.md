# Claude Code Opdracht: RWW Bouw — Poolse Landingspagina

## Context

RWW Bouw is een Pools-Nederlands renovatiebedrijf. De eigenaren en het team zijn van Poolse afkomst. Er wonen 200.000+ Polen in Nederland — veel daarvan zijn huiseigenaren die een aannemer zoeken die hun taal spreekt. Bijna niemand adverteert op Poolse zoektermen in de Nederlandse markt. Dit is een open kanaal.

De hoofdsite is in het Nederlands. Deze opdracht voegt één Poolse landingspagina toe die als apart instappunt dient — voor Google Ads, voor social media in Poolse Facebook-groepen, en voor mond-tot-mondreclame in de Poolse gemeenschap.

---

## Wat te bouwen

Eén bestand: `polski.html` in de root van het project.

Geen vertaling van de volledige site. Een op zichzelf staande landingspagina met dezelfde look en feel als de hoofdsite, maar volledig in het Pools, gericht op Polen in Nederland.

---

## Structuur van polski.html

### 1. Hero

- Zelfde grote projectfoto als de hoofdsite
- Kop in het Pools, bijvoorbeeld: **"Remonty i przebudowy w Holandii"**
- Subkop: **"Polski wykonawca z siedzibą w Amersfoort. Mówimy po polsku."**
- Twee CTA's:
  - "Zapytaj o wycenę" (primair — link naar contactsectie)
  - "Zadzwoń: 0616035754" (secundair — tel: link)

### 2. Waarom RWW Bouw (in het Pools)

Kernboodschap: "U hoeft niet te zoeken naar een Nederlander die u niet begrijpt. Wij spreken uw taal, kennen uw verwachtingen, en leveren kwaliteit waar u op kunt vertrouwen."

Drie blokken:

**Mówimy po polsku**
Hele communicatie in het Pools. Geen misverstanden, geen taalbarrière. Van eerste gesprek tot oplevering.

**Najpierw projekt, potem budowa**
Agnieszka Sejfryd, architect i projektantka, maakt bouwtekeningen en 3D-visualisaties voordat de verbouwing begint. U ziet precies wat u krijgt.

**Doświadczenie w Holandii i Polsce**
Projecten in zowel Nederland als Polen (Częstochowa). Kennis van Nederlandse bouwvoorschriften én Poolse werkethiek.

### 3. Diensten (in het Pools)

Korte grid, zelfde als hoofdsite:

- **Łazienki na wymiar** (Badkamers op maat)
- **Kuchnie na wymiar** (Keukens op maat)
- **Kompleksowe remonty mieszkań** (Complete woningrenovatie)
- **Tynkowanie i wykończenia** (Stucwerk & afwerking)
- **Podłogi i glazura** (Vloeren & tegelwerk)
- **Projekt wnętrz i wizualizacja** (Interieurontwerp & visualisatie)

Met dezelfde projectfoto's als de hoofdsite.

### 4. Projectfoto's

Selectie van 4-6 beste projectfoto's. Geen aparte portfoliopagina — gewoon een visueel grid dat het werk laat spreken. Projectnamen in het Pools waar relevant.

### 5. Reviews

Dezelfde Google-reviews, maar met een Poolse introductie:

**"Co mówią nasi klienci"** (Wat onze klanten zeggen)

De reviews zelf blijven in het Nederlands — dat is authentieker en bewijst dat Nederlandse klanten tevreden zijn. Voeg boven elke review een korte Poolse samenvatting toe van één zin, bijvoorbeeld:

- Rob van Rooij: *"Kompleksowy remont — podłogi, glazura, łazienki, poddasze i malowanie. Polecamy!"*
- Quirijn Bolink: *"Raphaël wykonuje pracę na najwyższym poziomie."*
- Jan-Martijn Koelewijn: *"Profesjonalne tynkowanie. Fantastyczny rezultat."*

En daarna de volledige Nederlandse review. Dit toont aan dat het echte reviews zijn van echte Nederlandse klanten.

Google 5.0 badge erbij.

### 6. Over ons (in het Pools)

Kort:
- Raphaël — eigenaar, aannemer, perfectionist
- Agnieszka Sejfryd — architect, designer, tekeningen en visualisaties
- Team met ervaring in Nederland en Polen
- Gevestigd in Amersfoort, werkgebied: regio Amersfoort, Utrecht, Bunschoten-Spakenburg

### 7. Contactsectie

- Formulier met velden in het Pools:
  - Imię (Naam)
  - Telefon (Telefoon)
  - E-mail
  - Rodzaj projektu (Type project) — dropdown: Łazienka, Kuchnia, Remont całego mieszkania, Tynkowanie, Inne
  - Wiadomość (Bericht)
- Knop: **"Wyślij zapytanie"** (Verstuur aanvraag)
- Telefoon groot: 0616035754
- E-mail: info@rwwbouw.nl
- Tekst: "Odpowiadamy po polsku w ciągu 24 godzin." (We antwoorden in het Pools binnen 24 uur.)

### 8. Footer

- Zelfde footer als hoofdsite
- Link terug naar Nederlandse site: "Strona w języku niderlandzkim →"
- "Powered by EASEO" (klein, muted)

---

## Navigatie

Simpele header:
- RWW Bouw logo (zelfde als hoofdsite)
- Links: Usługi (Diensten) | Realizacje (Projecten) | Opinie (Reviews) | Kontakt
- Taalswitch: klein vlaggetje of "NL" link naar de Nederlandse homepage
- Mobiel: hamburger menu

Op de Nederlandse hoofdsite: voeg een kleine Poolse vlag of "PL" link toe in de header die naar `/polski.html` linkt.

---

## SEO

### Meta tags

```html
<html lang="pl">
<title>Polski wykonawca w Holandii — Remonty i przebudowy | RWW Bouw</title>
<meta name="description" content="Szukasz polskiego wykonawcy w Holandii? RWW Bouw — remonty łazienek, kuchni i całych mieszkań. Mówimy po polsku. Amersfoort i okolice.">
```

### Google Ads zoektermen waar Sylvester op kan adverteren

Dit is het goud. Bijna geen concurrentie op deze termen:

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

Voeg deze als notitie toe in de CLAUDE.md van het project zodat Sylvester ze kan gebruiken voor zijn campagnes.

---

## Technische eisen

- Zelfde stack als hoofdsite: HTML + Tailwind CDN + Google Fonts
- Zelfde kleurenpalet en typografie als de hoofdsite
- Zelfde afbeeldingen (hergebruik uit images/ map)
- Responsive: mobile-first
- Telefoon-link klikbaar op mobiel
- Lazy loading op afbeeldingen
- data-field attributen voor CMS-koppeling later
- Formulier: zelfde structuur als Nederlands formulier, maar Poolse labels en placeholder-teksten

---

## Aanpassing aan hoofdsite

Voeg toe aan de Nederlandse index.html:
- Een kleine Poolse vlag of "PL" tekst-link in de header, rechtsboven
- Linkt naar `polski.html`
- Geen verdere vertalingen op de Nederlandse site

---

## Volgorde

1. Bouw `polski.html` met alle secties
2. Voeg PL-link toe aan de header van index.html
3. Update CLAUDE.md met de Poolse zoektermen-lijst
4. Test responsive op mobiel en desktop

## Controleer na afloop

- [ ] polski.html is volledig in het Pools (geen Nederlandse zinnen behalve reviews)
- [ ] `<html lang="pl">` is gezet
- [ ] SEO title en description in het Pools
- [ ] Alle 6 reviews aanwezig met Poolse samenvatting + Nederlandse originele tekst
- [ ] Contactformulier met Poolse labels
- [ ] Dropdown met projecttypen in het Pools
- [ ] Telefoon klikbaar op mobiel
- [ ] PL-link in header van Nederlandse site
- [ ] NL-link in header van Poolse pagina
- [ ] Zelfde design, kleuren en fonts als hoofdsite
- [ ] "Powered by EASEO" in footer
- [ ] data-field attributen aanwezig
- [ ] Poolse zoektermen in CLAUDE.md
- [ ] Geen placeholder-teksten of stockfoto's
