<?php
include("connexion.inc.php");
$cnx->exec("SET search_path TO paris");

if (isset($_POST["email"]) && isset($_POST["mdp"])) {
    $email = $_POST["email"];
    $mdp = md5($_POST["mdp"]);

    $results = $cnx->query("SELECT COUNT(*) FROM login WHERE id = '".$email."'"." AND password = '".$mdp."'");
    if ($results != 1) {
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
    <title>Admin</title>
    <link rel="stylesheet" href="style_admin.css">
    <meta charset="utf-8">
  </head>
<body>
    <?php
    include("navbar_nosearch.inc.php");
    ?>
    
    <!-- Admin connexion -->

    <h1 class="admin">Administrateur</h1>
    <div class="ligne"></div>

    <br>

    <a class="bouton_admin" href="admin_participer.php" class="bouton_admin">Participer ></a>
    <br>
    <a class="bouton_admin" href="admin_parcourir.php" class="bouton_admin">Parcourir ></a>
    <br>
    <a class="bouton_admin" href="admin_decouvrir.php" class="bouton_admin">Découvrir ></a>

    <br>

    <!-- Footer -->

    <?php
    include("footer.inc.php");
    ?>
<script src="script.js"></script>
</body>
</html>