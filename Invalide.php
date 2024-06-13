<html>
  <head>
    <title>L'Hôtel des Invalides </title>
    <link rel="stylesheet" href="Invalide.css">
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    include("checklang.inc.php");
    ?>
    <?php
    include("navbar.inc.php");
    ?>
    <?php
    switch ($lang) {
      case "fr":
      echo '
      <div class="about2">
          <span class="gros">L\'Hôtel des Invalides</span>
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
          <p>L\'Hôtel des Invalides est un monument emblématique de Paris, connu pour son dôme doré, ses musées militaires et son rôle historique en tant que maison de retraite pour les vétérans de guerre.</p>
      </div>
      <div class="center-text0">
          <p> Construit sous le règne de Louis XIV, l\'Hôtel des Invalides symbolise la grandeur militaire de la France et abrite aujourd\'hui le tombeau de Napoléon Bonaparte ainsi que plusieurs musées et mémoriaux.</p>
      </div>
      <br>
      <div class="titre-gauche">
          <span class="gros2">Histoire de l\'Hôtel des Invalides</span>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>La Vision de Louis XIV </p>
          <div class="ligne3"></div>
      </div>
      <br>
      <div class="Champs-Info2">
      </div>
      <div class="description">
          <p>Photo de l\'Hôtel des Invalides de nos jours</p>
      </div>
      <div class="center-text">
          <p> L\'Hôtel des Invalides est fondé par Louis XIV en 1670 pour offrir un refuge aux soldats blessés et invalides de ses armées. Le projet est confié à l\'architecte Libéral Bruant, et la construction commence en 1671. Le bâtiment est achevé en 1676, avec des ajouts et des améliorations se poursuivant au fil des années.</p>
      </div>
      <div class="center-text">
          <p> L\'une des caractéristiques les plus remarquables de l\'Hôtel des Invalides est l\'Église du Dôme, conçue par Jules Hardouin-Mansart et achevée en 1708. Le dôme doré, visible de loin, est un symbole de la magnificence de l\'architecture française. Initialement destiné à être une chapelle royale, le dôme abrite aujourd\'hui le tombeau de Napoléon Bonaparte, transféré aux Invalides en 1840.</p>
      </div>
      <div class="titre-gauche">
      </div>
      <div class="sousTitre">
          <h2>Les Transformations et les Utilisations Diverses</h2>
      </div>
      <div class="center-text">
          <p>Au fil des siècles, l\'Hôtel des Invalides a servi à divers usages. Pendant la Révolution française, il est utilisé comme dépôt d\'armes. Plus tard, il devient un centre important pour les cérémonies militaires et nationales. Les Invalides continuent également de remplir leur rôle initial de maison de retraite pour les vétérans, bien que cette fonction ait diminué au fil du temps.</p>
      </div>

      <div class="rectangle-orange">
          <p>Vous souhaitez visiter Paris mais vous ne savez pas par où commencer ? </p>
          <p> Découvrez nos parcours prédéfinis selon votre temps et vos envies !</p>
          <div class="texterectangle">
              <a href="Parcourir.php">Parcourez ></a>
          </div>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>Les Musées et Mémoriaux</p>
          <div class="ligne3">
          </div>
      </div>
      <div class="Champs-Info3">
      </div>

      <div class="sousTitre">
          <h2>Le Tombeau de Napoléon</h2>
      </div>
      <div class="center-text2">
          <p>L\'Hôtel des Invalides abrite plusieurs musées et mémoriaux consacrés à l\'histoire militaire de la France. Le Musée de l\'Armée, fondé en 1905, présente une vaste collection d\'armes, d\'armures, de costumes et d\'objets militaires couvrant plusieurs siècles. Le Musée des Plans-Reliefs et le Musée de l\'Ordre de la Libération sont également situés sur le site.
          </p>
      </div>
      <div class="center-text2">
          <p>  Le tombeau de Napoléon Bonaparte, situé sous le dôme des Invalides, est l\'un des points culminants de la visite. En 1840, les restes de Napoléon sont rapatriés de l\'île de Sainte-Hélène et enterrés ici, dans un sarcophage imposant entouré de symboles et de décorations célébrant ses exploits.</p>
      </div>
      <br>
      <br>
      <div class="texte-au-dessus-de-ligne">
          <div class="ligne3">
          </div>
      </div>';
      break;
      case "en":
        echo '
        <div class="about2">
            <span class="gros">Les Invalides</span>
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
            <p>Les Invalides is an iconic monument in Paris, known for its golden dome, military museums, and historical role as a retirement home for war veterans.</p>
        </div>
        <div class="center-text0">
            <p>Built during the reign of Louis XIV, Les Invalides symbolizes France\'s military grandeur and currently houses the tomb of Napoleon Bonaparte along with several museums and memorials.</p>
        </div>
        <br>
        <div class="titre-gauche">
            <span class="gros2">History of Les Invalides</span>
        </div>
        <div class="texte-au-dessus-de-ligne">
            <p>Louis XIV\'s Vision </p>
            <div class="ligne3"></div>
        </div>
        <br>
        <div class="Champs-Info2">
        </div>
        <div class="description">
            <p>Photo of Les Invalides today</p>
        </div>
        <div class="center-text">
            <p> Les Invalides was founded by Louis XIV in 1670 to provide a refuge for wounded and disabled soldiers of his armies. The project was entrusted to the architect Libéral Bruant, and construction began in 1671. The building was completed in 1676, with additions and improvements continuing over the years.</p>
        </div>
        <div class="center-text">
            <p> One of the most remarkable features of Les Invalides is the Dome Church, designed by Jules Hardouin-Mansart and completed in 1708. The golden dome, visible from afar, is a symbol of French architectural magnificence. Originally intended to be a royal chapel, the dome now houses the tomb of Napoleon Bonaparte, transferred to Les Invalides in 1840.</p>
        </div>
        <div class="titre-gauche">
        </div>
        <div class="sousTitre">
            <h2>Transformations and Diverse Uses</h2>
        </div>
        <div class="center-text">
            <p>Over the centuries, Les Invalides has served various purposes. During the French Revolution, it was used as an arsenal. Later, it became an important center for military and national ceremonies. Les Invalides also continued to fulfill its original role as a retirement home for veterans, although this function has diminished over time.</p>
        </div>
        
        <div class="rectangle-orange">
            <p>Planning to visit Paris but not sure where to start?</p>
            <p>Discover our pre-defined itineraries based on your schedule and interests!</p>
            <div class="texterectangle">
                <a href="Explore.php">Explore ></a>
            </div>
        </div>
        <div class="texte-au-dessus-de-ligne">
            <p>Museums and Memorials</p>
            <div class="ligne3">
            </div>
        </div>
        <div class="Champs-Info3">
        </div>
        
        <div class="sousTitre">
            <h2>Napoleon\'s Tomb</h2>
        </div>
        <div class="center-text2">
            <p>Les Invalides houses several museums and memorials dedicated to France\'s military history. The Army Museum, founded in 1905, features a vast collection of weapons, armor, costumes, and military objects spanning centuries. The Museum of Relief Maps and the Museum of the Order of the Liberation are also located on the site.
            </p>
        </div>
        <div class="center-text2">
            <p> Napoleon Bonaparte\'s tomb, located beneath the Dome of Les Invalides, is a highlight of the visit. In 1840, Napoleon\'s remains were repatriated from the island of Saint Helena and buried here in an imposing sarcophagus surrounded by symbols and decorations celebrating his achievements.</p>
        </div>
        <br>
        <br>
        <div class="texte-au-dessus-de-ligne">
            <div class="ligne3">
            </div>
        </div>';
        break;

      case "es":
      echo '
      <div class="about2">
          <span class="gros">Los Inválidos</span>
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
          <p>Los Inválidos es un monumento emblemático de París, conocido por su cúpula dorada, sus museos militares y su papel histórico como hogar de retiro para veteranos de guerra.</p>
      </div>
      <div class="center-text0">
          <p> Construido durante el reinado de Luis XIV, Los Inválidos simboliza la grandeza militar de Francia y alberga actualmente la tumba de Napoleón Bonaparte junto con varios museos y memoriales.</p>
      </div>
      <br>
      <div class="titre-gauche">
          <span class="gros2">Historia de Los Inválidos</span>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>La Visión de Luis XIV </p>
          <div class="ligne3"></div>
      </div>
      <br>
      <div class="Champs-Info2">
      </div>
      <div class="description">
          <p>Foto de Los Inválidos hoy en día</p>
      </div>
      <div class="center-text">
          <p> Los Inválidos fueron fundados por Luis XIV en 1670 para ofrecer refugio a los soldados heridos e inválidos de sus ejércitos. El proyecto fue confiado al arquitecto Libéral Bruant, y la construcción comenzó en 1671. El edificio se completó en 1676, con adiciones y mejoras que continuaron a lo largo de los años.</p>
      </div>
      <div class="center-text">
          <p> Una de las características más destacadas de Los Inválidos es la Iglesia del Domo, diseñada por Jules Hardouin-Mansart y completada en 1708. La cúpula dorada, visible desde lejos, es un símbolo de la magnificencia arquitectónica francesa. Originalmente destinada a ser una capilla real, el domo alberga hoy en día la tumba de Napoleón Bonaparte, trasladada a Los Inválidos en 1840.</p>
      </div>
      <div class="titre-gauche">
      </div>
      <div class="sousTitre">
          <h2>Transformaciones y Usos Variados</h2>
      </div>
      <div class="center-text">
          <p>A lo largo de los siglos, Los Inválidos ha servido para diversos propósitos. Durante la Revolución Francesa, se utilizó como arsenal. Más tarde, se convirtió en un centro importante para ceremonias militares y nacionales. Los Inválidos también continuaron cumpliendo su función original como hogar de retiro para veteranos, aunque esta función ha disminuido con el tiempo.</p>
      </div>

        <div class="rectangle-orange">
        <p>¿Le gustaría visitar París pero no sabe por dónde empezar?</p>
        <p>¡Descubra nuestros itinerarios predefinidos que se adaptan a su tiempo y a sus deseos !</p>
        <div class="texterectangle">
            <a href="Parcourir.php">Visite ></a>
        </div>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>Museos y Monumentos Conmemorativos</p>
          <div class="ligne3">
          </div>
      </div>
      <div class="Champs-Info3">
      </div>

      <div class="sousTitre">
          <h2>La Tumba de Napoleón</h2>
      </div>
      <div class="center-text2">
          <p>Los Inválidos alberga varios museos y monumentos dedicados a la historia militar de Francia. El Museo del Ejército, fundado en 1905, cuenta con una vasta colección de armas, armaduras, trajes y objetos militares que abarcan varios siglos. El Museo de los Planos-Relieve y el Museo de la Orden de la Liberación también se encuentran en el sitio.
          </p>
      </div>
      <div class="center-text2">
          <p> La tumba de Napoleón Bonaparte, ubicada bajo la cúpula de Los Inválidos, es uno de los puntos destacados de la visita. En 1840, los restos de Napoleón fueron repatriados de la isla de Santa Elena y enterrados aquí en un sarcófago imponente rodeado de símbolos y decoraciones que celebran sus hazañas.</p>
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
  </div>
  
  <!-- Footer -->
  
  <?php
  include("footer.inc.php");
  ?>
<script src="script.js"></script>
</body>
</html>