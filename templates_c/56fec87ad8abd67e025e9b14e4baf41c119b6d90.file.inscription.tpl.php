<?php /* Smarty version Smarty-3.1.15, created on 2015-01-15 14:13:57
         compiled from "templates\inscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2728554b7bd15ade7a6-46404155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56fec87ad8abd67e025e9b14e4baf41c119b6d90' => 
    array (
      0 => 'templates\\inscription.tpl',
      1 => 1417700574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2728554b7bd15ade7a6-46404155',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b7bd15b2b887_15330584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b7bd15b2b887_15330584')) {function content_54b7bd15b2b887_15330584($_smarty_tpl) {?>      <div class="span8">
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

<?php }} ?>
