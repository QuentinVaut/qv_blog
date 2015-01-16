<?php /* Smarty version Smarty-3.1.15, created on 2015-01-15 13:09:10
         compiled from "templates\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1087954b5276a1a7da7-88267772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dd798c9cc85208f2a1e768530217429eb2c203a' => 
    array (
      0 => 'templates\\article.tpl',
      1 => 1421323745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1087954b5276a1a7da7-88267772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b5276a24dd68_81741712',
  'variables' => 
  array (
    'name' => 0,
    'texte' => 0,
    'check' => 0,
    'name_boutton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b5276a24dd68_81741712')) {function content_54b5276a24dd68_81741712($_smarty_tpl) {?>
            <div class="span8">

                <form  method="POST" action="article.php" enctype="multipart/form-data" id="form_article" name="form_article">
                    <div class="clearfix">
                        <?php if (isset($_GET['id'])) {?> <input type="hidden" name="id" value="<?php ob_start();?><?php echo $_GET['id'];?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_tmp1)) {?> <?php echo $_GET['id'];?>
<?php }?>"/> <?php }?>
                        
                        <label for="titre">Titre</label>
                        <div class="input">
                            <input type='text' id="titre"  name='titre'  value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" maxlength="150"/>
                        </div>
                        <label for="img">Image</label>
                        <?php ob_start();?><?php echo $_GET['id'];?>
<?php $_tmp2=ob_get_clean();?><?php if (isset($_tmp2)) {?>
                            Miniature : <img src=<?php if (isset($_GET['id'])) {?>'img/<?php echo $_GET['id'];?>
.jpg'<?php }?> style='width:100px; height: 100px;'/>
                        <?php }?>

                        <div class="input">
                            <input type='file' id="img" name='img'    value=""/>
                        </div>

                        <label for="texte">Texte</label>
                        <div class="input">
                            <textarea name="texte" id="texte"><?php echo $_smarty_tpl->tpl_vars['texte']->value;?>
</textarea>
                        </div>

                        <label for="publie">Publier ?</label>
                        <div class="input">
                            <input type='checkbox' id="publie" name='publie' value="1" checked="<?php echo $_smarty_tpl->tpl_vars['check']->value;?>
"/>
                        </div>
                        <div class="form-actions">

                             <input type='submit' name='envoyer' value='<?php echo $_smarty_tpl->tpl_vars['name_boutton']->value;?>
' class='btn btn-large btn-primary'/>

                        </div>

                    </div>
                </form>
            </div><?php }} ?>
