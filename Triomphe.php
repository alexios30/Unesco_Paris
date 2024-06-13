<!DOCTYPE html>

<html>

    <head>
        <title>Titre</title>
        <link rel='stylesheet' href='decouvrir-template.css'>
        <link rel='stylesheet' href='composants.css'>
        <meta charset='utf-8'>
    </head>

    <body>

        <!-- Vérifie langue + nav bar -->
        <?php
            include('checklang.inc.php');
            include('navbar.inc.php');
        ?>
        <?php
        switch ($lang) {
          case 'fr':
          echo "
          <!-- Barre de localisation-->
          <div class='location'>
              <ul>
                  <li><a href='index.php?lang='" . htmlspecialchars($lang) . "'>Accueil</a> &nbsp;&nbsp;&nbsp;></li>
                  <li><a href='decouvrir.php?lang='" . htmlspecialchars($lang) . "'>Découvrir</a> &nbsp;&nbsp;&nbsp;></li>
                  <li class='current-location'><a>Arc de Triomphe</a></li>
              </ul>
          </div>

          <!-- Top section, Landing + description -->
          <section>

              <!-- Titre de la page-->
              <div class='title'>
                  <h1>Arc de Triomphe</h1>
                  <hr>
              </div>

              <!-- Image hero -->
              <div class='hero'>
                  <img src='CHAMPS.jpg'>
              </div>

              <p class='description'>
                  L'Arc de Triomphe est un monument emblématique de Paris. Construit pour célébrer les victoires militaires de Napoléon Bonaparte,
                  il trône au bout de l'avenue des Champs-Élysées. Sa conception imposante et ses bas-reliefs commémoratifs en font un symbole 
                  puissant de la gloire et de la grandeur nationales françaises.
              </p>
                      
            </section>

            <section>

              <div class='orange-title'>
                  <h2>L'histoire de L'Arc de Triomphe</h2><hr>
              </div>

              <div class='yellow-title'>
                  <h3>Le projet Napoléonien</h3><hr>
              </div>

              <div class='img'>
                  <img src='Images/PlanArc.jpg'>
                  <p class='doc-desc'>Vue perspective de l'Arc de Triomphe, ~1826</p>
              </div>
              
              <p>
                Le projet Napoléonien de construction de l'Arc de Triomphe trouve son origine avec les architectes Jean-François Thérèse Chalgrin et Jean-Arnaud Raymond, qui ont choisi la Place de l'Étoile comme site emblématique. Inspiré par des références antiques, notamment l'Arc de Titus à Rome, le design de l'arc opte pour une ouverture simple, symbolisant également une porte de la ville.
                <br/><br/>
                Le processus de construction a connu des défis, notamment lors du mariage de Napoléon 1er et Marie-Louise d'Autriche en 1810. Alors que l'itinéraire impérial prévoyait de passer par la Place de l'Étoile, le chantier de l'Arc de Triomphe n'était pas terminé. Pour pallier cela, une maquette grandeur nature, construite en charpentes et toiles peintes, a été érigée de manière éphémère. Cette construction temporaire, coûtant 511 000 francs, a permis à Chalgrin d'apporter des ajustements aux plans originaux, influençant notamment les ressauts, la suppression des socles, et le choix de l'ornementation des façades.
                <br/><br/>
                Cependant, en janvier 1811, Chalgrin décède avec les piliers de l'Arc de Triomphe à une hauteur modeste. Son élève, Louis-Robert Goust, prend la relève du projet. Malgré les défis, ces événements ont façonné la construction de l'Arc de Triomphe, en révélant l'ingéniosité des architectes et en illustrant la persévérance face aux obstacles.
              </p>
              
              <hr class='sep-line'>

              <h4>Un chantier suspendu sous Louis XVIII</h4>

              <p>
                  Après la chute de Napoléon et l'avènement de Louis XVIII, le chantier de l'Arc de Triomphe est interrompu. En 1814, l'architecte Bernard Poyet propose même de démolir les piliers existants, mais cette suggestion est rejetée par Louis XVIII, bien qu'aucune intention de reprendre la construction ne soit clairement exprimée. Les monarchistes critiquent ce projet commandé par Napoléon, et diverses propositions alternatives entre 1814 et 1823 ne suscitent aucun intérêt royal.
                  <br/><br/>
                  Le 9 octobre 1823, Louis XVIII décide de reprendre immédiatement et de terminer l'Arc de Triomphe, mais avec une nouvelle dédicace célébrant l'Armée des Pyrénées. Les travaux reprennent progressivement, sous la direction de Louis-Robert Goust, désormais associé à l'architecte Jean-Nicolas Huyot. Ensemble, ils retravaillent les plans de Chalgrin, ajoutant notamment des colonnes en façade. Charles X succède à Louis XVIII en 1824 et poursuit les travaux selon les souhaits de son prédécesseur.
                  <br/><br/>
                  En 1825, Huyot est révoqué pour sa proposition de colonnes en façade, mais il est réintégré en 1826. Charles X insiste pour que les plans de Chalgrin soient respectés. En 1828, une commission d'architectes définit les ornements à réaliser, incluant des caissons avec rosaces et des hauts reliefs sculptés sur les façades. La pierre de Chérence est choisie pour les sculptures de l'entablement. En 1829, le monument atteint l'architrave de l'entablement, et une plaque de marbre avec la nouvelle dédicace à l'Armée des Pyrénées est installée. En 1830, Goust se retire, laissant Huyot seul sur le chantier. Ce dernier propose un projet ornant la corniche supérieure de 36 statues symbolisant les grandes villes de France.
              </p>
          </section>

          <div class='sep'>
              <p>
                  Vous souhaitez visiter Paris mais vous ne savez pas par où commencer ?
                  <br>
                  Découvrez nos parcours prédéfinis selon votre temps et vos envies !
              </p>
              <a href='Parcourir.php?lang=fr'>Parcourez !</a>
          </div>

          <section>

              <div class='yellow-title'>
                  <h3>L'inauguration de L'Arc de triomphe</h3><hr>
              </div>

              <div class='img'>
                  <img src='Images/CHAMPS2.jpg'>
                  <p class='doc-desc'>Photo de L'Arc de triomphe de nos jours</p>
              </div>

              <h4>Une inauguration discrète</h4>
              <p>
                  Le 29 juillet 1836 marque l'inauguration de l'Arc de Triomphe après trois décennies de travaux. Les listes de noms gravés sur les piédroits sont dévoilées lors de la cérémonie, mais la grande fête prévue est annulée par crainte d'attentat contre le roi Louis-Philippe. Seulement onze personnes assistent à l'événement, dont le président du Conseil des ministres Adolphe Thiers et le ministre des Finances Antoine Maurice Appolinaire Argout.
                  <br/><br/>
                  À la nuit tombée, une foule se rassemble devant l'Arc de Triomphe illuminé de 700 becs de gaz. Cependant, des controverses surgissent concernant les noms inscrits sur les piliers, entraînant des protestations. En réponse, le gouvernement et l'architecte promettent d'étudier toutes les demandes. L'architecte Blouet ajoute rapidement 128 noms de généraux et 172 batailles oubliés. Dans son ouvrage de 1837 intitulé \"Les Voix Intérieures\", Victor Hugo exprimera son chagrin de ne pas voir le nom de son père, Jospeh-Léopold-Sigisbert Hugo, nommé général par Louis XVIII en 1814, figurant sur l'Arc.
                  <br/><br/>
                  Des ajouts ponctuels aux noms gravés sur l'Arc de Triomphe se poursuivent jusqu'en 1895, reflétant ainsi une histoire complexe et dynamique liée à ce monument emblématique de Paris.
              </p>
          <p class='editing-info'>
              Rédigé par <a href='about_us.php?lang=fr'>Alexis</a>, Révisé par <a href='about_us.php?lang=fr'>Romain</a>, Translation by <a href='about_us.php?lang=fr'>Alexis</a>
          </p>
      </body>";
      break;


      case 'en':
        echo "
                  <!-- Barre de localisation-->
          <div class='location'>
              <ul>
                  <li><a href='index.php?lang='" . htmlspecialchars($lang) . "'>Home</a> &nbsp;&nbsp;&nbsp;></li>
                  <li><a href='decouvrir.php?lang='" . htmlspecialchars($lang) . "'>Discover</a> &nbsp;&nbsp;&nbsp;></li>
                  <li class='current-location'><a>Arc de Triomphe</a></li>
              </ul>
          </div>

          <!-- Top section, Landing + description -->
          <section>

              <!-- Titre de la page-->
              <div class='title'>
                  <h1>Arc de Triomphe</h1>
                  <hr>
              </div>

              <!-- Image hero -->
              <div class='hero'>
                  <img src='CHAMPS.jpg'>
              </div>

              <p class='description'>
                  The Arc de Triomphe is an iconic monument in Paris. Built to celebrate Napoleon Bonaparte's military victories, it stands at the end of the Champs-Élysées avenue. Its imposing design and commemorative bas-reliefs make it a powerful symbol of French national glory and grandeur.
              </p>
                      
            </section>

            <section>

              <div class='orange-title'>
                  <h2>The history of the Arc de Triomphe</h2><hr>
              </div>

              <div class='yellow-title'>
                  <h3>The Napoleonic project</h3><hr>
              </div>

              <div class='img'>
                  <img src='Images/PlanArc.jpg'>
                  <p class='doc-desc'>Perspective view of the Arc de Triomphe, ~1826</p>
              </div>
              
              <p>
                The Napoleonic project to build the Arc de Triomphe originated with the architects Jean-François Thérèse Chalgrin and Jean-Arnaud Raymond, who chose the Place de l 'Étoile as the emblematic site. Inspired by ancient references, notably the Arch of Titus in Rome, the design of the arch opts for a simple opening, also symbolising a gateway to the city.
                <br/><br/>
                The construction process was not without its challenges, particularly at the time of the marriage of Napoleon 1st and Marie-Louise of Austria in 1810. Although the imperial itinerary planned to pass through the Place de l'Étoile, the Arc de Triomphe construction site had not been completed. To compensate for this, a life-size mock-up was erected from painted canvas and framework. This temporary construction, costing 511,000 francs, allowed Chalgrin to make adjustments to the original plans, influencing in particular the projections, the removal of the plinths, and the choice of ornamentation for the façades.
                <br/><br/>
                However, in January 1811, Chalgrin died with the pillars of the Arc de Triomphe at a modest height. His pupil, Louis-Robert Goust, took over the project. Despite the challenges, these events shaped the construction of the Arc de Triomphe, revealing the ingenuity of the architects and illustrating perseverance in the face of obstacles.
              </p>
              
              <hr class='sep-line'>

              <h4>A suspended construction under Louis XVIII</h4>

              <p>
                  After the fall of Napoleon and the accession of Louis XVIII, work on the Arc de Triomphe was interrupted. In 1814, the architect Bernard Poyet even proposed demolishing the existing pillars, but this suggestion was rejected by Louis XVIII, although no intention to resume construction was clearly expressed. The monarchists criticised this project commissioned by Napoleon, and various alternative proposals between 1814 and 1823 failed to arouse any royal interest.
                  <br/><br/>
                  On 9 October 1823, Louis XVIII decided to immediately resume and complete the Arc de Triomphe, but with a new dedication celebrating the Army of the Pyrenees. Work gradually resumed, under the direction of Louis-Robert Goust, now associated with the architect Jean-Nicolas Huyot. Together, they reworked Chalgrin's plans, in particular adding columns to the façade. Charles X succeeded Louis XVIII in 1824 and continued the work in accordance with the wishes of his predecessor.
                  <br/><br/>
                  In 1825, Huyot was dismissed for his proposal to add columns to the façade, but he was reinstated in 1826. Charles X insisted that Chalgrin 's plans be respected. In 1828, a commission of architects defined the ornamentation to be created, including caissons with rosettes and sculpted high reliefs on the façades. Chérence stone was chosen for the sculptures on the entablature. In 1829, the monument reached the architrave of the entablature, and a marble plaque with the new dedication to the Armée des Pyrénées was installed. In 1830, Goust retired, leaving Huyot alone on the site. Huyot proposed a project to decorate the upper cornice with 36 statues symbolising France's major cities.
              </p>
          </section>

          <div class='sep'>
              <p>
                  Would you like to visit Paris but don't know where to start?
                  <br/>
                  Discover our predefined itineraries to suit your time and desires !
              </p>
              <a href='Parcourir.php?lang=en'>Visit</a>
          </div>

          <section>

              <div class='yellow-title'>
                  <h3>The inauguration of the Arc de Triomphe</h3><hr>
              </div>

              <div class='img'>
                  <img src='Images/CHAMPS2.jpg'>
                  <p class='doc-desc'>Photo of the Arc de Triomphe nowadays</p>
              </div>

              <h4>A discreet inauguration</h4>
              <p>
                  The Arc de Triomphe was inaugurated on 29 July 1836 after three decades of construction work. The lists of names engraved on the pedestals were unveiled at the ceremony, but the planned grand celebration was cancelled for fear of an assassination attempt on King Louis-Philippe. Only eleven people attended the event, including the President of the Council of Ministers Adolphe Thiers and the Minister of Finance Antoine Maurice Appolinaire Argout.
                  <br/><br/>
                  As night fell, crowds gathered in front of the Arc de Triomphe, illuminated by 700 gaslights. However, controversy arose over the names inscribed on the pillars, leading to protests. In response, the government and the architect promised to consider all requests. Architect Blouet quickly added 128 names of generals and 172 forgotten battles. In his 1837 book \"Les Voix Intérieures\", Victor Hugo expressed his chagrin at not seeing the name of his father, Jospeh-Léopold-Sigisbert Hugo, appointed general by Louis XVIII in 1814, appear on the Arc.
                  <br/><br/>
                  Occasional additions to the names engraved on the Arc de Triomphe continued until 1895, reflecting the complex and dynamic history of this iconic Paris monument.
              </p>
          <p class='editing-info'>
              Written by <a href='about_us.php?lang=en'>Alexis</a>, Checked by <a href='about_us.php?lang=en'>Romain</a>, Translation by <a href='about_us.php?lang=en'>Alexis</a>
          </p>
        </body>";
        break;

      
      case 'es' :
        echo "
                    <!-- Barre de localisation-->
          <div class='location'>
              <ul>
                  <li><a href='index.php?lang='" . htmlspecialchars($lang) . "'>Inicio</a> &nbsp;&nbsp;&nbsp;></li>
                  <li><a href='decouvrir.php?lang='" . htmlspecialchars($lang) . "'>Descubrir</a> &nbsp;&nbsp;&nbsp;></li>
                  <li class='current-location'><a>Arco de Triunfo</a></li>
              </ul>
          </div>

          <!-- Top section, Landing + description -->
          <section>

              <!-- Titre de la page-->
              <div class='title'>
                  <h1>Arco de Triunfo</h1>
                  <hr>
              </div>

              <!-- Image hero -->
              <div class='hero'>
                  <img src='CHAMPS.jpg'>
              </div>

              <p class='description'>
                  El Arco del Triunfo es un monumento emblemático de París.
                   Construido para celebrar las victorias militares de Napoleón Bonaparte, se alza al final de la avenida de los Campos Elíseos.
                   Su imponente diseño y sus bajorrelieves conmemorativos lo convierten en un poderoso símbolo de la gloria y la grandeza nacionales francesas.
              </p>
                      
            </section>

            <section>

              <div class='orange-title'>
                  <h2>La historia del Arco del Triunfo</h2><hr>
              </div>

              <div class='yellow-title'>
                  <h3>El proyecto napoleónico</h3><hr>
              </div>

              <div class='img'>
                  <img src='Images/PlanArc.jpg'>
                  <p class='doc-desc'>Vista en perspectiva del Arco del Triunfo, ~1826</p>
              </div>
              
              <p>
                El proyecto napoleónico de construir el Arco del Triunfo partió de los arquitectos Jean-François Thérèse Chalgrin y Jean-Arnaud Raymond, que eligieron la plaza de l'Étoile como lugar emblemático. Inspirado en referencias antiguas, en particular el Arco de Tito en Roma, el diseño del arco opta por una apertura sencilla, símbolo también de una puerta de entrada a la ciudad.
                <br/><br/>
                El proceso de construcción no estuvo exento de dificultades, sobre todo en el momento de la boda de Napoleón I y María Luisa de Austria en 1810. Aunque el itinerario imperial preveía pasar por la plaza de l'Étoile, las obras del Arco del Triunfo no estaban terminadas. Para compensarlo, se erigió una maqueta a tamaño natural a base de lienzos pintados y armazones. Esta construcción provisional, que costó 511.000 francos, permitió a Chalgrin realizar ajustes en los planos originales, influyendo en particular en los salientes, la supresión de los zócalos y la elección de la ornamentación de las fachadas.
                <br/><br/>
                Sin embargo, en enero de 1811, Chalgrin murió con los pilares del Arco del Triunfo a una modesta altura. Su discípulo, Louis-Robert Goust, se hizo cargo del proyecto. A pesar de los desafíos, estos acontecimientos dieron forma a la construcción del Arco del Triunfo, revelando el ingenio de los arquitectos e ilustrando la perseverancia frente a los obstáculos.
            </p>
              
              <hr class='sep-line'>

              <h4>Una obra suspendida bajo Luis XVIII</h4>

              <p>
                  Tras la caída de Napoleón y la ascensión de Luis XVIII, las obras del Arco del Triunfo se interrumpieron. En 1814, el arquitecto Bernard Poyet llegó a proponer la demolición de los pilares existentes, pero esta sugerencia fue rechazada por Luis XVIII, aunque no se expresó claramente la intención de reanudar la construcción. Los monárquicos criticaron este proyecto encargado por Napoleón, y varias propuestas alternativas entre 1814 y 1823 no lograron despertar ningún interés real.
                  <br/><br/>
                  El 9 de octubre de 1823, Luis XVIII decide reanudar y terminar inmediatamente el Arco del Triunfo, pero con una nueva dedicatoria que celebre al Ejército de los Pirineos. Las obras se reanudan progresivamente bajo la dirección de Louis-Robert Goust, asociado al arquitecto Jean-Nicolas Huyot. Juntos rehicieron los planos de Chalgrin\, en particular añadiendo columnas a la fachada. Carlos X sucedió a Luis XVIII en 1824 y continuó las obras según los deseos de su predecesor.
                  <br/><br/>
                  En 1825, Huyot fue destituido por su propuesta de añadir columnas a la fachada, pero fue readmitido en 1826. Carlos X insistió en que se respetaran los planos de Chalgrin \. En 1828, una comisión de arquitectos definió la ornamentación a realizar, que incluía cajones con rosetones y altorrelieves esculpidos en las fachadas. Para las esculturas del entablamento se eligió la piedra de Chérence. En 1829, el monumento alcanzó el arquitrabe del entablamento y se instaló una placa de mármol con la nueva dedicatoria a la Armée des Pyrénées. En 1830, Goust se retiró, dejando a Huyot solo en la obra. Huyot propuso un proyecto para decorar la cornisa superior con 36 estatuas que simbolizaban las principales ciudades francesas.
              </p>
          </section>

          <div class='sep'>
              <p>
                  ¿Le gustaría visitar París pero no sabe por dónde empezar?
                  <br>
                  ¡Descubra nuestros itinerarios predefinidos que se adaptan a su tiempo y a sus deseos !
              </p>
              <a href='Parcourir.php?lang=es'>Visite !</a>
          </div>

          <section>

              <div class='yellow-title'>
                  <h3>Inauguración del Arco del Triunfo</h3><hr>
              </div>

              <div class='img'>
                  <img src='Images/CHAMPS2.jpg'>
                  <p class='doc-desc'>Foto del Arco del Triunfo en la actualidad</p>
              </div>

              <h4>Una inauguración discreta</h4>
              <p>
                  El Arco del Triunfo se inauguró el 29 de julio de 1836, tras tres décadas de obras. En la ceremonia se desvelaron las listas de nombres grabadas en los pedestales, pero la gran celebración prevista se canceló por temor a un atentado contra el rey Luis Felipe. Sólo asistieron once personas, entre ellas el Presidente del Consejo de Ministros Adolphe Thiers y el Ministro de Finanzas Antoine Maurice Appolinaire Argout.
                  <br/><br/>
                  Al caer la noche, la multitud se congregó ante el Arco del Triunfo, iluminado por 700 farolas de gas. Sin embargo, surgió una controversia sobre los nombres inscritos en los pilares, que dio lugar a protestas. En respuesta, el gobierno y el arquitecto prometieron considerar todas las peticiones. El arquitecto Blouet añadió rápidamente 128 nombres de generales y 172 batallas olvidadas. En su libro de 1837 \"Les Voix Intérieures\", Victor Hugo expresó su disgusto por no ver inscrito en el Arco el nombre de su padre, Jospeh-Léopold-Sigisbert Hugo, nombrado general por Luis XVIII en 1814.
                  <br/><br/>
                  Los nombres grabados en el Arco del Triunfo fueron añadidos ocasionalmente hasta 1895, lo que refleja la compleja y dinámica historia de este emblemático monumento parisino
              </p>
          <p class='editing-info'>
              Escrito por <a href='about_us.php?lang=es'>Alexis</a>, Revisado por <a href='about_us.php?lang=es'>Romain</a>, traducido por <a href='about_us.php?lang=es'>Alexis</a>
          </p>
        </body>";
        break;
      }
    ?>

    <?php include('footer.inc.php'); ?>
    
</html>
