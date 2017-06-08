<?php
header("Content-Type:text/html;charset=utf-8");
require_once 'configs/template.inc.php';
session();
//define(pth,__FILE__);
//$filename= basename(pth);
//power($filename);

if($_POST['check'])
	{
	if('学生'==$_SESSION['role'])
	{
	 $sql="select * from `spr_after_job` join `spr_student` on aj_student_name=s_id join `spr_class` on aj_class_id=mr_id where `mr_grade` like('%".$_POST['grade']."%') and `mr_classid` like('%".$_POST['class']."%') and `s_name` like('%".$_POST['people']."%') and `aj_jobcity` like('%".$_POST['city']."%')  and `s_id`=".$_SESSION['id']."";
	}
      else if('辅导员'==$_SESSION['role'])
		{
	  $sql="select * from `spr_after_job` join `spr_student` on aj_student_name=s_id join `spr_class` on aj_class_id=mr_id where `mr_grade` like('%".$_POST['grade']."%')and `mr_classid` like('%".$_POST['class']."%') and `s_name` like('%".$_POST['people']."%') and `aj_jobcity` like('%".$_POST['city']."%') and t_id='".$_SESSION['id']."'";
	  }
	  else
		{
	  $sql="select * from `spr_after_job` join `spr_student` on aj_student_name=s_id join `spr_class` on aj_class_id=mr_id where `mr_grade` like('%".$_POST['grade']."%')and `mr_classid` like('%".$_POST['class']."%') and `s_name` like('%".$_POST['people']."%') and `aj_jobcity` like('%".$_POST['city']."%')";
	  }




    /*$pageList='<table width=100%><tr>
	             <td width=100% align=center>
				 <input type="button" name="return" value="返回" onclick="javascript:history.back(-1)">
				 </td></tr></table>';
			$smarty->assign('pageList',$pageList);*/
   }
else
	{
	if('学生'==$_SESSION['role'])
		{
      $sql="select * from spr_after_job join spr_student on aj_student_name=s_id join spr_class on aj_class_id=mr_id where s_id=".$_SESSION['id']."";
	  }
	  else if('辅导员'==$_SESSION['role'])
		{
	     $sql="select * from spr_after_job join spr_student on aj_student_name=s_id join spr_class on aj_class_id=mr_id where t_id='".$_SESSION['id']."'";
	    }
       else
		{
         $sql="select * from spr_after_job join spr_student on aj_student_name=s_id join spr_class on aj_class_id=mr_id";
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
      $smarty->assign('fenye',$pagenav);
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
$smarty->assign('getdata',$query);
$smarty->display('studentintolater.html');
?>