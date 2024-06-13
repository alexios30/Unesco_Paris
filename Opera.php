<html>
  <head>
    <title>
    switch($lang) {
        case "fr":
          echo "Opéra de Paris"; break;
        case "en":
          echo "Paris"; break;
        case "es":
          echo "&Oacute;pera de Paris"; break;
        default:
          break;
    }  
    </title>
    <link rel="stylesheet" href="Opera.css">
    <meta charset="utf-8">
  </head>
  <body>
  <?php
    include("checklang.inc.php");
    ?>
    <?php
    include("navbar.inc.php");
    ?>
    
<br/>
  <br/>
  <?php
  switch ($lang) {
    case "fr":
      echo '<div class="about2">
          <span class="gros">L\'Opéra de Paris</span>
      </div>
      <div class="ligne">
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="Champs-Info">
      </div>

      <div class="center-text0">
          <p>L\'Opéra de Paris, aussi connu sous le nom de Palais Garnier, est un des plus célèbres théâtres d\'opéra au monde et un chef-d\'œuvre de l\'architecture du XIXe siècle.</p>
      </div>
      <div class="center-text0">
          <p>Construit sous le règne de Napoléon III, il est un symbole de la culture et du raffinement parisiens, accueillant des performances de ballet, d\'opéra et de musique classique.</p>
      </div>
      <br>
      <div class="titre-gauche">
          <span class="gros2">Histoire de l\'Opéra de Paris</span>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>La Conception de Charles Garnier</p>
          <div class="ligne3"></div>
      </div>
      <br>
      <div class="Champs-Info2">
      </div>
      <div class="description">
          <p>Photo de l\'Opéra de Paris de nos jours</p>
      </div>
      <div class="center-text">
          <p> Le Palais Garnier est conçu par l\'architecte Charles Garnier, qui remporte le concours pour sa construction en 1861. La première pierre est posée en 1862, et l\'édifice est inauguré en 1875. Son architecture éclectique combine des éléments du baroque, du classique et du style Beaux-Arts, marquant une période de grande opulence.</p>
      </div>
      <div class="titre-gauche">
      </div>
      <div class="sousTitre">
          <h2>Les Défis de Construction</h2>
      </div>
      <div class="center-text">
          <p>La construction de l\'Opéra est marquée par des défis considérables, notamment la découverte d\'un lac souterrain qui nécessite des solutions d\'ingénierie complexes. Ce lac inspire la légende du "Fantôme de l\'Opéra", immortalisée par Gaston Leroux. L\'Opéra est également affecté par la guerre franco-prussienne et la Commune de Paris, retardant son achèvement.</p>
      </div>
      <div class="sousTitre">
          <h2>Inauguration et Début d\'une Nouvelle Ère</h2>
      </div>
      <div class="center-text">
          <p>L\'Opéra est finalement inauguré le 5 janvier 1875. La cérémonie d\'ouverture est un événement grandiose, marquant le début d\'une nouvelle ère pour les arts à Paris. Le Palais Garnier devient rapidement un centre culturel majeur, accueillant des premières mondiales et voyant la création de ballets et d\'opéras célèbres.</p>
      </div>

      <div class="rectangle-orange">
          <p>Vous souhaitez visiter Paris mais vous ne savez pas par où commencer ? </p>
          <p> Découvrez nos parcours prédéfinis selon votre temps et vos envies !</p>
          <div class="texterectangle">
              <a href="Parcourir.php">Parcourez ></a>
          </div>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>La Belle Époque et l\'Âge d\'Or</p>
          <div class="ligne3">
          </div>
      </div>
      <div class="Champs-Info3">
      </div>

      <div class="sousTitre">
          <h2>Rénovations et Modernisations</h2>
      </div>
      <div class="center-text2">
          <p>Durant la Belle Époque, l\'Opéra de Paris devient un centre culturel de premier plan. Il accueille des premières mondiales et voit la création de ballets et d\'opéras célèbres. La richesse de son décor intérieur, avec ses mosaïques, sculptures et dorures, reflète le goût pour le luxe de cette époque. Le foyer de la danse, les grands escaliers et les salons luxueux sont autant de témoignages de l\'opulence et du faste de cette période.
          </p>
      </div>
      <div class="center-text2">
          <p>Au XXe siècle, l\'Opéra subit plusieurs rénovations pour moderniser ses installations et préserver son architecture historique. En 1964, le plafond du grand auditorium est redécoré par Marc Chagall, ajoutant une touche contemporaine à l\'intérieur classique. D\'autres modernisations incluent des améliorations acoustiques et des rénovations techniques pour répondre aux exigences des performances modernes.</p>
      </div>
      <br>
      <br>
      <div class="texte-au-dessus-de-ligne">
          <div class="ligne3">
          </div>
      </div>';
      break;
      
      case "en":
        echo '<div class="about2">
        <span class="gros">The Paris Opera</span>
          </div>
          <div class="ligne">
          </div>
          <br>
          <br>
          <br>
          <br>
          <div class="Champs-Info">
          </div>
          
          <div class="center-text0">
              <p>The Paris Opera, also known as the Palais Garnier, is one of the most famous opera houses in the world and a masterpiece of 19th-century architecture.</p>
          </div>
          <div class="center-text0">
              <p>Built during the reign of Napoleon III, it is a symbol of Parisian culture and refinement, hosting performances of ballet, opera, and classical music.</p>
          </div>
          <br>
          <div class="titre-gauche">
              <span class="gros2">History of the Paris Opera</span>
          </div>
          <div class="texte-au-dessus-de-ligne">
              <p>Designed by Charles Garnier</p>
              <div class="ligne3"></div>
          </div>
          <br>
          <div class="Champs-Info2">
          </div>
          <div class="description">
              <p>Photo of the Paris Opera today</p>
          </div>
          <div class="center-text">
              <p>The Palais Garnier was designed by architect Charles Garnier, who won the competition for its construction in 1861. The first stone was laid in 1862, and the building was inaugurated in 1875. Its eclectic architecture combines elements of Baroque, Classical, and Beaux-Arts styles, marking a period of great opulence.</p>
          </div>
          <div class="titre-gauche">
          </div>
          <div class="sousTitre">
              <h2>Construction Challenges</h2>
          </div>
          <div class="center-text">
              <p>The construction of the Opera House was marked by considerable challenges, including the discovery of an underground lake that required complex engineering solutions. This lake inspired the legend of the "Phantom of the Opera," immortalized by Gaston Leroux. The Opera House was also affected by the Franco-Prussian War and the Paris Commune, delaying its completion.</p>
          </div>
          <div class="sousTitre">
              <h2>Inauguration and the Beginning of a New Era</h2>
          </div>
          <div class="center-text">
              <p>The Opera House was finally inaugurated on January 5, 1875. The opening ceremony was a grand event, marking the beginning of a new era for the arts in Paris. The Palais Garnier quickly became a major cultural center, hosting world premieres and witnessing the creation of famous ballets and operas.</p>
          </div>
          
        <div class="rectangle-orange">
            <p>Planning to visit Paris but not sure where to start?</p>
            <p>Discover our pre-defined itineraries based on your schedule and interests!</p>
            <div class="texterectangle">
                <a href="Explore.php">Explore ></a>
            </div>
          </div>
          <div class="texte-au-dessus-de-ligne">
              <p>The Belle Époque and the Golden Age</p>
              <div class="ligne3">
              </div>
          </div>
          <div class="Champs-Info3">
          </div>
          
          <div class="sousTitre">
              <h2>Renovations and Modernizations</h2>
          </div>
          <div class="center-text2">
              <p>During the Belle Époque, the Paris Opera became a leading cultural center. It hosted world premieres and saw the creation of famous ballets and operas. The richness of its interior decoration, with its mosaics, sculptures, and gilding, reflects the taste for luxury of that era. The Dance Foyer, Grand Staircase, and luxurious lounges are testament to the opulence and splendor of this period.
              </p>
          </div>
          <div class="center-text2">
              <p>In the 20th century, the Opera House underwent several renovations to modernize its facilities and preserve its historical architecture. In 1964, the ceiling of the main auditorium was redecorated by Marc Chagall, adding a contemporary touch to the classical interior. Other modernizations include acoustic improvements and technical renovations to meet the requirements of modern performances.</p>
          </div>
          <br>
          <br>
          <div class="texte-au-dessus-de-ligne">
              <div class="ligne3">
              </div>
          </div>';
        break;

      case "es":
        echo '<div class="about2">
              <span class="gros">La Ópera de París</span>
          </div>
          <div class="ligne">
          </div>
          <br>
          <br>
          <br>
          <br>
          <div class="Champs-Info">
          </div>
          
          <div class="center-text0">
              <p>La Ópera de París, también conocida como el Palais Garnier, es uno de los teatros de ópera más famosos del mundo y una obra maestra de la arquitectura del siglo XIX.</p>
          </div>
          <div class="center-text0">
              <p>Construido durante el reinado de Napoleón III, es un símbolo de la cultura y el refinamiento parisino, albergando actuaciones de ballet, ópera y música clásica.</p>
          </div>
          <br>
          <div class="titre-gauche">
              <span class="gros2">Historia de la Ópera de París</span>
          </div>
          <div class="texte-au-dessus-de-ligne">
              <p>Diseñado por Charles Garnier</p>
              <div class="ligne3"></div>
          </div>
          <br>
          <div class="Champs-Info2">
          </div>
          <div class="description">
              <p>Foto de la Ópera de París hoy en día</p>
          </div>
          <div class="center-text">
              <p>El Palais Garnier fue diseñado por el arquitecto Charles Garnier, quien ganó el concurso para su construcción en 1861. La primera piedra se colocó en 1862 y el edificio se inauguró en 1875. Su arquitectura ecléctica combina elementos del barroco, clásico y estilo Beaux-Arts, marcando un período de gran opulencia.</p>
          </div>
          <div class="titre-gauche">
          </div>
          <div class="sousTitre">
              <h2>Desafíos de Construcción</h2>
          </div>
          <div class="center-text">
              <p>La construcción de la Ópera estuvo marcada por desafíos considerables, incluido el descubrimiento de un lago subterráneo que requirió soluciones de ingeniería complejas. Este lago inspiró la leyenda del "Fantasma de la Ópera", inmortalizada por Gaston Leroux. La Ópera también se vio afectada por la Guerra Franco-Prusiana y la Comuna de París, lo que retrasó su finalización.</p>
          </div>
          <div class="sousTitre">
              <h2>Inauguración y el Comienzo de una Nueva Era</h2>
          </div>
          <div class="center-text">
              <p>La Ópera finalmente se inauguró el 5 de enero de 1875. La ceremonia de apertura fue un evento grandioso, marcando el inicio de una nueva era para las artes en París. El Palais Garnier rápidamente se convirtió en un importante centro cultural, albergando estrenos mundiales y presenciando la creación de famosos ballets y óperas.</p>
          </div>
          
        <div class="rectangle-orange">
        <p>¿Le gustaría visitar París pero no sabe por dónde empezar?</p>
        <p>¡Descubra nuestros itinerarios predefinidos que se adaptan a su tiempo y a sus deseos !</p>
        <div class="texterectangle">
            <a href="Parcourir.php">Visite ></a>
        </div>
          </div>
          <div class="texte-au-dessus-de-ligne">
              <p>La Belle Époque y la Edad de Oro</p>
              <div class="ligne3">
              </div>
          </div>
          <div class="Champs-Info3">
          </div>
          
          <div class="sousTitre">
              <h2>Renovaciones y Modernizaciones</h2>
          </div>
          <div class="center-text2">
              <p>Durante la Belle Époque, la Ópera de París se convirtió en un centro cultural destacado. Acogió estrenos mundiales y fue testigo de la creación de famosos ballets y óperas. La riqueza de su decoración interior, con mosaicos, esculturas y dorados, refleja el gusto por el lujo de esa época. El Foyer de la Danza, la Gran Escalera y los lujosos salones son testimonio de la opulencia y el esplendor de este período.</p>
          </div>
          <div class="center-text2">
              <p>En el siglo XX, la Ópera experimentó varias renovaciones para modernizar sus instalaciones y preservar su arquitectura histórica. En 1964, el techo del auditorio principal fue redecorado por Marc Chagall, agregando un toque contemporáneo al interior clásico. Otras modernizaciones incluyen mejoras acústicas y renovaciones técnicas para cumplir con los requisitos de las actuaciones modernas.</p>
          </div>
          <br>
          <br>
          <div class="texte-au-dessus-de-ligne">
              <div class="ligne3">
              </div>
          </div>';
        break;
      }
  ?>
  
    <!-- Footer -->
  
    <?php
  include("footer.inc.php");
  ?>
<script src="script.js"></script>
</body>
</html>
