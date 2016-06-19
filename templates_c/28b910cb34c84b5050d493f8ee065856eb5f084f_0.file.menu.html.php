<?php /* Smarty version 3.1.27, created on 2015-11-17 18:19:16
         compiled from "D:\VertrigoServ\www\project\templates\green\menu.html" */ ?>
<?php
/*%%SmartyHeaderCode:28133564b0d34a0d086_71776798%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28b910cb34c84b5050d493f8ee065856eb5f084f' => 
    array (
      0 => 'D:\\VertrigoServ\\www\\project\\templates\\green\\menu.html',
      1 => 1447332886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28133564b0d34a0d086_71776798',
  'variables' => 
  array (
    'title' => 0,
    'link' => 0,
    'lib' => 0,
    'danhsach' => 0,
    'sp' => 0,
    'arr' => 0,
    'a' => 0,
    'menucha' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b0d34b14805_96247380',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b0d34b14805_96247380')) {
function content_564b0d34b14805_96247380 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28133564b0d34a0d086_71776798';
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
  </div>
  <div class="panel-body">
<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" method="post">
 <p style="text-align:right"><button type="button" class="btn btn-success"  data-toggle="modal"  data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Thêm mới</button>
 <button type="submit" class="btn btn-danger"  onClick="return confirm('Bạn có chắc muốn xóa mục chọn')" ><span class="glyphicon glyphicon-trash"></span> Xóa mục chọn </button>
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
        <th scope="col">Tiêu đề</th>
        <th scope="col">parent</th>
        <th scope="col">action</th>
        <th scope="col">Prog</th>
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
        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['title'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['parent'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['action'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['prog'];?>
</td>
        <td><input type="checkbox" name="cbitem[]" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
" class="item" ></td>
        <td>
<button type="button" class="btn btn-warning" data-toggle="modal"  data-target="#myModal" id="btnedit<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
"><span class="glyphicon glyphicon-pencil"></span> Sửa</button>
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
" class="btn btn-danger" onClick="return confirm('Bạn có chắc muốn xóa sản phẩm: <?php echo $_smarty_tpl->tpl_vars['sp']->value['title'];?>
?')"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
        </td>
      </tr>
      <?php $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable(explode(',',$_smarty_tpl->tpl_vars['sp']->value['action']), null, 0);?>
<?php echo '<script'; ?>
>
$(document).ready(function(e) {
	//bắt sự kiện Click chuột vào nút sửa sản phẩm tương ứng
	$('#btnedit<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
').click(function(e) {
		$('#add').attr('checked',false);
	    $('#edit').attr('checked',false);
		$('#delete').attr('checked',false);
		   
		$('#id').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
');
		$('#title').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['title'];?>
');
		$('#parent').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['parent'];?>
');
		$('#prog').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['prog'];?>
');
		<?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?>
		 $('#<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
').attr('checked',true);
		<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>
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
         <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Menu cha</label>
            <div class="col-sm-10">
              <select class="form-control" id="parent" name="parent" >
              <option value="0">-------</option>
              <?php
$_from = $_smarty_tpl->tpl_vars['menucha']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</option>
              <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Tên *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" name="title" placeholder="Danh mục">
            </div>
          </div>
          <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Prog *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="prog" name="prog" placeholder="product">
            </div>
          </div>
         <div class="form-group">
        <label for="keyword" class="col-sm-2 control-label">Action</label>
        <div class="col-sm-10">
        <input type="checkbox"  id="add" name="action[]" value="add"  > Add
        <input type="checkbox"  id="edit" name="action[]" value="edit"  > Edit
        <input type="checkbox"  id="delete" name="action[]" value="delete" > Delete
        </div>
 		 </div>
          
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