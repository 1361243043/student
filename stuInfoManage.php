<?php
header("content-type:text/html;charset=utf-8");
require_once('configs/template.inc.php');
session();
power(filename());//权限
	if($_POST['sub'])
	{
		$sql_role="select * from `spr_role`  join `spr_teacher` on `spr_role`.ro_id=`spr_teacher`.t_role where `t_name` like '%".$_POST['data1']."%' 
	    and `ro_name` like '%".$_POST['data']."%'";
	}
	else
	{
	   $sql_role="select * from `spr_role`  join `spr_teacher` on spr_teacher.t_role=spr_role.ro_id order by t_id";
		$str=' <a  href="stuInfoAdd.php"> 添加用户</a> ';
		$smarty->assign('str',$str);
	}
	   $query=mysql_query($sql_role);
	   $num=mysql_num_rows($query);//统计数据数量
	   @$page=intval($_GET['page']);
	   pageft($num,5);
	   if($firstcount>=0)
	   {
		$sql_role.=" limit ".$firstcount.",5";
	   }
	  $query=getData($sql_role);
      $smarty->assign('fenye',$pagenav);
	$sql_check="select `ro_name` from `spr_role` group by ro_name";
    $getData=getData($sql_role);
	$getData1=getData($sql_check);
	$smarty->assign('id',1);
	$smarty->assign('getData',$getData);
	$smarty->assign('getData1',$getData1);
    $smarty->display('stuInfoManage.html');
?>