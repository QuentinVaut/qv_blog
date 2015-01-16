<?php /* Smarty version Smarty-3.1.15, created on 2015-01-16 17:26:20
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2140454b3e59bb21e70-48321830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90be83b235fb03cc225b11607032e9ddd415899' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1421429176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2140454b3e59bb21e70-48321830',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b3e59bbf2308_05559809',
  'variables' => 
  array (
    'notification' => 0,
    'articles' => 0,
    'article' => 0,
    'connect' => 0,
    'total' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b3e59bbf2308_05559809')) {function content_54b3e59bbf2308_05559809($_smarty_tpl) {?><div class="span8">

    
        <?php if (isset($_smarty_tpl->tpl_vars['notification']->value)) {?>
            <div class="alert alert-success" id ="notif">
            <?php echo $_smarty_tpl->tpl_vars['notification']->value;?>

            </div>
        <?php }?>
    
<?php if ($_smarty_tpl->tpl_vars['articles']->value!="Aucun article") {?>
<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
 <h2><?php echo $_smarty_tpl->tpl_vars['article']->value['titre'];?>
</h2>
  <img src='img/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
.jpg' />
  <p>
  <?php echo $_smarty_tpl->tpl_vars['article']->value['texte'];?>

  </p>
  <span>Date : <?php echo $_smarty_tpl->tpl_vars['article']->value['date_fr'];?>
</span>
  <br>
  <?php if (isset($_smarty_tpl->tpl_vars['connect']->value)&&$_smarty_tpl->tpl_vars['connect']->value==1) {?>
    <a href='article.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
'>Modifier un article</a>
    || <a href='suppression.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
'>Supprimer un article</a> ||
  <?php }?>
    <a href='commentaire.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
'>Voir les commentaires</a>
    
 <?php } ?>
 
<div class=pagination>page :
<ul>
    
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <li><a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
<?php }} ?>
</ul>
</div>
<?php } else { ?>
    <h1>Aucun article</h1>

<?php }?>
</div>
<script type="text/javascript" src="js/script.js"></script><?php }} ?>
