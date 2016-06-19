<?php 
//Lập trình xử lý đăng nhập
if(isset($_POST['user']) && isset($_POST['pass']))
{
	$user=$_POST['user'];
	$pass=md5($_POST['pass']);
	$kq=$lib->login($user,$pass);
	if(is_array($kq))
	{
		$_SESSION['adminlogin']=$kq;
		header('Location:'.$config['url'].'admin');	
	}else $smarty->assign('error','Tên đăng nhập hoặc mật khẩu không chính xác');
}