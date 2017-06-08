<?php
header("content-type:text/html;charset=utf-8");
//载入配置文件
require_once('configs/template.inc.php');
session();
//filename();
	$sql_student.=$_GET['mr_grade']?" `mr_grade`='".$_GET['mr_grade']."' and":"";
	$sql_student.=$_GET['mr_classid']?" `mr_classid`='".$_GET['mr_classid']."' and":"";
	$sql_student.=$_GET['dor']?" `s_dormitory`='".$_GET['dor']."' and":"";
	$sql_student.=$_GET['s_name']?" `s_name`='".$_GET['s_name']."' and":"";
	if('辅导员'==$_SESSION['role'])
	{
		$sql_student.=" t_id=".$_SESSION['id'];
	}
	else if('学生'==$_SESSION['role'])
	{
		$sql_student.=" s_id='".$_SESSION['id']."'";
	}
	else
	{
		$sql_student.=" 1";
	}
	$pagelf="&mr_grade=".$_GET['mr_grade']."&mr_classid=".$_GET['mr_classid']."&s_name=".$_GET['s_name']."&s_dormitory=".$_GET['dor']."";
	 $sql_student="select * from `spr_student` join `spr_class` on spr_student.s_class=spr_class.mr_id join `spr_teacher` on spr_class.mr_coach=spr_teacher.t_id where ".$sql_student."";
	$_GET['page']?($now = $_GET['page']):($now=$_GET['page']?$_GET['page']:1);
	$num      = 10;
	$start    = ($now-1)*$num;
	$pageList = pageShow($sql_student, $now, $num) ;
	$sql_student.=" limit ".$start.",".$num."";
	$smarty->assign('pagelf',$pagelf);
	$smarty->assign('pageList',$pageList);
	$smarty->assign('data',getData($sql_student));
	$smarty->assign('class',getData("select * from `spr_class` group by `mr_classid`"));
	$smarty->assign('grade',getData("select * from `spr_class` group by `mr_grade`"));
	//宿舍
	$sql_d="select * from `spr_student` group by s_dormitory";
	$dor = getData($sql_d);
	$smarty->assign('dor',$dor);
	$smarty->assign('teacher',getData("select * from `spr_teacher` where `t_role`=(select `ro_id` from `spr_role` where ro_name='".辅导员."') group by `t_name`"));
	$smarty->assign('id',1);
	$smarty->assign('str','<a href="addStudent.php">添加</a>');
	$smarty->display('student.html');
?>