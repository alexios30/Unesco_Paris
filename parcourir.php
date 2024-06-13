<?php
include("checklang.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcourir</title>
    <link rel="stylesheet" href="style_parcourir.css">
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
                <li><a id="this" href="">Parcourir</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Parcourir</h1>
        <hr class="main-line">
        <p>
        Découvrez Paris autrement : des parcours captivants pour explorer la Ville Lumière sous un nouveau jour!
        </p>
        <hr class="separator-line">
        <section class="main-section">
            <article class="parcours">
                <div class="left-side">
                    <img id="img1" src="https://static.actu.fr/uploads/2021/07/adobestock-212436461.jpeg" alt="image 1">
                    <img src="https://vivreparis.fr/wp-content/uploads/2021/10/musee-des-egouts-de-paris-vivre-paris-1-1.jpg" alt="image 2">
                    <img src="https://offloadmedia.feverup.com/parissecret.com/wp-content/uploads/2021/04/16054428/Copie-de-Design-sans-titre-72-1024x576.jpg" alt="image 3">
                </div>
                <div class="right-side">
                    <h2>Les Secrets Cachés de Paris</h2>
                    <nav>
                        <ul>
                            <li>Historique</li>
                            <li>Architecture </li>
                            <li>Culture</li>
                        </ul>
                    </nav>
                    <p>
                    Bienvenue dans notre parcours unique à travers Paris : "Les Secrets Cachés de Paris". Pendant cette aventure captivante de 3 heures, vous explorerez des trésors méconnus de la capitale française. Partez à la découverte de la Petite Ceinture, une ancienne ligne de chemin de fer abandonnée devenue un havre de verdure urbaine. Plongez dans les entrailles de la ville avec une visite insolite au Musée des Égouts. Admirez la splendeur orientale de la Pagode de Paris et laissez-vous émerveiller par la biodiversité du Jardin des Serres d'Auteuil. Terminez cette exploration avec une pause relaxante au Square des Batignolles, où l'architecture et la nature se rencontrent harmonieusement. Rejoignez-nous pour une expérience qui marquera vos sens et enrichira votre connaissance de Paris !







                    </p>
                </div>
            </article>
            <article class="parcours">
                <div class="left-side">
                    <img id="img1" src="https://upload.wikimedia.org/wikipedia/fr/1/10/Grande_Arche_Janvier_2023.jpeg" alt="image 1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPcErvWzW09b6E-5-Wn0lcJ1fFUJGzH8gxDA&s" alt="image 2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Arc_de_Triomphe%2C_Paris_21_October_2010.jpg/280px-Arc_de_Triomphe%2C_Paris_21_October_2010.jpg" alt="image 3">
                </div>
                <div class="right-side">
                    <h2>Parcours Élégance Parisienne : Entre Tradition et Modernité</h2>
                    <nav>
                        <ul>
                            <li>PatrimoineCulturel</li>
                            <li>ArchitectureModerne</li>
                            <li>ArtLyrique</li>
                        </ul>
                    </nav>
                    <p>
                    Bienvenue dans notre parcours "Élégance Parisienne", une immersion de demi-journée mêlant histoire, architecture et grandeur parisienne. Découvrez trois joyaux emblématiques de la capitale française :Arc de Triomphe : Commencez par ce symbole de la grandeur nationale, offrant une vue panoramique inégalée sur Paris depuis sa terrasse. Imprégnez-vous de l'histoire et de l'architecture majestueuse de cette monumentale structure érigée par Napoléon.La Défense : Poursuivez votre exploration dans le quartier moderne de La Défense, où les gratte-ciels audacieux rivalisent avec le ciel parisien. Plongez dans l'atmosphère dynamique d'un centre d'affaires contemporain et découvrez l'art urbain à travers ses installations et ses espaces publics.Opéra Garnier : Terminez en beauté à l'Opéra Garnier, un chef-d'œuvre architectural du XIXe siècle. Admirez sa façade opulente et plongez dans son intérieur somptueux lors d'une visite guidée. Découvrez les histoires fascinantes qui se cachent derrière les coulisses de cet emblème de l'art lyrique et de la danse.Ce parcours vous invite à un voyage à travers le temps et les styles architecturaux, vous offrant une expérience enrichissante et inoubliable au cœur de Paris.
                    </p>
                </div>
            </article>
        </section>
    </main>
    <?php
    include("footer.inc.php");
    ?>
</body>
</html>