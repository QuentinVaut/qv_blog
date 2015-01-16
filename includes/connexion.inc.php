<?php
session_start();
require_once('setting/setting.php');
require_once('functions.php');

if($bdd = mysqli_connect('localhost:3306', 'root', '', 'u595678395_blog'))
{
    
} else {
    
    echo "Erreur";
}

if (isset($_COOKIE['Connect'])) {
    $cookiesid = $_COOKIE['Connect'];
    $usersid = selectSid($cookiesid,$bdd);
    if ($cookiesid == $usersid['sid']) {
        $nom = $usersid['nom'];
        $prenom = $usersid['prenom'];
        $mail = $usersid['email'];
        $connect = true;
    }
} else {
    $connect = false;
}
?>
