<?php
session_start();
require_once('setting/setting.php');
require_once('./includes/functions.php');

define ("HOST","localhost");
define ("PORT","3306");
define ("NOM_db","u595678395_blog");
define ("PASSWORD","");
define ("USER","u595678395_blog");



try
{
			$bdd = new PDO('mysql:host='.HOST.';dbname='.NOM_db, USER, PASSWORD);
			$bdd -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        echo "Erreur dans la connexion $e";
        
}

if (isset($_COOKIE['Connect'])) {
    $cookiesid = $_COOKIE['Connect'];
    $usersid = selectSid($cookiesid);
    if ($cookiesid == $usersid['sid']) {
        $nom = $usersid['nom'];
        $prenom = $usersid['prenom'];
        $connect = true;
    }
} else {
    $connect = false;
}
?>
