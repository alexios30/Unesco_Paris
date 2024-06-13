<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Parcour</title>
    <style>
        :root{
            --black30: rgba(0,0,0,.3);
            --orange: #EB5C0D;
            --grey: #333333;
        }


        html {
            background-color: var(--grey);
        }

        body{
            margin: 2vh 2vw;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            flex-direction: row;
        }


        .container {
            display: flex;
            flex-direction: column;
            width: 40vw;
            height: 60vh;
            background-color: #333;
            border-radius: 40px 40px 20px 20px;
            overflow: hidden;
            border: 2px solid #fff;
            margin: 30px 0;
        }


        .container img {
            width: 100%;
            height: 40%;
            object-fit: cover;
        }


        .content {
            height: 60%;
            padding: 20px;
            color: white;
            font-family: Arial, sans-serif;
            overflow-y: auto;
        }


        .content h1 {
            color: var(--orange);
            font-size: 1.5em;
            margin-bottom: 10px;
        }


        .content p {
            font-size: 1em;
            line-height: 1.5em;
            margin-bottom: 10px;
        }


        .content .emphasis {
            color: var(--orange);
        }

        /*BARRE DE LOCATION*/
        .location {
            width: 100%;
            background-color: black;
            padding: 1px 30px;
        }

        .location {
            font-size: 18px;
        }

        .location ul {
            display: flex;
            flex-direction: row;
            list-style-type: none;
            gap: 20px;
            font-weight: bold;
            color: white;
        }

        .location a {
            color: white;
        }

        a:hover {
            transition: 0.2s;
            filter: brightness(0.5);
            cursor: pointer;
        }

        a:link {
            color: inherit;
            text-decoration: none;
        }

        .current-location {
            color: var(--main);
        }


        /*TITRE DE LA PAGE*/

        .title {
            margin: 15px 0;
        }
        .title h1 {
            text-align: center;
            font-size: 300%;
            font-family: "Dyno_Bold";
            margin-bottom: 10px;
        }

        .title hr {
            background-color: var(--main);
            color: var(--main);
            height: 2px;
            max-width: 200px;
        }

        .description {
            padding: 50px 20px;
            font-size: 20px;
            text-align: center;
            max-width: 700px;
        }

        /* Responsive behavior */
        @media (max-width: 768px) {
            .container {
                width: 80vw;
            }

        }
    </style>
</head>
<body>
<?php
        include("navbar.inc.php");
        switch($lang){
          case 'fr':
            echo "
            <div class='location'>
              <ul>
                  <li><a href='index.php?lang='" . htmlspecialchars($lang) . "'>Accueil</a> &nbsp;&nbsp;&nbsp;></li>
                  <li><a href='decouvrir.php?lang='" . htmlspecialchars($lang) . "'>Parcourir</a> &nbsp;&nbsp;&nbsp;></li>
                  <li class='current-location'><a>[Parcours]</a></li>
              </ul>
            </div>
            <!-- Titre de la page-->
              <div class='title'>
                  <h1>[Parcours]</h1>
                  <hr>
              </div>
              <p class='description'>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa. Aliquam finibus nisi quis neque pharetra condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa.
              </p>
          ";
            break;


          case 'en':
            echo "
            <div class='location'>
              <ul>
                  <li><a href='index.php?lang='" . htmlspecialchars($lang) . "'>Home</a> &nbsp;&nbsp;&nbsp;></li>
                  <li><a href='decouvrir.php?lang='" . htmlspecialchars($lang) . "'>Roaming</a> &nbsp;&nbsp;&nbsp;></li>
                  <li class='current-location'><a>[Route]</a></li>
              </ul>
            </div>
            <!-- Titre de la page-->
              <div class='title'>
                  <h1>[Route]</h1>
                  <hr>
              </div>
              <p class='description'>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa. Aliquam finibus nisi quis neque pharetra condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa.
              </p>
          ";
            break;


          case 'es':
            echo "
            <div class='location'>
              <ul>
                  <li><a href='index.php?lang='" . htmlspecialchars($lang) . "'>Inicio</a> &nbsp;&nbsp;&nbsp;></li>
                  <li><a href='decouvrir.php?lang='" . htmlspecialchars($lang) . "'>Explorar</a> &nbsp;&nbsp;&nbsp;></li>
                  <li class='current-location'><a>[Itinerio]</a></li>
              </ul>
            </div>
            <!-- Titre de la page-->
              <div class='title'>
                  <h1>[Itinerio]</h1>
                  <hr>
              </div>
              <p class='description'>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa. Aliquam finibus nisi quis neque pharetra condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa.
              </p>
          ";
            break;
        }
?>
          
  <div class="container">
      <img src="PARIS1.jpg" alt="Aerial view of city">
      <div class="content">
          <h1>Lorem Ipsum Dolor</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa. Aliquam finibus nisi quis neque pharetra condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa.</p>
          <p class="emphasis">Utiliser des icones, listes, tags, etc pour les informations.</p>
      </div>
  </div>
  <div class="container">
      <img src="PARIS1.jpg" alt="Aerial view of city">
      <div class="content">
          <h1>Lorem Ipsum Dolor</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa. Aliquam finibus nisi quis neque pharetra condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa.</p>
          <p class="emphasis">Utiliser des icones, listes, tags, etc pour les informations.</p>
      </div>
  </div>
  <div class="container">
      <img src="PARIS1.jpg" alt="Aerial view of city">
      <div class="content">
          <h1>Lorem Ipsum Dolor</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa. Aliquam finibus nisi quis neque pharetra condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa.</p>
          <p class="emphasis">Utiliser des icones, listes, tags, etc pour les informations.</p>
      </div>
  </div>
  <div class="container">
      <img src="PARIS1.jpg" alt="Aerial view of city">
      <div class="content">
          <h1>Lorem Ipsum Dolor</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa. Aliquam finibus nisi quis neque pharetra condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus laoreet dolor quis imperdiet. Proin nec massa massa.</p>
          <p class="emphasis">Utiliser des icones, listes, tags, etc pour les informations.</p>
      </div>
  </div>
  <?php
    include("footer.inc.php");
    ?>
</body>
</html>