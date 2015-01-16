<?php

require_once('includes/connexion.inc.php');
require_once('setting/setting.php');
require_once('./includes/functions.php');
include_once('includes/header.inc.php');
require_once ('libs/Smarty.class.php');

$smarty = new Smarty();

/*
 * Créer les variables
 * Requete de selection email&password
 * Execution
 * Passer les donner dans un tableau
 * isset du tableau
 * Connexion Ok || Refusé
 * 
 * Création du sid (md5 sur l'email et le time)
 * Insertion
 * Définition du mpode de connexion
 * redirection
 * 
 * connexion refusé
 * Erreur 
 * 
 * Vérification de la connexion dans connexion.inc.php
 * Vérifier la présence du cookie
 * Si cookie ok on vérifie dans la bdd le sid
 * Si valeur ok, on affiche une notif , déclarer des variables perso 
 */
if (isset($_POST['envoyer'])) {
    $charlist = "/'";
    $mail = addcslashes($_POST['mail'], $charlist);
    $mdp = addcslashes($_POST['password'], $charlist);

    $user = selectUser($mail, $mdp, $bdd);


    if (isset($user) && $user['email'] == $mail && $user['mdp'] == $mdp) {
        $sid = md5($mail . time());
        $id = $user['id'];
        updateUserSid($id, $sid, $bdd);
        setcookie("Connect", $sid, time() + 3600);
        $_SESSION['notification'] = "Connexion réussie";
        header('Location: index.php');
    } else {
        echo "Connexion incorrect";
        $_SESSION['notification'] = "Identifiants incorcets";
        header('Location: connexion.php');
    }
} else {

    if (isset($_SESSION['notification'])) {
        echo $_SESSION['notification'];
        session_unset($_SESSION['notification']);
    }
}

        $smarty->display('templates/connexion.tpl');

include_once('includes/nav.inc.php');
include_once('includes/footer.inc.php');
?>

