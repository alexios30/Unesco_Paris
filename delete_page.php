<?php
include("connexion.inc.php");
$page = $_GET['page'];
$cnx->exec("DELETE FROM participer WHERE nom_activite = '".$page."'");
header('Location: ' . $_SERVER['HTTP_REFERER']);