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

    <h1 class="admin">Connexion administrateur</h1>
    <div class="ligne"></div>

    <br>

    <form method="post" action="admin.php">
        <input class="entree" name="email" type="text" placeholder="E-mail">
        <br>
        <input class="entree" name="mdp" type="password" placeholder="Mot de passe">
        <br>
        <input class="envoyer" type="submit" value="Connexion >" >
    </form>

    <?php
    if (isset($_GET["r"])) {
        if ($_GET["r"] == "error") {
            echo "<div class=\"error_connect\">Nom d'utilisateur ou mot de passe incorrects.</div>";
        }
    }
    ?>

    <!-- Footer -->

    <?php
    include("footer.inc.php");
    ?>
<script src="script.js"></script>
</body>
</html>