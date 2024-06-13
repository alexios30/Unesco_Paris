<html>
  <head>
    <title>Louvre</title>
    <link rel="stylesheet" href="louvre.css">
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
    echo '
    <div class="about2">
        <span class="gros">Le Louvre</span>
    </div>
    <div class="ligne"></div>
    <br><br><br><br>
    <div class="Champs-Info"></div>

    <div class="center-text0">
        <p>Le Louvre est l\'un des musées les plus célèbres et emblématiques de Paris, abritant une vaste collection d\'œuvres d\'art de renommée mondiale.</p>
    </div>
    <div class="center-text0">
        <p>Construit à l\'origine comme une forteresse au XIIe siècle par Philippe Auguste, le Louvre a évolué au fil des siècles pour devenir le palais royal et finalement le musée que nous connaissons aujourd\'hui. Sa transformation témoigne de l\'évolution de l\'architecture et de l\'histoire française.</p>
    </div>
    <br>
    <div class="titre-gauche">
        <span class="gros2">L\'Histoire du Louvre</span>
    </div>
    <div class="texte-au-dessus-de-ligne">
        <p>De Forteresse à Palais Royal</p>
        <div class="ligne3"></div>
    </div>
    <br>
    <div class="Champs-Info2"></div>
    <div class="description">
        <p>Photo du Louvre de nos jours</p>
    </div>
    <div class="center-text">
        <p>La construction du Louvre commence en 1190 sous Philippe Auguste, visant à protéger Paris contre les invasions. Ce château fort médiéval se transforme progressivement en une somptueuse résidence royale. Sous le règne de Charles V, au XIVe siècle, le Louvre devient un véritable palais, avec des aménagements luxueux et une bibliothèque royale.</p>
    </div>
    <div class="center-text">
        <p>Sous François Ier au XVIe siècle, le Louvre subit une transformation majeure. Inspiré par la Renaissance italienne, le roi commande la démolition de l\'ancienne forteresse pour construire un palais plus moderne. Pierre Lescot, l\'architecte principal, introduit un style architectural inspiré de la Renaissance avec des éléments classiques</p>
    </div>
    <div class="titre-gauche"></div>
    <div class="sousTitre">
        <h2>La Grande Transformation sous Louis XIV</h2>
    </div>
    <div class="center-text">
        <p>En 1682, Louis XIV décide de déplacer la cour royale à Versailles, laissant le Louvre en tant que lieu de résidence des artistes et des académies. Ce déménagement marque le début de la transformation du Louvre en un espace dédié aux arts et à la culture.</p>
    </div>
    <div class="center-text">
        <p>Au XVIIIe siècle, plusieurs parties du Louvre sont rénovées et modernisées. En 1793, pendant la Révolution française, le Louvre est officiellement transformé en musée public. Le nouveau Musée du Louvre ouvre ses portes, exposant des œuvres d\'art provenant des collections royales et des confiscations révolutionnaires.</p>
    </div>
    <div class="center-text"><p></p></div>
    <div class="rectangle-orange">
        <p>Vous souhaitez visiter Paris mais vous ne savez pas par où commencer ?</p>
        <p>Découvrez nos parcours prédéfinis selon votre temps et vos envies !</p>
        <div class="texterectangle">
            <a href="Parcourir.php">Parcourez ></a>
        </div>
    </div>
    <div class="texte-au-dessus-de-ligne">
        <p>La Pyramide du Louvre et les Défis Contemporains</p>
        <div class="ligne3"></div>
    </div>
    <div class="Champs-Info3"></div>
    <div class="sousTitre">
        <h2>Fusion de l\'Ancien et du Moderne</h2>
    </div>
    <div class="center-text2">
        <p>En 1989, l\'architecte Ieoh Ming Pei conçoit la célèbre Pyramide du Louvre, une structure en verre et métal située dans la cour Napoléon. Cette pyramide sert d\'entrée principale au musée et symbolise la fusion entre l\'histoire ancienne et l\'architecture moderne</p>
    </div>
    <div class="center-text2">
        <p>Le Louvre continue d\'évoluer au XXIe siècle, avec des expositions temporaires et des initiatives visant à rendre le musée accessible à un public mondial. La transformation numérique et les projets d\'expansion, comme l\'ouverture du Louvre Abu Dhabi en 2017, illustrent l\'engagement du Louvre à préserver et promouvoir l\'art à l\'échelle mondiale.</p>
    </div>
    <br><br>
    <div class="texte-au-dessus-de-ligne">
        <div class="ligne3"></div>
    </div>';
    break;
    
    case "en": 
      echo '
      <div class="about2">
          <span class="gros">The Louvre</span>
      </div>
      <div class="ligne"></div>
      <br><br><br><br>
      <div class="Champs-Info"></div>

      <div class="center-text0">
          <p>The Louvre is one of the most famous and iconic museums in Paris, housing a vast collection of world-renowned artworks.</p>
      </div>
      <div class="center-text0">
          <p>Originally built as a fortress in the 12th century by Philippe Auguste, the Louvre has evolved over the centuries to become the royal palace and eventually the museum we know today. Its transformation reflects the evolution of French architecture and history.</p>
      </div>
      <br>
      <div class="titre-gauche">
          <span class="gros2">The History of the Louvre</span>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>From Fortress to Royal Palace</p>
          <div class="ligne3"></div>
      </div>
      <br>
      <div class="Champs-Info2"></div>
      <div class="description">
          <p>Photo of the Louvre today</p>
      </div>
      <div class="center-text">
          <p>The construction of the Louvre began in 1190 under Philippe Auguste, aiming to protect Paris from invasions. This medieval fortress gradually transformed into a sumptuous royal residence. Under the reign of Charles V in the 14th century, the Louvre became a true palace, with luxurious fittings and a royal library.</p>
      </div>
      <div class="center-text">
          <p>Under François I in the 16th century, the Louvre underwent a major transformation. Inspired by the Italian Renaissance, the king ordered the demolition of the old fortress to build a more modern palace. Pierre Lescot, the chief architect, introduced a Renaissance-inspired architectural style with classical elements.</p>
      </div>
      <div class="titre-gauche"></div>
      <div class="sousTitre">
          <h2>The Great Transformation under Louis XIV</h2>
      </div>
      <div class="center-text">
          <p>In 1682, Louis XIV decided to move the royal court to Versailles, leaving the Louvre as a residence for artists and academies. This move marked the beginning of the Louvre\'s transformation into a space dedicated to arts and culture.</p>
      </div>
      <div class="center-text">
          <p>In the 18th century, several parts of the Louvre were renovated and modernized. In 1793, during the French Revolution, the Louvre was officially transformed into a public museum. The new Musée du Louvre opened its doors, displaying artworks from royal collections and revolutionary confiscations.</p>
      </div>
      <div class="center-text"><p></p></div>
    <div class="rectangle-orange">
        <p>Would you like to visit Paris but don\'t know where to start?</p>
        <p>Discover our predefined itineraries to suit your time and desires !</p>
        <div class="texterectangle">
        <a href="Parcourir.php">Visit ></a>
        </div>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>The Louvre Pyramid and Contemporary Challenges</p>
          <div class="ligne3"></div>
      </div>
      <div class="Champs-Info3"></div>
      <div class="sousTitre">
          <h2>Fusion of Old and Modern</h2>
      </div>
      <div class="center-text2">
          <p>In 1989, architect Ieoh Ming Pei designed the famous Louvre Pyramid, a glass and metal structure located in the Cour Napoléon. This pyramid serves as the main entrance to the museum and symbolizes the fusion of ancient history and modern architecture.</p>
      </div>
      <div class="center-text2">
          <p>The Louvre continues to evolve in the 21st century, with temporary exhibitions and initiatives aimed at making the museum accessible to a global audience. Digital transformation and expansion projects, such as the opening of the Louvre Abu Dhabi in 2017, illustrate the Louvre\'s commitment to preserving and promoting art on a global scale.</p>
      </div>
      <br><br>
      <div class="texte-au-dessus-de-ligne">
          <div class="ligne3"></div>
      </div>';
      break;
      case "es":
        echo '
      <div class="about2">
          <span class="gros">El Louvre</span>
      </div>
      <div class="ligne"></div>
      <br><br><br><br>
      <div class="Champs-Info"></div>

      <div class="center-text0">
          <p>El Louvre es uno de los museos más famosos e icónicos de París, albergando una vasta colección de obras de arte de renombre mundial.</p>
      </div>
      <div class="center-text0">
          <p>Originalmente construido como una fortaleza en el siglo XII por Felipe Augusto, el Louvre ha evolucionado a lo largo de los siglos para convertirse en el palacio real y finalmente en el museo que conocemos hoy. Su transformación refleja la evolución de la arquitectura y la historia francesa.</p>
      </div>
      <br>
      <div class="titre-gauche">
          <span class="gros2">La Historia del Louvre</span>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>De Fortaleza a Palacio Real</p>
          <div class="ligne3"></div>
      </div>
      <br>
      <div class="Champs-Info2"></div>
      <div class="description">
          <p>Foto del Louvre en la actualidad</p>
      </div>
      <div class="center-text">
          <p>La construcción del Louvre comenzó en 1190 bajo el mandato de Felipe Augusto, con el objetivo de proteger París de las invasiones. Esta fortaleza medieval se transformó gradualmente en una suntuosa residencia real. Bajo el reinado de Carlos V, en el siglo XIV, el Louvre se convirtió en un verdadero palacio, con lujosas instalaciones y una biblioteca real.</p>
      </div>
      <div class="center-text">
          <p>Bajo Francisco I en el siglo XVI, el Louvre sufrió una gran transformación. Inspirado por el Renacimiento italiano, el rey ordenó la demolición de la antigua fortaleza para construir un palacio más moderno. Pierre Lescot, el arquitecto principal, introdujo un estilo arquitectónico inspirado en el Renacimiento con elementos clásicos.</p>
      </div>
      <div class="titre-gauche"></div>
      <div class="sousTitre">
          <h2>La Gran Transformación bajo Luis XIV</h2>
      </div>
      <div class="center-text">
          <p>En 1682, Luis XIV decidió trasladar la corte real a Versalles, dejando el Louvre como residencia de artistas y academias. Este traslado marcó el comienzo de la transformación del Louvre en un espacio dedicado a las artes y la cultura.</p>
      </div>
      <div class="center-text">
          <p>En el siglo XVIII, varias partes del Louvre fueron renovadas y modernizadas. En 1793, durante la Revolución Francesa, el Louvre fue oficialmente transformado en un museo público. El nuevo Museo del Louvre abrió sus puertas, exhibiendo obras de arte provenientes de las colecciones reales y de las confiscaciones revolucionarias.</p>
      </div>
      <div class="center-text"><p></p></div>
        <div class="rectangle-orange">
        <p>¿Le gustaría visitar París pero no sabe por dónde empezar?</p>
        <p>¡Descubra nuestros itinerarios predefinidos que se adaptan a su tiempo y a sus deseos !</p>
        <div class="texterectangle">
            <a href="Parcourir.php">Visite ></a>
        </div>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>La Pirámide del Louvre y los Desafíos Contemporáneos</p>
          <div class="ligne3"></div>
      </div>
      <div class="Champs-Info3"></div>
      <div class="sousTitre">
          <h2>Fusión de lo Antiguo y lo Moderno</h2>
      </div>
      <div class="center-text2">
          <p>En 1989, el arquitecto Ieoh Ming Pei diseñó la famosa Pirámide del Louvre, una estructura de vidrio y metal ubicada en el Cour Napoléon. Esta pirámide sirve como la entrada principal al museo y simboliza la fusión de la historia antigua con la arquitectura moderna.</p>
      </div>
      <div class="center-text2">
          <p>El Louvre sigue evolucionando en el siglo XXI, con exposiciones temporales e iniciativas destinadas a hacer que el museo sea accesible a un público mundial. La transformación digital y los proyectos de expansión, como la apertura del Louvre Abu Dhabi en 2017, ilustran el compromiso del Louvre de preservar y promover el arte a escala mundial.</p>
      </div>
      <br><br>
      <div class="texte-au-dessus-de-ligne">
          <div class="ligne3"></div>
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
