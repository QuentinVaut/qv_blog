<?php
define("HOST", "localhost");
define("PORT", "3306");
define("NOM_db", "u595678395_blog");
define("PASSWORD", "");
define("USER", "root");



try {
    $bdd = new PDO('mysql:host=' . HOST . ';dbname=' . NOM_db, USER, PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion OK";
} catch (Exception $e) {
    echo "Erreur dans la connexion $e";
}
?>