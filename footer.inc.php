<?php
switch ($lang) {
  case 'fr' :
    echo "
    <footer>
    <h3>&Agrave; propos</h3>
    <div class='link_bloc'>
      <div class='links'>
        <a href='about_us.php?lang=$lang'>Qui sommes-nous ?</a> <br>
        <a href=''>Conditions d'utilisations</a> <br>
        <a href=''>Mentions l&eacute;gales</a> <br>
      </div>
    </div>
    ";
    break;
  case 'en' :
    echo "
    <footer>
    <h3>About us</h3>
    <div class='link_bloc'>
      <div class='links'>
        <a href='about_us.php?lang=$lang'>Who are we ?</a> <br>
        <a href=''>Terms & Conditions</a> <br>
        <a href=''>Legal mentions</a>
      </div>
    </div>
    ";
    break;
  case 'es' :
    echo "
    <footer>
    <h3>Sobre nosotros</h3>
    <div class='link_bloc'>
      <div class='links'>
        <a href='about_us.php?lang=$lang'>Qui&eacute;nes somos ?</a> <br>
        <a href=''>Condiciones generales</a> <br>
        <a href=''>Menciones legales</a> <br>
      </div>
    </div>
    ";
    break;
}
echo "
<hr class='footer-separator'>
<div class='all_logos'>
  <a href='https://iut.univ-gustave-eiffel.fr'><img src='Icons/iut-uge.png'></a>
  <a href='https://www.unesco.org/'><img src='Icons/unesco.png'></a>
  <img src='Icons/mcn.png'>
  <img src='Icons/cdm.png'>
  <img src='Icons/idea.png'>
  <img src='Icons/inv_ave.png'>
</div>";

switch ($lang) {
  case 'fr' :
    echo "
      <p>
        &copy; Tous droits r&eacute;serv&eacute;s.
      </p>";
    break;
  case 'en' :
    echo "
      <p>
        &copy; All rights reserved.
      </p>";
    break;
  case 'es' :
    echo "
      <p>
        &copy; Todos derechos reservados.
      </p>";
    break;
}
echo "</footer>
<script>
function myFunction(elem) {
  var x = document.getElementById(elem);
  if (x.style.display === \"none\") {
    x.style.display = \"flex\";
  } else {
    x.style.display = \"none\";
  }
} 

function myFunctionlang(elem) {
  var x = document.getElementById(elem);
  var menu = document.getElementById('container');
  if (x.style.display === 'none') {
    x.style.display = 'flex';
    menu.style.transform = 'translateY(61px)';
  } else {
    x.style.display = 'none';
    menu.style.transform = 'translateY(0px)';
  }
}
</script>
</body>
</html>
";
?>
