<?php /* Smarty version 3.1.27, created on 2015-11-24 11:08:49
         compiled from "templates\blue\home.html" */ ?>
<?php
/*%%SmartyHeaderCode:23255565445419e3d23_41117760%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e658baf4c33a8ae60329256a71774d91e2434e1' => 
    array (
      0 => 'templates\\blue\\home.html',
      1 => 1443700790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23255565445419e3d23_41117760',
  'variables' => 
  array (
    'config' => 0,
    'banchay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56544541a60562_64591352',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56544541a60562_64591352')) {
function content_56544541a60562_64591352 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23255565445419e3d23_41117760';
?>
<!-- SLIDE SHOW-->
<?php echo '<script'; ?>
>
$(document).ready(function(e) {
    $('#adv').slides();
});
<?php echo '</script'; ?>
>
<div id="adv" data-skip="false" data-auto="2000" data-autostop="false" data-loop="true" >
    <ul class="carousel">
        <li class="slide"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/1.jpg" width="580" height="300" alt="midu 1"></li>
        <li class="slide"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/2.jpg" width="580" height="300" alt="midu 2"></li>
        <li class="slide"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/3.jpg" width="580" height="300" alt="midu 3"></li>
        <li class="slide"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/4.jpg" width="580" height="300" alt="midu 4"></li>
        <li class="slide"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/5.jpg" width="580" height="300" alt="midu 5"></li>
    </ul>
</div>
<!--END SLIDE SHOW-->
<!-- PRODUCT-->
<div class="box w578">
    <h3 class="headbox">Sản phẩm bán chạy</h3>
    <?php echo $_smarty_tpl->getSubTemplate ("listsp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('danhsach'=>$_smarty_tpl->tpl_vars['banchay']->value), 0);
?>

</div>
<!-- END PRODUCT--><?php }
}
?>