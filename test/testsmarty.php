<?php
require_once ("libs/Smarty.class.php");
require_once ("setting/setting.php");


$smarty = new Smarty(); //Créer un objet
$monTexte="<p>Hello World !</p>";
$smarty->assign("monTexte", $monTexte);

$smarty->display('testsmarty.tpl'); //Affiche le template

?>

