<?php
include("connexion.inc.php");

if (isset($_COOKIE["email"]) && isset($_COOKIE["mdp"])) {
  $email = $_COOKIE["email"];
  $mdp = $_COOKIE["mdp"];

  $results = $cnx->query("SELECT COUNT(*) FROM login WHERE email = '".$email."' AND password = '".$mdp."'");
  $ligne = $results->fetch(PDO::FETCH_OBJ);
  if ($ligne->count != 1) {
    header("location: admin_connexion.php?r=error");
  }
}
else {
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin participer</title>
    <link rel="stylesheet" href="style_admin.css">
    <meta charset="utf-8">
  </head>
<body>
    <?php
    include("navbar.inc.php");
    ?>

    <!-- Boutons -->

    <a class="bouton_admin" href="admin.php" class="bouton_admin">< Retour</a>

    <?php
    if (isset($_GET["categorie"])) {
        $categorie = $_GET["categorie"];
    } else {
        $categorie = "tous";
    }

    include("connexion.inc.php");
    $cnx->exec("SET search_path TO paris");
    ?>

    <a href="admin_participer.php?categorie=tous#ligne">
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

    <a href="admin_participer.php?categorie=activite#ligne">
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

    <a href="admin_participer.php?categorie=evenement#ligne">
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

    <!-- SELECT -->

    <?php
    if ($categorie != "tous") {
        $results = $cnx->query("SELECT * FROM participer WHERE type = '".$categorie."' AND lang = '".$lang."'");
    } else {
        $results = $cnx->query("SELECT * FROM participer WHERE lang = '".$lang."'");
    }

    // AFFICHAGE

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
          <a href= <?php echo "delete_page.php?page=".$ligne->nom_activite; ?> ><div class="boutton-supprimer">Supprimer</div></a>
        </div>
    
        <?php
      }
      ?>

      <!-- Footer -->

      <?php
      include("footer.inc.php");
      ?>

<script src="script.js"></script>
</body>
</html>