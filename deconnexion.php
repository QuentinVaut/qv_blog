<?php
require_once('includes/connexion.inc.php');
require_once ('libs/Smarty.class.php');

setcookie("Connect", "", -1);
$_SESSION['notification'] = "Vous êtes déconnecté";
header('Location: index.php');
?>

