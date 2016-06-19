<?php /* Smarty version 3.1.27, created on 2016-05-04 10:19:13
         compiled from "templates\blue\checkout.html" */ ?>
<?php
/*%%SmartyHeaderCode:63165729b081285436_76276027%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc27bfe0eabf793a84d5c24ba33ba5f4679578cb' => 
    array (
      0 => 'templates\\blue\\checkout.html',
      1 => 1444312412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63165729b081285436_76276027',
  'variables' => 
  array (
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5729b081465c27_68875953',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5729b081465c27_68875953')) {
function content_5729b081465c27_68875953 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '63165729b081285436_76276027';
?>
<div class="box w578">
    <h3 class="headbox">Thanh toán</h3>
    <?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {?>
    <table width="100%" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td>Họ và tên</td>
        <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['hoten'];?>
</td>
      </tr>
      <tr>
        <td>Số điện thoại</td>
        <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['dienthoai'];?>
</td>
      </tr>
      <tr>
        <td>Địa chỉ</td>
        <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['diachi'];?>
</td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['email'];?>
</td>
      </tr>
      <tr>
        <td>Ngày nhận </td>
        <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['ngaynhan'];?>
</td>
      </tr>
      <tr>
        <td>Ghi chú</td>
        <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['ghichu'];?>
</td>
      </tr>
      <tr>
        <td>Ngày đặt đơn hàng</td>
        <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['date'];?>
</td>
      </tr>
      <tr>
        <td>Tổng tiền</td>
        <td><h3 style="color:#F00"><?php echo number_format($_smarty_tpl->tpl_vars['detail']->value['tongtien']);?>
 VND</h3></td>
      </tr>
    </table>
    <div style="text-align:center;">
		<progress style="width:200px; height:25px;"></progress>
        <p>Đơn hàng đang chuyển sang Ngân Lượng</p>    
    </div>
   <?php echo '<script'; ?>
>
   $(document).ready(function(e) {
    setTimeout(function(){
		$('#frmnl').submit();
	},3000);
});
   <?php echo '</script'; ?>
>
<form id="frmnl" method="post" action="https://www.nganluong.vn/advance_payment.php">
    <input type=hidden name=receiver value="jacki_tom@yahoo.com" />
    <input type=hidden name=product value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['id'];?>
" />
    <input type=hidden name=price value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['tongtien'];?>
" />
    <input type=hidden name=return_url value="http://localhost/project/" />
    <input type=hidden name=comments value="Đơn hàng của Vip" />
</form>
<?php } else { ?>
	<p style="text-align:center;padding:20px; font-size:30px; color:#F00; font-weight:bold">Đơn hàng xử lý không thành công</p>
<?php }?>
</div>
<?php }
}
?>