<?php $title='Quản lý menu'; 
$link=$config['url'].'admin/index.php?prog=menu';
//Lập trình Thêm sản phẩm vào bảng tbrole
if(isset($_POST['title']))
{//kiểm tra 1 thành phần bất kỳ trên form
	$_POST['action']=implode(',',$_POST['action']);
	if(isset($_POST['id']) && $_POST['id']>0)
	{
		$lib->update('tbrole',$_POST,$_POST['id']);
	}else{
		unset($_POST['id']);//Loại bỏ phần tử id
		$lib->insert('tbrole',$_POST);
	}
	header('Location: '.$link);
}
if(isset($_POST['cbitem']) && is_array($_POST['cbitem']))
{
	
	foreach($_POST['cbitem'] as $id)
	$lib->delete('tbrole',$id);
}
if(isset($_GET['id']))
{
	$lib->delete('tbrole',$_GET['id']);
}
$menucha=$lib->selectall('tbrole',0,'parent=0');
$smarty->assign('menucha',$menucha);
$danhsach=$lib->selectall('tbrole',10);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);
?>