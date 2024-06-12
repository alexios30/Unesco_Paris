<?php
if (! (isset($_REQUEST["lang"]) || in_array($lang, ["fr", "en", "es"]))) {
    $adresse = $_SERVER['PHP_SELF'];
    header("Location: $adresse?lang=fr");
} else {
    $lang = $_REQUEST['lang'];
}
?>
