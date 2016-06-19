<?php /* Smarty version 3.1.27, created on 2015-12-08 20:25:40
         compiled from "D:\VertrigoServ\www\project\templates\green\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:292825666da5495fca4_14173936%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdcc1a548f3fad41f78b4258fbc9e88bd5d64f96' => 
    array (
      0 => 'D:\\VertrigoServ\\www\\project\\templates\\green\\index.html',
      1 => 1449580936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292825666da5495fca4_14173936',
  'variables' => 
  array (
    'config' => 0,
    'menu' => 0,
    'mn' => 0,
    'sub' => 0,
    'prog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5666da54a7dd89_34879595',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5666da54a7dd89_34879595')) {
function content_5666da54a7dd89_34879595 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '292825666da5495fca4_14173936';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Quản trị</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
templates/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
templates/css/bootstrap-theme.min.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
templates/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
templates/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
templates/js/ajaxupload.3.5.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>tinymce.init({ selector:'textarea' });

<?php echo '</script'; ?>
>
</head>
<body>
<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Trang chủ</a> </li>
        <?php
$_from = $_smarty_tpl->tpl_vars['menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['mn'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['mn']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['mn']->value) {
$_smarty_tpl->tpl_vars['mn']->_loop = true;
$foreach_mn_Sav = $_smarty_tpl->tpl_vars['mn'];
?>
        <?php if ($_smarty_tpl->tpl_vars['mn']->value['parent'] == 0) {?>
        <?php if ($_smarty_tpl->tpl_vars['mn']->value['prog'] != '') {?>
        	<li><a href="index.php?prog=<?php echo $_smarty_tpl->tpl_vars['mn']->value['prog'];?>
"><?php echo $_smarty_tpl->tpl_vars['mn']->value['title'];?>
</a> </li>
        <?php } else { ?>
        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['mn']->value['title'];?>
<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
            	<?php
$_from = $_smarty_tpl->tpl_vars['menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sub']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
$foreach_sub_Sav = $_smarty_tpl->tpl_vars['sub'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['sub']->value['parent'] == $_smarty_tpl->tpl_vars['mn']->value['id']) {?>
                    	<li><a href="<?php if ($_smarty_tpl->tpl_vars['sub']->value['prog'] != '') {?>index.php?prog=<?php echo $_smarty_tpl->tpl_vars['sub']->value['prog'];
}?>"><?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
</a> </li>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['sub'] = $foreach_sub_Sav;
}
?>
            </ul>
        </li>
        <?php }?>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['mn'] = $foreach_mn_Sav;
}
?>
    </ul>
</nav>

<div class="container-fluid">
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['prog']->value).('.html'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>

</body>
</html>
<?php }
}
?>