<?php /* Smarty version 3.1.27, created on 2015-11-24 12:46:45
         compiled from "templates\blue\order.html" */ ?>
<?php
/*%%SmartyHeaderCode:314156545c354c3523_36510246%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f2553f2921503f98f53be1480faa2c936b07bf6' => 
    array (
      0 => 'templates\\blue\\order.html',
      1 => 1448369202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314156545c354c3523_36510246',
  'variables' => 
  array (
    'giohang' => 0,
    'lib' => 0,
    'detail' => 0,
    'sl' => 0,
    'tongtien' => 0,
    'tonggia' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56545c355afa11_25578066',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56545c355afa11_25578066')) {
function content_56545c355afa11_25578066 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '314156545c354c3523_36510246';
?>
<div class="box w578">
    <h3 class="headbox">Giỏ hàng của tôi</h3>
   <?php if (count($_smarty_tpl->tpl_vars['giohang']->value) > 0) {?>
   <div class="boxorder">
    <form action="index.php?prog=order" method="post">
  <table width="100%" border="1" cellspacing="5" cellpadding="5" class="cssorder">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Giá bán</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Tổng giá</th>
        <th scope="col">Xóa</th>
      </tr>
      <?php $_smarty_tpl->tpl_vars['tongtien'] = new Smarty_Variable(0, null, 0);?>
      <?php
$_from = $_smarty_tpl->tpl_vars['giohang']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sl']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['sl']->value) {
$_smarty_tpl->tpl_vars['sl']->_loop = true;
$foreach_sl_Sav = $_smarty_tpl->tpl_vars['sl'];
?>
      <?php $_smarty_tpl->tpl_vars['detail'] = new Smarty_Variable($_smarty_tpl->tpl_vars['lib']->value->selectone('tbproduct',"id=".((string)$_smarty_tpl->tpl_vars['id']->value)), null, 0);?>
      <?php $_smarty_tpl->tpl_vars['tonggia'] = new Smarty_Variable($_smarty_tpl->tpl_vars['detail']->value['price']*$_smarty_tpl->tpl_vars['sl']->value, null, 0);?>
      <?php $_smarty_tpl->tpl_vars['tongtien'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tongtien']->value+$_smarty_tpl->tpl_vars['tonggia']->value, null, 0);?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</td>
        <td><?php echo number_format($_smarty_tpl->tpl_vars['detail']->value['price']);?>
 VND</td>
        <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['sl']->value;?>
" name="sl<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" size="3" id="sl<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" ></td>
        <td><?php echo number_format($_smarty_tpl->tpl_vars['tonggia']->value);?>
 VND</td>
        <td><button type="button" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btndel">Xóa</button></td>
      </tr>
      <?php
$_smarty_tpl->tpl_vars['sl'] = $foreach_sl_Sav;
}
?>
  </table>
  <p><input type="submit" id="btnup" value="Cập nhật giỏ hàng"> 
  <input type="button" id="btnview" value="Thanh toán giỏ hàng" style="float:right"></p>
  <?php echo '<script'; ?>
>
  $(document).ready(function(e) {
    $('.btndel').click(function(e) {
        var kq=confirm('Bạn có chắc muốn xóa?')
		if(kq)
		{
			var id=$(this).val();//Lấy dc ID
			$('#sl'+id).val(0);//Thay đổi số lượng là 0
			$('#btnup').click();//Click vào nút cập nhật
		}
    });
	///////////////
	$('#btnview').click(function(e) {
        $('#frmcheckout').slideToggle();
    });
	$('#ngaynhan').datepicker({ 'dateFormat':'yy-mm-dd'});
  });
  <?php echo '</script'; ?>
>
  </form>
  <h2>Tổng tiền: <?php echo number_format($_smarty_tpl->tpl_vars['tongtien']->value);?>
 VND</h2>
  <form action="index.php?prog=checkout" id="frmcheckout" style="display:none" method="post">
  <input type="hidden" name="tongtien" value="<?php echo $_smarty_tpl->tpl_vars['tongtien']->value;?>
">
  	<table width="100%" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td>Họ và tên *</td>
        <td><input name="hoten" type="text" id="hoten" size="40"></td>
      </tr>
      <tr>
        <td>Số điện thoại *</td>
        <td><input name="dienthoai" type="text" id="dienthoai" size="40"></td>
      </tr>
      <tr>
        <td>Địa chỉ *</td>
        <td><input name="diachi" type="text" id="diachi" size="40"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input name="email" type="text" id="email" size="40"></td>
      </tr>
      <tr>
        <td>Ngày nhận </td>
        <td><input name="ngaynhan" type="text" id="ngaynhan" size="40" readonly></td>
      </tr>
      <tr>
        <td>Ghi chú</td>
        <td><textarea name="ghichu" cols="42" rows="6" id="ghichu"></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="btncheckout" id="btncheckout" value="Thanh toán"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
      </form>
  </div>
  <?php } else { ?>
  <p style="padding:50px; font-style:italic; text-align:center; font-size:20px">Chưa có sản phẩm nào trong giỏ hàng</p>
  <?php }?>
 <!--
<form method="post" action="https://www.nganluong.vn/advance_payment.php">
    <input type=hidden name=receiver value="jacki_tom@yahoo.com" />
    <input type=hidden name=product value="HD001" />
    <input type=hidden name=price value="<?php echo $_smarty_tpl->tpl_vars['tongtien']->value;?>
" />
    <input type=hidden name=return_url value="http://localhost/project/" />
    <input type=hidden name=comments value="Đơn hàng của Vip" />
    <input type=image src="https://www.nganluong.vn/data/images/buttons/11.gif" />
</form>-->
</div>
<?php }
}
?>