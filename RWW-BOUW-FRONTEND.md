# Claude Code Opdracht: RWW Bouw — Frontend Website

## Context

RWW Bouw is een renovatie- en verbouwingsbedrijf uit Bunschoten-Spakenburg/Amersfoort, gerund door Raphaël. Ze doen complete woningrenovaties: badkamers, keukens, stucwerk, vloeren, timmerwerk, schilderwerk. Van tekening tot oplevering.

**Dit is de eerste klantsite via het EASEO CMS reseller-model.** De frontend wordt nu gebouwd. Het CMS wordt er later achter gekoppeld. Bouw de site dus als statische HTML + Tailwind CDN, met duidelijke content-blokken die straks eenvoudig naar PHP-includes en CMS-velden te converteren zijn.

---

## Wat RWW Bouw uniek maakt

Dit leid ik af uit de Google-reviews en de bedrijfsopzet:

### 1. Bouwtekeningen vóór de verbouwing — Agnieszka Sejfryd, architect & designer

Dit is DE onderscheidende factor. Agnieszka maakt professionele bouwtekeningen en 3D-visualisaties voordat er een hamer wordt opgepakt. De klant ziet exact wat hij krijgt. Dit is ongebruikelijk in de lokale markt — de meeste bouwbedrijven beginnen gewoon en "dan zien we wel".

**Werkwijze:** De klant betaalt voor de tekeningen, maar dit bedrag wordt verrekend met de vervolgopdracht. Hetzelfde model als de EASEO Online Marketing Audit: je betaalt voor de diagnose, maar het wordt afgetrokken van de opdracht. Geen risico, wél zekerheid.

**Dit moet prominent op de site staan.** Niet als bijzaak maar als kernproces. "Eerst tekenen, dan bouwen."

### 2. Raphaël stopt niet tot het perfect is

Uit de reviews: "hij stopt pas met zijn werk als de klant én hij zelf tevreden is." Dit is geen slogan — dit is letterlijk wat klanten zeggen. Perfectionisme als werkhouding, niet als marketingclaim.

### 3. Het hele huis, niet één klus

Ze doen niet alleen badkamers. Ze doen badkamer + keuken + stucwerk + vloer + schilderwerk + zolder. Eén aannemer, één aanspreekpunt, één planning. Uit de reviews: "flinke renovatie: vloerrenovatie met broodjesvloer en vloerverwarming, tegelwerk, afbouw toiletten, complete zolderrenovatie en al het buitenschilderwerk."

### 4. Menselijk en betrokken

De timmerman neemt cadeautjes mee voor de dochter van 2. Ze ruimen alles netjes op. "We misten ze bijna toen de klussen klaar waren." Dit is niet standaard in de bouw. Dit is de sfeer die de site moet ademen: vakmanschap met een menselijke kant.

### 5. Bewezen resultaat — 5.0 op Google

Niet 4.2 met een paar neutrale reviews. 5.0 met uitgebreide, emotionele, specifieke klantbeoordelingen. Dit is sociaal bewijs van het sterkste soort.

---

## Design-richting

### NIET doen
- Geen stockfoto's. Alleen echte projectfoto's uit de map `images/`
- Geen generiek bouw-template met oranje helmen en blauwe lucht
- Geen "wij ontzorgen" of "van A tot Z" of "full service" taal
- Geen overdreven animaties of parallax-effecten
- Geen slider/carousel — die converteren niet

### WEL doen
- **Warm, ambachtelijk, eerlijk.** De site moet voelen als een stevig handdruk van iemand die weet wat ie doet.
- **Donkere ondertoon met warme accenten.** Denk aan: donker hout, beton, warm licht. Niet corporate blauw.
- **Foto's groot en prominent.** De projectfoto's zijn het bewijs. Laat ze spreken.
- **Reviews letterlijk citeren.** De woorden van klanten zijn sterker dan elke copy die wij schrijven.
- **Het proces visueel maken.** Tekening → Planning → Uitvoering → Oplevering. Met Agnieszka's rol als eerste stap.

