<?php
session_start();
require('connect.php');
$lib->setcount();
//lấy danh sách sản phẩm tiêu biểu
$tieubieu=$lib->selectall('tbproduct',7,'type=2  AND status=1',true);
$smarty->assign('tieubieu',$tieubieu);
//Lấy biến prog trên URL (nếu có)
if(isset($_GET['prog']))$prog=$_GET['prog']; else $prog='home';
//Kiểm tra sự tồn tại của file có tên trùng với giá trị  của biến $prog
if(file_exists('control/'.$prog.'.php'))
{
	require('control/'.$prog.'.php');
	$smarty->assign('temp',$prog.'.html');
}



$smarty->assign('config',$config);//Truyền biến config ra tầng View
$smarty->display('index.html');
?>