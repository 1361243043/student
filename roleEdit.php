<?php
session_start();
require_once 'configs/common.php';
isSession();

if($_POST['submit'])
{
	//先将权限数组转化成字符串
	$roleString = implode(',',$_POST['id']);
	
	$sql = "update spr_role set 
	         ro_name='".$_POST['ro_name']."',
	         ro_power = '".$roleString."'
	         where ro_id = 
	        ";
}
else 
{
	//接收ID号
	$id = $_GET['id'];
	//查此角色的详细信息
	$sql = "select * from spr_role where ro_id=".$id;
	$info = $db->getOne($sql);
	
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
	
	//将数据库中的权限字符串转换成一维数组
	$roleArray = explode(',',$info['ro_power']);
	
	$smarty->assign('info',$info);
	$smarty->assign('list',$list);
	$smarty->assign('roleArray',$roleArray);
	$smarty->display('roleEdit.html');
}
