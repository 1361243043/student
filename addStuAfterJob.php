<?php
header("Content-Type:text/html;charset=utf-8");
require_once 'configs/template.inc.php';
session_start();//开启会话，或者开启全局变量
session();
power(filename());//权限
//class表与student表连接，限制登录的辅导员只对本班级学生操作
//$query=getData("select * from spr_class join spr_student on mr_id=s_class where mr_coach=".$_SESSION['tid']."");
//对就业后信息进行插入并跳转
if($_POST['sub']!='')
{ 
	echo $sql="insert into `spr_after_job`(`aj_student_name`,`aj_class_id`,`aj_job_company`,`aj_post`,`aj_job_date`,`aj_jobcity`,`aj_student_phone`,`aj_job_pay`,`aj_my_address`,`aj_address`,`aj_company_show`) values('".$_POST['bj_stuname']."','".$_POST['class_id']."','".$_POST['aj_job_company']."','".$_POST['aj_post']."','".$_POST['aj_job_date']."','".$_POST['aj_jobcity']."','".$_POST['aj_student_phone']."','".$_POST['aj_job_pay']."','".$_POST['aj_my_address']."','".$_POST['aj_address']."','".$_POST['aj_company_show']."')";
     $query=addData($sql);
     jumpTo('stuAfterJob.php',$query);
}
else
{
$rs=getData("select * from `spr_class` group by mr_grade");
//having mr_coach=".$_SESSION['tid']."
$smarty->assign('query_grade',$rs);
$smarty->display('addStuAfterJob.html');
}
?>