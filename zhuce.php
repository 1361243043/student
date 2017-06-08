<?php
header("content-type:text/html;charset=utf-8");
require_once 'configs/template.inc.php';
ini_set("display_errors","off");
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

			$sql="insert into `spr_student` (`s_name`,`s_pwd`,`s_age`,`s_card`,`s_birthday`,`s_address`,`s_class`,`s_dormitory`,`s_phone`,`s_nation`,`s_father`,`s_father_phone`,`s_schooltimes`,`s_sex`,`s_qq`,`is_atschool`,`is_role`,`s_head`) values('".$_POST['name']."','".$_POST['pwd']."','".$_POST['age']."','".$_POST['card']."','".$_POST['bir']."','".$_POST['address']."','".$_POST['ban']."','".$_POST['dor']."','".$_POST['phone']."','".$_POST['nation']."','".$_POST['father']."','".$_POST['fp']."','".$_POST['date']."','".$sex."','".$_POST['QQ']."','".$_POST['is_atschool']."','".$_POST['role']."','".$newname."')";
		}
	}
	//不上传头像的插入
	else
	{
	$sql="insert into `spr_student` (`s_name`,`s_pwd`,`s_age`,`s_card`,`s_birthday`,`s_address`,`s_class`,`s_dormitory`,`s_phone`,`s_nation`,`s_father`,`s_father_phone`,`s_schooltimes`,`s_sex`,`s_qq`,`is_atschool`,`is_role`) values('".$_POST['name']."','".$_POST['pwd']."','".$_POST['age']."','".$_POST['card']."','".$_POST['bir']."','".$_POST['address']."','".$_POST['ban']."','".$_POST['dor']."','".$_POST['phone']."','".$_POST['nation']."','".$_POST['father']."','".$_POST['fp']."','".$_POST['date']."','".$sex."','".$_POST['QQ']."','".$_POST['is_atschool']."','".$_POST['role']."')";
	}
	$query=addData($sql);
	jumpTo('login.php',$query);
}

else
{
		//get data from spr_class
		$sql = "select * from `spr_class` group by mr_grade";
		$grade = getData($sql);

		
	
			$sql_r="select * from `spr_role` where `ro_name`='学生'";
			$role=getData($sql_r);
			$smarty->assign('role',$role);
			$smarty->assign('grade',$grade);
			$smarty->display('zhuce.html');
}
?>