<?php /* Smarty version Smarty-3.1.15, created on 2015-01-16 17:31:12
         compiled from "templates\commentaire.tpl" */ ?>
<?php /*%%SmartyHeaderCode:450254b90cca16dca4-72358960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dc9e81ef800771c3516c9e2d033d076e7628995' => 
    array (
      0 => 'templates\\commentaire.tpl',
      1 => 1421429469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '450254b90cca16dca4-72358960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b90cca203100_39975611',
  'variables' => 
  array (
    'article' => 0,
    'commentaires' => 0,
    'commentaire' => 0,
    'connect' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b90cca203100_39975611')) {function content_54b90cca203100_39975611($_smarty_tpl) {?><div class="span8">


 <h2><?php echo $_smarty_tpl->tpl_vars['article']->value[0]['titre'];?>
</h2>
  <img src='img/<?php echo $_smarty_tpl->tpl_vars['article']->value[0]['id'];?>
.jpg' />
  <p>
  <?php echo $_smarty_tpl->tpl_vars['article']->value[0]['texte'];?>

  </p>
  <span>Date : <?php echo $_smarty_tpl->tpl_vars['article']->value[0]['date_fr'];?>
</span>
  <br>
  <h3>Commentaires de l'article : </h3>
  <?php if (($_smarty_tpl->tpl_vars['commentaires']->value!="Aucun commentaire")) {?> 
  <?php  $_smarty_tpl->tpl_vars['commentaire'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['commentaire']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commentaires']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['commentaire']->key => $_smarty_tpl->tpl_vars['commentaire']->value) {
$_smarty_tpl->tpl_vars['commentaire']->_loop = true;
?>
  <p>
      <b> Auteur : <?php echo $_smarty_tpl->tpl_vars['commentaire']->value['auteur'];?>
 </b><br>
 
  <?php echo $_smarty_tpl->tpl_vars['commentaire']->value['text'];?>

  </p>
  <span>Date : <?php echo $_smarty_tpl->tpl_vars['commentaire']->value['date'];?>
</span>
  <br>
  <br>
 <?php } ?>
 
 <?php } else { ?>
     <h1>Aucun commentaire</h1>
  <?php }?>
   
   
   
  <h1>Ajoutez un commentaire : </h1>
  <?php if ($_smarty_tpl->tpl_vars['connect']->value==true) {?>
                  <form  method="POST" action="commentaire.php?id=<?php echo $_GET['id'];?>
" enctype="multipart/form-data" id="form_article" name="form_commentaire">
                    <div class="clearfix">
                        <?php if (isset($_GET['id'])) {?> <input type="hidden" name="id" value="<?php ob_start();?><?php echo $_GET['id'];?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_tmp1)) {?> <?php echo $_GET['id'];?>
<?php }?>"/> <?php }?>
                        <label for="texte">Saisissez votre commentaire : </label>
                        <div class="input">
                            <textarea name="texte" id="texte"></textarea>
                        </div>
                        <div class="form-actions">

                             <input type='submit' name='envoyer' value="Envoyer" class='btn btn-large btn-primary'/>

                        </div>

                    </div>
                </form>
                        <?php } else { ?>
                            <h3>Connectez vous pour commenter cet article</h3>
   <?php }?>

</div><?php }} ?>
