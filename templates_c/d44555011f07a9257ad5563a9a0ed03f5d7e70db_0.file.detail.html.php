<?php /* Smarty version 3.1.27, created on 2016-05-07 10:20:04
         compiled from "D:\Xampp\htdocs\project\templates\green\detail.html" */ ?>
<?php
/*%%SmartyHeaderCode:4281572d5ee4c190d2_54548583%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd44555011f07a9257ad5563a9a0ed03f5d7e70db' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\project\\templates\\green\\detail.html',
      1 => 1446726032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4281572d5ee4c190d2_54548583',
  'variables' => 
  array (
    'danhsach' => 0,
    'hd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_572d5ee4c7ab67_68082367',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572d5ee4c7ab67_68082367')) {
function content_572d5ee4c7ab67_68082367 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4281572d5ee4c190d2_54548583';
?>
<table border="1" class="table table-striped table-bordered">
	<tr>
    	<th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá bán</th>
        <th>Số lượng</th>
        <th>Tổng giá</th>
	</tr> 
    <?php
$_from = $_smarty_tpl->tpl_vars['danhsach']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['hd'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['hd']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['hd']->value) {
$_smarty_tpl->tpl_vars['hd']->_loop = true;
$foreach_hd_Sav = $_smarty_tpl->tpl_vars['hd'];
?>
    <tr>
    	<td><?php echo $_smarty_tpl->tpl_vars['hd']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hd']->value['title'];?>
</td>
        <td><?php echo number_format($_smarty_tpl->tpl_vars['hd']->value['giaban']);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hd']->value['soluong'];?>
</td>
        <td><?php echo number_format($_smarty_tpl->tpl_vars['hd']->value['soluong']*$_smarty_tpl->tpl_vars['hd']->value['giaban']);?>
</td>
	</tr> 
    <?php
$_smarty_tpl->tpl_vars['hd'] = $foreach_hd_Sav;
}
?>    
</table><?php }
}
?>