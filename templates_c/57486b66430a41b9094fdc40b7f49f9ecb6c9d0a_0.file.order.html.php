<?php /* Smarty version 3.1.27, created on 2016-05-07 10:08:56
         compiled from "D:\Xampp\htdocs\project\templates\green\order.html" */ ?>
<?php
/*%%SmartyHeaderCode:4736572d5c48e11463_44917907%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57486b66430a41b9094fdc40b7f49f9ecb6c9d0a' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\project\\templates\\green\\order.html',
      1 => 1447759278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4736572d5c48e11463_44917907',
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
  'unifunc' => 'content_572d5c490fbac0_73255736',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572d5c490fbac0_73255736')) {
function content_572d5c490fbac0_73255736 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4736572d5c48e11463_44917907';
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
  </div>
  <div class="panel-body">
<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" method="post">
  <p style="text-align:right"><button type="submit" class="btn btn-danger"  onClick="return confirm('Bạn có chắc muốn xóa mục chọn')" ><span class="glyphicon glyphicon-trash"></span> Xóa mục chọn </button>
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
        <th scope="col">Họ và tên</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Tổng tiền</th>
        <th scope="col">Ngày đặt</th>
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
        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['hoten'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['dienthoai'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['diachi'];?>
</td>
        <td><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['tongtien']);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['date'];?>
</td>
        <td>
<?php if ($_smarty_tpl->tpl_vars['sp']->value['trangthai'] == 0) {?>
	<?php echo $_smarty_tpl->tpl_vars['lib']->value->progress(20,'progress-bar-danger');?>

<?php } elseif ($_smarty_tpl->tpl_vars['sp']->value['trangthai'] == 1) {?>
	<?php echo $_smarty_tpl->tpl_vars['lib']->value->progress(40,'progress-bar-warning');?>

<?php } elseif ($_smarty_tpl->tpl_vars['sp']->value['trangthai'] == 2) {?>
	<?php echo $_smarty_tpl->tpl_vars['lib']->value->progress(60,'progress-bar-info');?>

<?php } elseif ($_smarty_tpl->tpl_vars['sp']->value['trangthai'] == 3) {?>
	<?php echo $_smarty_tpl->tpl_vars['lib']->value->progress(80,'');?>

<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['lib']->value->progress(100,'progress-bar-success');?>

<?php }?>
        </td>
        <td><input type="checkbox" name="cbitem[]" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
" class="item" ></td>
        <td>
<button type="button" class="btn btn-warning" data-toggle="modal"  data-target="#myModal" id="btnedit<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
"><span class="glyphicon glyphicon-pencil"></span> Sửa</button>
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
" class="btn btn-danger" onClick="return confirm('Bạn có chắc muốn xóa?')"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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
			$('#trangthai').val(parseInt('<?php echo $_smarty_tpl->tpl_vars['sp']->value['trangthai'];?>
'));
			//////////////////////////////
			$('#idhd').text('<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
');
			$('#hoten').text('<?php echo $_smarty_tpl->tpl_vars['sp']->value['hoten'];?>
');
			$('#dienthoai').text('<?php echo $_smarty_tpl->tpl_vars['sp']->value['dienthoai'];?>
');
			$('#diachi').text('<?php echo $_smarty_tpl->tpl_vars['sp']->value['diachi'];?>
');
			$('#email').text('<?php echo $_smarty_tpl->tpl_vars['sp']->value['email'];?>
');
			$('#ngaynhan').text('<?php echo $_smarty_tpl->tpl_vars['sp']->value['ngaynhan'];?>
');
			$('#ghichu').text('<?php echo $_smarty_tpl->tpl_vars['sp']->value['ghichu'];?>
');
			$('#tongtien').text('<?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['tongtien']);?>
');
			$('#date').text('<?php echo $_smarty_tpl->tpl_vars['sp']->value['date'];?>
');
			//Code Ajax gọi chi tiết danh sách sản phẩm đặt mua
			$('#listsp').load('detail.php?id=<?php echo $_smarty_tpl->tpl_vars['sp']->value['id'];?>
');//Đổ dữ liệu hiển thị trên file detail vào thẻ Div listsp 
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
            <label for="title" class="col-sm-3 control-label">Mã đơn hàng</label>
            <div class="col-sm-9" id="idhd"></div>
          </div>
           <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Họ và tên</label>
            <div class="col-sm-9" id="hoten"></div>
          </div>
          
          <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Điện thoại</label>
            <div class="col-sm-9" id="dienthoai"></div>
          </div>
          
          <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Địa chỉ</label>
            <div class="col-sm-9" id="diachi"></div>
          </div>
          <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9" id="email"></div>
          </div>
          <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Ngày nhận</label>
            <div class="col-sm-9" id="ngaynhan"></div>
          </div>
          <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Ghi chú</label>
            <div class="col-sm-9" id="ghichu"></div>
          </div>
           <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Tổng tiền</label>
            <div class="col-sm-9" id="tongtien"></div>
          </div>
          <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Ngày đặt hàng</label>
            <div class="col-sm-9" id="date"></div>
          </div>
          <div class="form-group" id="listsp">
          
          </div>
          <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Trạng thái</label>
            <div class="col-sm-9" >
            <select  class="form-control" name="trangthai" id="trangthai">
            	<option value="0">Vừa được đặt</option>
                <option value="1">Đã xác nhận</option>
                <option value="2">Đã thanh toán</option>
                <option value="3">Đang vận chuyển</option>
                <option value="4">Hoàn thành</option>
            </select>
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