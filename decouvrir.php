<html>
  <head>
    <title>Participer</title>
    <link rel="stylesheet" href="style_participer.css">
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    include("checklang.inc.php");
    include("navbar.inc.php");
    ?>

    <br>
    <br>
    
    <!-- Barre de localisation-->
    <div class="location">
            <ul>
                <li><a class="link_loc" href="index.php">Accueil</a> &nbsp;&nbsp;&nbsp;></li>
                <li class="current-location">Découvrir</li>
            </ul>
        </div>

  </div>

  <!-- Participer -->

  <h1 class="participer">
  <?php
  switch($lang) {
    case "fr":
      echo "Découvrir";
      break;
    case "en":
      echo "Discover";
      break;
    case "es":
      echo "Descubrir";
      break;
    default:
      break;
  }
  ?>
  </h1>
  <div class="ligne"></div>

  <p class="participer-text">
  <?php
  switch($lang) {
    case "fr":
      echo "Découvrez de splendides monuments, des jardins rafraichissants et les musées les plus intéressants de Paris.";
      break;
    case "en":
      echo "Discover splendid monuments, refreshing gardens and the most interesting museums in Paris.";
      break;
    case "es":
      echo "Descubra espléndidos monumentos, refrescantes jardines y los museos más interesantes de París.";
      break;
    default:
      break;
  }
  ?>
  </p>
  <div class="ligne-participer-text" id="ligne"></div>

  <?php
  if (isset($_GET["categorie"])) {
    $categorie = $_GET["categorie"];
  } else {
    $categorie = "tous";
  }

  include("connexion.inc.php");
  $cnx->exec("SET search_path TO paris");
  ?>

<a href=<?php echo "decouvrir.php?lang=".$lang."&categorie=tous#ligne"; ?>>
    <?php
    if ($categorie == "tous") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      <?php
  switch($lang) {
    case "fr":
      echo "TOUS";
      break;
    case "en":
      echo "ALL";
      break;
    case "es":
      echo "TODOS";
      break;
    default:
      break;
  }
  ?>
    </div>
  </a>

  <a href=<?php echo "decouvrir.php?lang=".$lang."&categorie=monument#ligne"; ?>>
    <?php
    if ($categorie == "monument") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      <?php
  switch($lang) {
    case "fr":
      echo "MONUMENTS";
      break;
    case "en":
      echo "MONUMENTS";
      break;
    case "es":
      echo "MONUMENTOS";
      break;
    default:
      break;
  }
  ?>
    </div>
  </a>

  <a href=<?php echo "decouvrir.php?lang=".$lang."&categorie=vert#ligne"; ?>>
    <?php
    if ($categorie == "vert") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      <?php
  switch($lang) {
    case "fr":
      echo "ESPACES VERTS";
      break;
    case "en":
      echo "GREEN SPACES";
      break;
    case "es":
      echo "ESPACIOS VERDES";
      break;
    default:
      break;
  }
  ?>
    </div>
  </a>

  <a href=<?php echo "decouvrir.php?lang=".$lang."&categorie=musee#ligne"; ?>>
    <?php
    if ($categorie == "musee") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      <?php
  switch($lang) {
    case "fr":
      echo "MUSEES";
      break;
    case "en":
      echo "MUSEUMS";
      break;
    case "es":
      echo "MUSEOS";
      break;
    default:
      break;
  }
  ?>
    </div>
  </a>

  <div display="block"></div>

  <!-- Activites -->

  <?php
  if ($categorie != "tous") {
    $results = $cnx->query("SELECT * FROM decouvrir WHERE type = '".$categorie."' AND lang = '".$lang."'");
  } else {
    $results = $cnx->query("SELECT * FROM decouvrir WHERE lang = '".$lang."'");
  }

  echo "<div class=\"section-decouvrir\">";
  while ($ligne = $results->fetch(PDO::FETCH_OBJ)) {
    ?>

    <div class="box-activite">
      <b class="titre-activite">
      <?php
      if ($ligne->type == "monument") {
        echo "MONUMENT";
      } elseif ($ligne->type == "musee") {
        echo "MUS&Eacute;E";
      } else {
        echo "ESPACES VERT";
      }
      ?>
      </b>
      <img src= <?php echo $ligne->lien_image; ?> >
      <div class="nom-activite">
      <?php echo $ligne->nom_decouvrir; ?>
      </div>
      <p> <?php echo $ligne->description; ?> </p>
      <div class="boutton-voir-activite"><a href= <?php echo $ligne->lien_page; ?> >Voir plus !</a></div>
    </div>

    <?php
  }
  echo "</div>";
  ?>

  <!-- Fin Activites -->
  <!-- Footer -->
  
  <?php
  include("footer.inc.php");
  ?>
</body>
</html>
