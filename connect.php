<?php
require('libs/Smarty.class.php');
require('model/thuvien.php');
$smarty= new Smarty;//Khởi tạo Smarty
$smarty->configLoad('setting.dat');//Đọc file cấu hình 
$config=$smarty->getConfigVars();//Lấy ra mảng danh sách các biến cấu hình
$smarty->template_dir=$config['dirtemp'];//Khai báo đường dẫn chứa tầng View
//Khởi tạo đối tượng 
$lib= new LIB($config);//Khởi tạo đối tượng LIB và truyền vào mảng cấu hình
$smarty->assign('lib',$lib);//Truyền biến lib ra tầng View
?>