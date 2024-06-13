<?php
include("checklang.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mention légale</title>
    <link rel="stylesheet" href="style_mention.css">
</head>
<body>
    <?php
        include("navbar.inc.php");
        ?>
          <header>
                <nav>
                    <ul>
                        <li><a href="index.php?lang=' . $lang . '">Accueil</a></li>
                        >
                        <li><a id="this" href="">Mentions légales</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h1>MENTIONS LEGALES</h1>
                <hr class="main-line">
                <br>
            <div class="flex-container">
            <div class="vertical-line"></div>
            <h2>Informations sur l’hébergeur</h2>
            </div>
            <div class="flex-container">
            <div class="text-container">
                <p>Ce site est hébergé par :</p>
                <p><b>Université Gustave Eiffel</b></p>
                <p>2 rue Albert Einstein,</p>
                <p>77420 Champs-Sur-Marne</p>
                <p>Téléphone : (+33) 1 60 95 85 85; Département informatique : (+33) 1 60 95 85 11</p>
                <p><u>Mentions légales</u></p>
        </div>
        </div>
            
            </main>

    <?php
    include("footer.inc.php");
    ?>
</body>
</html>