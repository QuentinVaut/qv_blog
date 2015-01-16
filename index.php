<?php

require_once('includes/connexion.inc.php');
require_once('setting/setting.php');
require_once('./includes/functions.php');
include_once('includes/header.inc.php');
require_once ('libs/Smarty.class.php');

$smarty = new Smarty(); //Créer un objet

if (isset($_SESSION['notification'])) {
    $smarty->assign("notification", $_SESSION['notification']);
    session_unset($_SESSION['notification']);
}
$page_courante = 1;
if (isset($_GET['page'])) {
    $page_courante = intval($_GET['page']);
}
$nbArticlepPage = 2;
$array_totalArticles = totalArticles($nbArticlepPage, $page_courante, $bdd);
$total = intval($array_totalArticles[1]);
$index = intval($array_totalArticles[0]);

if (isset($_GET['rechercher']) && $_GET['rechercher']!= "") {
    $articles = selectionRecherche($nbArticlepPage, $index, $_GET['recherche'], $bdd);
    print_r($_GET['recherche']);
    $smarty->assign("articles", $articles);
    $count = count($articles);
    $total = $count;
} else {
    $articles = selection($nbArticlepPage, $index, $bdd);
    $smarty->assign("articles", $articles);
    $count = count($articles);
}
$smarty->assign("connect", $connect);
$smarty->assign("total", $total);
$smarty->display('templates/index.tpl');

//Inclusion du menu
include_once('includes/nav.inc.php');

//Inclusion du footer
include_once('includes/footer.inc.php');
?>
