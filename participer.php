<html>
  <head>
    <title>
    <?php
    include("checklang.inc.php");
    switch($lang) {
        case "fr":
        echo "ÉVÉNEMENT";
        break;
        case "en":
        echo "EVENT";
        break;
        case "es":
        echo "EVENTO";
        break;
        default:
        break;
    }
    ?>
    </title>
    <link rel="stylesheet" href="style_participer.css">
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    include("connexion.inc.php");
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
                  <li class="current-location">Participer</li>
                  <?php
                  break;
                case "en":
                  ?>
                  <li><a class="link_loc" href="index.php">Home</a> &nbsp;&nbsp;&nbsp;></li>
                  <li class="current-location">Participate</li>
                  <?php
                  break;
                case "es":
                  ?>
                  <li><a class="link_loc" href="index.php">Inicio</a> &nbsp;&nbsp;&nbsp;></li>
                  <li class="current-location">Participar</li>
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
      echo "Participer";
      break;
    case "en":
      echo "Participate";
      break;
    case "es":
      echo "Participar";
      break;
    default:
      break;
  }
  if (!isset($_GET['categorie'])) {
    $categorie = "tous";
  } else {
    $categorie = $_GET['categorie'];
  }
  ?>
  </h1>
  <div class="ligne"></div>

  <p class="participer-text">
  <?php
  switch($lang) {
    case "fr":
      echo "Découvrez les meilleures attractions de la capitale française et passez des moments inoubliables !";
      break;
    case "en":
      echo "Discover the best attractions in the French capital for some unforgettable moments !";
      break;
    case "es":
      echo "¡Descubra las mejores atracciones de la capital francesa y pase unos días inolvidables!";
      break;
    default:
      break;
  }
  ?>
  </p>
  <div class="ligne-participer-text" id="ligne"></div>

  <a href=<?php echo "participer_1.php?lang=".$lang."&categorie=tous#ligne"; ?>>
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

  <a href=<?php echo "participer_1.php?lang=".$lang."&categorie=activite#ligne"; ?>>
    <?php
    if ($categorie == "activite") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      <?php
  switch($lang) {
    case "fr":
      echo "ACTIVITÉ";
      break;
    case "en":
      echo "ACTIVITY";
      break;
    case "es":
      echo "ACTIVIDAD";
      break;
    default:
      break;
  }
  ?>
    </div>
  </a>

  <a href="https://parisjetaime.com/ou-sortir-a-paris-i004">
    <?php
    if ($categorie == "evenement") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      <?php
  switch($lang) {
    case "fr":
      echo "ÉVÉNEMENT";
      break;
    case "en":
      echo "EVENT";
      break;
    case "es":
      echo "EVENTO";
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
    $results = $cnx->query("SELECT * FROM participer WHERE type = '".$categorie."' AND lang = '".$lang."'");
  } else {
    $results = $cnx->query("SELECT * FROM participer WHERE lang = '".$lang."'");
  }

  echo "<div class=\"section-decouvrir\">";
  while ($ligne = $results->fetch(PDO::FETCH_OBJ)) {
    ?>

    <div class="box-activite">
      <b class="titre-activite">
      <?php
      if ($ligne->type == "activite") {
        switch($lang) {
          case "fr":
            echo "ACTIVITÉ";
            break;
          case "en":
            echo "ACTIVITY";
            break;
          case "es":
            echo "ACTIVIDAD";
            break;
          default:
            break;
        }
      } elseif ($ligne->type == "evenement") {
        switch($lang) {
          case "fr":
            echo "ÉVÉNEMENT";
            break;
          case "en":
            echo "EVENT";
            break;
          case "es":
            echo "EVENTO";
            break;
          default:
            break;
        }
      }
      ?>
      </b>
      <img src= <?php echo $ligne->lien_image; ?> >
      <div class="nom-activite">
      <?php echo $ligne->nom_activite; ?>
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