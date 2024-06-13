<html>
  <head>
    <title><?php
    include("checklang.inc.php");
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
    ?></title>
    <link rel="stylesheet" href="style_participer.css">
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    include("navbar.inc.php");
    ?>

    <br>
    <br>
    
    <!-- Barre de localisation-->
    <div class="location">
            <ul>
              <?php
              switch($lang) {
                case "fr":
                  ?>
                  <li><a class="link_loc" href="index.php">Accueil</a> &nbsp;&nbsp;&nbsp;></li>
                  <li class="current-location">Découvrir</li>
                  <?php
                  break;
                case "en":
                  ?>
                  <li><a class="link_loc" href="index.php">Home</a> &nbsp;&nbsp;&nbsp;></li>
                  <li class="current-location">Discover</li>
                  <?php
                  break;
                case "es":
                  ?>
                  <li><a class="link_loc" href="index.php">Inicio</a> &nbsp;&nbsp;&nbsp;></li>
                  <li class="current-location">Descubrir</li>
                  <?php
                  break;
                default:
                  break;
              }
              ?>
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
      echo "MUS&Eacute;ES";
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
        switch($lang) {
          case "fr":
            echo "MONUMENT";
            break;
          case "en":
            echo "MONUMENT";
            break;
          case "es":
            echo "MONUMENTO";
            break;
          default:
            break;
        }
      } elseif ($ligne->type == "musee") {
        switch($lang) {
          case "fr":
            echo "MUS&Eacute;E";
            break;
          case "en":
            echo "MUSEUM";
            break;
          case "es":
            echo "MUSEO";
            break;
          default:
            break;
        }
      } else {
        switch($lang) {
          case "fr":
            echo "ESPACE VERT";
            break;
          case "en":
            echo "GREEN SPACE";
            break;
          case "es":
            echo "ESPACIO VERDE";
            break;
          default:
            break;
        }
      }
      ?>
      </b>
      <img src= <?php echo $ligne->lien_image; ?> >
      <div class="nom-activite">
      <?php echo $ligne->nom_decouvrir; ?>
      </div>
      <p> <?php echo $ligne->description; ?> </p>
      <div class="boutton-voir-activite"><a href= <?php echo $ligne->lien_page; ?> >
        <?php
  switch($lang) {
    case "fr":
      echo "Voir plus !";
      break;
    case "en":
      echo "See more !";
      break;
    case "es":
      echo "Ver más !";
      break;
    default:
      break;
  }
  ?></a></div>
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