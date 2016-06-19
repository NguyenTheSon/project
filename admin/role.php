<?php
require('connect.php');
$data=explode('-',$_POST['data']);
$type=$_POST['type'];
$idtaikhoan=0;
$idrole=0;
$action='';
if(isset($data[0]))$idtaikhoan=$data[0];
if(isset($data[1]))$idrole=$data[1];
if(isset($data[2]))$action=$data[2];
if($type==1){//THêm quyền
	if($action==''){
		$add['idtaikhoan']=$idtaikhoan;
		$add['idrole']=$idrole;
		$lib->insert('tbtaikhoan_role',$add);
	}else{
		$one=$lib->selectone('tbtaikhoan_role','idtaikhoan='.$idtaikhoan.' AND idrole='.$idrole);
		if($one)
		{
			$edit['action']=trim($action.','.$one['action'],',');
			$lib->update('tbtaikhoan_role',$edit,$one['id']);
		}
	}
}else{//Bỏ quyền
	if($action==''){
		$one=$lib->selectone('tbtaikhoan_role','idtaikhoan='.$idtaikhoan.' AND idrole='.$idrole);
		if($one)
		{
			$lib->delete('tbtaikhoan_role',$one['id']);
		}
	}else{
		$one=$lib->selectone('tbtaikhoan_role','idtaikhoan='.$idtaikhoan.' AND idrole='.$idrole);
		if($one)
		{
			$edit['action']=trim(str_replace($action,'',$one['action']),',');
			$edit['action']=str_replace(',,',',');
			$lib->update('tbtaikhoan_role',$edit,$one['id']);
		}
		
	}
}

?>