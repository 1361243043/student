<?php
session_start();
header("content-type:text/html;charset=utf-8");
require_once('configs/template.inc.php');
session();
$role_name=$_SESSION['role'];
$name=$_SESSION['name'];
if($role_name!='学生')
{
$sql_user="select * from  `spr_teacher`  where t_name='".$name."'";
}
else{
$sql_user="select * from  `spr_student`  where s_name='".$name."'";
}

$smarty->assign('name',$name);
$smarty->assign('role_name',$role_name);
$getData=getData($sql_user);
$smarty->assign('getData',$getData);
$smarty->display('user.html');


if(isset($_POST['submit']))
{
echo "<script>alert('正在返回');setTimeout('location.href=\"right.php\"',1000);</script>";
}
?>