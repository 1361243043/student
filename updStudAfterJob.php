<?php
header("Content-Type:text/html;charset=utf-8");
require_once 'configs/template.inc.php';
session();
power(filename());//权限
/*if($_GET['aj_id']!='')
{  //
	$sql="select * from spr_after_job join spr_class on aj_class_id=mr_id join spr_student on s_id=aj_student_name where    mr_coach=".$_SESSION['tid']." and aj_id=".$_GET['aj_id']."";
    $query=mysql_query($sql);
	$num=mysql_num_rows($query);
	if($num==1)
	{*/
	 if($_POST['sub']!='')
  {     //对就业后信息进行修改
	 $sql="update `spr_after_job` set `aj_job_company`='".$_POST['aj_job_company']."',`aj_post`='".$_POST['aj_post']."',`aj_job_date`='".$_POST['aj_job_date']."',`aj_jobcity`='".$_POST['aj_jobcity']."',`aj_job_pay`='".$_POST['aj_job_pay']."' where `aj_id`=".$_POST['aj_id']."";
	 $query=upData($sql);
   jumpTo('stuAfterJob.php',$query);
  }
  else{
	  //获得辅导员对应班级的所有学生姓名
	  // $query2=getData("select * from spr_student join spr_class on mr_id=s_class where mr_coach=".$_SESSION['tid']."");mr_coach=".$_SESSION['tid']." and
	  //获得修改信息内容
     $query=getData($sql="select * from spr_after_job join spr_class on aj_class_id=mr_id join spr_student on s_id=aj_student_name where aj_id=".$_GET['aj_id'].""); 
	 $smarty->assign('query',$query);
	//$query_class=getData("select * from  spr_class group by mr_grade");
	// $smarty->assign('query_class',$query_class);
	 //$smarty->assign('get',$query2);
     $smarty->display('updStuAfterJob.html');
   }
	 
	//}
	//else
		
	//{ $rs=0;
	//  jumpTo('stuAfterJob.php',$rs);
	//}  
//}

?>