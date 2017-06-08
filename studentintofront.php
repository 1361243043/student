<?php
header("Content-Type:text/html;charset=utf-8");
session_start();//开启会话，或者开启全局变量
//载入配置文件
require_once('configs/template.inc.php');
power(filename());//权限
if($_GET['sub'])
   { 
	   if($_SESSION['role']=='辅导员')
    {
	$sql="select * from `spr_before_job` join `spr_student` on spr_before_job.bj_studentid=spr_student.s_id join `spr_teacher` on spr_before_job.bj_lead_teacher=spr_teacher.t_id join `spr_class` on spr_class.mr_id=spr_student.s_class where mr_grade like '%".$_GET['mr_grade']."%' and mr_classid like '%".$_GET['mr_classid']."%' and bj_lead_teacher like '%".$_GET['t_name']."%' and bj_jobcity like '%".$_GET['jobcity']."%' and s_name like '%".$_GET['s_name']."%' and `mr_classid`='".$_SESSION['mr_classid']."'";
	}
	else if($_SESSION['role']=='学生')
     {
	$sql="select * from `spr_before_job` join `spr_student` on spr_before_job.bj_studentid=spr_student.s_id join `spr_teacher` on spr_before_job.bj_lead_teacher=spr_teacher.t_id join `spr_class` on spr_class.mr_id=spr_student.s_class where mr_grade like '%".$_GET['mr_grade']."%' and mr_classid like '%".$_GET['mr_classid']."%' and bj_lead_teacher like '%".$_GET['t_name']."%' and bj_jobcity like '%".$_GET['jobcity']."%' and s_name like '%".$_GET['s_name']."%' and `s_id`='".$_SESSION['id']."'";
	}
	else
		  {
	$sql="select * from `spr_before_job` join `spr_student` on spr_before_job.bj_studentid=spr_student.s_id join `spr_teacher` on spr_before_job.bj_lead_teacher=spr_teacher.t_id join `spr_class` on spr_class.mr_id=spr_student.s_class where mr_grade like '%".$_GET['mr_grade']."%' and mr_classid like '%".$_GET['mr_classid']."%' and bj_lead_teacher like '%".$_GET['t_name']."%' and bj_jobcity like '%".$_GET['jobcity']."%' and s_name like '%".$_GET['s_name']."%'";
	}
   }
  else  
   { 
	   if($_SESSION['role']=='辅导员')
    {
   $sql="select * from `spr_before_job` join `spr_student` on spr_before_job.bj_studentid=spr_student.s_id join `spr_teacher` on spr_before_job.bj_lead_teacher=spr_teacher.t_id join `spr_class` on spr_class.mr_id=spr_student.s_class where `mr_classid`='".$_SESSION['mr_classid']."'";
	}
	else if($_SESSION['role']=='学生')
    {
    $sql="select * from `spr_before_job` join `spr_student` on spr_before_job.bj_studentid=spr_student.s_id join `spr_teacher` on spr_before_job.bj_lead_teacher=spr_teacher.t_id join `spr_class` on spr_class.mr_id=spr_student.s_class where `s_id`='".$_SESSION['id']."'";
	}
	else
       {
       $sql="select * from `spr_before_job` join `spr_student` on spr_before_job.bj_studentid=spr_student.s_id join `spr_teacher` on spr_before_job.bj_lead_teacher=spr_teacher.t_id join `spr_class` on spr_class.mr_id=spr_student.s_class";
	 }
  }
     $query=mysql_query($sql);
	  $num=mysql_num_rows($query);//统计数据数量
	   @$page=intval($_GET['page']);
	   pageft($num,5);
	   if($firstcount>=0)
	   {
		$sql.=" limit ".$firstcount.",5";
	   }
	  $query=getData($sql);

//print_r($power2);

$sql_ch_real_money="select ch_student_id,sum(ch_real_money) as sum from `spr_charge` group by ch_student_id";
$ch_real_money=getData($sql_ch_real_money);

//-----------------------------

$sql_class="select mr_grade from `spr_class` group by `mr_grade`";
$query_class=getData($sql_class);
$sql_teacher="select * from `spr_teacher`";
$query_teacher=getData($sql_teacher);
$sql_classid="select mr_classid from `spr_class` group by `mr_classid`";
$query_classid=getData($sql_classid);
//----------------------------------
$smarty->assign('id',1);
$smarty->assign('query_classid',$query_classid);
$smarty->assign('query_class',$query_class);
$smarty->assign('query_teacher',$query_teacher);
$smarty->assign('getData',$query);
$smarty->assign('charge',$ch_real_money);
$smarty->assign('fenye',$pagenav);
$smarty->display('studentintofront.html');
?>