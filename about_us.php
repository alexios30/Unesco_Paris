<?php
include("checklang.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    switch($lang) {
        case "fr":
        echo "Qui sommes-nous ?";
        break;
        case "en":
        echo "About Us";
        break;
        case "es":
        echo "¿QUIÉNES SOMOS?";
        break;
        default:
        break;
    }
    ?>
    </title>
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
                <p>Nous sommes une équipe de 5 étudiants en première année de BUT Informatique à l\'IUT Gustave Eiffel. Ce projet a été réalisé dans le cadre de la médiation culturelle et numérique en partenariat avec l\'UNESCO, dans le but de promouvoir un patrimoine culturel sur un site Internet.</p>
                <hr class="separator-line">
                <section class="team">
                    <article class="member">
                        <div class="top">
                            <h2>Emilie XU</h2>
                            <p>
                                Chef(fe) de projet<br>Responsable Graphique<br>Soutien en développement
                            </p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/emilie-qiaoxin-xu/">LinkedIn</a></li>
                            <li><a href="https://perso-etudiant.u-pem.fr/~emilie.xu/Portfolio/main.php">Portfolio</a></li>
                            <li><a href="#">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Alexis CHAMPAULT</h2>
                            <p>Développeur Front-end</p>
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
                            <p>
                                Traducteur
                            </p>
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
                            <p>Développeur Front-end</p>
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
                            <p>
                                Responsable BDD<br>Développeur Front & Back-end
                            </p>
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
                <p>
                    We are a team of 5 students in our first year of Computer Science program at Gustave Eiffel University, France.
                    This project was carried out as part of a cultural and digital mediation project in partnership with UNESCO in
                    prospect of promoting a cultural heritage through a web site.</p>
                <hr class="separator-line">
                <section class="team">
                    <article class="member">
                        <div class="top">
                            <h2>Emilie XU</h2>
                            <p>Project Manager<br>Graphic designer<br>Development support</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/emilie-qiaoxin-xu/">LinkedIn</a></li>
                            <li><a href="https://perso-etudiant.u-pem.fr/~emilie.xu/Portfolio/main.php">Portfolio</a></li>
                            <li><a href="#">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Alexis CHAMPAULT</h2>
                            <p>Front-end Developer</p>
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
                            <p>Front-end Developer</p>
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
                            <p>Database Manager<br>Front & Back-end Developer</p>
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
        case "es":
            echo '
            <header>
                <nav>
                    <ul>
                        <li><a href="index.php?lang=' . $lang . '">Inicio</a></li>
                        >
                        <li><a id="this" href="">¿Quiénes somos?</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h1>¿QUIÉNES SOMOS?</h1>
                <hr class="main-line">
                <p>
                    Somos un equipo de 5 estudiantes en nuestro primer año de BUT Informática en la Universidad Gustave Eiffel en Francia.
                    Este proyecto se llevó a cabo como parte de un proyecto de mediación cultural y digital en colaboración con la UNESCO con
                    el objetivo de promover un patrimonio cultural a través de un sitio web.</p>
                <hr class="separator-line">
                <section class="team">
                    <article class="member">
                        <div class="top">
                            <h2>Emilie XU</h2>
                            <p>Gerente de proyecto<br>Diseñador gráfico<br>Apoyo al desarrollo</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/emilie-qiaoxin-xu/">LinkedIn</a></li>
                            <li><a href="https://perso-etudiant.u-pem.fr/~emilie.xu/Portfolio/main.php">Portafolio</a></li>
                            <li><a href="#">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Alexis CHAMPAULT</h2>
                            <p>Desarrollador Front-end</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/champaulta/">LinkedIn</a></li>
                            <li><a href="https://alexios30.github.io/Champault_Portfolio/">Portafolio</a></li>
                            <li><a href="https://alexios30.github.io/Champault_Portfolio/include/Champault_Alexis_CV.pdf">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Romain LONCIN</h2>
                            <p>Traductor</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/romain-loncin/">LinkedIn</a></li>
                            <li><a href="http://perso-etudiant.u-pem.fr/~romain.loncin/portfolio.html">Portafolio</a></li>
                            <li><a href="http://perso-etudiant.u-pem.fr/~romain.loncin/CV-Romain_LONCIN.pdf">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Jérémy ZHENG</h2>
                            <p>Desarrollador Front-end</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/jeremy-zheng-jz/">LinkedIn</a></li>
                            <li><a href="#">Portafolio</a></li>
                            <li><a href="#">CV</a></li>
                        </ul>
                    </article>
                    <article class="member">
                        <div class="top">
                            <h2>Andrei ACHIRECESEI</h2>
                            <p>Responsable de la base de datos</p>
                            <div class="photo"></div>
                        </div>
                        <ul class="links">
                            <li><a href="https://www.linkedin.com/in/a-achirecesei/">LinkedIn</a></li>
                            <li><a href="https://perso-etudiant.u-pem.fr/~achirecesei/">Portafolio</a></li>
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
