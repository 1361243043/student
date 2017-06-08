<?php
header("Content-Type:text/html;charset=utf-8");
require_once 'configs/template.inc.php';
session();
power(filename());//权限
if($_GET['aj_id'])
{//删除成考表数据（删除成考表传过的id并判断学生号是否在老师的权限内）
	//$sql="select * from spr_after_job where aj_id=".$_GET['aj_id']." and aj_student_name in(select s_id from spr_student join spr_class on s_class=mr_id where mr_coach=".$_SESSION['tid'].")";
	//$query=mysql_query($sql);
	//$num=mysql_num_rows($query);
	//if($num==1)
	//{ and aj_student_name in(select s_id from spr_student join spr_class on s_class=mr_id where mr_coach=".$_SESSION['tid'].")")
   $query=delData("delete from `spr_after_job` where `aj_id`=".$_GET['aj_id']."");
	//}
	//else
		
	//{
	//  $rs=0;
	//}
	jumpTo('stuAfterJob.php',$query);
}
?>