<?php /* Smarty version 3.1.27, created on 2015-11-24 11:08:49
         compiled from "templates\blue\listsp.html" */ ?>
<?php
/*%%SmartyHeaderCode:2451656544541a68270_04776931%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0568c990c4fb9ad73742df120b76eaaf010c1199' => 
    array (
      0 => 'templates\\blue\\listsp.html',
      1 => 1444738586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2451656544541a68270_04776931',
  'variables' => 
  array (
    'danhsach' => 0,
    'config' => 0,
    'sp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56544541b5d894_42317261',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56544541b5d894_42317261')) {
function content_56544541b5d894_42317261 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2451656544541a68270_04776931';
?>
<ul class="product">
 <?php
$_from = $_smarty_tpl->tpl_vars['danhsach']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
$foreach_sp_Sav = $_smarty_tpl->tpl_vars['sp'];
?>
    <li>
        <p class="img">
        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['sp']->value['idcate'];?>
/<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
/<?php echo str_replace(' ','-',$_smarty_tpl->tpl_vars['sp']->value['title']);?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['sp']->value['title'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['sp']->value['img'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['sp']->value['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sp']->value['title'];?>
"></a></p>
        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['sp']->value['idcate'];?>
/<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
/<?php echo str_replace(' ','-',$_smarty_tpl->tpl_vars['sp']->value['title']);?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['sp']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['sp']->value['title'];?>
</a></h2>
        <p class="newprice"><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['price']);?>
 VND</p>
        <p class="order"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
order/<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
/<?php echo str_replace(' ','-',$_smarty_tpl->tpl_vars['sp']->value['title']);?>
.html">Đặt mua</a></p>
    </li>
  <?php
$_smarty_tpl->tpl_vars['sp'] = $foreach_sp_Sav;
}
?>  
</ul><?php }
}
?>