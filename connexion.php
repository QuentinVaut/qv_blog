<?php
require_once('includes/connexion.inc.php');
require_once('setting/setting.php');
require_once('./includes/functions.php');
include_once('includes/header.inc.php');


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

    $user = selectUser($mail, $mdp);


    if (isset($user) && $user['email'] == $mail && $user['mdp'] == $mdp) {
        $sid = md5($mail . time());
        $id = $user['id'];
        updateUserSid($id, $sid);
        setcookie("Connect", $sid, time() + 3600);
        $_SESSION['notification'] = "Connexion réussie";
        header('Location: index.php');
    } else {
        echo "Connexion incorrect";
        $_SESSION['notification'] = "Identifiants incorcets";
        header('Location: connexion.php');
    }
} else {
    ?>
    <?php
    if (isset($_SESSION['notification'])) {
        echo $_SESSION['notification'];
        session_unset($_SESSION['notification']);
    }
    ?>
    <div class="row">

        <div class="span8">
            <h1>Connexion</h1>
            <p>Saississez vos informations</p>
            <form  method="POST" action="connexion.php" enctype="multipart/form-data" id="form_article" name="form_article">
                <div class="clearfix">
                    <label for="mail">E-Mail</label>
                    <div class="input">
                        <input type='email' id="mail" name='mail' value=""/>
                    </div>

                    <label for="password">Mot de passe</label>
                    <div class="input">
                        <input type='password' id="password" name='password' value=""/>
                    </div>
                    <div class="form-actions">

                        <input type='submit' name="envoyer" value="Connexion" class='btn btn-large btn-primary'/>

                    </div>

                </div>
            </form>
        </div>
        <?php
    }
    ?>



    <?php include_once('includes/nav.inc.php') ?>
</div>

</div>

<?php include_once('includes/footer.inc.php') ?>

</div>

</body>
</html>