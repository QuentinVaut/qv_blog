<?php

require_once ('connexion.inc.php');

//SELECTION
function totalArticles($nbArticlesParPage, $pageCourante, $bdd) {
    $requete = "SELECT count(id) from articles where publie=1"; // Selectionne tout les articles publiés
    $exe = mysqli_query($bdd, $requete);
    $total_articles = mysqli_fetch_array($exe);
    $nb_pages = ceil($total_articles[0] / $nbArticlesParPage);
    $index = ($pageCourante - 1) * $nbArticlesParPage; // Calcul pour savoir quel est l'article  
    return array($index, $nb_pages);
}

function selection($articleParPage, $index, $bdd) {
    $requete = "SELECT id, titre, texte, DATE_FORMAT(date,'%d/%m/%Y') as date_fr FROM articles WHERE publie=1 ORDER BY id LIMIT $articleParPage OFFSET $index"; // Selectionne tout les articles publiés
    $exe = mysqli_query($bdd, $requete);
     if (mysqli_num_rows($exe) >= 1) {
        $result = mysqli_fetch_all($exe, MYSQLI_ASSOC) or die(mysqli_error($bdd));
        return $result;
    } else {
        return "Aucun article";
    }
    $result = mysqli_fetch_all($exe, MYSQLI_ASSOC) or die(mysqli_error($bdd));
    return $result;
}

function selectionRecherche($articleParPage, $index, $recherche, $bdd) {
    $requete = "SELECT id, titre, texte, DATE_FORMAT(date,'%d/%m/%Y') as date_fr FROM articles WHERE publie=1 " .
            "AND (titre LIKE '%$recherche%' OR texte LIKE '%$recherche%')"; // Selectionne tout les articles publiés
    $exe = mysqli_query($bdd, $requete); // Execute la requête
    $result = mysqli_fetch_all($exe, MYSQLI_ASSOC) or die(mysqli_error($bdd));
    return $result;
}

function articleById($id, $bdd) {
    $requete = "SELECT id, titre, texte, DATE_FORMAT(date,'%d/%m/%Y') as date_fr, publie FROM articles where id = '$id'";
    $exe = mysqli_query($bdd, $requete); // Execute la requête
    $result = mysqli_fetch_all($exe, MYSQLI_ASSOC) or die(mysqli_error($bdd));
    return $result;
}

function selectUser($mail, $password, $bdd) {
    $requete = "SELECT * FROM users where email = '$mail' AND mdp='$password'"; //Requête de sélection utilisateur
    $exe = mysqli_query($bdd, $requete); // Execute la requête
    $result = mysqli_fetch_array($exe);
    return $result;
}

function selectSid($sid, $bdd) {
    $requete = "SELECT * FROM users where sid = '$sid'"; //Requête de sélection utilisateur
    $exe = mysqli_query($bdd, $requete); // Execute la requête
    $result = mysqli_fetch_array($exe);
    return $result;
}

function selectCommentaire($idarticle, $bdd) {
    $requete = "SELECT auteur, DATE_FORMAT(date,'%d/%m/%Y') as date ,text , id_article FROM commentaires where id_article = '$idarticle'"; //Requête de sélection utilisateur
    $exe = mysqli_query($bdd, $requete); // Execute la requête
    if (mysqli_num_rows($exe) >= 1) {
        $result = mysqli_fetch_all($exe, MYSQLI_ASSOC) or die(mysqli_error($bdd));
        return $result;
    } else {
        return "Aucun commentaire";
    }
}

//INSERTION 
function addArticle($titre, $texte, $date, $publie, $bdd) {
    $requete = "INSERT INTO articles (titre, texte, date, publie) VALUES ('$titre','$texte','$date',$publie)";
    $exe = mysqli_query($bdd, $requete); // Execute la requête
    $row = mysqli_fetch_row($exe);
    $row_id = mysqli_insert_id($bdd);
    return $row_id;
}

function addUsers($nom, $prenom, $email, $password, $bdd) {
    $requete = "INSERT INTO users (nom, prenom, email, mdp) VALUES ('$nom','$prenom','$email',$password)";
    $exe = mysqli_query($bdd, $requete); // Execute la requête
}

function addCommentaire($auteur, $date, $texte, $idArticle, $bdd) {
    $requete = "INSERT INTO commentaires (auteur, date, text, id_article) VALUES ('$auteur','$date','$texte',$idArticle)";
    $exe = mysqli_query($bdd, $requete); // Execute la requête
}

//UPDATE
function updateArticle($titre, $texte, $publie, $id, $bdd) {
    $requete = "UPDATE articles
                    SET titre = '$titre',
                      texte = '$texte',
                      publie = $publie 
                    WHERE id = $id";
    $exe = mysqli_query($bdd, $requete); // Execute la requête   
}

function updateUserSid($id, $sid, $bdd) {
    $requete = "UPDATE users
                    SET sid = '$sid'
                    WHERE id = $id";
    $exe = mysqli_query($bdd, $requete); // Execute la requête 
}

//DELETE
function deleteArticle($id, $bdd) {
    $id = intval($id);
    $requete = "DELETE FROM articles WHERE id = $id";
    $exe = mysqli_query($bdd, $requete); // Execute la requête 
}

function deleteCommentaire($idArticle, $bdd) {
     $requete = "DELETE FROM commentaires WHERE id_article = $idArticle";
     $exe = mysqli_query($bdd, $requete); // Execute la requête   
}

?>
