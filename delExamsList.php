<?php
require_once 'configs/template.inc.php';
session();
power(filename());//权限
$checkbox=$_POST['checkbox'];
if($_GET['at_id'])
{ 
	$power="select * from spr_teacher join spr_role on t_role=ro_id   where ro_id=".$_SESSION['role']." and ro_name='辅导员'";
     num($power,'examsList.php');
	//删除成考表数据（删除成考表传过的id并判断学生号是否在老师的权限内）	
   $sql="delete from spr_ck where at_id=".$_GET['at_id']." and at_type in(select s_id from spr_student join spr_class on s_class=mr_id where mr_coach=".$_SESSION['tid'].")";
  
}
else
{
   $id=implode(',',$checkbox);
   $sql="delete from `spr_xf_sort` where te_id in (".$id.")";
}
$rs=delData($sql);
jumpTo('examsList.php',$rs);
?>