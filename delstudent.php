<?php
header("Content-Type:text/html;charset=utf-8");
require_once('configs/template.inc.php');
session();
power(filename());//权限
if(isset($_GET['id']))
{	
	$id=$_GET['id'];
	//判断是否是老师登录
	if(!empty($_SESSION['tid']))
	{
		//判断登陆者是否为辅导员

		if($_SESSION['ro_id']==$_SESSION['t_role'])
		{
			//查询出该学生所在班级

			$sql="select `s_head` ,`s_class` from `spr_student` where s_id=".$id;
			$query=mysql_query($sql);
			$rs=mysql_fetch_array($query);
			$class=$rs['s_class'];		
			//查询出该学生所在班级的辅导员
			$sql_t="select `mr_coach` from `spr_class` where mr_id='".$class."'";
			$query_t=mysql_query($sql_t);
			$rs_t=mysql_fetch_array($query_t);
			$coach=$rs_t['mr_coach'];	
			//判断要删除的是否为辅导员本班的学生
			if($coach==$_SESSION['tid'])
			{
				//图片的路径
				$path='upload/'.$rs['s_head'];
				//清空缓存和删除文件夹中的图片
				if(file_exists($path))
				{
					@unlink($path);//删除路径中的图片
					clearstatcache();//清空缓存
				}
				//删除数据库中的信息
				$sql_del="delete from `spr_student` where s_id=".$id;
				$query_del=delData($sql_del);
				jumpTo('student.php',$query_del);
			}
			//如不是本班学生没有权限删除,
			else
			{
				echo "<center><br/><br/><br/><br/><br/><br/><font SIZE=5 color='red'><b>对不起，不是本班学生，您没有权限删除！</b></font>"; 
				echo "<script>setTimeout('location.href=\"student.php\"',2000);</script>";
				die();
			}
		}
		else
		{
			echo "<center><br/><br/><br/><br/><br/><br/><font SIZE=5 color='red'><b>对不起，您不是辅导员，没有权限删除！</b></font>";
			echo "<script>setTimeout('location.href=\"student.php\"',2000);</script>";
			die();
		}
	}
	//学生没有权限删除,
	else
	{
			echo "<center><br/><br/><br/><br/><br/><br/><font SIZE=5 color='red'><b>对不起，学生没有权限删除！</b></font>"; 
			echo "<script>setTimeout('location.href=\"student.php\"',2000);</script>";
			die();
	}
}
else if (isset($_POST['ok']))
{
	foreach($_POST['checkbox'] as $val)
	{   
		$arr=getData("select * from `spr_student` where s_id=".$val);
		$path='upload/'.$arr['0']['s_head'];
		//清空缓存和删除文件夹中的图片
		if(file_exists($path))
		{
			@unlink($path);//删除路径中的图片
			clearstatcache();//清空缓存
		}
		//删除数据库中的信息
		$sql_del="delete from `spr_student` where s_id=".$arr['0']['s_id'];
		$query_del=delData($sql_del);
	}
	jumpTo('student.php',$query_del);
}
?>