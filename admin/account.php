<?php
$title='Quản lý tài khoản';
$link=$config['url'].'admin/index.php?prog=account';
//Lập trình Thêm sản phẩm vào bảng tbtaikhoan
if(isset($_POST['user']))
{//kiểm tra 1 thành phần bất kỳ trên form
	if(isset($_POST['id']) && $_POST['id']>0)
	{
		if($lib->checkrole($_SESSION['adminlogin']['id'],'account','edit'))
		{
			if($_POST['pass']!='')$_POST['pass']=md5($_POST['pass']);
			else unset($_POST['pass']);
			$lib->update('tbtaikhoan',$_POST,$_POST['id']);
			header('Location: '.$link);
		}else header('Location: '.$config['url'].'admin/index.php?prog=error');
	}else{
		if($lib->checkrole($_SESSION['adminlogin']['id'],'account','add'))
		{
			unset($_POST['id']);//Loại bỏ phần tử id
			$_POST['pass']=md5($_POST['pass']);
			//$_POST['date']=date('Y-m-d H:i:s');
			$lib->insert('tbtaikhoan',$_POST);
			header('Location: '.$link);
		}else header('Location: '.$config['url'].'admin/index.php?prog=error');
	}
}

	if(isset($_POST['cbitem']) && is_array($_POST['cbitem']))
	{
		if($lib->checkrole($_SESSION['adminlogin']['id'],'account','delete'))
		{
			foreach($_POST['cbitem'] as $id)
			$lib->delete('tbtaikhoan',$id);
		}else header('Location: '.$config['url'].'admin/index.php?prog=error');
	}
	if(isset($_GET['id']))
	{
		if($lib->checkrole($_SESSION['adminlogin']['id'],'account','delete'))
		{
			$lib->delete('tbtaikhoan',$_GET['id']);
		}else header('Location: '.$config['url'].'admin/index.php?prog=error');
	}

$danhsach=$lib->selectall('tbtaikhoan',10);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);
?>