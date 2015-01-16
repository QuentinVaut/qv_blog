<nav class="span4">
    <h3>Menu</h3>


    <form action="index.php" method="GET" enctype="multipart/form-data" id="search" onsubmit="control_form('recherche')">
        <div class="clearfix">
            <div class="input">
                <input type="text" name="recherche" id="recherche" placeholder="Votre recherche"/>
            </div>
        </div>
        <div class="input">
            <input type="submit" name="rechercher" value="Rechercher" class="btn btn-mini btn-primary"/>
        </div>

    </form>
    <ul>

        <li><a href="index.php">Accueil</a></li>


        <?php
        if (isset($connect) && $connect == 0) {
            echo "<li><a href='connexion.php'>Se connecter</a></li>
          <li><a href='inscription.php'>S'inscrire</a></li>
               </ul> <h3>Statut : Déconnecté</h3>";
        } else {
            echo"
    <li><a href='article.php'>Rédiger un article</a></li>
    <li><a href='deconnexion.php'>Deconnexion</a></li>
    <h3>Statut : Connecté</h3>
    
     </ul>";
        }
        ?>



</nav>
</div>
<script type="text/javascript" src="js/script.js"></script>
</div>