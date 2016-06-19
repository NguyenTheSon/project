<?php
require('connect.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];//Lấy ID hóa đơn trên URL
	//Lấy thông tin chi tiết hóa đơn, kết hợp với dữ liệu của bảng tbproduct
	$danhsach=$lib->selectall('vchitiet',10,'idhoadon='.$id);
	$smarty->assign('danhsach',$danhsach);//Truyền danh sách ra tầng view
	$smarty->display('detail.html');//Gọi tầng View
}
?>