<?php
header("content-type:text/html;charset=utf-8");
require_once 'configs/template.inc.php';
session();
if(isset($_GET['id']))
{	
		
	$sql="select s.*,c.* from `spr_student` as s join `spr_class` as c on s.s_class=c.mr_id where s.s_id=".$_GET['id'];
		$data=getData($sql);
		$class=$data[0]['s_class'];
		$grade=$data[0]['mr_grade'];
		$_SESSION['class']=$class;
		$sql = "select * from `spr_class` where mr_grade='".$grade."'";
		$grade = getData($sql);
		$sql_c="select `mr_classid` from `spr_class` where 	mr_id='".$class."'";
		$data_c=getData($sql_c);
	if(!empty($_SESSION['tid']))
	{
		//判断登陆者是否为辅导员
		if($_SESSION['ro_id']==$_SESSION['t_role'])
		{
			//查询出该辅导员所带的班级

			$sql="select `s_name` from `spr_student`  where s_id= '".$_GET['id']."' and s_class in (select `mr_id` from `spr_class` where mr_coach='".$_SESSION['tid']."')";
			$query=mysql_query($sql);
			$num=mysql_num_rows($query);

			//判断要修改学生的班级是否为该辅导员所带的班级

			if(1==$num)
			{
				$smarty->assign('value',$value);
				$smarty->assign('data',$data);
				$smarty->assign('grade',$grade);
				$smarty->assign('data_c',$data_c);
				$smarty->display('studentUp.html');
			}
			else
			{
				echo "<center><br/><br/><br/><br/><br/><br/><font color='red'><b>对不起，不是本班学生，您没有权限修改！</b></font>"; 
				echo "<script>setTimeout('location.href=\"student.php\"',2000);</script>";
			}
		}
		else	
		{
			echo "<center><br/><br/><br/><br/><br/><br/><font color='red'><b>对不起，您不是辅导员，没有权限修改！</b></font>"; 
			echo "<script>setTimeout('location.href=\"student.php\"',2000);</script>";
		}
	}
	else
	{
		if(!empty($_SESSION['sid']))
		{
			
			//判断该学生要修改的是否为自己的信息

			if($_SESSION['sid']==$_GET['id'])
			{
				$smarty->assign('data',$data);
				$smarty->assign('grade',$grade);
				$smarty->assign('data_c',$data_c);
				$smarty->display('studentUp.html');
			}
			else
			{
				echo "<center><br/><br/><br/><br/><br/><br/><font color='red'><b>对不起，学生只能修改自己的信息！</b></font>"; 
				echo "<script>setTimeout('location.href=\"student.php\"',2000);</script>";
			}
		}
		
	}
}

//修改

else
{
	if($_POST['sub'])
	{
		$sql="select `s_head` from `spr_student` where s_id=".$_POST['hid'];
		$query=mysql_query($sql);
		$rs=mysql_fetch_array($query);
		 $aa=$rs['s_head'];
		 $path="upload/".$aa;
		//判断是否点击了浏览，并且点击了图片，如果不是空，说明点击了浏览
		if(!empty($_FILES['file']['tmp_name']))
	{echo 'qqq';
		//删除原路径中的图片
		if(file_exists($path))
		{
		@unlink($path);
		clearstatcache();
		//上传新图片
		$oldsname=$_FILES['file']['name'];
		$tmps=strrchr($oldsname,'.');
		$newsname=time().$tmps;
		echo $paths="upload/".$newsname;
		
		if(is_uploaded_file($_FILES['file']['tmp_name']))
		{
			echo 'aaa';
			if(move_uploaded_file($_FILES['file']['tmp_name'],$paths))
			{
				//修改图片的update
				echo $sql="update `spr_student` set `s_sex`='".$_POST['sex']."',`s_card`='".$_POST['card']."',`s_age`='".$_POST['age']."',s_dormitory='".$_POST['dor']."',s_address='".$_POST['address']."',s_class='".$_POST['class']."',s_phone='".$_POST['phone']."',s_father_phone='".$_POST['fp']."',s_qq='".$_POST['QQ']."',`s_birthday`='".$_POST['bir']."',`s_nation`='".$_POST['nation']."',s_head='".$newsname."',`s_schooltimes`='".$_POST['date']."',`is_atschool`='".$_POST['issure']."' where s_id=".$_POST['hid'];
			}		

		}
		}
	}
	else
		{
		echo $sql="update `spr_student` set `s_sex`='".$_POST['sex']."',`s_card`='".$_POST['card']."',`s_age`='".$_POST['age']."',s_dormitory='".$_POST['dor']."',s_address='".$_POST['address']."',s_class='".$_POST['class']."',s_phone='".$_POST['phone']."',s_father_phone='".$_POST['fp']."',s_qq='".$_POST['QQ']."',`s_birthday`='".$_POST['bir']."',`s_nation`='".$_POST['nation']."',`s_schooltimes`='".$_POST['date']."',`is_atschool`='".$_POST['issure']."'  where s_id=".$_POST['hid'];
		
		}
		$query=upData($sql);
		jumpTo('student.php',$query);
	}
	else
	{
	$sql="select s.*,c.* from `spr_student` as s join `spr_class` as c on s.s_class=c.mr_id where s.s_id=".$_GET['id'];
		$data=getData($sql);
		$class=$data[0]['s_class'];
		$grade=$data[0]['mr_grade'];
		$_SESSION['class']=$class;
		$sql = "select * from `spr_class` where mr_grade='".$grade."'";
		$grade = getData($sql);
		$sql_c="select `mr_classid` from `spr_class` where 	mr_id='".$class."'";
		$data_c=getData($sql_c);
		$smarty->assign('value',$value);
				$smarty->assign('data',$data);
				$smarty->assign('grade',$grade);
				$smarty->assign('data_c',$data_c);
	$smarty->display('studentUp.html');
	}
	
}
?>