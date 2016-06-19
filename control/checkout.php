<?php
if(isset($_POST['btncheckout'])){
	unset($_POST['btncheckout']);
	$_POST['date']=date('Y-m-d H:i:s');
	$idhd=$lib->insert('tbhoadon',$_POST);
	//Sử dụng vòng lặp giỏ hàng để lấy ra các sản phẩm và só lượng đặt mua
	if($idhd>0)
	{
		foreach($_SESSION['cart'] as $id=>$sl)
		{
			$detail=$lib->selectone('tbproduct',"id=$id");//Lấy thông tin sản phẩm
			//Xây dựng mảng dữ liệu để lưu vào bảng chi tiết hóa đơn
			$add['idproduct']=$id;
			$add['idhoadon']=$idhd;
			$add['soluong']=$sl;
			$add['giaban']=$detail['price'];
			$lib->insert('tbchitiet',$add);//Chạy lệnh lưu dữ liệu vào bảng chi tiết hóa đơn
		}
		unset($_SESSION['cart']);
		$_POST['id']=$idhd;
		$smarty->assign('detail',$_POST);
	}
}

?>