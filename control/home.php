<?php
//Chạy lệnh lấy về sản phẩm có type=1 (bán chạy)
$banchay=$lib->selectall('tbproduct',16,'type=1 AND status=1');
$smarty->assign('banchay',$banchay);

?>