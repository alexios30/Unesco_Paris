<!DOCTYPE html>
<html>
  <head>
    <title>Paris</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
  </head>
<body>
  
  <?php
  include("navbar.inc.php");
  ?>
  
  <!-- Héros -->
  
  <div class="Paris">
    <span>Paris</span><br/>
      Un patrimoine vivant, une culture &eacute;ternelle,<br/>
      Une histoire &agrave; travers chaque ruelle
  </div>
  
  <!-- Introduction -->
  
  <div class="about">
    <br/>
    <br/>
    <span class="Titre"><b><u>Capitale</u> de la France, Paris est la ville <u>la plus visit&eacute;e au monde</u> depuis <u><span class="gros">25</span> ans</u></b>.</span><br/><br/><br/><br/><br/>
  <span class="texte">Cette ville regorge de monuments et d&apos;endroits &agrave; visiter. &Agrave; l&apos;aide de parcours de d&eacute;couverte des monuments embl&eacute;matiques ou de lieux atypiques, explorez cette ville charg&eacute;e d&apos;histoire, plac&eacute;e au centre du patrimoine fran&ccedil;ais.</span>
  <br/>
  <br/>
  <button class="plus">
    Plus d&apos;informations >
  </button>
  </div>
  </div>
    
  <!-- Participer -->
  
  <div class="Participez">
    <div class="Titre">
      <b>Participer</b>
    </div>
    <div class="ligne">
    </div>
    <div class="bloc">
      <div class="image click" id="e1"><div class="text">P&eacute;riode, description, etc</div></div>
      <div class="image click" id="e2"><div class="text">P&eacute;riode, description, etc</div></div>
    </div>
    <div class="bloc">
      <div class="image click" id="e3"><div class="text">P&eacute;riode, description, etc</div></div>
      <div class="image click" id="e4"><div class="text">P&eacute;riode, description, etc</div></div>
    </div>
    <button class="plus" id="exception"  onclick="window.location.href='participer_1.php'">
      Voir plus d&apos;&eacute;v&egrave;nements >
    </button>
  </div>
  
  <!-- Parcourez -->
  
  <div class="Parcourez">
    <div class="Titre"><b>Parcourir</b></div>
    <div class="ligne"></div>
    <div class="box">
      <div class="cadrant">
        <img id="monument" src="Images/parcours.jpeg">
      </div>
      <div class="description">
        Venez parcourir le Grand Paris !
        <button class="plus" id="exception2" onclick="window.location.href='Parcourir.php'">
          C&apos;est parti ! >
        </button>
      </div>
    </div>
  </div>
  
  <!-- Parcourez -->
  
  <div class="Decouvrez">
    <div class="Titre">
      <b>D&eacute;couvrir</b>
    </div>
    <div class="ligne">
    </div>
    <div class="box2">
      <div class="cadrant click" id="m1" onclick="window.location.href='Triomphe.html'" ><div class="text" >Arc de triomphe</div></div>
      <div class="cadrant click" id="m2" onclick="window.location.href='Louvre.html'"><div class="text">Louvre</div></div>
      <div class="cadrant click" id="m3"  onclick="window.location.href='NotreDame.html'"><div class="text">Notre Dame</div></div>
    </div>
    <div class="box2">
      <div class="cadrant click" id="m4"  onclick="window.location.href='Vincennes.html'"><div class="text">Bois de Vincennes</div></div>
      <div class="cadrant click" id="m5"  onclick="window.location.href='Opera.html'"><div class="text">Op&eacute;ra</div></div>
      <div class="cadrant click" id="m6"  onclick="window.location.href='Invalide.html'"><div class="text">H&ocirc;tel des Invalides</div></div>
    </div>
    <button class="plus" onclick="window.location.href='decouvrir.php'">
    Plus d&apos;informations >
  </button>

  </div>

  <!-- Footer -->
  
  <?php
  include("footer.inc.php");
  ?>
<script src="script.js"></script>
</body>
</html>