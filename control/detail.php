<?php
//Lấy ID của sản phẩm trên URL
if(isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']>0)
{
	$id=$_GET['id'];
	$detail=$lib->selectone('tbproduct'," id='$id'");
	//Lưu lại các ID sản phẩm mà người dùng đã xem
	if(!isset($_SESSION['daxem']))$_SESSION['daxem']=array();//Tạo Biến session lưu danh sách các ID của sản phẩm đã xem
	$smarty->assign('daxem',$_SESSION['daxem']);//Truyền ra tầng View
	//Tăng lượt xem sản phẩm
	if(!isset($_SESSION['daxem'][$id]))
	{
		$_SESSION['daxem'][$id]=$detail;//Thêm 1 sản phẩm vào mục đã xem
		//Tăng lượt xem ở đây
		$detail['view']=$detail['view']+1;
		$lib->update('tbproduct',$detail,$id);
	}
	$smarty->assign('detail',$detail);	
}

?>