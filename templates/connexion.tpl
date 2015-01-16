        <div class="span8">
            <h1>Connexion</h1>
            <p>Saississez vos informations</p>
            <form  method="POST" action="connexion.php" enctype="multipart/form-data" id="form_article" name="form_article" onsubmit="control_form('password')">
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

</body>
<script type="text/javascript" src="js/script.js"></script>
</html>