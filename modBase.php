<?php
header("content-type:text/html;charset=utf-8");
//载入配置文件
require_once('configs/template.inc.php');
session();
power(filename());//权限
if(isset($_POST['submit'])&&isset($_GET['ro_id']))
{
	$query=upData("update `spr_role` set `ro_name`='".$_POST['ro_name']."',`ro_power`='".implode(',',$_POST['id'])."' where ro_id=".$_GET['ro_id']."");
	jumpTo('base.php',$query);
}
else if(isset($_GET['ro_id']))
{
	$first = getData("select * from `spr_menu` where `f_id`=0");
	foreach ($first as $val)
	{
		$sql = "select * from `spr_menu` where `f_id`=".$val['m_id']."";
		//The second menu
		$second = getData($sql);
		//The beginning of all menu. first,it`s the first menu
		$list[] = $val;

		//push the second menu to array of list
		foreach ($second as $v)
		{
			$list[] = $v;
		}
	}
	$smarty->assign('list',$list);
	$spr_role = getData("select * from `spr_role` where ro_id=".$_GET['ro_id']."");
	$smarty->assign('spr_role',$spr_role);
	$role=explode(',',$spr_role[0]['ro_power']);
	$smarty->assign('role',$role);
	$smarty->display('modBase.html');
}
?>