<?php /* Smarty version 3.1.27, created on 2015-11-24 11:25:35
         compiled from "templates\blue\product.html" */ ?>
<?php
/*%%SmartyHeaderCode:35615654492f084bc8_86380664%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43cd46503d759b2aa739174ca251add480a1b1d8' => 
    array (
      0 => 'templates\\blue\\product.html',
      1 => 1443700838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35615654492f084bc8_86380664',
  'variables' => 
  array (
    'link' => 0,
    'lib' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5654492f0d4bd6_50195214',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5654492f0d4bd6_50195214')) {
function content_5654492f0d4bd6_50195214 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '35615654492f084bc8_86380664';
?>
<!-- PRODUCT-->
<div class="box w578">
    <h3 class="headbox">Sản phẩm mới</h3>
    <?php echo $_smarty_tpl->getSubTemplate ("listsp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo $_smarty_tpl->tpl_vars['lib']->value->viewpage($_smarty_tpl->tpl_vars['link']->value);?>

</div>
<!-- END PRODUCT--><?php }
}
?>