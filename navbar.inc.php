<?php
echo '
<!-- Barre de navigation -->
  
<div class="navigbar">
  <div class="navig">
    
    <!-- Hamburger menu -->
    
    <button onclick="myFunction('."'".'menu'."'".')" class="rectangles">
      <img id="hambmenu" src="https://i.imgur.com/MCTSRpB.png ">
    </button>
    
    <!-- Logo MCN -->
    
    <a class="logo" href=""><img id="LogoMCN" src="https://i.imgur.com/FYHl6nN.png"></a>
    
    <!-- Barre de recherche -->
    
    <form method="post" action="?.php">
      <input class="recherche" type="text" placeholder="Recherche...">
      <input class="loupe" type="submit" value="">
    </form>
    
    <!-- Menu des langues -->
    
    <button class="menul" onClick="myFunction('."'".'langues'."'".')">
      <img src="https://i.imgur.com/moe4dvF.png" class="langue"/>&nbsp;FR
    </button>
    <div id="langues" style="display: none;">
      <a href=""><div class="sousl">
        <img src="https://i.imgur.com/ZUd06Ts.png" class="langue"/>&nbsp;EN
      </div></a>
      <a href=""><div class="sousl">
        <img src="https://i.imgur.com/6MrXRwG.png" class="langue"/>&nbsp;ES
      </div></a>
    </div>
  </div>
  
  <!-- Reste du menu hamburger -->
  
  <div id="menu">
    <div class="sous">
      <a href="#">Participer</a>
    </div>
    <div class="sous">
      <a href="#">Parcourir</a>
    </div>
    <div class="sous">
      <a href="#">D&eacute;couvrir</a>
    </div>
  </div>
</div>
</div>
';
?>