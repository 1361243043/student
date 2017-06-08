<?php
header("Content-Type:text/html;charset=utf-8");
//session_start();//开启会话，或者开启全局变量
//载入配置文件
require_once('configs/template.inc.php');
session();
power(filename());//权限
if($_POST['submit'])
{     $sql1="select ro_name from spr_teacher join spr_role on        ro_id=".$_SESSION['role']." where ro_name='校长'";
   num($sql1,'studentintofront.php');
  $bj_stuname=$_POST['bj_stuname'];
  $bj_class=$_POST['bj_class'];
  //$bj_daily_show=$_POST['bj_daily_show'];
  $bj_date=$_POST['bj_date'];
  $radio=$_POST['radio'];
  $bj_lead_teacher=$_POST['bj_lead_teacher'];
  $bj_mul_result=$_POST['bj_mul_result'];
  $bj_jobcity=$_POST['bj_jobcity'];
  $sql="insert into `spr_before_job` (`bj_studentid`,`bj_mul_result`,`bj_jobcity`,`bj_lead_teacher`,`bj_date`,`bj_is_sure`)values('".$bj_stuname."','".$bj_mul_result."','".$bj_jobcity."','".$bj_lead_teacher."','".$bj_date."','".$radio."')";
	$rs=addData($sql);
	jumpTo('studentintofront.php',$rs);
}
else{
//---------------------------------------------
$sql_grade="select `mr_grade` from `spr_class` group by `mr_grade`";
$query_grade=getData($sql_grade);

//-------------------------------------
$sql_teacher="select * from `spr_teacher`";
$query_teacher=getData($sql_teacher);
$smarty->assign('query_grade',$query_grade);
$smarty->assign('ro_name',$_SESSION['role']);
$smarty->assign('query_teacher',$query_teacher);
$smarty->display('studfrontadd.html');
}
?>