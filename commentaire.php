<?php

require_once('includes/connexion.inc.php');
require_once('setting/setting.php');
require_once('./includes/functions.php');
include_once('includes/header.inc.php');
require_once ('libs/Smarty.class.php');

$smarty = new Smarty(); //Créer un objet
$article = articleById($_GET['id'], $bdd);
$commentaires = selectCommentaire($_GET['id'], $bdd);

if (isset($_POST["envoyer"]) && $connect == true) {
    $date = date("Y-m-d");
    addCommentaire($mail, $date, $_POST['texte'], $_GET['id'], $bdd);
    $_SESSION['notification'] = "Commentaire envoyé avec succés !  <a href='commentaire.php?id=" . $_GET['id'] . "'> Cliquez ici pour le voir</a> ";
    header('Location: index.php');
}


$smarty->assign("article", $article);
$smarty->assign("commentaires", $commentaires);
$smarty->assign("connect", $connect);

$smarty->display('templates/commentaire.tpl');
//Inclusion du menu
include_once('includes/nav.inc.php');

//Inclusion du footer
include_once('includes/footer.inc.php');
?>
