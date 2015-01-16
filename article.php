<?php
require_once('includes/connexion.inc.php');
require_once('setting/setting.php');
require_once('./includes/functions.php');
require_once ('libs/Smarty.class.php');

$smarty = new Smarty();
//Test du cookie
if (isset($connect) && $connect == 1) {
    //Si on recoit un POST de valeur envoyer ou Modifier
    if (isset($_POST['envoyer']) || isset($_POST['modifier'])) {
        
        $titre = $_POST['titre'];
        $publie = (isset($_POST['publie'])) ? $_POST['publie'] : '0'; // Affecte la valeur 0 si publie n'existe pas
        $texte = $_POST['texte'];
        $date = date("Y-m-d");
        // Si le formulair envoyer n'existe pas alors c'est un update
        $row_id = (isset($_POST['envoyer'])) ? addArticle($titre, $texte, $date, $publie, $bdd) : updateArticle($titre, $texte, $publie, $_POST['id'], $bdd);
        if (isset($_POST['envoyer']) && $_POST['envoyer'] == "ajouter") {
            move_uploaded_file($_FILES['img']['tmp_name'], dirname(__FILE__) . "/img/" . $row_id . ".jpg"); // Condition à faire 
        } else {
            $row_id = $_POST['id'];
            move_uploaded_file($_FILES['img']['tmp_name'], dirname(__FILE__) . "/img/" . $row_id . ".jpg");
        }

        $_SESSION['notification'] = (isset($_POST['envoyer']) && $_POST['envoyer'] == "ajouter" ) ? "Article ajouté avec succés" : "Article modifié avec succés";
        header('Location: index.php');
    } else {

        //DEFINITION DES VARIABLES
        $article = (isset($_GET['id'])) ? articleById($_GET['id'],$bdd) : ""; //On appelle la fonction si un id existe
        $name_titre = (isset($_GET['id'])) ? $article[0]['titre'] : "";
        ; //On définit un titre si un id existe
        $texte = (isset($_GET['id'])) ? $article[0]['texte'] : ""; //On définit un texte si un id existe
        $checked = (isset($_GET['id'])) ? $article[0]['publie'] : 1; // //On coche la box si un id existe 
        $name_bouton = (isset($_GET['id'])) ? "modifier" : "ajouter"; // Affiche modifier si un id existe sinon on affiche ajouter   
        
        //On passe les variables à SMARTY 
        $smarty->assign("name", $name_titre);
        $smarty->assign("texte", $texte);
        $smarty->assign("check", $checked);
        $smarty->assign("name_boutton",$name_bouton);



        include_once('includes/header.inc.php');
        $smarty->display('templates/article.tpl');
        include_once('includes/nav.inc.php');
        include_once('includes/footer.inc.php');
    }
} else {

    $_SESSION['notification'] = "Vous n'êtes pas connecté";
    header('Location: index.php');
}
?>  