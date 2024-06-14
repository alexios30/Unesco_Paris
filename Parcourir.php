<!DOCTYPE html>
<html>
  <head>
    <title>
      <?php
        switch($lang) {
          case "fr":
            echo "Parcourir"; break;
          case "en":
            echo "Routes"; break;
          case "es":
            echo "Explorar"; break;
          default:
            break;
        }
      ?>
    </title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
  </head>
<body>
<?php
    include("checklang.inc.php");
    ?>
  <?php
  include("navbar.inc.php");
  ?>
    <!-- Footer -->
  
    <?php
  include("footer.inc.php");
  ?>
<script src="script.js"></script>
</body>
</html>
