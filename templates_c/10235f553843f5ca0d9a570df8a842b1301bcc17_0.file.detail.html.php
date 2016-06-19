<?php /* Smarty version 3.1.27, created on 2015-11-17 18:24:26
         compiled from "D:\VertrigoServ\www\project\templates\green\detail.html" */ ?>
<?php
/*%%SmartyHeaderCode:27499564b0e6a351079_16760921%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10235f553843f5ca0d9a570df8a842b1301bcc17' => 
    array (
      0 => 'D:\\VertrigoServ\\www\\project\\templates\\green\\detail.html',
      1 => 1446726032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27499564b0e6a351079_16760921',
  'variables' => 
  array (
    'danhsach' => 0,
    'hd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b0e6a3b3ae0_29585529',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b0e6a3b3ae0_29585529')) {
function content_564b0e6a3b3ae0_29585529 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27499564b0e6a351079_16760921';
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