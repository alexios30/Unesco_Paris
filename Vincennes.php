<html>
  <head>
    <title>Bois de Vincennes</title>
    <link rel="stylesheet" href="vincenne.css">
    <meta charset="utf-8">
  </head>
  <body>
  <?php
    include("checklang.inc.php");
    ?>
    <?php
    include("navbar.inc.php");
    ?>

  <!-- Fin barre de navigation -->
    
<br/>
<br/>
    <?php
    switch ($lang) {
      case "fr":
      echo '
      <div class="about2">
          <span class="gros">Bois de Vincennes</span>
      </div>
      <div class="ligne"></div>
      <br><br><br><br>
      <div class="Champs-Info"></div>

      <div class="center-text0">
          <p>Situé à l\'Est de Paris dans le XIIè arrondissement, le bois de Vincennes offre à son public un espace forestier d\'une superficie de 995 hectares.</p>
      </div>
      <div class="center-text0">
          <p>Ce bois, également nommé comme un "poumon vert" de Paris de par sa taille (plus grand espace vert de la capitale), est accessible à tous, gratuitement, et à toute heure.</p>
      </div>
      <br>
      <div class="titre-gauche">
          <span class="gros2">Informations générales</span>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>Le bois de Vincennes</p>
          <div class="ligne3"></div>
      </div>
      <br>
      <div class="Champs-Info2"></div>
      <div class="description">
          <p>Photo du Bois de Vincenne</p>
      </div>
      <div class="center-text">
          <p>Surface de 995 hectares, dont plus de la moitiée est boisée</p>
      </div>
      <div class="center-text">
          <p>- 4 lacs, dont 3 artificiels :</p>
      </div>
      <div class="center-text0">
          <p>- Lac de Saint-Mandé (étang naturel aménagé) : superficie de 1,5 hectare, situé au nord-ouest du bois</p>
      </div>
      <div class="center-text0">
          <p>- Lac de Gravelle : superficie d\'1 hectare, situé au sud-est</p>
      </div>
      <div class="center-text0">
          <p>- Lac des Minimes : superficie de 6 hectares, situé au nord-est, possédant 3 îles</p>
      </div>
      <div class="center-text0">
          <p>- Lac Daumesnil : superficie de 12 hectares, situé à l\'extrémité ouest du bois, possédant 2 îles</p>
      </div>
      <div class="titre-gauche"></div>
      <div class="sousTitre">
          <h2>Contient:</h2>
      </div>
      <div class="center-text0">
          <p>- Parc Floral</p>
      </div>
      <div class="center-text0">
          <p>- Parc Zoologique de Paris</p>
      </div>
      <div class="center-text0">
          <p>- Château de Vincennes</p>
      </div>
      <div class="center-text0">
          <p>- Jardin d\'agronomie tropicale</p>
      </div>
      <div class="center-text0">
          <p>- Pagode de Vincennes</p>
      </div>
      <div class="center-text0">
          <p>- Foire du Trône</p>
      </div>

      <div class="rectangle-orange">
          <p>Vous souhaitez visiter Paris mais vous ne savez pas par où commencer ?</p>
          <p>Découvrez nos parcours prédéfinis selon votre temps et vos envies !</p>
          <div class="texterectangle">
              <a href="Parcourir.php">Parcourez ></a>
          </div>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>L\'Histoire</p>
          <div class="ligne3"></div>
      </div>
      <div class="Champs-Info3"></div>

      <div class="sousTitre">
          <h2>Le Bois de Vincennes, une forêt royale ayant subi de nombreux changements</h2>
      </div>
      <div class="center-text2">
          <p>Historiquement, le bois de Vincennes était avant tout connu comme un terrain de chasse pour les rois de France.</p>
      </div>
      <div class="center-text2">
          <p>Cette déclaration d\'usage royale exclusive remonterait à Hugues Capet (Xè siècle). En effet, c\'est lorsque ce dernier décide de fixer sa résidence sur l\'île de la Cité (abritant notamment Notre-Dame) que le bois devient un terrain de chasse. Par la suite, cette terre demeurera à usage royale.</p>
      </div>
      <div class="center-text2">
          <p>En 1183, sous Philippe Auguste, le bois fut enclosé et approvisionné en gibier par une enceinte de 12km de long, qui restera alors en place pendant dix siècles, avant d\'être détruit sous le Second Empire. Philippe Auguste reconstitua également le bois : les abbayes environnantes du bois avaient empiété sur le bois jusqu\'à le réduire à 17 hectares. Au fil du temps et des souverains, le château et ses différents éléments furent bâtis.</p>
      </div>
      <div class="center-text2">
          <p>C\'est sous Louis XV que le bois devient accessible au public. La forêt est toujours une réserve de chasse, et la coupe de ses arbres est réglementée pour assurer la pérennité de celle-ci. S\'en suivra alors, au fil des années et des siècles, des mouvements de militarisation, de pillage et de construction, pendant notamment la révolution française, les Empires (Napoléon), et la Seconde Guerre Mondiale.</p>
      </div>
      <br><br>
      <div class="texte-au-dessus-de-ligne">
          <div class="ligne3"></div>
      </div>';
      break;
      case "en":
        echo '
        <div class="about2">
            <span class="gros">Bois de Vincennes</span>
        </div>
        <div class="ligne"></div>
        <br><br><br><br>
        <div class="Champs-Info"></div>

        <div class="center-text0">
            <p>Located in the east of Paris in the 12th arrondissement, the Bois de Vincennes offers its visitors a forested area covering 995 hectares.</p>
        </div>
        <div class="center-text0">
            <p>This woodland, also known as the "green lung" of Paris due to its size (the largest green space in the capital), is accessible to everyone, free of charge, and at all times.</p>
        </div>
        <br>
        <div class="titre-gauche">
            <span class="gros2">General Information</span>
        </div>
        <div class="texte-au-dessus-de-ligne">
            <p>The Bois de Vincennes</p>
            <div class="ligne3"></div>
        </div>
        <br>
        <div class="Champs-Info2"></div>
        <div class="description">
            <p>Illustration of the Bois de Vincennes in 1656</p>
        </div>
        <div class="center-text">
            <p>Area of 995 hectares, more than half of which is wooded</p>
        </div>
        <div class="center-text">
            <p>- 4 lakes, including 3 artificial ones:</p>
        </div>
        <div class="center-text0">
            <p>- Lac de Saint-Mandé (man-made natural pond): surface area of 1.5 hectares, located northwest of the Bois</p>
        </div>
        <div class="center-text0">
            <p>- Lac de Gravelle: surface area of 1 hectare, located southeast</p>
        </div>
        <div class="center-text0">
            <p>- Lac des Minimes: surface area of 6 hectares, located northeast, with 3 islands</p>
        </div>
        <div class="center-text0">
            <p>- Lac Daumesnil: surface area of 12 hectares, located at the western end of the Bois, with 2 islands</p>
        </div>
        <div class="titre-gauche"></div>
        <div class="sousTitre">
            <h2>Includes:</h2>
        </div>
        <div class="center-text0">
            <p>- Parc Floral</p>
        </div>
        <div class="center-text0">
            <p>- Parc Zoologique de Paris</p>
        </div>
        <div class="center-text0">
            <p>- Château de Vincennes</p>
        </div>
        <div class="center-text0">
            <p>- Jardin d\'agronomie tropicale</p>
        </div>
        <div class="center-text0">
            <p>- Pagode de Vincennes</p>
        </div>
        <div class="center-text0">
            <p>- Foire du Trône</p>
        </div>

    <div class="rectangle-orange">
        <p>Would you like to visit Paris but don\'t know where to start?</p>
        <p>Discover our predefined itineraries to suit your time and desires !</p>
        <div class="texterectangle">
        <a href="Parcourir.php">Visit ></a>
        </div>
        </div>
        <div class="texte-au-dessus-de-ligne">
            <p>History</p>
            <div class="ligne3"></div>
        </div>
        <div class="Champs-Info3"></div>

        <div class="sousTitre">
            <h2>The Bois de Vincennes, a royal forest that has undergone numerous changes</h2>
        </div>
        <div class="center-text2">
            <p>Historically, the Bois de Vincennes was primarily known as a hunting ground for the kings of France.</p>
        </div>
        <div class="center-text2">
            <p>This exclusive royal usage declaration dates back to Hugh Capet (10th century). It was when he decided to establish his residence on the Île de la Cité (home to Notre-Dame) that the forest became a hunting ground. Subsequently, this land remained for royal use.</p>
        </div>
        <div class="center-text2">
            <p>In 1183, under Philip II (Philippe Auguste), the forest was enclosed and stocked with game by a 12km-long enclosure wall, which remained in place for ten centuries before being destroyed under the Second Empire. Philip II also reconstituted the forest: the surrounding abbeys had encroached upon the forest, reducing it to 17 hectares. Over time and reigns, the castle and its various elements were built.</p>
        </div>
        <div class="center-text2">
            <p>It was under Louis XV that the forest became accessible to the public. The forest remains a hunting reserve, and the cutting of its trees is regulated to ensure its sustainability. Over the years and centuries, there have been periods of militarization, plundering, and construction, notably during the French Revolution, the Napoleonic era, and World War II.</p>
        </div>
        <br><br>
        <div class="texte-au-dessus-de-ligne">
            <div class="ligne3"></div>
        </div>';
        break;
      case "es":
        echo '
      <div class="about2">
          <span class="gros">Bois de Vincennes</span>
      </div>
      <div class="ligne"></div>
      <br><br><br><br>
      <div class="Champs-Info"></div>

      <div class="center-text0">
          <p>Ubicado al este de París en el XII distrito, el Bois de Vincennes ofrece a sus visitantes un área forestal de 995 hectáreas.</p>
      </div>
      <div class="center-text0">
          <p>Este bosque, también conocido como el "pulmón verde" de París debido a su tamaño (el espacio verde más grande de la capital), es accesible para todos, de forma gratuita y en cualquier momento.</p>
      </div>
      <br>
      <div class="titre-gauche">
          <span class="gros2">Información general</span>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>El Bois de Vincennes</p>
          <div class="ligne3"></div>
      </div>
      <br>
      <div class="Champs-Info2"></div>
      <div class="description">
          <p>Foto del Bois de Vincennes</p>
      </div>
      <div class="center-text">
          <p>Área de 995 hectáreas, más de la mitad de las cuales está cubierta de árboles</p>
      </div>
      <div class="center-text">
          <p>- 4 lagos, incluidos 3 artificiales:</p>
      </div>
      <div class="center-text0">
          <p>- Lago de Saint-Mandé (estanque natural acondicionado): superficie de 1,5 hectáreas, ubicado al noroeste del Bois</p>
      </div>
      <div class="center-text0">
          <p>- Lago de Gravelle: superficie de 1 hectárea, ubicado al sureste</p>
      </div>
      <div class="center-text0">
          <p>- Lago des Minimes: superficie de 6 hectáreas, ubicado al noreste, con 3 islas</p>
      </div>
      <div class="center-text0">
          <p>- Lago Daumesnil: superficie de 12 hectáreas, ubicado en el extremo oeste del Bois, con 2 islas</p>
      </div>
      <div class="titre-gauche"></div>
      <div class="sousTitre">
          <h2>Incluye:</h2>
      </div>
      <div class="center-text0">
          <p>- Parc Floral</p>
      </div>
      <div class="center-text0">
          <p>- Parc Zoologique de Paris</p>
      </div>
      <div class="center-text0">
          <p>- Château de Vincennes</p>
      </div>
      <div class="center-text0">
          <p>- Jardin d\'agronomie tropicale</p>
      </div>
      <div class="center-text0">
          <p>- Pagode de Vincennes</p>
      </div>
      <div class="center-text0">
          <p>- Foire du Trône</p>
      </div>

        <div class="rectangle-orange">
        <p>¿Le gustaría visitar París pero no sabe por dónde empezar?</p>
        <p>¡Descubra nuestros itinerarios predefinidos que se adaptan a su tiempo y a sus deseos !</p>
        <div class="texterectangle">
            <a href="Parcourir.php">Visite ></a>
        </div>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>Historia</p>
          <div class="ligne3"></div>
      </div>
      <div class="Champs-Info3"></div>

      <div class="sousTitre">
          <h2>El Bois de Vincennes, un bosque real que ha experimentado numerosos cambios</h2>
      </div>
      <div class="center-text2">
          <p>Históricamente, el Bois de Vincennes era conocido principalmente como un terreno de caza para los reyes de Francia.</p>
      </div>
      <div class="center-text2">
          <p>Esta exclusiva declaración de uso real se remonta a Hugo Capeto (siglo X). Fue cuando decidió establecer su residencia en la Île de la Cité (hogar de Notre-Dame) que el bosque se convirtió en un terreno de caza. Posteriormente, esta tierra permaneció para uso real.</p>
      </div>
      <div class="center-text2">
          <p>En 1183, bajo Felipe II (Philippe Auguste), el bosque fue cercado y abastecido de caza por una muralla de 12 km de longitud, que permaneció en su lugar durante diez siglos antes de ser destruida bajo el Segundo Imperio. Felipe II también reconstituyó el bosque: las abadías circundantes habían invadido el bosque, reduciéndolo a 17 hectáreas. Con el tiempo y los reinados, se construyeron el castillo y sus diversos elementos.</p>
      </div>
      <div class="center-text2">
          <p>Fue bajo Luis XV que el bosque se abrió al público. El bosque sigue siendo una reserva de caza y la tala de sus árboles está regulada para garantizar su sostenibilidad. A lo largo de los años y los siglos, ha habido períodos de militarización, saqueo y construcción, notablemente durante la Revolución Francesa, la era napoleónica y la Segunda Guerra Mundial.</p>
      </div>
      <br><br>
      <div class="texte-au-dessus-de-ligne">
          <div class="ligne3"></div>
      </div>';
    }
    ?>

  </div>  <!-- Footer -->
  
  <?php
  include("footer.inc.php");
  ?>
<script src="script.js"></script>
</body>
</html>