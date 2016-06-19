<?php /* Smarty version 3.1.27, created on 2015-11-24 13:43:44
         compiled from "templates\blue\reg.html" */ ?>
<?php
/*%%SmartyHeaderCode:11192565469901bba67_16878708%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '215ab36745c4a94d78545bc79c7b33d2c1646d27' => 
    array (
      0 => 'templates\\blue\\reg.html',
      1 => 1448372605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11192565469901bba67_16878708',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565469901e2176_15824091',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565469901e2176_15824091')) {
function content_565469901e2176_15824091 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11192565469901bba67_16878708';
?>
<!-- REG-->
<div class="box w578">
    <h3 class="headbox">Đăng ký tài khoản</h3>
  <form name="form1" method="post" action="">
    <table width="100%" border="0" cellspacing="3" cellpadding="3">
      <tr>
        <td>Tên đăng nhập</td>
        <td><input type="text" name="user" id="user"></td>
      </tr>
      <tr>
        <td>Mật khẩu</td>
        <td><input type="password" name="pass" id="pass"></td>
      </tr>
      <tr>
        <td>Xác nhận mật khẩu</td>
        <td><input type="password" name="repass" id="repass"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email" id="email"></td>
      </tr>
      <tr>
        <td>Họ và tên</td>
        <td><input type="text" name="hoten" id="hoten"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="btnreg" id="btnreg" value="Đăng ký tài khoản"></td>
      </tr>
    </table>
  </form>
</div>
<!-- END REG--><?php }
}
?>