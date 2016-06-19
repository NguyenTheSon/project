<?php
session_start();//Khởi động SESSION
date_default_timezone_set('Asia/Saigon');
//Nhúng thư viện smarty
include('../libs/Smarty.class.php');
include('../model/thuvien.php');
$smarty= new Smarty;
//Cấu hình lại đường dẫn đến thư mục templates,templates_c
$smarty->template_dir='../templates/green/';//Trỏ lại đường dẫn templates
$smarty->compile_dir='../templates_c/';//Trỏ lại dường dẫn templates_c
$smarty->config_dir='../configs/';//Trỏ lại đường dẫn configs
//Đọc nội dung file cấu hình
$smarty->configLoad('setting.dat');
$config=$smarty->getConfigVars();//Lệnh lấy ra các biến trong file cấu hình
//Khởi tạo đối tượng LIB và truyền vào mảng cấu hình
$lib= new LIB($config);
$smarty->assign('lib',$lib);
