<?php
if(!isset($_SESSION['cart']))$_SESSION['cart']=array();
if(isset($_GET['id'])&& is_numeric($_GET['id']) && $_GET['id']>0)
{
	$id=$_GET['id'];
	$lib->shopping($id);//Gọi hàm thêm sản phẩm và giỏ hàng
	header('Location:'.$config['url'].'order.html');
}
if(count($_POST)>0)
{
	foreach($_POST as $key=>$val)
	{
		$id=str_replace('sl','',$key);//Lọc lấy ra id sản phẩm
		$lib->shopping($id,$val,true);
	}
	header('Location:'.$config['url'].'order.html');
	
}

$smarty->assign('giohang',$_SESSION['cart']);



?>