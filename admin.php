<?php
include("connexion.inc.php");
$cnx->exec("SET search_path TO paris");

if (isset($_POST["email"]) && isset($_POST["mdp"])) {
    $email = $_POST["email"];
    $mdp = md5($_POST["mdp"]);

    $results = $cnx->query("SELECT COUNT(*) FROM login WHERE email = '".$email."' AND password = '".$mdp."'");
    $ligne = $results->fetch(PDO::FETCH_OBJ);
    if ($ligne->count != 1) {
      header("location: admin_connexion.php?r=error");
    }
    else {
      session_start();
      $_SESSION["email"] = $email;
      $_SESSION["mdp"] = $mdp;
    }
}
elseif (isset($_SESSION["email"]) && isset($_SESSION["mdp"])) {
  $email = $_SESSION["email"];
  $mdp = md5($_SESSION["mdp"]);

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
    <p class="admin-text">Vous êtes connecté en tant que <?php echo $_SESSION["email"]; ?> <br> <a href="deconnexion_admin.php">Cliquez ici pour vous déconnecter</a></p>
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