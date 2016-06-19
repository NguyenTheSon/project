<?php /* Smarty version 3.1.27, created on 2015-11-17 19:56:22
         compiled from "D:\VertrigoServ\www\project\templates\green\account.html" */ ?>
<?php
/*%%SmartyHeaderCode:865564b23f629c4e7_40450594%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fec0c5c169112b226cde4290b0a230dcec85c182' => 
    array (
      0 => 'D:\\VertrigoServ\\www\\project\\templates\\green\\account.html',
      1 => 1447764979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '865564b23f629c4e7_40450594',
  'variables' => 
  array (
    'title' => 0,
    'link' => 0,
    'login' => 0,
    'lib' => 0,
    'danhsach' => 0,
    'sp' => 0,
    'menu' => 0,
    'mn' => 0,
    'att' => 0,
    'arr' => 0,
    'ac' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b23f6513314_40484249',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b23f6513314_40484249')) {
function content_564b23f6513314_40484249 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '865564b23f629c4e7_40450594';
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
  </div>
  <div class="panel-body">
<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" method="post">
 <p style="text-align:right">
 <?php if ($_smarty_tpl->tpl_vars['lib']->value->checkrole($_smarty_tpl->tpl_vars['login']->value['id'],'account','add')) {?>
 <button type="button" class="btn btn-success"  data-toggle="modal"  data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Thêm mới</button>
 <?php }?>
 <?php if ($_smarty_tpl->tpl_vars['lib']->value->checkrole($_smarty_tpl->tpl_vars['login']->value['id'],'account','delete')) {?>
 <button type="submit" class="btn btn-danger"  onClick="return confirm('Bạn có chắc muốn xóa mục chọn')" ><span class="glyphicon glyphicon-trash"></span> Xóa mục chọn </button>
 <?php }?>
 </p>
 <?php echo '<script'; ?>
>
$(document).ready(function(e) {
	var choice=false;
    $('#cball').click(function(e) {
		if(choice==false)
		{
			$('.item').attr('checked',true);
			choice=true;
		}else{
			$('.item').attr('checked',false);
			choice=false;
		}
	});
}); 
 
 <?php echo '</script'; ?>
>
   <?php echo $_smarty_tpl->tpl_vars['lib']->value->viewpage($_smarty_tpl->tpl_vars['link']->value);?>

    <table width="100%" class="table table-striped table-bordered table-hover">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên đăng nhập</th>
        <th scope="col">Loại</th>
        <th scope="col" width="15%">Phân quyền</th>    
        <th scope="col"><input type="checkbox" id="cball" name="cball"  value="1"></th>
        <th scope="col">Thao tác</th>
      </tr>
      <?php
$_from = $_smarty_tpl->tpl_vars['danhsach']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
$foreach_sp_Sav = $_smarty_tpl->tpl_vars['sp'];
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['user'];?>
</td>
        <td>
<?php if ($_smarty_tpl->tpl_vars['sp']->value['type'] == 0) {?> 
<span class="glyphicon glyphicon-remove text-danger"></span>
Khách hàng
<?php } else { ?>
<span class="glyphicon glyphicon-ok text-success"></span>
Quản trị
<?php }?>
        </td>
        <td>
        <ul style="height:200px; overflow-y:auto;border:#ccc 1px solid">
        <?php
$_from = $_smarty_tpl->tpl_vars['menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['mn'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['mn']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['mn']->value) {
$_smarty_tpl->tpl_vars['mn']->_loop = true;
$foreach_mn_Sav = $_smarty_tpl->tpl_vars['mn'];
?>
        <?php if ($_smarty_tpl->tpl_vars['mn']->value['parent'] == 0) {?>
        <?php if ($_smarty_tpl->tpl_vars['mn']->value['prog'] != '') {?>
        	<?php $_smarty_tpl->tpl_vars['att'] = new Smarty_Variable($_smarty_tpl->tpl_vars['lib']->value->cbr($_smarty_tpl->tpl_vars['sp']->value['id'],$_smarty_tpl->tpl_vars['mn']->value['id']), null, 0);?>
        	<li><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['mn']->value['id'];?>
"  class="role" <?php echo $_smarty_tpl->tpl_vars['att']->value;?>
> <a href="#"><?php echo $_smarty_tpl->tpl_vars['mn']->value['title'];?>
</a> 
           <div id="action<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['mn']->value['id'];?>
"  <?php if ($_smarty_tpl->tpl_vars['att']->value == '') {?>style="display:none"<?php }?>> <?php $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable(explode(',',$_smarty_tpl->tpl_vars['mn']->value['action']), null, 0);?>
           		<?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ac']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->_loop = true;
$foreach_ac_Sav = $_smarty_tpl->tpl_vars['ac'];
?>
                <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['mn']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['ac']->value;?>
" class="action" <?php echo $_smarty_tpl->tpl_vars['lib']->value->cbr($_smarty_tpl->tpl_vars['sp']->value['id'],$_smarty_tpl->tpl_vars['mn']->value['id'],$_smarty_tpl->tpl_vars['ac']->value);?>
> <?php echo $_smarty_tpl->tpl_vars['ac']->value;?>
 
                <?php
$_smarty_tpl->tpl_vars['ac'] = $foreach_ac_Sav;
}
?>
           </div>
            </li>
        <?php } else { ?>
        <li>
            <a href="#" role="button" ><?php echo $_smarty_tpl->tpl_vars['mn']->value['title'];?>
<span class="caret"></span>
            </a>
            <ul >
            	<?php
$_from = $_smarty_tpl->tpl_vars['menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sub']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
$foreach_sub_Sav = $_smarty_tpl->tpl_vars['sub'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['sub']->value['parent'] == $_smarty_tpl->tpl_vars['mn']->value['id']) {?>
                    	<?php $_smarty_tpl->tpl_vars['att'] = new Smarty_Variable($_smarty_tpl->tpl_vars['lib']->value->cbr($_smarty_tpl->tpl_vars['sp']->value['id'],$_smarty_tpl->tpl_vars['sub']->value['id']), null, 0);?>
                    	<li><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['sub']->value['id'];?>
" class="role" <?php echo $_smarty_tpl->tpl_vars['att']->value;?>
> <a href="#"><?php echo $_smarty_tpl->tpl_vars['sub']->value['title'];?>
</a> 
                        <div id="action<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['sub']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['att']->value == '') {?>style="display:none"<?php }?>> <?php $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable(explode(',',$_smarty_tpl->tpl_vars['sub']->value['action']), null, 0);?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ac']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->_loop = true;
$foreach_ac_Sav = $_smarty_tpl->tpl_vars['ac'];
?>
                                <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['sub']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['ac']->value;?>
"  class="action" <?php echo $_smarty_tpl->tpl_vars['lib']->value->cbr($_smarty_tpl->tpl_vars['sp']->value['id'],$_smarty_tpl->tpl_vars['sub']->value['id'],$_smarty_tpl->tpl_vars['ac']->value);?>
> <?php echo $_smarty_tpl->tpl_vars['ac']->value;?>
 
                                <?php
$_smarty_tpl->tpl_vars['ac'] = $foreach_ac_Sav;
}
?>
                           </div>
                        </li>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['sub'] = $foreach_sub_Sav;
}
?>
            </ul>
        </li>
        <?php }?>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['mn'] = $foreach_mn_Sav;
}
?>
    </ul>
        </td>
        <td><input type="checkbox" name="cbitem[]" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
" class="item" ></td>
        <td>
<?php if ($_smarty_tpl->tpl_vars['lib']->value->checkrole($_smarty_tpl->tpl_vars['login']->value['id'],'account','edit')) {?>
<button type="button" class="btn btn-warning" data-toggle="modal"  data-target="#myModal" id="btnedit<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
"><span class="glyphicon glyphicon-pencil"></span> Sửa</button>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['lib']->value->checkrole($_smarty_tpl->tpl_vars['login']->value['id'],'account','delete')) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
" class="btn btn-danger" onClick="return confirm('Bạn có chắc muốn xóa?')"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
<?php }?>
        </td>
      </tr>
<?php echo '<script'; ?>
>
$(document).ready(function(e) {
	
	//bắt sự kiện Click chuột vào nút sửa sản phẩm tương ứng
	$('#btnedit<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
').click(function(e) {
		
		$('#id').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
');
		$('#user').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['user'];?>
');
		<?php if ($_smarty_tpl->tpl_vars['sp']->value['type'] == 1) {?> 
			$('#type1').click();
		<?php } else { ?>
			$('#type2').click();
		<?php }?>
	});
});
<?php echo '</script'; ?>
>
      
      <?php
$_smarty_tpl->tpl_vars['sp'] = $foreach_sp_Sav;
}
?>
    </table>
    </form>
   <?php echo $_smarty_tpl->tpl_vars['lib']->value->viewpage($_smarty_tpl->tpl_vars['link']->value);?>

  </div>
</div>

<?php echo '<script'; ?>
>
$(document).ready(function(e) {
    $('.role').click(function(e) {
        var stt=this.checked;
		var val=$(this).val();//Giá trị của ô checkbox
		if(stt==true){ //Có check: THêm quyền cho nó
			$('#action'+val).show();
			$.post('role.php',{ data:val, type:1});
		}else{ //không check: Bỏ quyền của nó đi
			$('#action'+val).hide();
			$.post('role.php',{ data:val, type:0});
		}
    });
	 $('.action').click(function(e) {
        var stt=this.checked;
		var val=$(this).val();//Giá trị của ô checkbox
		if(stt==true){ //Có check: THêm quyền cho nó
			$.post('role.php',{ data:val, type:1});
		}else{ //không check: Bỏ quyền của nó đi
			$.post('role.php',{ data:val, type:0});
		}
    });
});

<?php echo '</script'; ?>
>
<!-- Form Sản phẩm -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
      </div>
      
      <form action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" method="post" class="form-horizontal" id="frm" enctype="multipart/form-data"	>
      <input type="hidden" name="id" id="id" value="0">
<div class="modal-body">
<!--User-->
 <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Tên đăng nhập *</label>
    <div class="col-sm-10"><input type="text" class="form-control" id="user" name="user" placeholder="admin"></div>
  </div>
<!--END User-->
<!--Pass-->
<div class="form-group">
    <label for="title" class="col-sm-2 control-label">Password *</label>
    <div class="col-sm-10"> <input type="password" class="form-control" id="pass" name="pass" placeholder="123456"></div>
</div>
<!--END PASS-->
<!--TYpe-->
<div class="form-group">
    <label for="status" class="col-sm-2 control-label">Loại</label>
    <div class="col-sm-10"><input type="radio" value="1" name="type" id="type1" checked> Quản trị<input type="radio" value="0" name="type" id="type2"> Khách hàng
    </div>
</div>
<!--END TYpe-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
      </div>
      </form>
      
    </div>
  </div>
</div>
<?php }
}
?>