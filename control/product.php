<?php
$link=$config['url'].'index.php?prog=product';
//Chạy lệnh lấy về sản phẩm 
$where='status=1';
if(isset($_GET['k']))
{
	$k=$_GET['k'];
	$where.=" AND (title LIKE '%$k%' OR xuatxu LIKE '%$k%' ) ";
	$link.="&k=$k";
}
if(isset($_GET['idcate']))
{
	$idcate=$_GET['idcate'];
	$mylist= $lib->findid($idcate);
	$where.=" AND idcate IN ($mylist) ";
	$link.="&idcate=$idcate";
}
$danhsach=$lib->selectall('tbproduct',24,$where);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('link',$link);

?>