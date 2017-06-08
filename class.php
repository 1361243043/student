<?php
header("content-type:text/html;charset=utf-8");
header("content-type:text/html;charset=utf-8");
//载入配置文件
require_once('configs/template.inc.php');
session();
power(filename());//权限
	if($_GET['sub'])
	{
	$sql_class="select * from `spr_class` join `spr_teacher` on spr_teacher.t_id=spr_class.mr_coach where `mr_classid` like '%".$_GET['mr_classid']."%' 
		and `mr_grade` like '%".$_GET['mr_grade']."%'";
	}
	else
	{
		 //echo "select * from `spr_class` join `spr_teacher` on spr_teacher.t_id=spr_class.mr_coach order by `mr_grade`" ;die();
			$sql_class="select * from `spr_class` join `spr_teacher` on spr_teacher.t_id=spr_class.mr_coach order by `mr_grade` asc ";
	
	}
	  $query=mysql_query($sql_class);
	  $num=mysql_num_rows($query);//统计数据数量
	   @$page=intval($_GET['page']);
	   pageft($num,5);
	   if($firstcount>=0)
	   {
		$sql_class.=" limit ".$firstcount.",5";
	   }
   	  $getData=getData($sql_class);
    $smarty->assign('charge',$ch_real_money);
$smarty->assign('fenye',$pagenav);
	$sql_class="select mr_grade from `spr_class` group by `mr_grade`";
	$query_class=getData($sql_class);
	$sql_classid="select mr_classid from `spr_class` group by `mr_classid`";
	$query_classid=getData($sql_classid);

//----------------------------------------------------
	$smarty->assign('query_classid',$query_classid);
	$smarty->assign('query_class',$query_class);
	$smarty->assign('id',1);
	$smarty->assign(path,PATH);
	$smarty->assign('getData',$getData);
	$smarty->display('class.html');
?>