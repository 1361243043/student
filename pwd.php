<?php
session_start();
header("content-type:text/html;charset=utf-8");
//载入配置文件
require_once('configs/template.inc.php');
if(isset($_POST['submit']))
{
	if($_SESSION['ro_name']=="学生")
	{
		$data=getData("select * from `spr_student` where s_name='".$_SESSION['name']."'");
		if($data[0][s_pwd]==$_POST['pwd'])
		{
			if($_POST['newpwd']==$_POST['anewpwd'])
			{
				$query=upData("update `spr_student` set `s_pwd`='".$_POST['newpwd']."' where `s_id`=".$data[0][s_id]);
				jumpTo('right.php',$query);
			}
			else
			{
				echo "<script>alert('两次密码不一致，请重新输入！');location='pwd.php'</script>";
			}
		}
		else
		{
			echo "<script>alert('对不起，密码错误！');location='pwd.php'</script>";
		}
	}
	else
	{
		$data=getData("select * from `spr_teacher` where t_name='".$_SESSION['name']."'");
		if($data[0][t_pwd]==$_POST['pwd'])
		{
			if($_POST['newpwd']==$_POST['anewpwd'])
			{
				$query=upData("update `spr_teacher` set `t_pwd`='".$_POST['newpwd']."' where `t_id`=".$data[0][t_id]);
				jumpTo('right.php',$query);
			}
			else
			{
				echo "<script>alert('两次密码不一致，请重新输入！');location='pwd.php'</script>";
			}
		}
		else
		{
			echo "<script>alert('对不起，密码错误！');location='pwd.php'</script>";
		}
	}
}
else
{
	$smarty->assign('name',$_SESSION['name']);
	$smarty->display('pwd.html');
}
?>