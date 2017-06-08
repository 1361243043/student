<?php
session_start();
header("content-type:text/html;charset=utf-8");
require_once('configs/template.inc.php');
session();
//power(filename());权限
if($_SESSION['role']=='管理员')
{
if(isset($_POST['submit'])&&isset($_GET['t_id']))
{ $t_id=$_POST['t_id'];
	//$t_name=$_POST['t_name'];
    $t_pwd=$_POST['t_pwd'];
    $t_age=$_POST['t_age'];
	$t_card=$_POST['t_card'];
	$t_birthday=$_POST['t_birthday'];
    $t_address=$_POST['t_address'];
    $t_phone=$_POST['t_phone'];
  $t_nation=$_POST['t_nation'];
    $t_role=$_POST['t_role'];
 $sql="update `spr_teacher` set `t_pwd`='".$t_pwd."',`t_age`= '".$t_age."',`t_card`='".$t_card."',`t_birthday`='".$t_birthday."',`t_address`='".$t_address."',`t_phone`='".$t_phone."',`t_nation`='".$t_nation."',`t_role`='".$t_role."'  where `t_id`='".$_GET['t_id']."'";
 $query=upData($sql);
jumpTo('stuInfoManage.php',$query);
}
else{
$sql_role="select * from `spr_role`  join `spr_teacher` on spr_teacher.t_role=spr_role.ro_id where t_id='".$_GET['t_id']."'";
$sql_role2="select * from `spr_role` where ro_name!='学生'";
$getData1=getData($sql_role);
$getData2=getData($sql_role2);
$smarty->assign('getData1',$getData1);
$smarty->assign('getData2',$getData2);
$smarty->display('stuInfoEdit.html');
}
}
else{
	echo "<center><br/><br/><br/><br/><br/><br/><font color='red'><b>对不起，您没有权限修改</b></font>"; 
	echo "<script>setTimeout('location.href=\"stuInfoManage.php\"',1000);          </script>";
}

?>