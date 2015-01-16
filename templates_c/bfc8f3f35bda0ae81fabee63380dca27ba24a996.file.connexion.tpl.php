<?php /* Smarty version Smarty-3.1.15, created on 2015-01-16 17:27:18
         compiled from "templates\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3063454b7be93d47801-80303653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfc8f3f35bda0ae81fabee63380dca27ba24a996' => 
    array (
      0 => 'templates\\connexion.tpl',
      1 => 1421429231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3063454b7be93d47801-80303653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b7be93d7e377_36685578',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b7be93d7e377_36685578')) {function content_54b7be93d7e377_36685578($_smarty_tpl) {?>        <div class="span8">
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
</html><?php }} ?>
