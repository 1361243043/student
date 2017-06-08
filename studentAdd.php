<?php
header("content-type:text/html;charset=utf-8");
require_once 'configs/template.inc.php';
session();
//权限power(filename());
if(isset($_POST['submit']))
{
	$sex=$_POST['sex']==1?'男':'女';
	$oldname=$_FILES['file']['name']; 
	$c=strrchr($oldname,'.');
	$newname=time().$c;
	$pub_time=date('y-m-d h:i:s');
	$pub_man=$_SESSION['user'];
	$path="upload/".$newname;
		
	//判断是否上传了头像

	if(is_uploaded_file($_FILES['file']['tmp_name']))
	{
		if(move_uploaded_file($_FILES['file']['tmp_name'],$path))
		{
			//上传了头像的插入

			$sql="insert into `spr_student` (`s_name`,`s_pwd`,`s_age`,`s_card`,`s_birthday`,`s_address`,`s_class`,`s_dormitory`,`s_phone`,`s_nation`,`s_father`,`s_father_phone`,`s_schooltimes`,`s_sex`,`s_qq`,`is_atschool`,`is_role`,`s_head`) values('".$_POST['name']."','".$_POST['pwd']."','".$_POST['age']."','".$_POST['card']."','".$_POST['bir']."','".$_POST['address']."','".$_POST['class_id']."','".$_POST['dor']."','".$_POST['phone']."','".$_POST['nation']."','".$_POST['father']."','".$_POST['fp']."','".$_POST['date']."','".$sex."','".$_POST['QQ']."','".$_POST['issure']."','".$_POST['role']."','".$newname."')";
		}
	}
	//不上传头像的插入
	else
	{
	$sql="insert into `spr_student` (`s_name`,`s_pwd`,`s_age`,`s_card`,`s_birthday`,`s_address`,`s_class`,`s_dormitory`,`s_phone`,`s_nation`,`s_father`,`s_father_phone`,`s_schooltimes`,`s_sex`,`s_qq`,`is_atschool`,`is_role`) values('".$_POST['name']."','".$_POST['pwd']."','".$_POST['age']."','".$_POST['card']."','".$_POST['bir']."','".$_POST['address']."','".$_POST['class_id']."','".$_POST['dor']."','".$_POST['phone']."','".$_POST['nation']."','".$_POST['father']."','".$_POST['fp']."','".$_POST['date']."','".$sex."','".$_POST['QQ']."','".$_POST['issure']."','".$_POST['role']."')";
	}
	$query=addData($sql);
	jumpTo('student.php',$query);
}
else
{
	if(!empty($_SESSION['tid']))
	{
		//get data from spr_class
		$sql = "select * from `spr_class` group by mr_grade";
		$grade = getData($sql);

		//查询出辅导员的id号

		$sql_r="select `ro_id` from `spr_role` where ro_name='辅导员'";
		$data_r=getData($sql_r);
		$_SESSION['ro_id']=$data_r[0]['ro_id'];

		//查询出登陆者的角色

		$sql_t="select `t_role` from `spr_teacher` where t_id='".$_SESSION['tid']."'";
		$data_t=getData($sql_t);
		$_SESSION['t_role']=$data_t[0]['t_role'];

		//判断登陆者是否为辅导员

		if($_SESSION['ro_id']==$_SESSION['t_role'])
		{
			$sql="select * from `spr_class` where mr_coach='".$_SESSION['tid']."'";
			$data=getData($sql);
			$sql_r="select * from `spr_role` where `ro_name`='学生'";
			$role=getData($sql_r);
			$smarty->assign('role',$role);
			$smarty->assign('data',$data);
			$smarty->assign('grade',$grade);
			$smarty->display('studentAdd.html');
		}

		else
		{
			echo "<center><br/><br/><br/><br/><br/><br/><font SIZE=5 color='red'><b>对不起，您不是辅导员，没有权限添加！</b></font>"; 
			echo "<script>setTimeout('location.href=\"student.php\"',2000);</script>";
		}
	}
	else
	{
		echo "<center><br/><br/><br/><br/><br/><br/><font SIZE=5 color='red'><b>对不起，学生没有权限添加！</b></font>"; 
		echo "<script>setTimeout('location.href=\"student.php\"',2000);</script>";
	}
}
?>