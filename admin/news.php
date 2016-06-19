<?php $title='Quản lý tin tức'; 
$link=$config['url'].'admin/index.php?prog=news';
//Lập trình Thêm sản phẩm vào bảng tbnews
if(isset($_POST['title']))
{//kiểm tra 1 thành phần bất kỳ trên form
	if(isset($_POST['id']) && $_POST['id']>0)
	{
		$lib->update('tbnews',$_POST,$_POST['id']);
	}else{
		unset($_POST['id']);//Loại bỏ phần tử id
		$_POST['date']=date('Y-m-d H:i:s');
		$lib->insert('tbnews',$_POST);
	}
	header('Location: '.$link);
}
if(isset($_POST['cbitem']) && is_array($_POST['cbitem']))
{
	
	foreach($_POST['cbitem'] as $id)
	$lib->delete('tbnews',$id);
}
if(isset($_GET['id']))
{
	$lib->delete('tbnews',$_GET['id']);
}


$danhsach=$lib->selectall('tbnews',10);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);
?>