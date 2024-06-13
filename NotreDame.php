<html>
  <head>
    <title>Notre-Dame</title>
    <link rel="stylesheet" href="NotreDame.css">
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
        <span class="gros">Notre-Dame de Paris</span>
    </div>
    <div class="ligne"></div>
    <br><br><br><br>
    <div class="Champs-Info"></div>

    <div class="center-text0">
        <p>Notre-Dame de Paris est l\'une des cathédrales les plus célèbres au monde et un joyau de l\'architecture gothique française.</p>
    </div>
    <div class="center-text0">
        <p>Commencée en 1163 et achevée au XIVe siècle, elle se dresse majestueusement sur l\'île de la Cité. Sa construction a marqué l\'histoire de Paris et elle continue de captiver les visiteurs avec ses détails architecturaux et ses trésors artistiques.</p>
    </div>
    <br>
    <div class="titre-gauche">
        <span class="gros2">Histoire de Notre-Dame</span>
    </div>
    <div class="texte-au-dessus-de-ligne">
        <p>Construction et Évolution</p>
        <div class="ligne3"></div>
    </div>
    <br>
    <div class="Champs-Info2"></div>
    <div class="description">
        <p>Photo de Notre-Dame de Paris de nos jours</p>
    </div>
    <div class="center-text">
        <p>La construction de Notre-Dame commence en 1163 sous l\'évêque Maurice de Sully. Sa conception gothique, avec ses voûtes en ogive, ses arcs-boutants et ses rosaces magnifiques, établit de nouveaux standards architecturaux. Les travaux se poursuivent pendant plus de deux siècles, avec des contributions successives de nombreux architectes.</p>
    </div>
    <div class="center-text">
        <p>Au cours des siècles, Notre-Dame subit plusieurs modifications. Pendant la Révolution française, la cathédrale est gravement endommagée et de nombreuses sculptures sont détruites. Cependant, grâce à l\'écrivain Victor Hugo et à son roman "Notre-Dame de Paris" publié en 1831, un mouvement de restauration est initié.</p>
    </div>
    <div class="titre-gauche"></div>
    <div class="sousTitre">
        <h2>La Restauration de Viollet-le-Duc</h2>
    </div>
    <div class="center-text">
        <p>Entre 1844 et 1864, l\'architecte Eugène Viollet-le-Duc dirige une vaste restauration de la cathédrale, ajoutant certaines de ses propres touches, comme la célèbre flèche. Son travail contribue à redonner à Notre-Dame son éclat d\'antan.</p>
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
        <p>L\'Incendie de 2019 et la Reconstruction</p>
        <div class="ligne3"></div>
    </div>
    <div class="Champs-Info3"></div>
    <div class="sousTitre">
        <h2>Un Projet de Reconstruction Ambitieux</h2>
    </div>
    <div class="center-text2">
        <p>Le 15 avril 2019, un incendie dévastateur ravage la toiture de Notre-Dame et fait s\'effondrer sa flèche. Cet événement tragique suscite une vague de solidarité mondiale et des promesses de reconstruction.</p>
    </div>
    <div class="center-text2">
        <p>Les travaux de reconstruction, visant à redonner à Notre-Dame sa splendeur d\'origine d\'ici 2024, sont en cours. Le projet intègre des techniques modernes tout en respectant les méthodes historiques.</p>
    </div>
    <br><br>
    <div class="texte-au-dessus-de-ligne">
        <div class="ligne3"></div>
    </div>';
    break;
    case "en":
      echo '
    <div class="about2">
        <span class="gros">Notre-Dame de Paris</span>
    </div>
    <div class="ligne"></div>
    <br><br><br><br>
    <div class="Champs-Info"></div>

    <div class="center-text0">
        <p>Notre-Dame de Paris is one of the most famous cathedrals in the world and a jewel of French Gothic architecture.</p>
    </div>
    <div class="center-text0">
        <p>Started in 1163 and completed in the 14th century, it stands majestically on the Île de la Cité. Its construction marked the history of Paris and it continues to captivate visitors with its architectural details and artistic treasures.</p>
    </div>
    <br>
    <div class="titre-gauche">
        <span class="gros2">History of Notre-Dame</span>
    </div>
    <div class="texte-au-dessus-de-ligne">
        <p>Construction and Evolution</p>
        <div class="ligne3"></div>
    </div>
    <br>
    <div class="Champs-Info2"></div>
    <div class="description">
        <p>Photo of Notre-Dame de Paris today</p>
    </div>
    <div class="center-text">
        <p>The construction of Notre-Dame began in 1163 under Bishop Maurice de Sully. Its Gothic design, with ribbed vaults, flying buttresses, and magnificent rose windows, set new architectural standards. The work continued for over two centuries, with successive contributions from many architects.</p>
    </div>
    <div class="center-text">
        <p>Over the centuries, Notre-Dame underwent several modifications. During the French Revolution, the cathedral was severely damaged and many sculptures were destroyed. However, thanks to the writer Victor Hugo and his novel "Notre-Dame de Paris" published in 1831, a restoration movement was initiated.</p>
    </div>
    <div class="titre-gauche"></div>
    <div class="sousTitre">
        <h2>The Restoration by Viollet-le-Duc</h2>
    </div>
    <div class="center-text">
        <p>Between 1844 and 1864, the architect Eugène Viollet-le-Duc led a major restoration of the cathedral, adding some of his own touches, such as the famous spire. His work helped to restore Notre-Dame to its former glory.</p>
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
        <p>The 2019 Fire and Reconstruction</p>
        <div class="ligne3"></div>
    </div>
    <div class="Champs-Info3"></div>
    <div class="sousTitre">
        <h2>An Ambitious Reconstruction Project</h2>
    </div>
    <div class="center-text2">
        <p>On April 15, 2019, a devastating fire ravaged the roof of Notre-Dame and caused its spire to collapse. This tragic event sparked a wave of global solidarity and promises of reconstruction.</p>
    </div>
    <div class="center-text2">
        <p>The reconstruction work, aiming to restore Notre-Dame to its original splendor by 2024, is ongoing. The project incorporates modern techniques while respecting historical methods.</p>
    </div>
    <br><br>
    <div class="texte-au-dessus-de-ligne">
        <div class="ligne3"></div>
    </div>';
    break;

    case "es":
      echo '
      <div class="about2">
          <span class="gros">Notre-Dame de París</span>
      </div>
      <div class="ligne"></div>
      <br><br><br><br>
      <div class="Champs-Info"></div>

      <div class="center-text0">
          <p>Notre-Dame de París es una de las catedrales más famosas del mundo y una joya de la arquitectura gótica francesa.</p>
      </div>
      <div class="center-text0">
          <p>Comenzada en 1163 y terminada en el siglo XIV, se alza majestuosa en la Île de la Cité. Su construcción marcó la historia de París y continúa cautivando a los visitantes con sus detalles arquitectónicos y tesoros artísticos.</p>
      </div>
      <br>
      <div class="titre-gauche">
          <span class="gros2">Historia de Notre-Dame</span>
      </div>
      <div class="texte-au-dessus-de-ligne">
          <p>Construcción y Evolución</p>
          <div class="ligne3"></div>
      </div>
      <br>
      <div class="Champs-Info2"></div>
      <div class="description">
          <p>Foto de Notre-Dame de París hoy</p>
      </div>
      <div class="center-text">
          <p>La construcción de Notre-Dame comenzó en 1163 bajo el obispo Maurice de Sully. Su diseño gótico, con bóvedas de arista, arbotantes y magníficos rosetones, estableció nuevos estándares arquitectónicos. Los trabajos continuaron durante más de dos siglos, con contribuciones sucesivas de muchos arquitectos.</p>
      </div>
      <div class="center-text">
          <p>A lo largo de los siglos, Notre-Dame sufrió varias modificaciones. Durante la Revolución Francesa, la catedral fue severamente dañada y muchas esculturas fueron destruidas. Sin embargo, gracias al escritor Victor Hugo y su novela "Nuestra Señora de París" publicada en 1831, se inició un movimiento de restauración.</p>
      </div>
      <div class="titre-gauche"></div>
      <div class="sousTitre">
          <h2>La Restauración de Viollet-le-Duc</h2>
      </div>
      <div class="center-text">
          <p>Entre 1844 y 1864, el arquitecto Eugène Viollet-le-Duc dirigió una gran restauración de la catedral, añadiendo algunos de sus propios toques, como la famosa aguja. Su trabajo ayudó a devolver a Notre-Dame su antiguo esplendor.</p>
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
          <p>El Incendio de 2019 y la Reconstrucción</p>
          <div class="ligne3"></div>
      </div>
      <div class="Champs-Info3"></div>
      <div class="sousTitre">
          <h2>Un Proyecto de Reconstrucción Ambicioso</h2>
      </div>
      <div class="center-text2">
          <p>El 15 de abril de 2019, un incendio devastador arrasó el techo de Notre-Dame y provocó el colapso de su aguja. Este trágico evento provocó una ola de solidaridad mundial y promesas de reconstrucción.</p>
      </div>
      <div class="center-text2">
          <p>Los trabajos de reconstrucción, que buscan devolver a Notre-Dame su esplendor original para 2024, están en curso. El proyecto incorpora técnicas modernas respetando los métodos históricos.</p>
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
