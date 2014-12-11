<?php

require_once ('connexion.inc.php');

//SELECTION
function totalArticles($nbArticlesParPage, $pageCourante) {
    $requete = "SELECT count(id) from articles where publie=1"; // Selectionne tout les articles publiés
    $exe = pg_query($requete); // Execute la requête
    $total_articles = pg_fetch_array($exe);
    $nb_pages = ceil($total_articles[0] / $nbArticlesParPage);
    $index = ($pageCourante - 1) * $nbArticlesParPage; // Calcul pour savoir quel est l'article  
    return array($index, $nb_pages);
}

function selection($articleParPage, $index) {
    $requete = "SELECT id, titre, texte, to_char(date,'dd/MM/YYYY') as date_fr FROM articles WHERE publie=1 ORDER BY id LIMIT '$articleParPage' OFFSET '$index'"; // Selectionne tout les articles publiés
    $exe = pg_query($requete); // Execute la requête
    $result = array();
    $result = pg_fetch_all($exe);
    return $result;
}

function selectionRecherche($articleParPage, $index,$recherche) {
    $requete = "SELECT id, titre, texte, DATE_FORMAT(date,'%d/%m/%Y') as date_fr FROM articles WHERE publie=1 ".
               "AND (titre LIKE '%$recherche%' OR texte LIKE '%$recherche%') ORDER BY id LIMIT '$index', '$articleParPage'"; // Selectionne tout les articles publiés
    $exe = pg_query($requete); // Execute la requête
    $result = array();
    $result = pg_fetch_all($exe);
    return $result;
}

function articleById($id) {
    $requete = "SELECT id, titre, texte, to_char(date,'dd/MM/YYYY') as date_fr, publie FROM articles where id = '$id'"; // Selectionne tout les articles publiés
    $exe = pg_query($requete); // Execute la requête
    $result = pg_fetch_all($exe);
    return $result;
}

function selectUser($mail , $password)
{
    $requete = "SELECT * FROM users where email = '$mail' AND mdp='$password'"; //Requête de sélection utilisateur
    $exe = pg_query($requete); // Execute la requête
    $result = pg_fetch_array($exe);
    return $result;
}

function selectSid($sid)
{
    $requete = "SELECT * FROM users where sid = '$sid'"; //Requête de sélection utilisateur
    $exe = pg_query($requete); // Execute la requête
    $result = pg_fetch_array($exe);
    return $result;
}

//INSERTION 
function addArticle($titre, $texte, $date, $publie) {
    $requete = "INSERT INTO articles (titre, texte, date, publie) VALUES ('$titre','$texte','$date',$publie)";
    $exe = pg_query($requete); // Execute la requête
    $row = pg_fetch_row($exe);
    $row_id = mysql_insert_id();
    return $row_id;
}

function addUsers($nom, $prenom, $email, $password) {
    $requete = "INSERT INTO users (nom, prenom, email, mdp) VALUES ('$nom','$prenom','$email',$password)";
    $exe = pg_query($requete); // Execute la requête
}


//UPDATE
function updateArticle($titre, $texte, $publie, $id) {
    $requete = "UPDATE articles
                    SET titre = '$titre',
                      texte = '$texte',
                      publie = $publie 
                    WHERE id = $id";
    $exe = pg_query($requete); // Execute la requête   
}

function updateUserSid($id,$sid) {
    $requete = "UPDATE users
                    SET sid = '$sid'
                    WHERE id = $id";
    $exe = pg_query($requete); // Execute la requête 
}

//DELETE
function deleteArticle($id) {
    $id = intval($id);
    $requete = "DELETE FROM articles WHERE id = $id";
    $exe = pg_query($requete); // Execute la requête 
}

?>
