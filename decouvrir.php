<html>
  <head>
    <title>Participer</title>
    <link rel="stylesheet" href="style_parcourir.css">
    <meta charset="utf-8">
  </head>
  <body>

    <!-- Barre de navigation -->
    
    <div class="navigbar">
      <div class="navig">
        
        <!-- Hamburger menu -->
        
        <button onclick="myFunction('menu')" class="rectangles">
          <img id="hambmenu" src="https://i.imgur.com/MCTSRpB.png ">
        </button>
        
        <!-- Logo MCN -->
        
        <a class="logo" href="index.php"><img id="LogoMCN" src="https://i.imgur.com/FYHl6nN.png"></a>
        
        <!-- Barre de recherche -->
        
        <div class="search-bar">
          <input type=text placeholder="Recherche...">
          <div class="loupe">
            <img src="https://i.imgur.com/0Arm6Lu.png">
          </div>
        </div>
        
        <!-- Menu des langues -->
        
        <button class="menul" onClick="myFunction('langues')">
          <img src="https://i.imgur.com/moe4dvF.png" class="langue"/>&nbsp;FR
        </button>
        <div id="langues">
          <a href=""><div class="sousl">
            <img src="https://i.imgur.com/ZUd06Ts.png" class="langue"/>&nbsp;EN
          </div></a>
          <a href=""><div class="sousl">
            <img src="https://i.imgur.com/6MrXRwG.png" class="langue"/>&nbsp;ES
          </div></a>
        </div>
        </div>
      
        <!-- Reste du menu hamburger -->
      
        <div id="menu">
          <div class="sous">
            <a href="#">Participer</a>
          </div>
          <div class="sous">
            <a href="#">Parcourir</a>
          </div>
          <div class="sous">
            <a href="#">D&eacute;couvrir</a>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    
    <!-- Barre noire -->

    <div class="barre-noire">
      Accueil > <b>Découvrir</b>
    </div>

  </div>

  <!-- Participer -->

  <h1 class="participer">Découvrir</h1>
  <div class="ligne"></div>

  <p class="participer-text">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse 
  luctus laoreet dolor quis imperdiet. Proin nec massa massa. Aliquam 
  finibus nisi quis neque pharetra condimentum. Donec malesuada 
  scelerisque turpis.
  </p>
  <div class="ligne-participer-text" id="ligne"></div>

  <?php
  if (isset($_GET["categorie"])) {
    $categorie = $_GET["categorie"];
  } else {
    $categorie = "tous";
  }

  include("connexion.inc.php");
  $cnx->exec("SET search_path TO paris");
  ?>

<a href="decouvrir.php?categorie=tous#ligne">
    <?php
    if ($categorie == "tous") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      TOUS
    </div>
  </a>

  <a href="decouvrir.php?categorie=monuments#ligne">
    <?php
    if ($categorie == "monuments") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      MONUMENTS
    </div>
  </a>

  <a href="decouvrir.php?categorie=verts#ligne">
    <?php
    if ($categorie == "verts") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      ESPACES VERTS
    </div>
  </a>

  <a href="decouvrir.php?categorie=musees#ligne">
    <?php
    if ($categorie == "musees") {
      echo "<div class=\"bouton-actif\">";
    } else {
      echo "<div class=\"bouton\">";
    }
    ?>
      MUS&Eacute;ES
    </div>
  </a>

  <div display="block"></div>

  <!-- Activites -->

  <?php
  if ($categorie != "tous") {
    $results = $cnx->query("SELECT * FROM decouvrir WHERE categorie = '".$categorie."'");
  } else {
    $results = $cnx->query("SELECT * FROM decouvrir");
  }

  while ($ligne = $results->fetch(PDO::FETCH_OBJ)) {
    ?>

    <div class="box-activite">
      <b class="titre-activite">
      <?php
      if ($ligne->type == "activite") {
        echo "ACTIVIT&Eacute;";
      } else {
        echo "&Eacute;VENEMENT";
      }
      ?>
      </b>
      <img src= <?php echo $ligne->lien_image; ?> >
      <div class="nom-activite">
      <?php echo $ligne->nom_activite; ?>
      </div>
      <p> <?php echo $ligne->description; ?> </p>
      <div class="boutton-voir-activite"><a href= <?php echo $ligne->lien_page; ?> >Voir l'activit&eacute; !</a></div>
    </div>

    <?php
  }
  ?>

  <!-- Fin Activites -->

  <!-- FOOTER -->
  <footer>

    <h3>About us</h3>

    <!-- LIENS -->
    <div class="link_bloc">
        <div class="links">
            <a href="">Who are we ?	</a> <br>
            <a href="">Contact us</a> <br>
            <a href="">Terms & Conditions</a> <br>
            <a href="">Privacy Policy</a>
        </div>
        <div class="links">
            <a href="">Credits</a> <br>
            <a href="">Legal Notices</a> <br>
        </div>
    </div>

    <hr width="90%" style="margin:50px auto 40px auto">

    <!-- LOGOS -->
    <div class="all_logos">
        <a href="https://iut.univ-gustave-eiffel.fr"><img src="Icons/iut-uge.png"></a>
        <a href="https://www.unesco.org/"><img src="Icons/unesco.png"></a>
        <img src="Icons/mcn.png">
        <img src="Icons/cdm.png">
        <img src="Icons/idea.png">
        <img src="Icons/inv_ave.png">
    </div>

    <p>
        &copy; All rights reserved.
    </p>

</footer>
</body>
</html>