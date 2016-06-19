<?php
if(isset($_POST['btnreg']))
{
	$code=md5(time().rand());
	unset($_POST['btnreg']);
	unset($_POST['repass']);	
	$_POST['type']=0;
	$_POST['code']=$code;
	$_POST['pass']=md5($_POST['pass']);//Mã hóa mật khẩu
	$id=$lib->insert('tbtaikhoan',$_POST);
	if($id>0)
	{
		$link=$config['url'].$id.'/'.$code.'.html';
		//Gửi mail
		$lib->sendmail($_POST['email'],$_POST['hoten'],'Dang ky tai khoan thanh cong','<h1>Bạn đã đăng ký tài khoản tại hệ thống T3h thành công!</h1><h2><a href="'.$link.'">Phiền bạn click vào đây để kích hoạt tài khoản</a></h2>');
	}
}

?>