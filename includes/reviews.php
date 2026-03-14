<?php
/**
 * RWW Bouw — Reviews component (Google + Werkspot)
 * Used on both NL and PL pages.
 * $reviews_lang is set by the calling page ('nl' or 'pl')
 */
$reviews_lang = $reviews_lang ?? 'nl';
$is_pl = ($reviews_lang === 'pl');
?>

<!-- Google Reviews -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 fade-in">

  <!-- Rob van Rooij -->
  <div class="review-card bg-rww-light rounded-lg p-6 border border-stone-200">
    <div class="stars text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
    <?php if ($is_pl): ?>
    <p class="text-rww-red text-sm font-semibold mb-3 italic">&ldquo;Kompleksowy remont &mdash; podłogi, glazura, łazienki, poddasze i malowanie. Polecamy!&rdquo;</p>
    <?php endif; ?>
    <p class="text-rww-text text-sm leading-relaxed mb-5">
      &ldquo;We zijn erg tevreden over RWW bouw! Ze hebben bij ons een flinke renovatie gedaan: vloerrenovatie met broodjesvloer en vloerverwarming, tegelwerk in de gang en keuken, afbouw van de toiletten, complete zolderrenovatie en al het buitenschilderwerk. Wat wij vooral fijn vonden, is dat het niet alleen goed werk was, maar ook erg prettig samenwerken. De mannen waren vriendelijk en beleefd, en de timmerman nam zelfs af en toe spontaan een klein cadeautje mee voor onze dochter van 2. We misten ze bijna toen de klussen klaar waren.&rdquo;
    </p>
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 bg-rww-red/10 rounded-full flex items-center justify-center">
        <span class="text-rww-red font-semibold text-sm">RR</span>
      </div>
      <div>
        <p class="font-semibold text-rww-dark text-sm">Rob van Rooij</p>
        <p class="text-rww-muted text-xs">Google Review</p>
      </div>
    </div>
  </div>

  <!-- Quirijn Bolink -->
  <div class="review-card bg-rww-light rounded-lg p-6 border border-stone-200">
    <div class="stars text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
    <?php if ($is_pl): ?>
    <p class="text-rww-red text-sm font-semibold mb-3 italic">&ldquo;Raphaël wykonuje pracę na najwyższym poziomie.&rdquo;</p>
    <?php endif; ?>
    <p class="text-rww-text text-sm leading-relaxed mb-5">
      &ldquo;Raphaël levert top werk, tot in de puntjes verzorgd, hij stopt pas met zijn werk als de klant én hij zelf tevreden is.&rdquo;
    </p>
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 bg-rww-red/10 rounded-full flex items-center justify-center">
        <span class="text-rww-red font-semibold text-sm">QB</span>
      </div>
      <div>
        <p class="font-semibold text-rww-dark text-sm">Quirijn Bolink</p>
        <p class="text-rww-muted text-xs">Google Review</p>
      </div>
    </div>
  </div>

  <!-- Jan-Martijn Koelewijn -->
  <div class="review-card bg-rww-light rounded-lg p-6 border border-stone-200">
    <div class="stars text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
    <?php if ($is_pl): ?>
    <p class="text-rww-red text-sm font-semibold mb-3 italic">&ldquo;Profesjonalne tynkowanie. Fantastyczny rezultat.&rdquo;</p>
    <?php endif; ?>
    <p class="text-rww-text text-sm leading-relaxed mb-5">
      &ldquo;Hebben bij ons hele beneden verdieping gestuct. Super wat betreft afspraken, laat staan het resultaat. Fantastisch werk afgeleverd. Aanrader als je voor vakwerk gaat.&rdquo;
    </p>
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 bg-rww-red/10 rounded-full flex items-center justify-center">
        <span class="text-rww-red font-semibold text-sm">JK</span>
      </div>
      <div>
        <p class="font-semibold text-rww-dark text-sm">Jan-Martijn Koelewijn</p>
        <p class="text-rww-muted text-xs">Google Review</p>
      </div>
    </div>
  </div>

  <!-- Joyce Klabbers -->
  <div class="review-card bg-rww-light rounded-lg p-6 border border-stone-200">
    <div class="stars text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
    <?php if ($is_pl): ?>
    <p class="text-rww-red text-sm font-semibold mb-3 italic">&ldquo;Łazienka, WC i kuchnia &mdash; wszystkie trzy wyglądają fantastycznie!&rdquo;</p>
    <?php endif; ?>
    <p class="text-rww-text text-sm leading-relaxed mb-5">
      &ldquo;RWW bouw heeft zowel de badkamer, wc als de keuken bij ons gedaan. Alle drie zijn geweldig mooi geworden!&rdquo;
    </p>
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 bg-rww-red/10 rounded-full flex items-center justify-center">
        <span class="text-rww-red font-semibold text-sm">JK</span>
      </div>
      <div>
        <p class="font-semibold text-rww-dark text-sm">Joyce Klabbers</p>
        <p class="text-rww-muted text-xs">Google Review</p>
      </div>
    </div>
  </div>

  <!-- Familie van Twillert -->
  <div class="review-card bg-rww-light rounded-lg p-6 border border-stone-200">
    <div class="stars text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
    <?php if ($is_pl): ?>
    <p class="text-rww-red text-sm font-semibold mb-3 italic">&ldquo;Ściany i sufity perfekcyjnie gładkie. Po pracy wszystko posprzątane.&rdquo;</p>
    <?php endif; ?>
    <p class="text-rww-text text-sm leading-relaxed mb-5">
      &ldquo;RWW Bouw heeft de wanden en het plafond heel netjes gestuct. De wanden en het plafond zijn super strak en mooi glad afgewerkt. Ook werd na afloop alles keurig opgeruimd. Prettige communicatie en professionele aanpak.&rdquo;
    </p>
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 bg-rww-red/10 rounded-full flex items-center justify-center">
        <span class="text-rww-red font-semibold text-sm">FT</span>
      </div>
      <div>
        <p class="font-semibold text-rww-dark text-sm">Familie van Twillert</p>
        <p class="text-rww-muted text-xs">Google Review</p>
      </div>
    </div>
  </div>

  <!-- Franca Voorbergen -->
  <div class="review-card bg-rww-light rounded-lg p-6 border border-stone-200">
    <div class="stars text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
    <?php if ($is_pl): ?>
    <p class="text-rww-red text-sm font-semibold mb-3 italic">&ldquo;Mili, pomagają w wyborze i pracują bardzo starannie!&rdquo;</p>
    <?php endif; ?>
    <p class="text-rww-text text-sm leading-relaxed mb-5">
      &ldquo;Erg blij met dit bedrijf, vriendelijk, denken mee en werken erg zorgvuldig!&rdquo;
    </p>
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 bg-rww-red/10 rounded-full flex items-center justify-center">
        <span class="text-rww-red font-semibold text-sm">FV</span>
      </div>
      <div>
        <p class="font-semibold text-rww-dark text-sm">Franca Voorbergen</p>
        <p class="text-rww-muted text-xs">Google Review</p>
      </div>
    </div>
  </div>

