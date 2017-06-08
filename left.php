<?php
header("content-type:text/html;charset=utf-8");
//载入配置文件
require_once('configs/template.inc.php');
session();
//get the first menu 
$first = getData("select * from `spr_menu` where `f_id`=0 and `is_mark`!=0 order by `m_grade` asc");
//get the first and the second menu
foreach ($first as $val)
{
	$sql = "select * from `spr_menu` where `f_id`=".$val['m_id']." and `is_mark`!=0 order by `m_grade` asc ";
	//The second menu
	$second = getData($sql);
	//The beginning of all menu. first,it`s the first menu
	$list1[] = $val;

	//push the second menu to array of list
	foreach ($second as $v)
	{
		$list2[] = $v;
	}
}
$smarty->assign('id',1);
$smarty->assign('list1',$first);
$smarty->assign('list2',$list2);
$smarty->assign('path',PATH);
$smarty->display('left.html');



/*
session_start();
require_once 'configs/common.php';
isSession();

//读取一级菜单
$sql = "select * from spr_menu where f_id=0";
$first = $db->getData($sql);

//读取二次菜单（只有读取功能的部分）
foreach ($first as $f)
{
	$sql = "select * from spr_menu where f_id=".$f['m_id']." and
	        is_mark=1 ";
	$second = $db->getData($sql);
	$list[] = $f;
	foreach ($second as $s)
	  $list[] = $s;
}
$id = 1;

$smarty->assign('list',$list);
$smarty->assign('id',$id);
$smarty->display('left.html');
*/