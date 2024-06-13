<!DOCTYPE html>

<html class="html-search">

    <head>
        <title>Résultat de recherche</title>
        <link rel="stylesheet" href="search-result.css">
        <link rel="stylesheet" href="composants.css">
        <link rel="stylesheet" href="style_navbar.inc.css">
        <meta charset="utf-8">
    </head>

    <body class="body-search">

        <?php
        include("checklang.inc.php");
        include("navbar.inc.php");
        include("connexion.inc.php");

        
        if (!isset($_POST['search'])) {
            if (!isset($_COOKIE['search'])) {
                header("location: index.php");
            }
            else {
                $search = $_COOKIE['search'];
            }
        }
        else {
            $search = $_POST['search'];
            setcookie("search", $search, time()+60*60);
        }

        switch($lang) {
            case "fr":
                ?>
                <?php
                break;
            case "en":
                ?>
                <?php
                break;
            case "es":
                ?>
                <?php
                break;
            default;
                break;
        }

        ?>

        <!-- Barre de localisation-->
        <div class="location">
            <ul>
                <li><a class="link-loc" href="index.php">Accueil</a> &nbsp;&nbsp;&nbsp;></li>
                <li class="current-location">Résultat de recherche</li>
            </ul>
        </div>

        <!-- TITRE -->
         <div class="white-title">
            <h1>Résultat de recherche</h1>
            <p>Recherche : <?php echo $search; ?></p>
         </div>

         <hr class="sep-line">

         <!-- PARTICPER -->
         <section>

            <div class="results-category">
                <h2>Participer</h2>

                <!-- Page visitable -->

                <?php
                $results = $cnx->query("SELECT * FROM participer WHERE nom_activite LIKE '%".$search."%' AND lang = '".$lang."'");
                while ($ligne = $results->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <div class="results-container">
                        <a class="redirect-to-page" src="href" href=<?php echo $ligne->lien_page; ?>>
                            <div class="result">
                                <h3><?php echo $ligne->nom_activite; ?></h3>
                                <p class="subtitle"><?php echo $ligne->type; ?></p>
                                <p>
                                    <?php echo $ligne->description; ?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php
                }
                ?>
                
            </div>

         </section>

         <!-- DECOUVRIR -->
         <section>

            <div class="results-category">
                <h2>Découvrir</h2>

                <!-- Page visitable -->

                <?php
                $results = $cnx->query("SELECT * FROM decouvrir WHERE nom_decouvrir LIKE '%".$search."%' AND lang = '".$lang."'");
                while ($ligne = $results->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <div class="results-container">
                        <a class="redirect-to-page" src="href" href=<?php echo $ligne->lien_page; ?>>
                            <div class="result">
                                <h3><?php echo $ligne->nom_decouvrir; ?></h3>
                                <p class="subtitle"><?php echo $ligne->type; ?></p>
                                <p>
                                    <?php echo $ligne->description; ?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php
                }
                ?>
                
                
            </div>

         </section>

    </body>

    <?php include("footer.inc.php"); ?>

</html>