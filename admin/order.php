<?php $title='Quản lý hóa đơn'; 
$link=$config['url'].'admin/index.php?prog=order';
$table='tbhoadon';
//Lập trình Thêm sản phẩm vào bảng tbproduct
if(isset($_POST['trangthai']))
{//kiểm tra 1 thành phần bất kỳ trên form
	if(isset($_POST['id']) && $_POST['id']>0)
	{//Sửa hóa đơn
		$lib->update($table,$_POST,$_POST['id']);
		header('Location: '.$link);
	}
	
}
//Xóa nhiều hóa đơn
if(isset($_POST['cbitem']) && is_array($_POST['cbitem']))
{
	
	foreach($_POST['cbitem'] as $id)
	$lib->delete($table,$id);
}
//Xóa hóa đơn
if(isset($_GET['id']))
{
	$lib->delete($table,$_GET['id']);
}
$danhsach=$lib->selectall($table,10);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);
?>