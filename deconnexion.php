<?php
require_once('includes/connexion.inc.php');
require_once ('libs/Smarty.class.php');

$smarty = new Smarty();
setcookie("Connect", "", -1);
//$_SESSION['notification'] = "Vous êtes déconnecté";
$smarty->display('templates/deconnexion.tpl');

?>

