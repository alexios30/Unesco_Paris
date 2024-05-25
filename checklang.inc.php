<?php
if (! isset($_REQUEST["lang"])) {
    $adresse = $_SERVER['PHP_SELF'];
    header("Location: $adresse?lang=fr");
} else {
    $lang = $_REQUEST['lang'];
}
?>