### Kleuren (suggestie, pas aan op basis van logo/materiaal)
- Primair donker: `#1C1917` (warm zwart, stone-900)
- Primair warm: `#A16207` (amber/hout-tint)
- Accent: `#D97706` (amber-600, voor CTA's)
- Licht: `#FAFAF9` (stone-50, achtergrond)
- Tekst: `#44403C` (stone-700)
- Muted: `#78716C` (stone-500)

Als er een RWW Bouw logo met eigen kleuren in de images map zit, gebruik die kleuren en pas het palet aan.

### Typografie
- Google Fonts via CDN
- Display: **DM Serif Display** of **Playfair Display** (ambachtelijk, niet corporate)
- Body: **Inter** of **DM Sans** (leesbaar, modern)

---

## Paginastructuur

### Eén lange homepage met ankers + aparte pagina's voor detail

**Homepage (index.html):**

1. **Hero**
   - Grote projectfoto als achtergrond (beste foto uit de map)
   - Kop: "Renovatie & verbouwing met plan" (of vergelijkbaar — geen "welkom bij")
   - Subkop: kort, scherp, wat ze doen en waar
   - Twee CTA's: "Offerte aanvragen" (primair) + "Bel direct: 0616035754" (secundair)

2. **Het verschil — Eerst tekenen, dan bouwen**
   - Dit is de sectie over Agnieszka en het ontwerpproces
   - Uitleg: "De meeste aannemers beginnen en dan zien jullie het wel. Wij maken eerst een tekening."
   - Werkwijze in 3-4 stappen visueel:
     - **Inmeting & ontwerp** — Agnieszka komt langs, meet op, maakt een bouwtekening
     - **3D-visualisatie** — U ziet exact hoe uw nieuwe keuken/badkamer eruitziet
     - **Offerte op basis van tekening** — Geen verrassingen, heldere prijs
     - **Uitvoering** — Raphaël en zijn team bouwen wat getekend is
   - Vermelding: "De kosten voor de tekening worden verrekend met de opdracht."
   - Als er voorbeelden van tekeningen/visualisaties in de images map zitten: TONEN.

3. **Diensten**
   - Grid van 4-6 diensten met foto + korte tekst:
     - Badkamers op maat
     - Keukens op maat
     - Complete woningrenovatie
     - Stucwerk & afwerking
     - Vloeren & tegelwerk
     - Interieurontwerp & visualisatie
   - Elke kaart linkt naar een detailpagina (of anker, afhankelijk van hoeveelheid content)

4. **Projecten / Portfolio**
   - Grid van projectfoto's uit de images map
   - Per project: locatie, type werk, foto's
   - Gebruik de projecten uit de bestaande site:
     - Badkamer Apeldoorn
     - Keuken Utrecht
     - Keuken Częstochowa
     - Vloer egalisatie Den Haag
     - Douglas hout schuur Amersfoort
     - Visualisatie Częstochowa
     - Onderstempeling draagbalk Bunschoten-Spakenburg
     - Stucwerk Bunschoten-Spakenburg
     - Badkamer Bunschoten-Spakenburg

5. **Reviews**
   - ECHTE Google-reviews, volledig geciteerd. Geen samenvatting. De woorden van de klant.
   - Google 5.0 badge prominent
   - Reviews die erin MOETEN:

   **Rob van Rooij:** "We zijn erg tevreden over RWW bouw! Ze hebben bij ons een flinke renovatie gedaan: vloerrenovatie met broodjesvloer en vloerverwarming, tegelwerk in de gang en keuken, afbouw van de toiletten, complete zolderrenovatie en al het buitenschilderwerk. Wat wij vooral fijn vonden, is dat het niet alleen goed werk was, maar ook erg prettig samenwerken. De mannen waren vriendelijk en beleefd, en de timmerman nam zelfs af en toe spontaan een klein cadeautje mee voor onze dochter van 2. We misten ze bijna toen de klussen klaar waren. Kortom, wij kunnen RWW bouw van harte aanbevelen!"

   **Quirijn Bolink:** "Raphaël levert top werk, tot in de puntjes verzorgd, hij stopt pas met zijn werk als de klant én hij zelf tevreden is."

   **Jan-Martijn Koelewijn:** "Hebben bij ons hele beneden verdieping gestuct. Super wat betreft afspraken, laat staan het resultaat. Fantastisch werk afgeleverd. Aanrader als je voor vakwerk gaat."

   **Joyce Klabbers:** "RWW bouw heeft zowel de badkamer, wc als de keuken bij ons gedaan. Alle drie zijn geweldig mooi geworden!"

   **Familie van Twillert:** "RWW Bouw heeft de wanden en het plafond heel netjes gestuct. De wanden en het plafond zijn super strak en mooi glad afgewerkt. Ook werd na afloop alles keurig opgeruimd. Prettige communicatie en professionele aanpak."

   **Franca Voorbergen:** "Erg blij met dit bedrijf, vriendelijk, denken mee en werken erg zorgvuldig!"

   Zoek ook of er Werkspot-reviews in de lokale development map staan. Zo ja, verwerk die ook.

6. **Over RWW Bouw**
   - Kort verhaal over Raphaël en het team
   - Agnieszka als architect/designer apart benoemen
   - Niet: "wij zijn een jong dynamisch team". Wel: vakmanschap, persoonlijk, lokaal.
   - Werkgebied: Amersfoort, Bunschoten-Spakenburg en omgeving

7. **Contact / CTA**
   - Contactformulier (naam, telefoon, e-mail, type project, bericht)
   - Telefoon prominent: 0616035754
   - E-mail: info@rwwbouw.nl
   - Geen adres nodig (ze komen bij de klant)
   - CTA: "Vraag een vrijblijvende offerte aan" of "Plan een inmeting"

8. **Footer**
   - Bedrijfsgegevens
   - "Powered by EASEO" (klein, muted, met link naar easeo.nl)
   - Social media links (Facebook)

---

## Technische eisen

### Stack
- Statische HTML bestanden
- Tailwind CSS via CDN (`<script src="https://cdn.tailwindcss.com"></script>`)
- Tailwind config inline voor custom kleuren en fonts
- Google Fonts via CDN
- Vanilla JavaScript waar nodig (mobiel menu, scroll-animaties)
- Geen npm, geen build tools, geen frameworks

### Bestandsstructuur (CMS-ready)

```
rww-bouw/
├── index.html              ← Homepage
├── diensten.html           ← Diensten overzicht (optioneel, kan anker zijn)
├── projecten.html          ← Portfolio detail (optioneel)
├── contact.html            ← Contactpagina (of sectie op homepage)
├── 404.html                ← Styled 404
├── css/
│   └── custom.css          ← Aanvullende styles buiten Tailwind
├── js/
│   └── main.js             ← Mobiel menu, smooth scroll, eventuele animaties
├── images/                 ← Projectfoto's (uit lokale dev map)
│   ├── projects/
│   ├── team/
│   └── logo/
└── CLAUDE.md               ← Design system documentatie
```

### CMS-voorbereiding

Bouw de HTML zo dat het straks eenvoudig naar PHP te converteren is:

- Gebruik duidelijke HTML-comments voor content-blokken:
  ```html
  <!-- SECTION: hero -->
  <!-- SECTION: diensten -->
  <!-- SECTION: projecten -->
  <!-- SECTION: reviews -->
  <!-- SECTION: over-ons -->
  <!-- SECTION: contact -->
  ```

- Gebruik `data-field` attributen op bewerkbare elementen:
  ```html
  <h1 data-field="hero_titel">Renovatie & verbouwing met plan</h1>
  <p data-field="hero_subtitel">...</p>
  ```

- Header en footer als aparte blokken die straks includes worden.

### Afbeeldingen

- Bekijk EERST wat er in de `images/` map staat
- Gebruik de echte projectfoto's, NIET placeholders
- Als er tekeningen/visualisaties van Agnieszka bij zitten: prominent tonen in de "Eerst tekenen" sectie
- Optimaliseer: max 1920px breed, JPEG quality 80, lazy loading op alles below the fold
- Als er een logo in de map staat: gebruik het en leid de kleuren eruit af

### Responsive

- Mobile-first
- Hamburger menu op mobiel
- Foto-grid: 1 kolom mobiel, 2 kolommen tablet, 3 kolommen desktop
- CTA's altijd bereikbaar (sticky header of floating button)
- Telefoon-link klikbaar op mobiel: `<a href="tel:0616035754">`

---

## Tone of voice

- **Eerlijk en direct.** Geen marketingpraat. Zeg wat je doet en laat het werk spreken.
- **Menselijk.** Deze mensen komen bij je thuis. De toon moet warmte uitstralen.
- **Vakmanschap, geen verkooppraatjes.** De foto's en reviews zijn het bewijs.
- **Lokaal.** Amersfoort, Bunschoten-Spakenburg. Niet "heel Nederland".
- **Nederlands.** Hele site in het Nederlands. Geen Engels tenzij het een technische term is.

### Verboden woorden
- "ontzorgen", "full service", "van A tot Z", "droomhuis" (te generiek)
- "jong dynamisch team", "passie voor bouwen" (lege claims)
- "neem gerust contact op" (te vrijblijvend — zeg "Bel Raphaël" of "Plan een inmeting")

### Wel gebruiken
- Concrete omschrijvingen: "badkamer", "keuken", "stucwerk", niet "projecten"
- Klant-woorden uit reviews: "vakwerk", "tot in de puntjes", "netjes opgeruimd"
- "Eerst tekenen, dan bouwen" als terugkerend thema

---

## Volgorde

1. Bekijk alle afbeeldingen in de `images/` map — inventariseer wat er is
2. Bekijk of er een logo is en leid het kleurenpalet af
3. Bekijk of er Werkspot-reviews of andere content in de map staat
4. Maak de CLAUDE.md met het design system
5. Bouw index.html — complete homepage met alle secties
6. Bouw 404.html
7. Maak main.js (mobiel menu, smooth scroll)
8. Test op mobiel en desktop

## Controleer na afloop

- [ ] Alle echte foto's uit images/ map gebruikt (geen placeholders)
- [ ] "Eerst tekenen, dan bouwen" sectie prominent aanwezig
- [ ] Agnieszka benoemd als architect/designer
- [ ] Alle 6 Google-reviews letterlijk geciteerd
- [ ] Werkspot-reviews verwerkt (als aanwezig)
- [ ] Contactformulier met naam, telefoon, e-mail, type project, bericht
- [ ] Telefoon klikbaar op mobiel
- [ ] "Powered by EASEO" in footer
- [ ] Responsive: mobiel, tablet, desktop
- [ ] data-field attributen op bewerkbare content
- [ ] HTML-comments voor sectie-scheiding
- [ ] Geen stockfoto's, geen placeholder-teksten
- [ ] Geen verboden woorden
- [ ] CLAUDE.md aanwezig met design system
- [ ] Lazy loading op afbeeldingen below the fold
