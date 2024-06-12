<?php
if (! isset($lang)) {
    $lang = "fr";
}

$adresse = $_SERVER['PHP_SELF'];
$composants_adresse = explode('/', $adresse);
$fichier_avec_ext = end($composants_adresse);
$fichier_sep = explode('.', $fichier_avec_ext);
$nom_fichier = $fichier_sep[0];

$langs = [
    'fr' => ['Rechercher...', 'Participer', 'Parcourir', 'Découvrir', 'FR', 'https://i.imgur.com/moe4dvF.png'],
    'en' => ['Research...', 'Participate', 'Route', 'Discover', 'EN', 'https://i.imgur.com/ZUd06Ts.png'],
    'es' => ['Buscar...', 'Participar', 'Explorar', 'Descubrir', 'ES', 'https://i.imgur.com/6MrXRwG.png']
];

$current_lang = $langs[$lang];
$other_langs = array_diff_key($langs, [$lang => '']);

echo "
<!-- Barre de navigation -->
<div class='navigbar'>
  <div class='navig'>
    <div id='gauche'>
      <!-- Hamburger menu -->
      <button onclick='myFunction(\"menu\")' class='rectangles'>
        <img id='hambmenu' src='https://i.imgur.com/MCTSRpB.png'>
      </button>
      <!-- Logo MCN -->
      <a class='logo' href='index.php?lang=" . htmlspecialchars($lang) . "'><img id='LogoMCN' src='https://i.imgur.com/FYHl6nN.png'></a>
    </div>
        
    <!-- Barre de recherche -->
    <div id='droite'>
      <form method='post' action='" . htmlspecialchars($nom_fichier) . ".php?lang=" . htmlspecialchars($lang) . "' id='researchBar'>
        <input class='recherche' type='text' placeholder='" . htmlspecialchars($current_lang[0]) . "'>
        <input class='loupe' type='submit' value=''>
      </form>
      <button class='loupe' onClick='showResearchBar()' id='smallerResearch'></button>
      <!-- Menu des langues -->    
      <div id='container'>
        <button class='menul' onClick='myFunctionlang(\"langues\")'>
          <img src='" . htmlspecialchars($current_lang[5]) . "' class='langue'/>&nbsp;" . htmlspecialchars($current_lang[4]) . "
        </button>
        <div id='langues' style='display: none;'>";
foreach ($other_langs as $key => $value) {
    echo "
          <a href='" . htmlspecialchars($nom_fichier) . ".php?lang=" . htmlspecialchars($key) . "'>
            <div class='sousl'>
              <img src='" . htmlspecialchars($value[5]) . "' class='langue'/>&nbsp;" . htmlspecialchars($value[4]) . "
            </div>
          </a>";
}
echo "
        </div>
      </div>
    </div>
  </div>
  <!-- Reste du menu hamburger -->
  <div id='menu' style='display: none;'>
    <div class='sous'>
      <a href='participer.php?lang=" . htmlspecialchars($lang) . "'>" . htmlspecialchars($current_lang[1]) . "</a>
    </div>
    <div class='sous'>
      <a href='parcourir.php?lang=" . htmlspecialchars($lang) . "'>" . htmlspecialchars($current_lang[2]) . "</a>
    </div>
    <div class='sous'>
      <a href='decouvrir.php?lang=" . htmlspecialchars($lang) . "'>" . htmlspecialchars($current_lang[3]) . "</a>
    </div>
  </div>
</div>
";
?>
