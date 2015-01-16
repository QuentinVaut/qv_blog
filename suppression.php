<?php

require_once('includes/connexion.inc.php');
require_once('setting/setting.php');
require_once('./includes/functions.php');
include_once('includes/header.inc.php');

if (isset($connect) && $connect == 1) {
    $filename = dirname(__FILE__) . "/img/" . $_GET['id'] . ".jpg";
    if (file_exists($filename)) { //Vérifie que le fichier existe pour supprimer l'article + l'image
        unlink($filename);
        deleteCommentaire($_GET['id'], $bdd);
        deleteArticle($_GET['id'], $bdd);      
        $_SESSION['notification'] = "Article supprimé";
        header('Location: index.php');
    } else {
        $_SESSION['notification'] = "L'article n'a pas pu être supprimé";
        header('Location: index.php');
    }
} else {
    $_SESSION['notification'] = "Vous n'êtes pas connecté";
    header('Location: index.php');
}
?>
