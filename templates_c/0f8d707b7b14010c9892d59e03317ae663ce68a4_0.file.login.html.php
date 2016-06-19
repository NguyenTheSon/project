<?php /* Smarty version 3.1.27, created on 2015-11-17 19:11:11
         compiled from "D:\VertrigoServ\www\project\templates\green\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:23115564b195f21e426_09614043%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f8d707b7b14010c9892d59e03317ae663ce68a4' => 
    array (
      0 => 'D:\\VertrigoServ\\www\\project\\templates\\green\\login.html',
      1 => 1447762256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23115564b195f21e426_09614043',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b195f262a20_92746959',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b195f262a20_92746959')) {
function content_564b195f262a20_92746959 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23115564b195f21e426_09614043';
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