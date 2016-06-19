<?php /* Smarty version 3.1.27, created on 2016-05-07 10:32:50
         compiled from "D:\Xampp\htdocs\project\templates\green\news.html" */ ?>
<?php
/*%%SmartyHeaderCode:15455572d61e26851b0_80352217%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15ce49159cb362f147b6605765840bf194702291' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\project\\templates\\green\\news.html',
      1 => 1443700952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15455572d61e26851b0_80352217',
  'variables' => 
  array (
    'title' => 0,
    'link' => 0,
    'lib' => 0,
    'danhsach' => 0,
    'sp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_572d61e2913698_56183739',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572d61e2913698_56183739')) {
function content_572d61e2913698_56183739 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15455572d61e26851b0_80352217';
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
        <th scope="col">Hình ảnh</th>
        <th scope="col">Ngày đăng</th>
        <th scope="col">Trạng thái</th>
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
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['sp']->value['img'];?>
"  class="img-thumbnail" width="60" ></td>
        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['date'];?>
</td>
        <td>
<?php if ($_smarty_tpl->tpl_vars['sp']->value['status'] == 0) {?> 
<span class="glyphicon glyphicon-remove text-danger"></span>
<?php } else { ?>
<span class="glyphicon glyphicon-ok text-success"></span>
<?php }?>
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
      <?php echo '<script'; ?>
>
	  $(document).ready(function(e) {
        //bắt sự kiện Click chuột vào nút sửa sản phẩm tương ứng
		$('#btnedit<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
').click(function(e) {
			
            $('#id').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
');
			$('#title').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['title'];?>
');
			$('#img').attr('src','<?php echo $_smarty_tpl->tpl_vars['sp']->value['img'];?>
');
			$('#mota').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['mota'];?>
');
			$('#keyword').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['keyword'];?>
');
			$('#des').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['des'];?>
');
			<?php if ($_smarty_tpl->tpl_vars['sp']->value['status'] == 1) {?> 
				$('#status1').click();
			<?php } else { ?>
				$('#status2').click();
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
            <label for="title" class="col-sm-2 control-label">Tên *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" name="title" placeholder="Tên sản phẩm">
            </div>
          </div>
          
          
           <div class="form-group">
           
            <label for="nfile" class="col-sm-2 control-label">Ảnh</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" name="img" >
              <img src=""  id="img"  class="img-thumbnail" width="60" >
            </div>
          </div>
         <div class="form-group">
        <label for="mota" class="col-sm-2 control-label">Mô tả</label>
        <div class="col-sm-10">
        <textarea class="form-control" id="mota" name="mota" placeholder="Mô tả sản phẩm"></textarea>
        </div>
 		 </div>
         <div class="form-group">
        <label for="keyword" class="col-sm-2 control-label">Keyword</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Từ khóa (Seo)">
        </div>
 		 </div>
          <div class="form-group">
        <label for="des" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="des" name="des" placeholder="Mô tả (Seo)">
        </div>
 		 </div>
        <div class="form-group">
        <label for="status" class="col-sm-2 control-label">Trạng thái</label>
        <div class="col-sm-10">
      	<input type="radio" value="1" name="status" id="status1" checked> Hoạt động
        <input type="radio" value="0" name="status" id="status2"> Khóa
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