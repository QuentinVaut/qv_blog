<?php

require_once('includes/connexion.inc.php');
require_once('setting/setting.php');
require_once('./includes/functions.php');
include_once('includes/header.inc.php');


$filename = dirname(__FILE__) . "/img/" . $_GET['id'] . ".jpg";
if (file_exists($filename)) { //Vérifie que le fichier existe pour supprimer l'article + l'image
    unlink($filename);
    deleteArticle($_GET['id']);
    $_SESSION['notification'] = "Article supprimé";
} else {
    $_SESSION['notification'] = "L'article n'a pas pu être supprimé";
}
header('Location: index.php');
?>
