<?php
if (isset($_REQUEST["lang"]) ) {
    $lang = $_REQUEST['lang'];
    if (! in_array($lang, ["fr", "en", "es"])) {
        $adresse = $_SERVER['PHP_SELF'];
        header("Location: $adresse?lang=fr");
        exit(0);
    }
} else {
    $adresse = $_SERVER['PHP_SELF'];
    header("Location: $adresse?lang=fr");
    exit(0);
}
?>
