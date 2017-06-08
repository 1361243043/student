<?php
session_start();
require_once 'configs/common.php';
isSession();

if($_POST['submit'])
{
	$sql = "insert into spr_menu values("..")";
	$result = $db->query($sql);
	if()
}
else 
{
	//读取所有的一级菜单
	$sql = "select * from spr_menu where fid=0";
	$first = $db->getData($sql);
	$smarty->assign('first',$first);
	$smarty->display('mAdd.html');
}