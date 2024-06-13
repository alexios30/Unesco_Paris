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
        <?php
         switch ($lang) {
            case "fr":
                echo '<header>
                        <nav>
                            <ul>
                                <li><a href="index.php?lang=<?php echo "$lang"; ?>Accueil</a></li>
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
                                    Bienvenue dans notre parcours unique à travers Paris : "Les Secrets Cachés de Paris". Pendant cette aventure captivante de 3 heures, vous explorerez des trésors méconnus de la capitale française. Partez à la découverte de la Petite Ceinture, une ancienne ligne de chemin de fer abandonnée devenue un havre de verdure urbaine. Plongez dans les entrailles de la ville avec une visite insolite au Musée des Égouts. Admirez la splendeur orientale de la Pagode de Paris et laissez-vous émerveiller par la biodiversité du Jardin des Serres d\'Auteuil. Terminez cette exploration avec une pause relaxante au Square des Batignolles, où l\'architecture et la nature se rencontrent harmonieusement. Rejoignez-nous pour une expérience qui marquera vos sens et enrichira votre connaissance de Paris !
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
                                    Bienvenue dans notre parcours "Élégance Parisienne", une immersion de demi-journée mêlant histoire, architecture et grandeur parisienne. Découvrez trois joyaux emblématiques de la capitale française :Arc de Triomphe : Commencez par ce symbole de la grandeur nationale, offrant une vue panoramique inégalée sur Paris depuis sa terrasse. Imprégnez-vous de l\'histoire et de l\'architecture majestueuse de cette monumentale structure érigée par Napoléon.La Défense : Poursuivez votre exploration dans le quartier moderne de La Défense, où les gratte-ciels audacieux rivalisent avec le ciel parisien. Plongez dans l\'atmosphère dynamique d\'un centre d\'affaires contemporain et découvrez l\'art urbain à travers ses installations et ses espaces publics.Opéra Garnier : Terminez en beauté à l\'Opéra Garnier, un chef-d\'œuvre architectural du XIXe siècle. Admirez sa façade opulente et plongez dans son intérieur somptueux lors d\'une visite guidée. Découvrez les histoires fascinantes qui se cachent derrière les coulisses de cet emblème de l\'art lyrique et de la danse.Ce parcours vous invite à un voyage à travers le temps et les styles architecturaux, vous offrant une expérience enrichissante et inoubliable au cœur de Paris.
                                    </p>
                                </div>
                            </article>
                        </section>
                    </main>';
                    break;
            case "en":
                echo '<header>
                    <nav>
                        <ul>
                            <li><a href="index.php?lang=<?php echo "$lang"; ?>Home</a></li>
                            >
                            <li><a id="this" href="">Browse</a></li>
                        </ul>
                    </nav>
                </header>
                <main>
                    <h1>Browse</h1>
                    <hr class="main-line">
                    <p>
                        Discover Paris differently: captivating itineraries to explore the City of Light in a new light!
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
                                <h2>The Hidden Secrets of Paris</h2>
                                <nav>
                                    <ul>
                                        <li>Historical</li>
                                        <li>Architecture </li>
                                        <li>Culture</li>
                                    </ul>
                                </nav>
                                <p>
                                    Welcome to our unique journey through Paris: "The Hidden Secrets of Paris". During this captivating 3-hour adventure, you will explore lesser-known treasures of the French capital. Discover the Petite Ceinture, a former abandoned railway line now transformed into an urban green oasis. Dive into the city\'s depths with an unusual visit to the Sewer Museum. Admire the oriental splendor of the Pagoda of Paris and marvel at the biodiversity of the Jardin des Serres d\'Auteuil. Conclude this exploration with a relaxing break at Square des Batignolles, where architecture and nature harmoniously intersect. Join us for an experience that will heighten your senses and enrich your knowledge of Paris!
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
                                <h2>Elegant Parisian Journey: Between Tradition and Modernity</h2>
                                <nav>
                                    <ul>
                                        <li>Cultural Heritage</li>
                                        <li>Modern Architecture</li>
                                        <li>Lyric Art</li>
                                    </ul>
                                </nav>
                                <p>
                                    Welcome to our "Elegant Parisian Journey", a half-day immersion blending history, architecture, and Parisian grandeur. Discover three iconic gems of the French capital: Arc de Triomphe: Begin with this symbol of national grandeur, offering unparalleled panoramic views of Paris from its terrace. Immerse yourself in the history and majestic architecture of this monumental structure erected by Napoleon. La Défense: Continue your exploration in the modern district of La Défense, where bold skyscrapers compete with the Parisian sky. Dive into the dynamic atmosphere of a contemporary business center and discover urban art through its installations and public spaces. Opéra Garnier: Finish in style at the Opéra Garnier, a 19th-century architectural masterpiece. Admire its opulent façade and delve into its sumptuous interior during a guided tour. Discover the fascinating stories behind the scenes of this emblem of lyric art and dance. This journey invites you on a voyage through time and architectural styles, offering a rewarding and unforgettable experience at the heart of Paris.
                                </p>
                            </div>
                        </article>
                    </section>
                </main>';
                break;
            case "es":
                echo '<header>
                <nav>
                    <ul>
                        <li><a href="index.php?lang=<?php echo "$lang"; ?>Inicio</a></li>
                        >
                        <li><a id="this" href="">Explorar</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h1>Explorar</h1>
                <hr class="main-line">
                <p>
                    Descubre París de manera diferente: itinerarios cautivadores para explorar la Ciudad de la Luz bajo una nueva perspectiva.
                </p>
                <hr class="separator-line">
                <section class="main-section">
                    <article class="parcours">
                        <div class="left-side">
                            <img id="img1" src="https://static.actu.fr/uploads/2021/07/adobestock-212436461.jpeg" alt="imagen 1">
                            <img src="https://vivreparis.fr/wp-content/uploads/2021/10/musee-des-egouts-de-paris-vivre-paris-1-1.jpg" alt="imagen 2">
                            <img src="https://offloadmedia.feverup.com/parissecret.com/wp-content/uploads/2021/04/16054428/Copie-de-Design-sans-titre-72-1024x576.jpg" alt="imagen 3">
                        </div>
                        <div class="right-side">
                            <h2>Los Secretos Escondidos de París</h2>
                            <nav>
                                <ul>
                                    <li>Histórico</li>
                                    <li>Arquitectura </li>
                                    <li>Cultura</li>
                                </ul>
                            </nav>
                            <p>
                                Bienvenido a nuestro recorrido único por París: "Los Secretos Escondidos de París". Durante esta cautivadora aventura de 3 horas, explorarás tesoros menos conocidos de la capital francesa. Descubre la Petite Ceinture, una antigua línea de ferrocarril abandonada convertida en un oasis verde urbano. Sumérgete en las profundidades de la ciudad con una visita inusual al Museo de las Alcantarillas. Admira el esplendor oriental de la Pagoda de París y maravíllate con la biodiversidad del Jardín de las Serres d\'Auteuil. Concluye esta exploración con un descanso relajante en el Square des Batignolles, donde la arquitectura y la naturaleza se encuentran en armonía. ¡Únete a nosotros para una experiencia que agudizará tus sentidos y enriquecerá tu conocimiento de París!
                            </p>
                        </div>
                    </article>
                    <article class="parcours">
                        <div class="left-side">
                            <img id="img1" src="https://upload.wikimedia.org/wikipedia/fr/1/10/Grande_Arche_Janvier_2023.jpeg" alt="imagen 1">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPcErvWzW09b6E-5-Wn0lcJ1fFUJGzH8gxDA&s" alt="imagen 2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Arc_de_Triomphe%2C_Paris_21_October_2010.jpg/280px-Arc_de_Triomphe%2C_Paris_21_October_2010.jpg" alt="imagen 3">
                        </div>
                        <div class="right-side">
                            <h2>Ruta Elegante por París: Entre Tradición y Modernidad</h2>
                            <nav>
                                <ul>
                                    <li>Patrimonio Cultural</li>
                                    <li>Arquitectura Moderna</li>
                                    <li>Arte Lírico</li>
                                </ul>
                            </nav>
                            <p>
                                Bienvenido a nuestra "Ruta Elegante por París", una inmersión de medio día que combina historia, arquitectura y grandeza parisina. Descubre tres joyas icónicas de la capital francesa: Arco del Triunfo: Comienza con este símbolo de grandeza nacional, que ofrece vistas panorámicas incomparables de París desde su terraza. Sumérgete en la historia y la arquitectura majestuosa de esta estructura monumental erigida por Napoleón. La Défense: Continúa tu exploración en el moderno distrito de La Défense, donde los audaces rascacielos compiten con el cielo parisino. Sumérgete en la atmósfera dinámica de un centro de negocios contemporáneo y descubre el arte urbano a través de sus instalaciones y espacios públicos. Ópera Garnier: Finaliza con estilo en la Ópera Garnier, una obra maestra arquitectónica del siglo XIX. Admira su fachada opulenta y adéntrate en su interior suntuoso durante una visita guiada. Descubre las fascinantes historias que se esconden tras bambalinas de este emblema del arte lírico y la danza. Este recorrido te invita a un viaje a través del tiempo y los estilos arquitectónicos, ofreciéndote una experiencia enriquecedora e inolvidable en el corazón de París.
                            </p>
                        </div>
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