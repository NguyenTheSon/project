<?php /* Smarty version 3.1.27, created on 2015-12-08 20:28:51
         compiled from "D:\VertrigoServ\www\project\templates\green\product.html" */ ?>
<?php
/*%%SmartyHeaderCode:69435666db13797d07_43761778%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21bd3623ccd4e22eb4570517ad824fabf0086b1d' => 
    array (
      0 => 'D:\\VertrigoServ\\www\\project\\templates\\green\\product.html',
      1 => 1449581329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69435666db13797d07_43761778',
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
  'unifunc' => 'content_5666db1392b370_18026665',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5666db1392b370_18026665')) {
function content_5666db1392b370_18026665 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '69435666db13797d07_43761778';
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
        <th scope="col">Giá bán</th>
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
        <td><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['price']);?>
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
			$('#price').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['price'];?>
');
			
			$('#soluong').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['soluong'];?>
');
			$('#xuatxu').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['xuatxu'];?>
');
			$('#mota').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['mota'];?>
');
			$('#keyword').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['keyword'];?>
');
			$('#des').val('<?php echo $_smarty_tpl->tpl_vars['sp']->value['des'];?>
');
			<?php if ($_smarty_tpl->tpl_vars['sp']->value['tinhtrang'] == 1) {?> 
				$('#tinhtrang1').click();
			<?php } else { ?>
				$('#tinhtrang2').click();
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['sp']->value['status'] == 1) {?> 
				$('#status1').click();
			<?php } else { ?>
				$('#status2').click();
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['sp']->value['type'] == 0) {?>
			 	$('#type1').click();
			<?php } elseif ($_smarty_tpl->tpl_vars['sp']->value['type'] == 1) {?> 
				$('#type2').click();
			<?php } elseif ($_smarty_tpl->tpl_vars['sp']->value['type'] == 2) {?>
				$('#type3').click();
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
            <label for="price" class="col-sm-2 control-label">Giá bán *</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="price" name="price" placeholder="Giá sản phẩm">
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
            <label for="nfile" class="col-sm-2 control-label">Album</label>
            <div class="col-sm-10">
            <button type="button" id="btnchoice" class="btn">Upload</button>
            <input type="hidden" name="album" id="album" value="">
            <div id="listimg">
            	
            </div>
            </div>
          </div>
          <?php echo '<script'; ?>
>
		  $(document).ready(function(e) {
				new AjaxUpload( $('#btnchoice'), {
					onComplete: function(file, response) {
						$('#listimg').append('<img src="../upload/'+file+'"  width="60" class="img-thumbnail">');
						$('#album').val($('#album').val()+';'+file);
					}
				}); 
			});
		  <?php echo '</script'; ?>
>
          <div class="form-group">
    <label for="soluong" class="col-sm-2 control-label">Số lượng</label>
            <div class="col-sm-10">
             <input type="text" class="form-control" id="soluong" name="soluong"  placeholder="Số lượng sản phẩm">
   		 	</div>
 		 </div>
        
         <div class="form-group">
        <label for="xuatxu" class="col-sm-2 control-label">Xuất xứ</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="xuatxu" name="xuatxu" placeholder="Xuất xứ">
        </div>
 		 </div>
         
          <div class="form-group">
        <label for="tinhtrang" class="col-sm-2 control-label">Tình trạng</label>
        <div class="col-sm-10">
      	<input type="radio" value="1" name="tinhtrang" id="tinhtrang1" checked> Mới
        <input type="radio" value="0" name="tinhtrang" id="tinhtrang2"> Cũ
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
        	<label for="status" class="col-sm-2 control-label">Loại sản phẩm</label>
            <div class="col-sm-10">
            <input type="radio" value="0" name="type" id="type1" checked> không
            <input type="radio" value="1" name="type" id="type2" > Bán chạy
            <input type="radio" value="2" name="type" id="type3" > Tiêu biểu
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