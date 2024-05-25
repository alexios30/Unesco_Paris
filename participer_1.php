<html>
  <head>
    <title>Participer</title>
    <link rel="stylesheet" href="style_participer.css">
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    include("checklang.inc.php");
    ?>
    <?php
    include("navbar.inc.php");
    ?>    
    <!-- Barre noire -->

    <div class="barre-noire">
      Accueil > <b>Participer</b>
    </div>

  </div>

  <!-- Participer -->

  <h1 class="participer">Participer</h1>
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

<a href="participer_1.php?categorie=tous#ligne">
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

  <a href="participer_1.php?categorie=activite#ligne">
    <?php
    if ($categorie == "activite") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      ACTIVIT&Eacute;S
    </div>
  </a>

  <a href="participer_1.php?categorie=evenement#ligne">
    <?php
    if ($categorie == "evenement") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      &Eacute;VÈNEMENTS
    </div>
  </a>

  <div display="block"></div>

  <!-- Activites -->

  <?php
  if ($categorie != "tous") {
    $results = $cnx->query("SELECT * FROM participer WHERE type = '".$categorie."'");
  } else {
    $results = $cnx->query("SELECT * FROM participer");
  }

  while ($ligne = $results->fetch(PDO::FETCH_OBJ)) {
    ?>

    <div class="box-activite">
      <b class="titre-activite">
      <?php
      if ($ligne->type == "activite") {
        echo "ACTIVIT&Eacute;";
      } else {
        echo "&Eacute;VENEMENT";
      }
      ?>
      </b>
      <img src= <?php echo $ligne->lien_image; ?> >
      <div class="nom-activite">
      <?php echo $ligne->nom_activite; ?>
      </div>
      <p> <?php echo $ligne->description; ?> </p>
      <div class="boutton-voir-activite"><a href= <?php echo $ligne->lien_page; ?> >Voir l'activit&eacute; !</a></div>
    </div>

    <?php
  }
  ?>

  <!-- Fin Activites -->

  <!-- Footer -->
  
  <?php
  include("footer.inc.php");
  ?>
</body>
</html>