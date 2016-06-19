<?php /* Smarty version 3.1.27, created on 2015-12-08 12:54:44
         compiled from "templates\blue\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:101085666d31472b913_05245996%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62464b8c980092e5a39802df85275969ba85d07a' => 
    array (
      0 => 'templates\\blue\\index.html',
      1 => 1449579141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101085666d31472b913_05245996',
  'variables' => 
  array (
    'config' => 0,
    'lib' => 0,
    'temp' => 0,
    'tieubieu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5666d3149ddad7_81754380',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5666d3149ddad7_81754380')) {
function content_5666d3149ddad7_81754380 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '101085666d31472b913_05245996';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
fancybox/jquery.fancybox-1.3.1.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
js/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
js/slideshow.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
js/jquery-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
fancybox/jquery.fancybox-1.3.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(document).ready(function(e) {
  $("a[rel=group]").fancybox();
});
<?php echo '</script'; ?>
>
</head>

<body>
<div class="wrapper">
    <div class="bg">
    	<!-- HEADER-->
        <header id="header">
        	<!-- MENU TOP -->
            <div class="top">
            	<div class="topcontent">
                	<p>Buyplus sự lựa chọn hoàn hảo</p>
                    <ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
">Trang chủ</a></li>
                    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
index.php?prog=news">Tin tức</a></li>
                        <li><a href="#">Trợ giúp</a></li>
                    	<li><a href="#">Hỗ trợ</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    	<li><a href="#">Site map</a></li>
                        <li><a href="#">Diễn đàn</a></li>
                    </ul>
                </div>
            </div>
            <!-- END MENU TOP -->
            <!--BANNER-->
            <div class="banner">
            	<h1><a href="#">Buyplus.vn</a></h1>
                <div class="boxsearch">
                	<form id="frmsearch" action="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
index.php" method="get">
                    	<input type="hidden" name="prog" value="product">
                    	<input type="text" name="k" id="txtkey" >
                        <button type="submit" class="btn" >Tìm kiếm </button>
                    </form>
<?php echo '<script'; ?>
>
$(document).ready(function(e) {
$('#txtkey').keyup(function(e) {
	$('.centersite').html('<div class="loading"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/loading.gif" width="32" height="32"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/loading.gif" width="32" height="32"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/loading.gif" width="32" height="32"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/loading.gif" width="32" height="32"></div>');
	$.get('<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
ajaxsearch.php', $('#frmsearch').serialize(),function(data){
		$('.centersite').html(data);
	});

});
});
<?php echo '</script'; ?>
>
                </div>
            </div>
            <!--END BANNER-->
            <!--BOX LOGIN-->
            <div class="boxlogin">
            	<div class="contentlogin">
                	<!--MENU-->
                    <ul>
                    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
">Trang chủ</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
about.html">Giới thiệu</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
product.html">Sản phẩm mới</a></li>
                        <li><a href="#">Sản phẩm tiêu biểu</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
order.html">Giỏ hàng</a></li>
                    </ul>
                    <!--END MENU-->
                	<form method="post">
                    	<p>Tài khoản</p> <input type="text">
                        <p>Mật khẩu </p> <input type="password">
                        <p><input type="checkbox" value="1"> Nhớ mật khẩu</p>
                        <button type="submit" class="btn">Đăng nhập</button>
                        <p><a href="#">Quên mật khẩu</a><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
reg.html">Đăng ký tài khoản</a></p>
                    </form>
                </div>
            </div>
            <!-- END BOX LOGIN-->
        </header>
    	<!--END HEADER-->
        <!--LEFT -->
        <div class="leftsite">
        	<div class="box w198">
            	<h3 class="headbox">Danh mục sản phẩm</h3>
                <?php echo $_smarty_tpl->tpl_vars['lib']->value->viewcate();?>

            </div>
            <p><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/adv1.png" width="200" height="150"></a></p>
            <p><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/adv2.png" width="200" height="150"></a></p>
            <!-- Lượt truy cập-->
            <div class="box w198">
            	<h3 class="headbox">Thống kê truy cập</h3>
                <div style="padding:10px;">
              	 <p> Lượt truy cập: <?php echo $_smarty_tpl->tpl_vars['lib']->value->getcount();?>
</p>
               	 <p> Đang trực tuyến: <?php echo $_smarty_tpl->tpl_vars['lib']->value->getcount(false);?>
</p>
                </div>
            </div>
            <!--END Lượt truy cập-->
        </div>
        <!--END LEFT -->
        <!--CENTER -->
        <div class="centersite">
       	<?php if (isset($_smarty_tpl->tpl_vars['temp']->value)) {
echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['temp']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
}?>
        </div>
        <!--END CENTER -->
        <!--RIGHT -->
        <div class="rightsite">
            <p><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/adv1.png" width="200" height="150"></a></p>
            <p><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/adv2.png" width="200" height="150"></a></p>
        	<div class="box w198">
            	<h3 class="headbox">Tin tức mới</h3>
                <ul class="news">
                	<li>
                    	<a href="#">
                        	<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/pro.png" width="44" height="44">
                        	<span>Apple chính thức ra mắt Iphone 10 phiên bản 50TB</span>
                        </a>
                    </li>
                    <li>
                    	<a href="#">
                        	<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/pro.png" width="44" height="44">
                        	<span>Apple chính thức ra mắt Iphone 10 phiên bản 50TB</span>
                        </a>
                    </li>
                    <li>
                    	<a href="#">
                        	<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/pro.png" width="44" height="44">
                        	<span>Apple chính thức ra mắt Iphone 10 phiên bản 50TB</span>
                        </a>
                    </li>
                    <li>
                    	<a href="#">
                        	<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/pro.png" width="44" height="44">
                        	<span>Apple chính thức ra mắt Iphone 10 phiên bản 50TB</span>
                        </a>
                    </li>
                    <li>
                    	<a href="#">
                        	<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/pro.png" width="44" height="44">
                        	<span>Apple chính thức ra mắt Iphone 10 phiên bản 50TB</span>
                        </a>
                    </li>
                </ul>
            </div>
            <p><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/adv1.png" width="200" height="150"></a></p>
            <p><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];
echo $_smarty_tpl->tpl_vars['config']->value['dirtemp'];?>
images/adv2.png" width="200" height="150"></a></p>
        </div>
        <!--END RIGHT -->
        
        <div class="endsite">
            <!-- PRODUCT-->
            <div class="box w988">
                <h3 class="headbox">Sản phẩm tiêu biểu</h3>
                 <?php echo $_smarty_tpl->getSubTemplate ("listsp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('danhsach'=>$_smarty_tpl->tpl_vars['tieubieu']->value), 0);
?>

            </div>
            <!-- END PRODUCT-->
        </div>
    </div>
</div>

<footer>
	<p>&copy; Copyright 2015 by PHP1506E, T3H Ha noi</p>
    <p>Design by Nguyễn Giang Nam</p>
</footer>

</body>
</html>
<?php }
}
?>