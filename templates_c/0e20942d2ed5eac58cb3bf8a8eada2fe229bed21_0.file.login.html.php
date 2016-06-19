<?php /* Smarty version 3.1.27, created on 2016-05-07 10:07:45
         compiled from "D:\Xampp\htdocs\project\templates\green\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:19899572d5c01002110_29573317%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e20942d2ed5eac58cb3bf8a8eada2fe229bed21' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\project\\templates\\green\\login.html',
      1 => 1447762256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19899572d5c01002110_29573317',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_572d5c010466d0_13595816',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572d5c010466d0_13595816')) {
function content_572d5c010466d0_13595816 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19899572d5c01002110_29573317';
?>
<div style="width:400px; margin:50px auto">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Đăng nhập</h3>
      </div>
      <div class="panel-body">
<form method="post" action="">
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }?>
  <div class="form-group">
    <label>Tên đăng nhập</label>
    <input type="text" name="user" class="form-control" placeholder="Tên đăng nhập">
  </div>
  <div class="form-group">
    <label>Mật khẩu</label>
    <input type="password" name="pass" class="form-control" placeholder="Mật khẩu">
  </div>
  <button type="submit" class="btn btn-default">Đăng nhập</button>
</form>
      </div>
    </div>
</div>

<?php }
}
?>