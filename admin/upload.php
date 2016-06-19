<?php
$tmp=$_FILES['userfile']['tmp_name'];
$name=$_FILES['userfile']['name'];
move_uploaded_file($tmp,'../upload/'.$name);
?>