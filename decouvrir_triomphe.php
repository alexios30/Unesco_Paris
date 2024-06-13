<!DOCTYPE html>

<html>

    <head>
        <title>Titre</title>
        <link rel="stylesheet" href="decouvrir-template.css">
        <link rel="stylesheet" href="composants.css">
        <meta charset="utf-8">
    </head>

    <body>

        <!-- Vérifie langue + nav bar -->
        <?php
            include("checklang.inc.php");
            include("navbar.inc.php");
        
            // CHANGEMENT DES LANGUES ------------------------------------------------------------------------------------------------------------------------------

         switch($lang) {
            case "fr":
                ?>

                <!-- Barre de localisation-->

                <div class="location">
                    <ul>
                        <li><a href="index.php">Accueil</a> &nbsp;&nbsp;&nbsp;></li>
                        <li>location &nbsp;&nbsp;&nbsp;></li>
                        <li>location &nbsp;&nbsp;&nbsp;></li>
                        <li class="current-location"><a>current-location</a></li>
                    </ul>
                </div>

                <!-- Top section, Landing + description -->
                <section>

                    <!-- Titre de la page-->
                    <div class="title">
                        <h1>Titre Lorem Ipsum</h1>
                        <hr>
                    </div>

                    <!-- Image hero -->
                    <div class="hero">
                        <img src="content-images/musee-armee.jpg">
                        <p class="doc-desc">description</p>
                    </div>

                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                    </p>
                            
                </section>

                <section>

                    <div class="orange-title">
                        <h2>Titre Orange</h2><hr>
                    </div>

                    <div class="yellow-title">
                        <h3>Titre jaune</h3><hr>
                    </div>

                    <div class="img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/%E8%8D%A3%E8%AA%89%E5%BA%AD%E9%99%A2%C2%A9Paris%2C_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg/1599px-%E8%8D%A3%E8%AA%89%E5%BA%AD%E9%99%A2%C2%A9Paris%2C_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg?20170922084814">
                        <p class="doc-desc">La Cour d'Honneur des Invalides - <a href="https://commons.wikimedia.org/wiki/File:%E8%8D%A3%E8%AA%89%E5%BA%AD%E9%99%A2%C2%A9Paris,_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg">Paris, musée de l&#039;Armée</a>, <a href="https://creativecommons.org/licenses/by-sa/4.0">CC BY-SA 4.0</a>, Wikimedia Commons</p>
                    </div>
                    
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                    </p>
                    
                    <hr class="sep-line">

                    <h4>Lorem Ipsum</h4>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.s
                    </p>
                </section>

                <div class="sep">
                    <p>
                        Vous souhaitez visiter Paris mais vous ne savez pas par où commencer ?
                        <br>
                        Découvrez nos parcours prédéfinis selon votre temps et vos envies !
                    </p>
                    <a href="Parcourir.php">Parcourez !</a>
                </div>

                <section>

                    <div class="yellow-title">
                        <h3>Titre jaune</h3><hr>
                    </div>

                    <div class="img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/%E6%B3%95%E5%85%B0%E8%A5%BF%E5%9B%BD%E7%8E%8B%E7%9A%84%E9%AA%91%E5%A3%AB%C2%A9Paris%2C_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg">
                        <p class="doc-desc">Chevalier du Musée de l'Armée - <a href="https://commons.wikimedia.org/wiki/File:%E6%B3%95%E5%85%B0%E8%A5%BF%E5%9B%BD%E7%8E%8B%E7%9A%84%E9%AA%91%E5%A3%AB%C2%A9Paris,_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg">Paris, musée de l&#039;Armée</a>, <a href="https://creativecommons.org/licenses/by-sa/4.0">CC BY-SA 4.0</a>, via Wikimedia Commons</p>
                    </div>

                    <h4>Lorem Ipsum</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                    </p>

                    <h4>Lorem Ipsum</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.s
                    </p>

                    <hr class="sep-line">
                </section>

                <p class="editing-info">
                    Rédigé par <a href="Qui-sommes-nous.php">Someone</a>, Révisé par <a href="Qui-sommes-nous.php">Someone</a>, Translation  by <a href="Qui-sommes-nous.php">Someone</a>
                </p>

                <?php
                break;
            case "en":
                ?>

                <!-- Barre de localisation-->

                <div class="location">
                    <ul>
                        <li><a href="index.php">Accueil</a> &nbsp;&nbsp;&nbsp;></li>
                        <li>location &nbsp;&nbsp;&nbsp;></li>
                        <li>location &nbsp;&nbsp;&nbsp;></li>
                        <li class="current-location"><a>current-location</a></li>
                    </ul>
                </div>

                <!-- Top section, Landing + description -->
                <section>

                    <!-- Titre de la page-->
                    <div class="title">
                        <h1>Title Lorem Ipsum</h1>
                        <hr>
                    </div>

                    <!-- Image hero -->
                    <div class="hero">
                        <img src="content-images/musee-armee.jpg">
                        <p class="doc-desc">description</p>
                    </div>

                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                    </p>
                            
                </section>

                <section>

                    <div class="orange-title">
                        <h2>Titre Orange</h2><hr>
                    </div>

                    <div class="yellow-title">
                        <h3>Titre jaune</h3><hr>
                    </div>

                    <div class="img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/%E8%8D%A3%E8%AA%89%E5%BA%AD%E9%99%A2%C2%A9Paris%2C_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg/1599px-%E8%8D%A3%E8%AA%89%E5%BA%AD%E9%99%A2%C2%A9Paris%2C_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg?20170922084814">
                        <p class="doc-desc">La Cour d'Honneur des Invalides - <a href="https://commons.wikimedia.org/wiki/File:%E8%8D%A3%E8%AA%89%E5%BA%AD%E9%99%A2%C2%A9Paris,_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg">Paris, musée de l&#039;Armée</a>, <a href="https://creativecommons.org/licenses/by-sa/4.0">CC BY-SA 4.0</a>, Wikimedia Commons</p>
                    </div>
                    
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                    </p>
                    
                    <hr class="sep-line">

                    <h4>Lorem Ipsum</h4>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.s
                    </p>
                </section>

                <div class="sep">
                    <p>
                        Vous souhaitez visiter Paris mais vous ne savez pas par où commencer ?
                        <br>
                        Découvrez nos parcours prédéfinis selon votre temps et vos envies !
                    </p>
                    <a href="Parcourir.php">Parcourez !</a>
                </div>

                <section>

                    <div class="yellow-title">
                        <h3>Titre jaune</h3><hr>
                    </div>

                    <div class="img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/%E6%B3%95%E5%85%B0%E8%A5%BF%E5%9B%BD%E7%8E%8B%E7%9A%84%E9%AA%91%E5%A3%AB%C2%A9Paris%2C_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg">
                        <p class="doc-desc">Chevalier du Musée de l'Armée - <a href="https://commons.wikimedia.org/wiki/File:%E6%B3%95%E5%85%B0%E8%A5%BF%E5%9B%BD%E7%8E%8B%E7%9A%84%E9%AA%91%E5%A3%AB%C2%A9Paris,_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg">Paris, musée de l&#039;Armée</a>, <a href="https://creativecommons.org/licenses/by-sa/4.0">CC BY-SA 4.0</a>, via Wikimedia Commons</p>
                    </div>

                    <h4>Lorem Ipsum</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                    </p>

                    <h4>Lorem Ipsum</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.s
                    </p>

                    <hr class="sep-line">
                </section>

                <p class="editing-info">
                    Rédigé par <a href="Qui-sommes-nous.php">Someone</a>, Révisé par <a href="Qui-sommes-nous.php">Someone</a>, Translation  by <a href="Qui-sommes-nous.php">Someone</a>
                </p>

                <?php
                break;
            case "es";
                ?>

                <!-- Barre de localisation-->

                <div class="location">
                    <ul>
                        <li><a href="index.php">Accueil</a> &nbsp;&nbsp;&nbsp;></li>
                        <li>location &nbsp;&nbsp;&nbsp;></li>
                        <li>location &nbsp;&nbsp;&nbsp;></li>
                        <li class="current-location"><a>current-location</a></li>
                    </ul>
                </div>

                <!-- Top section, Landing + description -->
                <section>

                    <!-- Titre de la page-->
                    <div class="title">
                        <h1>Titrero Lorem Ipsum</h1>
                        <hr>
                    </div>

                    <!-- Image hero -->
                    <div class="hero">
                        <img src="content-images/musee-armee.jpg">
                        <p class="doc-desc">description</p>
                    </div>

                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                    </p>
                            
                </section>

                <section>

                    <div class="orange-title">
                        <h2>Titre Orange</h2><hr>
                    </div>

                    <div class="yellow-title">
                        <h3>Titre jaune</h3><hr>
                    </div>

                    <div class="img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/%E8%8D%A3%E8%AA%89%E5%BA%AD%E9%99%A2%C2%A9Paris%2C_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg/1599px-%E8%8D%A3%E8%AA%89%E5%BA%AD%E9%99%A2%C2%A9Paris%2C_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg?20170922084814">
                        <p class="doc-desc">La Cour d'Honneur des Invalides - <a href="https://commons.wikimedia.org/wiki/File:%E8%8D%A3%E8%AA%89%E5%BA%AD%E9%99%A2%C2%A9Paris,_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg">Paris, musée de l&#039;Armée</a>, <a href="https://creativecommons.org/licenses/by-sa/4.0">CC BY-SA 4.0</a>, Wikimedia Commons</p>
                    </div>
                    
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                    </p>
                    
                    <hr class="sep-line">

                    <h4>Lorem Ipsum</h4>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.s
                    </p>
                </section>

                <div class="sep">
                    <p>
                        Vous souhaitez visiter Paris mais vous ne savez pas par où commencer ?
                        <br>
                        Découvrez nos parcours prédéfinis selon votre temps et vos envies !
                    </p>
                    <a href="Parcourir.php">Parcourez !</a>
                </div>

                <section>

                    <div class="yellow-title">
                        <h3>Titre jaune</h3><hr>
                    </div>

                    <div class="img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/%E6%B3%95%E5%85%B0%E8%A5%BF%E5%9B%BD%E7%8E%8B%E7%9A%84%E9%AA%91%E5%A3%AB%C2%A9Paris%2C_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg">
                        <p class="doc-desc">Chevalier du Musée de l'Armée - <a href="https://commons.wikimedia.org/wiki/File:%E6%B3%95%E5%85%B0%E8%A5%BF%E5%9B%BD%E7%8E%8B%E7%9A%84%E9%AA%91%E5%A3%AB%C2%A9Paris,_mus%C3%A9e_de_l%27Arm%C3%A9e.jpg">Paris, musée de l&#039;Armée</a>, <a href="https://creativecommons.org/licenses/by-sa/4.0">CC BY-SA 4.0</a>, via Wikimedia Commons</p>
                    </div>

                    <h4>Lorem Ipsum</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                    </p>

                    <h4>Lorem Ipsum</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in cursus neque.
                        Sed lacinia mollis ante ut rhoncus. Fusce vel fringilla justo. Fusce vulputate id
                        risus eget dignissim. Nulla felis leo, feugiat at ex eu, tempor luctus ligula.s
                    </p>

                    <hr class="sep-line">
                </section>

                <p class="editing-info">
                    Rédigé par <a href="Qui-sommes-nous.php">Someone</a>, Révisé par <a href="Qui-sommes-nous.php">Someone</a>, Translation  by <a href="Qui-sommes-nous.php">Someone</a>
                </p>

                <?php
                break;
            default:
                break;
         }
         ?>
    </body>

    <?php include("footer.inc.php"); ?>
    
</html>
