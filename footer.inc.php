<?php
switch ($lang) {
  case 'fr' :
    echo "
    <footer>
    <h3>&Agrave; propos</h3>
    <div class='link_bloc'>
      <div class='links'>
        <a href=''>Qui sommes-nous ?</a> <br>
        <a href=''>Nous contacter</a> <br>
        <a href=''>Terms & Conditions</a> <br>
        <a href=''>Privacy Policy</a>
      </div>
      <div class='links'>
        <a href=''>Cr&eacute;dits</a> <br>
        <a href=''>Mentions l&eacutegales</a> <br>
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
        <a href=''>Who are we ?</a> <br>
        <a href=''>Contact us</a> <br>
        <a href=''>Terms & Conditions</a> <br>
        <a href=''>Privacy Policy</a>
      </div>
      <div class='links'>
        <a href=''>Credits</a> <br>
        <a href=''>Legal mentions</a> <br>
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
        <a href=''>Qui&eacute;nes somos ?</a> <br>
        <a href=''>Contact&agrave;ctenos</a> <br>
        <a href=''>Condiciones generales</a> <br>
        <a href=''>política de privacidad</a>
      </div>
      <div class='links'>
        <a href=''>Cr&eacute;ditos</a> <br>
        <a href=''>Menciones legales</a> <br>
      </div>
    </div>
    ";
    break;
}
echo "

<hr width='90%' style='margin:50px auto 40px auto'>
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
      </p>
    </footer>
    <script src='script.js'></script>
    ";
    break;
  case 'en' :
    echo "
      <p>
        &copy; All rights reserved.
      </p>
    </footer>
    <script src='script.js'></script>
    ";
    break;
  case 'es' :
    echo "
      <p>
        &copy; Todos derechos reservados.
      </p>
    </footer>
    <script src='script.js'></script>
    ";
    break;
}
?>