<html>
  <head>
    <title>Participer</title>
    <link rel="stylesheet" href="style_participer.css">
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    //include("checklang.inc.php");
    include("navbar.inc.php");
    ?>

    <br>
    <br>
    
    <!-- Barre noire -->

    <div class="barre-noire">
      Accueil > <b>Découvrir</b>
    </div>

  </div>

  <!-- Participer -->

  <h1 class="participer">Découvrir</h1>
  <div class="ligne"></div>

  <p class="participer-text">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse 
  luctus laoreet dolor quis imperdiet. Proin nec massa massa. Aliquam 
  finibus nisi quis neque pharetra condimentum. Donec malesuada 
  scelerisque turpis.
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

<a href="decouvrir.php?categorie=tous#ligne">
    <?php
    if ($categorie == "tous") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      TOUS
    </div>
  </a>

  <a href="decouvrir.php?categorie=monument#ligne">
    <?php
    if ($categorie == "monument") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      MONUMENTS
    </div>
  </a>

  <a href="decouvrir.php?categorie=vert#ligne">
    <?php
    if ($categorie == "vert") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      ESPACES VERTS
    </div>
  </a>

  <a href="decouvrir.php?categorie=musee#ligne">
    <?php
    if ($categorie == "musee") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      MUS&Eacute;ES
    </div>
  </a>

  <div display="block"></div>

  <!-- Activites -->

  <?php
  if ($categorie != "tous") {
    $results = $cnx->query("SELECT * FROM decouvrir WHERE type = '".$categorie."'");
  } else {
    $results = $cnx->query("SELECT * FROM decouvrir");
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
