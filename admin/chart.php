<?php
$listyear=array(2015,2014,2013);
$smarty->assign('listyear',$listyear);
//Code để chạy tự động thêm vào Dữ liệu cho bảng hóa đơn: -> lấy dữ liệu TEST
/*$year=2014;
for($month=1; $month<=12;$month++)
{
	for($day=1;$day <= 31; $day++ )
	{
		for($i=1;$i<rand(5,15);$i++)
		{
			$omonth=$month;		if($omonth<10)$omonth='0'.$omonth;
			$oday=$day;			if($oday<10)$oday='0'.$oday;
			//Tạo các thông tin thêm vào bảng tbhoadon
			$hd['hoten']='Nguyễn Văn Tùng';
			$hd['dienthoai']='0987654321';
			$hd['diachi']='Cầu Giấy, Hà Nội';
			$hd['email']='tungvan@gmail.com';
			$hd['ngaynhan']=$year.'-'.$omonth.'-'.$oday;
			$hd['date']=$year.'-'.$omonth.'-'.$oday.' '.date('H:i:s');
			$hd['trangthai']=4;
			//Chạy lệnh thêm dữ liệu vào bảng tbhoadon
			$idhd=$lib->insert('tbhoadon',$hd);
			//Random danh sách sản phẩm sẽ đặt mua
			$tongtien=0;
			for($j=1;$j<=rand(1,3);$j++)
			{
				//Lấy 1 sản phẩm mặc định trong CSDL
				$sp=$lib->selectone('tbproduct','id='.rand(1,52));
				if($sp){//Thêm dữ liệu vào bảng chi tiết hóa đơn
					$ct['idproduct']=$sp['id'];
					$ct['idhoadon']=$idhd;
					$ct['soluong']=rand(1,2);
					$ct['giaban']=$sp['price'];
					$lib->insert('tbchitiet',$ct);
					$tongtien+=$ct['giaban']*$ct['soluong'];
				}				
			}
			//Update lại tổng tiền cho hóa đơn
			$edit['tongtien']=$tongtien;
			$lib->update('tbhoadon',$edit,$idhd);
		}
	}
}*/
?>