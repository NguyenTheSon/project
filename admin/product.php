<?php $title='Quản lý sản phẩm'; 
$link=$config['url'].'admin/index.php?prog=product';
//Lập trình Thêm sản phẩm vào bảng tbproduct
if(isset($_POST['title']))
{//kiểm tra 1 thành phần bất kỳ trên form
	if(isset($_POST['id']) && $_POST['id']>0)
	{
		$lib->update('tbproduct',$_POST,$_POST['id']);
	}else{
		unset($_POST['id']);//Loại bỏ phần tử id
		$_POST['date']=date('Y-m-d H:i:s');
		$lib->insert('tbproduct',$_POST);
	}
	header('Location: '.$link);
}
if(isset($_POST['cbitem']) && is_array($_POST['cbitem']))
{
	
	foreach($_POST['cbitem'] as $id)
	$lib->delete('tbproduct',$id);
}
if(isset($_GET['id']))
{
	$lib->delete('tbproduct',$_GET['id']);
}


$danhsach=$lib->selectall('tbproduct',10);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);
?>