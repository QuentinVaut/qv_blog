<?php

require_once('includes/connexion.inc.php');
require_once('setting/setting.php');
require_once('./includes/functions.php');
require_once ('libs/Smarty.class.php');


$smarty = new Smarty();
if (isset($connect) && $connect == 0) {
    if (isset($_POST['envoyer'])) {

        $nom = addslashes($_POST['nom']);
        $prenom = addslashes($_POST['prenom']);
        $email = addslashes($_POST['mail']);
        $password = addslashes($_POST['password']);
        print_r($_POST);
        addUsers($nom, $prenom, $email, $password);
        $_SESSION['notification'] = "Inscription terminé";
        header('Location: index.php');
    }

include_once('includes/header.inc.php');
$smarty->display('templates/inscription.tpl');
    include_once('includes/nav.inc.php');
    include_once('includes/footer.inc.php');
    
} else {
    $_SESSION['notification'] = "Vous êtes connecté";
    header('Location: index.php');
}
?>