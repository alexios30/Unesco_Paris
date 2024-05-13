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
    <button class="plus" id="exception">
      Voir plus d&apos;&eacute;v&egrave;nements >
    </button>
  </div>
  
  <!-- Parcourez -->
  
  <div class="Parcourez">
    <div class="Titre"><b>Parcourir</b></div>
    <div class="ligne"></div>
    <div class="box">
      <div class="cadrant">
        <img id="monument" src="#">
      </div>
      <div class="description">
        ertygjhg
        <button class="plus" id="exception2">
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
      <div class="cadrant click" id="m1"><div class="text">Arc de triomphe</div></div>
      <div class="cadrant click" id="m2"><div class="text">Louvre</div></div>
      <div class="cadrant click" id="m3"><div class="text">Notre Dame</div></div>
    </div>
    <div class="box2">
      <div class="cadrant click" id="m4"><div class="text">Bois de Vincennes</div></div>
      <div class="cadrant click" id="m5"><div class="text">Op&eacute;ra</div></div>
      <div class="cadrant click" id="m6"><div class="text">H&ocirc;tel des Invalides</div></div>
    </div>
  </div>
  
  <!-- Footer -->
  
  <?php
  include("footer.inc.php");
  ?>
<script src="script.js"></script>
</body>
</html>
