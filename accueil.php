<?php
include("checklang.inc.php");
?>

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
  
  <?php
  switch ($lang) {
    case "fr": 
      echo "
      <div class='Paris'>
        <span>Paris</span><br/>
          Un patrimoine vivant, une culture &eacute;ternelle,<br/>
          Une histoire &agrave; travers chaque ruelle
      </div>";
      break;
    case "en": 
      echo "
      <div class='Paris'>
        <span>Paris</span><br/>
          A living heritage, an eternal culture,<br/>
          A story through each alley&apos;s structure
      </div>";
      break;
    case "es": 
      echo "
      <div class='Paris'>
        <span>Par&iacute;s</span><br/>
        Un patrimonio vivo, una cultura eterna,<br/>
        Una historia a trav&eacute;s de cada callejuela
      </div>";
      break;
  }
  ?>
  
  <!-- Introduction -->
  
  <?php
  switch ($lang) {
    case "fr": 
      echo "
      <div class='about'>
        <br/>
        <br/>
        <span class='Titre'><b><u>Capitale</u> de la France, Paris est la ville <u>la plus visit&eacute;e au monde</u> depuis <u><span class='gros'>25</span> ans</u></b>.</span><br/><br/><br/><br/><br/>
        <span class='texte'>Cette ville regorge de monuments et d&apos;endroits &agrave; visiter. &Agrave; l&apos;aide de parcours de d&eacute;couverte des monuments embl&eacute;matiques ou de lieux atypiques, explorez cette ville charg&eacute;e d&apos;histoire, plac&eacute;e au centre du patrimoine fran&ccedil;ais.</span>
        <br/>
        <br/>
        <button class='plus'>
          Plus d&apos;informations >
        </button>
      </div>";
      break;
    case "en": 
      echo "
      <div class='about'>
        <br/>
        <br/>
        <span class='Titre'><b><u>Capital</u> of France, Paris is <u>the most visited city in the world</u> for the past <u><span class='gros'>25</span> years</u></b>.</span><br/><br/><br/><br/><br/>
        <span class='texte'>This city is brimming with monuments and places to visit. Explore this city steeped in history, at the heart of France&apos;s heritage, with the help of guided tours of emblematic monuments and unusual sites.</span>
        <br/>
        <br/>
        <button class='plus'>
          More information >
        </button>
      </div>";
      break;
    case "es": 
      echo "
      <div class='about'>
        <br/>
        <br/>
        <span class='Titre'><b><u>Capital</u> de Francia, Par&iacute;s es desde hace <u><span class='gros'>25</span> as</u> <u>la ciudad m&aacute;s visitada del mundo</u></b>.</span><br/><br/><br/><br/><br/>
        <span class='texte'>Esta ciudad est&aacute; repleta de monumentos y lugares que visitar. Explore esta ciudad cargada de historia, en pleno coraz&oacute;n del patrimonio franc&eacute;s, con la ayuda de visitas guiadas a monumentos emblem&aacute;ticos y lugares ins&oacute;litos.</span>
        <br/>
        <br/>
        <button class='plus'>
          M&aacute;s informaci&oacute;n >
        </button>
      </div>";
      break;
  }
  ?>
    
  <!-- Participer -->
    
    <?php
    switch ($lang) {
      case "fr": 
        echo "
        <div class='Participez'>
          <div class='Titre'>
            <b>Participer</b>
          </div>
          <div class='ligne'>
          </div>
          <div class='bloc'>
            <div class='image click' id='e1'><div class='text'>P&eacute;riode, description, etc</div></div>
            <div class='image click' id='e2'><div class='text'>P&eacute;riode, description, etc</div></div>
          </div>
          <div class='bloc'>
            <div class='image click' id='e3'><div class='text'>P&eacute;riode, description, etc</div></div>
            <div class='image click' id='e4'><div class='text'>P&eacute;riode, description, etc</div></div>
          </div>
          <button class='plus' id='exception'>
            <a href='participer-1.php?lang=$lang'>Voir plus d&apos;&eacute;v&egrave;nements ></a>
          </button>
        </div>";
        break;
      case "en": 
        echo "
        <div class='Participez'>
          <div class='Titre'>
            <b>Participate</b>
          </div>
          <div class='ligne'>
          </div>
          <div class='bloc'>
            <div class='image click' id='e1'><div class='text'>P&eacute;riode, description, etc</div></div>
            <div class='image click' id='e2'><div class='text'>P&eacute;riode, description, etc</div></div>
          </div>
          <div class='bloc'>
            <div class='image click' id='e3'><div class='text'>P&eacute;riode, description, etc</div></div>
            <div class='image click' id='e4'><div class='text'>P&eacute;riode, description, etc</div></div>
          </div>
          <button class='plus' id='exception'>
            <a href='participer-1.php?lang=$lang'>See more events ></a>
          </button>
        </div>";
        break;
      case "es": 
        echo "
        <div class='Participez'>
          <div class='Titre'>
            <b>Participar</b>
          </div>
          <div class='ligne'>
          </div>
          <div class='bloc'>
            <div class='image click' id='e1'><div class='text'>P&eacute;riode, description, etc</div></div>
            <div class='image click' id='e2'><div class='text'>P&eacute;riode, description, etc</div></div>
          </div>
          <div class='bloc'>
            <div class='image click' id='e3'><div class='text'>P&eacute;riode, description, etc</div></div>
            <div class='image click' id='e4'><div class='text'>P&eacute;riode, description, etc</div></div>
          </div>
          <button class='plus' id='exception'>
            <a href='participer-1.php?lang=$lang'>Ver m&aacute;s eventos ></a>
          </button>
        </div>";
        break;
    }
    ?>
  
  <!-- Parcourez -->
  
  <?php
    switch ($lang) {
      case "fr": 
        echo "
        <div class='Parcourez'>
          <div class='Titre'><b>Browse</b></div>
          <div class='ligne'></div>
          <div class='box'>
            <div class='cadrant'>
              <img id='monument' src='Images/parcours.jpeg'>
            </div>
            <div class='description'>
              Venez parcourir le Grand Paris !
              <button class='plus' id='exception2'>
                <a href='Parcourir.php?lang=$lang'>C'est parti !</a>
              </button>
            </div>
          </div>
        </div>";
        break;
      case "en": 
        echo "
        <div class='Parcourez'>
          <div class='Titre'><b>Browse</b></div>
          <div class='ligne'></div>
          <div class='box'>
            <div class='cadrant'>
              <img id='monument' src='Images/parcours.jpeg'>
            </div>
            <div class='description'>
              Come and explore the Greater Paris region ! 
              <button class='plus' id='exception2'>
                <a href='Parcourir.php?lang=$lang'>Let's go ! ></a>
              </button>
            </div>
          </div>
        </div>";
        break;
      case "es": 
        echo "
        <div class='Parcourez'>
          <div class='Titre'><b>Browse</b></div>
          <div class='ligne'></div>
          <div class='box'>
            <div class='cadrant'>
              <img id='monument' src='Images/parcours.jpeg'>
            </div>
            <div class='description'>
              Venga a descubrir el Gran París  
              <button class='plus' id='exception2'>
                <a href='Parcourir.php?lang=$lang'>¡Allá vamos! ></a>
              </button>
            </div>
          </div>
        </div>";
        break;
    }
    ?>
  
  <!-- Découvrez -->
  
  <?php
    switch ($lang) {
      case "fr": 
        echo "
        <div class='Decouvrez'>
          <div class='Titre'>
            <b>D&eacute;couvrez</b>
          </div>
          <div class='ligne'>
          </div>
          <div class='box2'>
            <a href='Triomphe.php?lang=$lang'><div class='cadrant click' id='m1'><div class='text'>Arc de Triomphe</div></div></a>
            <a href='Louvre.php?lang=$lang'><div class='cadrant click' id='m2'><div class='text'>Louvre</div></div></a>
            <a href='NotreDame.php?lang=$lang'><div class='cadrant click' id='m3'><div class='text'>Notre Dame</div></div></a>
          </div>
          <div class='box2'>
            <a href='Vincennes.php?lang=$lang'><div class='cadrant click' id='m4'><div class='text'>Bois de Vincennes</div></div></a>
            <a href='Opera.php?lang=$lang'><div class='cadrant click' id='m5'><div class='text'>Op&eacute;ra</div></div></a>
            <a href='Invalide.php?lang=$lang'><div class='cadrant click' id='m6'><div class='text'>H&ocirc;tel des Invalides</div></div></a>
          </div>
        </div>";
        break;
      case "en": 
        echo "
        <div class='Decouvrez'>
          <div class='Titre'>
            <b>Discover</b>
          </div>
          <div class='ligne'>
          </div>
          <div class='box2'>
            <a href='Triomphe.php?lang=$lang'><div class='cadrant click' id='m1'><div class='text'>Triumphal arc</div></div></a>
            <a href='Louvre.php?lang=$lang'><div class='cadrant click' id='m2'><div class='text'>Louvre</div></div></a>
            <a href='NotreDame.php?lang=$lang'><div class='cadrant click' id='m3'><div class='text'>Notre Dame</div></div></a>
          </div>
          <div class='box2'>
            <a href='Vincennes.php?lang=$lang'><div class='cadrant click' id='m4'><div class='text'>Bois de Vincennes</div></div></a>
            <a href='Opera.php?lang=$lang'><div class='cadrant click' id='m5'><div class='text'>Op&eacute;ra</div></div></a>
            <a href='Invalide.php?lang=$lang'><div class='cadrant click' id='m6'><div class='text'>H&ocirc;tel des Invalides</div></div></a>
          </div>
        </div>";
        break;
      case "es": 
        echo "
        <div class='Decouvrez'>
          <div class='Titre'>
            <b>Descubra</b>
          </div>
          <div class='ligne'>
          </div>
          <div class='box2'>
            <a href='Triomphe.php?lang=$lang'><div class='cadrant click' id='m1'><div class='text'>Arc de Triomphe</div></div></a>
            <a href='Louvre.php?lang=$lang'><div class='cadrant click' id='m2'><div class='text'>Louvre</div></div></a>
            <a href='NotreDame.php?lang=$lang'><div class='cadrant click' id='m3'><div class='text'>Notre Dame</div></div></a>
          </div>
          <div class='box2'>
            <a href='Vincennes.php?lang=$lang'><div class='cadrant click' id='m4'><div class='text'>Bois de Vincennes</div></div></a>
            <a href='Opera.php?lang=$lang'><div class='cadrant click' id='m5'><div class='text'>Op&eacute;ra</div></div></a>
            <a href='Invalide.php?lang=$lang'><div class='cadrant click' id='m6'><div class='text'>H&ocirc;tel des Invalides</div></div></a>
          </div>
        </div>";
        break;
    }
    ?>
  
  <!-- Footer -->
  
  <?php
  include("footer.inc.php");
  ?>
  
</body>
</html>
