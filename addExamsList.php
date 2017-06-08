<?php
header("content-type:text/html;charset=utf-8");
//载入配置文件
require_once('configs/template.inc.php');
session();
power(filename());//权限
	//学生表、班级表、成考信息表连接并限制老师对本班学生的操作的功能
	//$query=getData("select * from spr_student join spr_class on mr_id=s_class join spr_ck on s_id=at_type where mr_coach=".$_SESSION['tid']."");
	if($_POST['sub'])
	{ 
	$at_type=$_POST['bj_stuname'];
	$s_class=$_POST['s_class'];
	$at_date=$_POST['at_date'];
	$at_result=$_POST['at_result'];
	$at_issign=$_POST['at_issign'];
	$at_ispass=$_POST['at_ispass'];
	$sql="insert into `spr_ck`(`at_type`,`at_date`,`at_result`,`at_issign`,`at_ispass`) values('".$at_type."','".$at_date."','".$at_result."','".$at_issign."','".$at_ispass."')";
	 $query=addData($sql);
	jumpTo('examsList.php',$query);
	}
	else
	{ 
		$sql="select * from  spr_class group by mr_grade";
		$query_grade=getData($sql);
		$smarty->assign('query_grade',$query_grade);
		$smarty->display('addExamsList.html');
	}
?>