<?php
require('connect.php');
//Lấy dữ liệu biến prog trên URL xuống
if(isset($_GET['prog']))$prog=$_GET['prog']; else $prog='home';
//Lấy dữ liệu trong bảng tbrole làm menu
$menu=$lib->selectall('tbrole',0);
$smarty->assign('menu',$menu);
//Kiểm tra giá trị biến $prog
$title='';
if(!isset($_SESSION['adminlogin']))  $prog='login';
else{
	$role=$lib->checkrole($_SESSION['adminlogin']['id'],$prog);
	if(!$role && $prog!='home' ) $prog='error';
	$smarty->assign('login',$_SESSION['adminlogin']);
}

if(file_exists($prog.'.php'))require($prog.'.php');
$smarty->assign('lib',$lib);
$smarty->assign('prog',$prog);
$smarty->assign('title',$title);
$smarty->assign('config',$config);//Khai báo biến config cho tầng View
//Gọi tầng View 
$smarty->display('index.html');
?>