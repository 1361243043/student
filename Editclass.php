<?php
header("content-type:text/html;charset=utf-8");
require_once('configs/template.inc.php');
power(filename());//权限
if(isset($_POST['submit'])&&isset($_GET['mr_id']))
{ 
	//$sql1="select * from `spr_teacher` join `spr_role` on t_role=ro_id where  ro_name='校长' or ro_name='管理员'";
   //num($sql1,'class.php');
   $sql="update `spr_class` set `mr_classid`='".$_POST['mr_classid']."',`mr_grade`='".$_POST['mr_grade']."',
	`mr_coach`='".$_POST['mr_coach']."' where mr_id='".$_GET['mr_id']."'";
	$query=upData($sql);
	jumpTo('class.php',$query);
}
else{
$sql_teacher="select * from `spr_teacher` where t_role='3'";
$spr_class= getData("select * from `spr_class` join `spr_teacher` on spr_teacher.t_id=spr_class.mr_coach  where mr_id=".$_GET['mr_id']."");
$getData=getData($sql_teacher);
$smarty->assign(spr_class,$spr_class);
$smarty->assign(getData,$getData);
$smarty->assign('path',PATH);
$smarty->display('Editclass.html');}
?>