<?php
header("content-type:text/html;charset=utf-8");
require_once('configs/template.inc.php');
power(filename());//权限
if(isset($_POST['submit']))
{  
	//$sql1="select * from `spr_teacher` join `spr_role` on t_role=ro_id where  ro_name='校长' or ro_name='管理员'";
   //num($sql1,'class.php');
	 $mr_classid=$_POST['mr_classid'];
     $mr_grade=$_POST['mr_grade'];
     $mr_coach=$_POST['mr_coach'];
	 $sql="insert into `spr_class` (`mr_classid`,`mr_grade`,`mr_coach`) values ('".$mr_classid."','".$mr_grade."','".$mr_coach."')";
     $query=addData($sql);
     jumpTo('class.php',$query);
}
else{
	$sql_teacher="select * from `spr_teacher` join `spr_role` on `spr_teacher`.t_role=`spr_role`.ro_id where `ro_name`='辅导员'";
	$getData=getData($sql_teacher);
	$smarty->assign('getData',$getData);
	$smarty->display('Addclass.html');
	}
?>