<?php
$id=$_GET['id'];
$code=$_GET['code'];
$detail=$lib->selectone('tbtaikhoan'," id='$id' AND code='$code'");
if($detail && $code!='')
{
	$lib->update('tbtaikhoan',array('status'=>1,'code'=>''),$id);
	$smarty->assign('thongbao','Kích hoạt thành công');
}else{
	$smarty->assign('thongbao','Kích hoạt không thành công');
}
?>