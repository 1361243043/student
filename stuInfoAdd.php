<?php
session_start();
header("content-type:text/html;charset=utf-8");
require_once('configs/template.inc.php');
session();
//power(filename());//权限
if($_SESSION['role']=='管理员')
{
if(isset($_POST['submit']))
{   
	$t_name=$_POST['t_name'];
    $t_pwd=$_POST['t_pwd'];
    $t_age=$_POST['t_age'];
	$t_card=$_POST['t_card'];
	$t_birthday=$_POST['t_birthday'];
    $t_address=$_POST['t_address'];
    $t_phone=$_POST['t_phone'];
    $t_nation=$_POST['t_nation'];
    $t_role=$_POST['t_role'];
	 $sql="insert into `spr_teacher` (`t_name`,`t_pwd`,`t_age` ,`t_card`,`t_birthday`,`t_address`,`t_phone`,`t_nation`,`t_role`) values ('".$t_name."','".$t_pwd."','".$t_age."','".$t_card."','".$t_birthday."','".$t_address."','".$t_phone."','".$t_nation."','".$t_role."')";
$query=addData($sql);
jumpTo('stuInfoManage.php',$query);
}
else{
	$sql_role="select * from `spr_role` where ro_name!='学生'";
	$getData=getData($sql_role);
	$smarty->assign('getData',$getData);
   $smarty->display('stuInfoAdd.html');
   }
 }
  else
{
	echo "<center><br/><br/><br/><br/><br/><br/><font color='red'><b>对不起，您没有权限添加</b></font>"; 
	echo "<script>setTimeout('location.href=\"stuInfoManage.php\"',1000);          </script>";
}
?>