<?php
include("connexion.inc.php");

if (isset($_POST["email"]) && isset($_POST["mdp"])) {
    $email = $_POST["email"];
    $mdp = md5($_POST["mdp"]);

    $results = $cnx->query("SELECT COUNT(*) FROM login WHERE email = '".$email."' AND password = '".$mdp."'");
    $ligne = $results->fetch(PDO::FETCH_OBJ);
    if ($ligne->count != 1) {
      header("location: admin_connexion.php?r=error");
    }
    else {
      setcookie("email", $email, time()+60*60, "/");
      setcookie("mdp", $mdp, time()+60*60, "/");
    }
}
elseif (isset($_COOKIE["email"]) && isset($_COOKIE["mdp"])) {
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
    <title>Admin</title>
    <link rel="stylesheet" href="style_admin.css">
    <meta charset="utf-8">
  </head>
<body>
    <?php
    include("navbar.inc.php");
    ?>
    
    <!-- Admin connexion -->

    <h1 class="admin">Administrateur</h1>
    <p class="admin-text">Vous êtes connecté en tant que <?php echo $_COOKIE["email"]; ?> <br> <a href="deconnexion_admin.php">Cliquez ici pour vous déconnecter</a></p>
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