</div>

<?php if (!$is_pl): ?>
<!-- Werkspot Reviews (alleen op NL pagina) -->
<div class="mt-12 fade-in">
  <h3 class="font-display text-xl text-rww-dark font-semibold text-center mb-8">Ook aanbevolen op Werkspot</h3>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    <div class="review-card bg-rww-light rounded-lg p-6 border border-stone-200">
      <div class="stars text-sm mb-4">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <p class="text-rww-text text-sm leading-relaxed mb-5">&ldquo;Zeer goed, echte vakmannen.&rdquo;</p>
      <div><p class="font-semibold text-rww-dark text-sm">Maurice</p><p class="text-rww-muted text-xs">Werkspot &middot; Badkamer 7m&sup2; &middot; Nieuwegein</p></div>
    </div>

    <div class="review-card bg-rww-light rounded-lg p-6 border border-stone-200">
      <div class="stars text-sm mb-4">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <p class="text-rww-text text-sm leading-relaxed mb-5">&ldquo;Rafael is een topvakman!&rdquo;</p>
      <div><p class="font-semibold text-rww-dark text-sm">Jasper</p><p class="text-rww-muted text-xs">Werkspot &middot; Badkamer 6m&sup2; &middot; Amsterdam</p></div>
    </div>

    <div class="review-card bg-rww-light rounded-lg p-6 border border-stone-200">
      <div class="stars text-sm mb-4">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <p class="text-rww-text text-sm leading-relaxed mb-5">&ldquo;Rafael en zijn team weten hoe ze goed en snel moeten werken. Het belangrijkste is dat er een zeer goede en mooie badkamer is gekomen die goed is afgewerkt en naar wens is.&rdquo;</p>
      <div><p class="font-semibold text-rww-dark text-sm">Nick</p><p class="text-rww-muted text-xs">Werkspot &middot; Badkamer 5m&sup2; &middot; Amstelveen</p></div>
    </div>

    <div class="review-card bg-rww-light rounded-lg p-6 border border-stone-200">
      <div class="stars text-sm mb-4">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <p class="text-rww-text text-sm leading-relaxed mb-5">&ldquo;Rafael en met name zijn medewerker Roman hebben uitstekend werk geleverd. Fantastische service voor het ontwerp door Agnes.&rdquo;</p>
      <div><p class="font-semibold text-rww-dark text-sm">Wil</p><p class="text-rww-muted text-xs">Werkspot &middot; Badkamer &middot; Amsterdam</p></div>
    </div>

    <div class="review-card bg-rww-light rounded-lg p-6 border border-stone-200">
      <div class="stars text-sm mb-4">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <p class="text-rww-text text-sm leading-relaxed mb-5">&ldquo;Rafael is een echte vakman! Hij heeft de badkamer in ons huis super mooi gemaakt. De vloer van microbeton en wanden van beton ciré. Heel netjes afgewerkt.&rdquo;</p>
      <div><p class="font-semibold text-rww-dark text-sm">Klant</p><p class="text-rww-muted text-xs">Werkspot &middot; Badkamervloer microbeton</p></div>
    </div>

    <div class="review-card bg-rww-light rounded-lg p-6 border border-stone-200">
      <div class="stars text-sm mb-4">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <p class="text-rww-text text-sm leading-relaxed mb-5">&ldquo;100% kwaliteit. Echt super strak afgewerkt. Fijne communicatie en Rafael denkt ook goed met je mee. Geeft de juiste adviezen en voert alles precies uit.&rdquo;</p>
      <div><p class="font-semibold text-rww-dark text-sm">Klant</p><p class="text-rww-muted text-xs">Werkspot &middot; Badkamer + 5 toiletten</p></div>
    </div>

  </div>
</div>
<?php endif; ?>
