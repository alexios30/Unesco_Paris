<?php
include("checklang.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qui sommes-nous ?</title>
    <link rel="stylesheet" href="style_about_us.css">
</head>
<body>
    <?php
    include("navbar.inc.php");
    ?>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?lang=<?php echo "$lang"; ?>">Accueil</a></li>
                >
                <li><a id="this" href="">Qui sommes-nous ?</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>QUI SOMMES-NOUS ?</h1>
        <hr class="main-line">
        <p>Nous sommes une équipe de 5 étudiants en première année de BUT Informatique à l'IUT de Marne-La-Vallée. Ce projet a été réalisé dans le cadre de la médiation culturelle et numérique en partenariat avec l'UNESCO, dans le but de promouvoir un patrimoine culturel sur un site Internet.</p>
        <hr class="separator-line">
        <section class="team">
            <article class="member">
                <div class="top">
                    <h2>Emilie XU</h2>
                    <p>Chef(fe) de projet</p>
                    <div class="photo"></div>
                </div>
                <ul class="links">
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">CV</a></li>
                </ul>
            </article>
            <article class="member">
                <div class="top">
                    <h2>Alexis CHAMPAULT</h2>
                    <p>Rôle</p>
                    <div class="photo"></div>
                </div>
                <ul class="links">
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">CV</a></li>
                </ul>
            </article>
            <article class="member">
                <div class="top">
                    <h2>Romain LONCIN</h2>
                    <p>Rôle</p>
                    <div class="photo"></div>
                </div>
                <ul class="links">
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">CV</a></li>
                </ul>
            </article>
            <article class="member">
                <div class="top">
                    <h2>Jérémy ZHENG</h2>
                    <p>Rôle</p>
                    <div class="photo"></div>
                </div>
                <ul class="links">
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">CV</a></li>
                </ul>
            </article>
            <article class="member">
                <div class="top">
                    <h2>Andrei ACHIRECESEI</h2>
                    <p>Rôle</p>
                    <div class="photo"></div>
                </div>
                <ul class="links">
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">CV</a></li>
                </ul>
            </article>
        </section>
    </main>
    <?php
    include("footer.inc.php");
    ?>
</body>
</html>
