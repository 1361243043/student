<?php
header("content-type:text/html;charset=utf-8");
session_start();//开启会话，或者开启全局变量
//载入配置文件
require_once('configs/template.inc.php');
session();
power(filename());//权限
if($_POST['sub'])
{
  $ro_name=$_POST['ro_name'];
  $power=$_POST['id'];
  $power=implode(',',$power);
  $sql="insert into `spr_role` (`ro_name`,`ro_power`)values('".$ro_name."','".$power."')";
  //die();
   $rs=addData($sql);
   jumpTo('base.php',$rs);

}
//---------------------------------
else
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
	$smarty->display('addBase.html');
	}
?>