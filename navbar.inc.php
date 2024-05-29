<?php
if (! isset($lang)) {
  $lang = "fr";
}

$adresse = $_SERVER['PHP_SELF'];
$composants_adresse = explode('/', $adresse);
$fichier_avec_ext = end($composants_adresse);
$fichier_sep = explode('.', $fichier_avec_ext);
$nom_fichier = $fichier_sep[0];

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
      <a class='logo' href='index.php?lang=$lang'><img id='LogoMCN' src='https://i.imgur.com/FYHl6nN.png'></a>
    </div>
        
    <!-- Barre de recherche -->
    <form method='post' action='?.php?lang=$lang'>
";

switch($lang) {
  case 'fr':
    echo "<input class='recherche' type='text' placeholder='Rechercher...'>";
    break;
  case 'en':
    echo "<input class='recherche' type='text' placeholder='Research...'>";
    break;
  case 'es':
    echo "<input class='recherche' type='text' placeholder='Buscar...'>";
    break;
}

echo "
      <input class='loupe' type='submit' value=''>
    </form>
    <!-- Menu des langues -->    
";

switch ($lang) {
  case 'fr':
    echo "
    <button class='menul' onClick='myFunction(\"langues\")'>
      <img src='https://i.imgur.com/moe4dvF.png' class='langue'/>&nbsp;FR
    </button>
    <div id='langues' style='display: none;'>
      <a href='$nom_fichier.php?lang=en'>
        <div class='sousl'>
          <img src='https://i.imgur.com/ZUd06Ts.png' class='langue'/>&nbsp;EN
        </div>
      </a>
      <a href='$nom_fichier.php?lang=es'>
        <div class='sousl'>
          <img src='https://i.imgur.com/6MrXRwG.png' class='langue'/>&nbsp;ES
        </div>
      </a>
    </div>
  </div>";
    break;
  case 'en':
    echo "
    <button class='menul' onClick='myFunction(\"langues\")'>
      <img src='https://i.imgur.com/ZUd06Ts.png' class='langue'/>&nbsp;EN
    </button>
    <div id='langues' style='display: none;'>
      <a href='$nom_fichier.php?lang=fr'>
        <div class='sousl'>
          <img src='https://i.imgur.com/moe4dvF.png' class='langue'/>&nbsp;FR
        </div>
      </a>
      <a href='$nom_fichier.php?lang=es'>
        <div class='sousl'>
          <img src='https://i.imgur.com/6MrXRwG.png' class='langue'/>&nbsp;ES
        </div>
      </a>
    </div>
  </div>";
    break;
  case 'es':
    echo "
    <button class='menul' onClick='myFunction(\"langues\")'>
      <img src='https://i.imgur.com/6MrXRwG.png' class='langue'/>&nbsp;ES
    </button>
    <div id='langues' style='display: none;'>
      <a href='$nom_fichier.php?lang=fr'>
        <div class='sousl'>
          <img src='https://i.imgur.com/moe4dvF.png' class='langue'/>&nbsp;FR
        </div>
      </a>
      <a href='$nom_fichier.php?lang=en'>
        <div class='sousl'>
          <img src='https://i.imgur.com/ZUd06Ts.png' class='langue'/>&nbsp;EN
        </div>
      </a>
    </div>
  </div>";
    break;
}

switch ($lang) {
  case 'fr':
    echo "
    <!-- Reste du menu hamburger -->
    <div id='menu' style='display: none;'>
      <div class='sous'>
        <a href='participer.php?lang=$lang'>Participer</a>
      </div>
      <div class='sous'>
        <a href='parcourir.php?lang=$lang'>Parcourir</a>
      </div>
      <div class='sous'>
        <a href='decouvrir.php?lang=$lang'>Découvrir</a>
      </div>
    </div>
  </div>";
    break;
  case 'en':
    echo "
    <!-- Reste du menu hamburger -->
    <div id='menu' style='display: none;'>
      <div class='sous'>
        <a href='participer.php?lang=$lang'>Participate</a>
      </div>
      <div class='sous'>
        <a href='parcourir.php?lang=$lang'>Browse</a>
      </div>
      <div class='sous'>
        <a href='decouvrir.php?lang=$lang'>Discover</a>
      </div>
    </div>
  </div>";
    break;
  case 'es':
    echo "
    <!-- Reste du menu hamburger -->
    <div id='menu' style='display: none;'>
      <div class='sous'>
        <a href='participer.php?lang=$lang'>Participar</a>
      </div>
      <div class='sous'>
        <a href='parcourir.php?lang=$lang'>Explorar</a>
      </div>
      <div class='sous'>
        <a href='decouvrir.php?lang=$lang'>Descubrir</a>
      </div>
    </div>
  </div>";
    break;
}
?>
