<?php
session_start();
require_once 'configs/common.php';
isSession();

if($_POST['submit'])
{
	//接收角色名称
	$name = $_POST['ro_name'];
	//接受权限
	$role = $_POST['id'];
	$rString = implode(',',$role);
	
	//插入数据库
	
}
else
{
	//查询一级菜单
	$sql = "select * from spr_menu where f_id=0";
	$first = $db->getData($sql);
	
	//构造所有的菜单
	foreach ($first as $f)
	{
		$sql = "select * from spr_menu where f_id =".$f['m_id'];
		$second = $db->getData($sql);
		$list[] = $f;
		foreach ($second as $s)
		$list[] = $s;
	}
	
	$smarty->assign("list",$list);
	$smarty->display('roleAdd.html');
}