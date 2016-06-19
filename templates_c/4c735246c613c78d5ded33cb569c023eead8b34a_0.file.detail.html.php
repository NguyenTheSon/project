<?php /* Smarty version 3.1.27, created on 2015-12-08 13:44:12
         compiled from "templates\blue\detail.html" */ ?>
<?php
/*%%SmartyHeaderCode:17135666deace574b4_67799321%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c735246c613c78d5ded33cb569c023eead8b34a' => 
    array (
      0 => 'templates\\blue\\detail.html',
      1 => 1449582249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17135666deace574b4_67799321',
  'variables' => 
  array (
    'detail' => 0,
    'config' => 0,
    'list' => 0,
    'ab' => 0,
    'daxem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5666dead020623_13929764',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5666dead020623_13929764')) {
function content_5666dead020623_13929764 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17135666deace574b4_67799321';
?>
<!-- PRODUCT-->
<div class="box w578">
    <h3 class="headbox">Chi tiết sản phẩm</h3>
    <?php if (isset($_smarty_tpl->tpl_vars['detail']->value) && $_smarty_tpl->tpl_vars['detail']->value) {?>
   	<div class="detailpro">
        <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</h1>
        <h2 class="price">Giá bán : <?php echo number_format($_smarty_tpl->tpl_vars['detail']->value['price']);?>
 VND</h2>
        <p class="order"><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
index.php?prog=order&id=<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
">Đặt mua</a></p>
        <p class="img">
       <a href="#"> <img src="<?php echo $_smarty_tpl->tpl_vars['detail']->value['img'];?>
" id="imgshow"></a></p>
        
<div id="album" style="display:none">
<?php $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable(explode(';',$_smarty_tpl->tpl_vars['detail']->value['album']), null, 0);?>      
<?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ab'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ab']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ab']->value) {
$_smarty_tpl->tpl_vars['ab']->_loop = true;
$foreach_ab_Sav = $_smarty_tpl->tpl_vars['ab'];
?>
<?php if ($_smarty_tpl->tpl_vars['ab']->value != '') {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['ab']->value;?>
" rel="group"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
upload/<?php echo $_smarty_tpl->tpl_vars['ab']->value;?>
"></a>
<?php }?>
<?php
$_smarty_tpl->tpl_vars['ab'] = $foreach_ab_Sav;
}
?>
</div>
<?php echo '<script'; ?>
>
$(document).ready(function(e) {
    $('#imgshow').click(function(e) {
      $('#album').find('a:first-child').click()
    });
});
<?php echo '</script'; ?>
>
        <p>Số lượng : <?php if ($_smarty_tpl->tpl_vars['detail']->value['soluong'] > 0) {?>Còn hàng<?php } else { ?>Hết hàng<?php }?></p>
        <p>Xuất xứ : <?php echo $_smarty_tpl->tpl_vars['detail']->value['xuatxu'];?>
</p>
        <p>Tình trạng : <?php if ($_smarty_tpl->tpl_vars['detail']->value['tinhtrang'] == 1) {?>Hàng mới<?php } else { ?>Hàng cũ<?php }?></p>
        <p>Lượt xem : <?php echo $_smarty_tpl->tpl_vars['detail']->value['view'];?>
</p>
        <div><?php echo $_smarty_tpl->tpl_vars['detail']->value['mota'];?>
</div>
    </div>
    <?php }?>
</div> 
<!-- END PRODUCT-->
<?php if (count($_smarty_tpl->tpl_vars['daxem']->value) > 0) {?>
<!-- PRODUCT Đã Xem-->
<div class="box w578">
    <h3 class="headbox">Sản phẩm đã xem</h3>
    <?php echo $_smarty_tpl->getSubTemplate ("listsp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('danhsach'=>$_smarty_tpl->tpl_vars['daxem']->value), 0);
?>

</div>
<!-- END PRODUCT Đã Xem-->
<?php }

}
}
?>