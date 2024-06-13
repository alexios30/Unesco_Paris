<?php
include("checklang.inc.php");
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <title>Paris</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>

<?php
include("navbar.inc.php");

$sections = [
  'Heros' => [
        'fr' => [
          'Paris',
          'Un patrimoine vivant, une culture éternelle,',
          'Une histoire à travers chaque ruelle',
          "<b><u>Capitale</u> de la France, Paris est la ville <u>la plus visitée au monde</u> depuis <u><span class='gros'>25</span> ans</u></b>.",
          "Cette ville regorge de monuments et d'endroits à visiter. &Agrave; l'aide de parcours de découverte des monuments emblématiques ou de lieux atypiques, explorez cette ville chargée d'histoire, placée au centre du patrimoine français.",
          "Plus d'informations >"
      ],
      'en' => [
          'Paris',
          "A living heritage, an eternal culture,",
          "A story through each and every alley's structure",
          "<b><u>Capital</u> of France, Paris is <u>the most visited city in the world</u> for the past <u><span class='gros'>25</span> years</u></b>.",
          "This city is brimming with monuments and places to visit. Explore this city steeped in history, at the heart of France's heritage, with the help of guided tours of emblematic monuments and unusual sites.",
          'More information >'
      ],
      'es' => [
          'París',
          'Un patrimonio vivo, una cultura eterna,',
          'Una historia a través de cada callejuela',
          "<b><u>Capital</u> de Francia, Par&iacute;s es desde hace <u><span class='gros'>25</span> a&ntilde;os</u> <u>la ciudad m&aacute;s visitada del mundo</u></b>.",
          'Esta ciudad est&aacute; repleta de monumentos y lugares que visitar. Explore esta ciudad cargada de historia, en pleno coraz&oacute;n del patrimonio francés, con la ayuda de visitas guiadas a monumentos emblem&aacute;ticos y lugares ins&oacute;litos.',
          'M&aacute;s informaci&oacute;n >'
      ]
  ],
  'Participez' => [
      'fr' => ['Participer', '', "Voir plus d'évènements >"],
      'en' => ['Participate', '', 'See more events >'],
      'es' => ['Participar', '', 'Ver más eventos >']
  ],
  'Parcourez' => [
      'fr' => ['Parcourir', 'Venez parcourir le Grand Paris !', "C'est parti ! >"],
      'en' => ['Route', 'Come and explore the Greater Paris region!', "Let's go! >"],
      'es' => ['Explorar', 'Venga a descubrir el Gran París', '¡Allá vamos! >']
  ],
  'Decouvrez' => [
      'fr' => ['Découvrir', 'Voir plus >'],
      'en' => ['Discover', 'See more >'],
      'es' => ['Descubrir', 'Ver más >']
  ]
];
?>

<div class='Paris'>
    <span><?= htmlspecialchars($sections['Heros'][$lang][0]) ?></span><br/>
    <?= $sections['Heros'][$lang][1] ?><br>
    <?= $sections['Heros'][$lang][2] ?>
</div>

<div class='about'>
    <span class='Titre'><?= $sections['Heros'][$lang][3] ?></span>
    <span class='texte'><?= $sections['Heros'][$lang][4] ?></span>
</div>

<div class='Participez'>
    <div class='Titre'>
        <?= htmlspecialchars($sections['Participez'][$lang][0]) ?>
    </div>
    <hr class='ligne'>
    <div class='bloc'>
        <div class='image click' id='e1'>
            <div class='text'><?= htmlspecialchars($sections['Participez'][$lang][1]) ?></div>
        </div>
        <div class='image click' id='e2'>
            <div class='text'><?= htmlspecialchars($sections['Participez'][$lang][1]) ?></div>
        </div>
    </div>
    <div class='bloc'>
        <div class='image click' id='e3'>
            <div class='text'><?= htmlspecialchars($sections['Participez'][$lang][1]) ?></div>
        </div>
        <div class='image click' id='e4'>
            <div class='text'><?= htmlspecialchars($sections['Participez'][$lang][1]) ?></div>
        </div>
    </div>
    <a href='participer-1.php?lang=<?= $lang ?>' id='exception'>
        <button class='plus'>
            <?= htmlspecialchars($sections['Participez'][$lang][2]) ?>
        </button>
    </a>
</div>

<div class='Parcourez'>
    <div class='Titre'>
        <?= htmlspecialchars($sections['Parcourez'][$lang][0]) ?>
    </div>
    <hr class='ligne'>
    <div class='box'>
        <div class='cadrant'>
            <img id='monument' src='Images/parcours.jpeg' alt='<?= htmlspecialchars($sections['Parcourez'][$lang][0]) ?>'>
        </div>
        <div class='description'>
            <?= htmlspecialchars($sections['Parcourez'][$lang][1]) ?>
            <a href='parcourir.php?lang=<?= $lang ?>' id='exception2'>
                <button class='plus'>
                    <?= htmlspecialchars($sections['Parcourez'][$lang][2]) ?>
                </button>
            </a>
        </div>
    </div>
</div>

<div class='Decouvrez'>
    <div class='Titre'>
        <?= htmlspecialchars($sections['Decouvrez'][$lang][0]) ?>
    </div>
    <hr class='ligne'>
    <div class='box2'>
        <a href='Triomphe.php?lang=<?= $lang ?>'>
            <div class='cadrant click' id='m1'>
                <div class='text'>
                    <?php
                      switch($lang) {
                        case "es":
                          echo "Arco de Triunfo"; break;
                        case "fr":
                        case "en":
                        default:
                          echo "Arc de Triomphe"; break;
                      }
                    ?>
                </div>
            </div>
        </a>
        <a href='Louvre.php?lang=<?= $lang ?>'>
            <div class='cadrant click' id='m2'><div class='text'>Louvre</div></div>
        </a>
        <a href='NotreDame.php?lang=<?= $lang ?>'>
            <div class='cadrant click' id='m3'><div class='text'>Notre Dame</div></div>
        </a>
        <a href='Vincennes.php?lang=<?= $lang ?>'>
            <div class='cadrant click' id='m4'>
                <div class='text'>
                    <?php
                      switch($lang) {
                        case "es":
                          echo "Bosque de Vincennes"; break;
                        case "fr":
                        case "en":
                        default:
                          echo "Bois de Vincennes"; break;
                      }
                    ?>
                </div
            ></div>
        </a>
        <a href='Opera.php?lang=<?= $lang ?>'>
            <div class='cadrant click' id='m5'>
                <div class='text'>
                    <?php
                      switch($lang) {
                        case "es":
                            echo "&Oacute;pera"; break;
                        case "en":
                            echo "Opera"; break;
                        case "fr":
                        default:
                            echo "Op&eacute;ra"; break;
                      }
                    ?>
                </div>
            </div>
        </a>
        <a href='Invalide.php?lang=<?= $lang ?>'>
            <div class='cadrant click' id='m6'>
                <div class='text'>
                    <?php
                      switch($lang) {
                        case "es":
                          echo "Los Invalidos"; break;
                        case "en":
                        case "fr":
                        default:
                          echo "H&ocirc;tel des Invalides"; break;
                      }
                    ?>
                </div>
            </div>
        </a>
    </div>
    <a href='decouvrir.php?lang=<?= $lang ?>' id='exception3'>
        <button class='plus'>
            <?= htmlspecialchars($sections['Decouvrez'][$lang][1]) ?>
        </button>
    </a>
</div>

<?php include("footer.inc.php"); ?>

</body>
</html>
