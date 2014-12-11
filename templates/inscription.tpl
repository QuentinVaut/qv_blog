      <div class="span8">
            <h1>Inscription</h1>
            <p>Saississez vos informations</p>
            <form  method="POST" action="inscription.php" enctype="multipart/form-data" id="form_article" name="form_article">
                <div class="clearfix">
                    <label for="nom">Nom</label>
                    <div class="input">
                        <input type='text' id="nom"  name='nom'  value="" maxlength="150"/>
                    </div>

                    <label for="prenom">Prénom</label>
                    <div class="input">
                        <input type='text' id="prenom" name='prenom' value=""/>
                    </div>

                    <label for="mail">E-Mail</label>
                    <div class="input">
                        <input type='email' id="mail" name='mail' value=""/>
                    </div>

                    <label for="password">Mot de passe</label>
                    <div class="input">
                        <input type='password' id="password" name='password' value=""/>
                    </div>
                    <div class="form-actions">

                        <input type='submit' name="envoyer" value="s'inscrire" class='btn btn-large btn-primary'/>

                    </div>

                </div>
            </form>
        </div>

