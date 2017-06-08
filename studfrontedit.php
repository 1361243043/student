<?php
header("Content-Type:text/html;charset=utf-8");
//载入配置文件
require_once('configs/template.inc.php');
session();
power(filename());//权限
if($_POST['submit'])
	{

	if($_SESSION['role']=='辅导员')
		{
		     $id=$_POST['bj_id'];
		 	$bj_daily_show=$_POST['bj_daily_show'];
	        $sql="update `spr_before_job` set `bj_daily_show`='".$bj_daily_show."' where bj_id=$id";
	    }
     else
		{
		    $id=$_POST['bj_id'];
			$bj_date=$_POST['bj_date'];
			$radio=$_POST['radio'];
		  	$bj_lead_teacher=$_POST['bj_lead_teacher'];
			$bj_mul_result=$_POST['bj_mul_result'];
		   $bj_jobcity=$_POST['bj_jobcity'];
           $sql="update `spr_before_job` set `bj_mul_result`='".$bj_mul_result."',`bj_jobcity`='".$bj_jobcity."',`bj_lead_teacher`='".$bj_lead_teacher."',`bj_date`='".$bj_date."',`bj_is_sure`='".$radio."' where `bj_id`=$id";
	  }
//die();
$rs=upData($sql);
jumpTo('studentintofront.php',$rs);
	}
else
 {
	 	  //$sql1="select ro_name from spr_teacher join spr_role on      ro_id=".$_SESSION['role']." where ro_name in('辅导员','财务','校长')";
          //num($sql1,'studentintofront.php');
$id=$_GET['id'];
$rs=getData($sql="select * from `spr_before_job` join `spr_student` on `spr_before_job`.bj_studentid=`spr_student`.s_id where `bj_id`=$id");
$sql_teacher="select * from `spr_teacher`";
$query_teacher=getData($sql_teacher);
$smarty->assign('query_class',$query_class);
$smarty->assign('ro_name',$_SESSION['role']);
$smarty->assign('query_teacher',$query_teacher);
$smarty->assign('rs',$rs);
$smarty->display('studfrontedit.html');
}
?>