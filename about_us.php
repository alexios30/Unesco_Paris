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
        switch ($lang) {
            case "fr":
            echo '
            <header>
                <nav>
                    <ul>
                        <li><a href="index.php?lang=' . $lang . '">Accueil</a></li>
                        >
                        <li><a id="this" href="">Qui sommes-nous ?</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h1>QUI SOMMES-NOUS ?</h1>
                <hr class="main-line">
                <p>Nous sommes une équipe de 5 étudiants en première année de BUT Informatique à l\'IUT de Marne-La-Vallée. Ce projet a été réalisé dans le cadre de la médiation culturelle et numérique en partenariat avec l\'UNESCO, dans le but de promouvoir un patrimoine culturel sur un site Internet.</p>
                <hr class="separator-line">
                <section class="team">
                    <article class="member">
                        <div class="top">
                            <h2>Emilie XU</h2>
                            <p>Chef(fe) de projet</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/emilie-qiaoxin-xu/">LinkedIn</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Alexis CHAMPAULT</h2>
                            <p>Developpeur</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/champaulta/">LinkedIn</a></li>
                            <li><a href="https://alexios30.github.io/Champault_Portfolio/">Portfolio</a></li>
                            <li><a href="https://alexios30.github.io/Champault_Portfolio/include/Champault_Alexis_CV.pdf">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Romain LONCIN</h2>
                            <p>Traducteur</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/romain-loncin/">LinkedIn</a></li>
                            <li><a href="http://perso-etudiant.u-pem.fr/~romain.loncin/portfolio.html">Portfolio</a></li>
                            <li><a href="http://perso-etudiant.u-pem.fr/~romain.loncin/CV-Romain_LONCIN.pdf">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Jérémy ZHENG</h2>
                            <p>Développeur</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/jeremy-zheng-jz/">LinkedIn</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Andrei ACHIRECESEI</h2>
                            <p>Manager BDD</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/a-achirecesei/">LinkedIn</a></li>
                            <li><a href="https://perso-etudiant.u-pem.fr/~achirecesei/">Portfolio</a></li>
                            <li><a href="https://perso-etudiant.u-pem.fr/~achirecesei/CV_ACHIRECESEI_Andrei.pdf">CV</a></li>
                        </ul>
                    </article>
                </section>
            </main>';
            break;

            case 'en':
                echo '
                <header>
                <nav>
                    <ul>
                        <li><a href="index.php?lang=' . $lang . '">Home</a></li>
                        >
                        <li><a id="this" href="">About us</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h1>ABOUT US</h1>
                <hr class="main-line">
                <p>We are a team of 5 students in our first year of BUT Informatique at the IUT in Marne-la-Vallée, France. This project was carried out as part of a cultural and digital mediation project in partnership with UNESCO in prospect of promoting a cultural heritage on an Internet web site.</p>
                <hr class="separator-line">
                <section class="team">
                    <article class="member">
                        <div class="top">
                            <h2>Emilie XU</h2>
                            <p>Project Manager</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/emilie-qiaoxin-xu/">LinkedIn</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Alexis CHAMPAULT</h2>
                            <p>Developer</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/champaulta/">LinkedIn</a></li>
                            <li><a href="https://alexios30.github.io/Champault_Portfolio/">Portfolio</a></li>
                            <li><a href="https://alexios30.github.io/Champault_Portfolio/include/Champault_Alexis_CV.pdf">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Romain LONCIN</h2>
                            <p>Translator</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/romain-loncin/">LinkedIn</a></li>
                            <li><a href="http://perso-etudiant.u-pem.fr/~romain.loncin/portfolio.html">Portfolio</a></li>
                            <li><a href="http://perso-etudiant.u-pem.fr/~romain.loncin/CV-Romain_LONCIN.pdf">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Jérémy ZHENG</h2>
                            <p>Developer</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/jeremy-zheng-jz/">LinkedIn</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Andrei ACHIRECESEI</h2>
                            <p>DB Manager</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/a-achirecesei/">LinkedIn</a></li>
                            <li><a href="https://perso-etudiant.u-pem.fr/~achirecesei/">Portfolio</a></li>
                            <li><a href="https://perso-etudiant.u-pem.fr/~achirecesei/CV_ACHIRECESEI_Andrei.pdf">CV</a></li>
                        </ul>
                    </article>
                </section>
            </main>';
            break;
        }
    ?>
    <?php
    include("footer.inc.php");
    ?>
</body>
</html>