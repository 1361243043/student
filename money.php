<?php
header("Content-Type:text/html;charset=utf-8");
require_once 'configs/template.inc.php';
session();
power(filename());//х╗оч

	$sql_money.=$_GET['mr_grade']?"`mr_grade`='".$_GET['mr_grade']."' and":"";
	$sql_money.=$_GET['mr_classid']?"`mr_classid`='".$_GET['mr_classid']."' and":"";
	$sql_money.=$_GET['s_name']?"`s_name`='".$_GET['s_name']."' and":"";
	$sql_money.=$_GET['add_name']?"`add_name`='".$_GET['add_name']."' and":"";
	$sql_money.=$_GET['ch_isverify']?" `ch_isverify`='".$_GET['ch_isverify']."' and":"";
	$sql_money.=$_GET['te_type']?"`te_type`='".$_GET['te_type']."' and":"";
	$sql_money.=" 1";
   $pagelf="&mr_grade=".$_GET['mr_grade']."&mr_classid=".$_GET['mr_classid']."&s_name=".$_GET['s_name']."&add_name=".$_GET['add_name']."&te_type=".$_GET['te_type']."&ch_isverify=".$_GET['ch_isverify']."&submit=".$_GET['submit']."";

   $sql_money="select * from `spr_xf_sort` join `spr_charge` on `te_id`=`ch_type` join `spr_student` on `s_id`=`ch_student_id` join `spr_class` on `mr_id`=`s_class`
   where ".$sql_money."";

$_GET['page']?($now = $_GET['page']):($now=$_GET['page']?$_GET['page']:1);
$num      = 5;
$start    = ($now-1)*$num; 
$pageList = pageShow($sql_money, $now, $num) ;
$sql_money.=" limit ".$start.",".$num."";
$query=getData($sql_money);
$pageList['page']=$_GET['page'];
$smarty->assign('pagelf',$pagelf);
$smarty->assign('pageList',$pageList);

	$sql="select * from `spr_student`";	
	$arr=getData($sql);
	$smarty->assign('arrr',$arrr);
		 
	$sql1="select distinct(mr_grade) from `spr_class` group by mr_grade";
	$arr3=getData($sql1);
	$smarty->assign('arr3',$arr3);

	$sql2="select distinct(mr_classid) from `spr_class` group by mr_classid";
	$arr4=getData($sql2);
	$smarty->assign('arr4',$arr4);


	$sql3="select * from `spr_xf_sort`";	
	$arr2=getData($sql3);
	$smarty->assign('arr2',$arr2); 
	$smarty->assign('query',$query);
$smarty->assign('id',1);
$smarty->display('money.html');

?>
