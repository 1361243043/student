<?php
header("Content-Type:text/html;charset=utf-8");
session_start();//开启会话，或者开启全局变量
//启用会话
//载入数据库文件
require_once 'configs/template.inc.php';
if($_SESSION['type']==0)
{
	//判断是否与数据库用户名一致
  if($_SESSION['name']=='')
{
	echo "<center><br/><br/><br/><br/><br/><br/><font color='red' size=3><b>退出失败</b></font>";
	echo "<script language='javascript'>
      setTimeout(\"window.location='login.php'\",1000)
     </script>";
}
else
{ 
	$_SESSION['name']='';
    $_SESSION['id']='';
    echo "";
	 echo "<center><br/><br/><br/><br/><br/><br/><font color='red' size=3><b>成功退出，请重新登陆</b></font>";
	echo "<script language='javascript'>
      setTimeout(\"window.location='login.php'\",1000)
     </script>";
}


}

   else
	{

			//判断是否与数据库用户名一致

		if($_SESSION['name']=='')
		   {
				echo "faile";
			    echo "<script language='javascript'>
				  setTimeout(\"window.location='login.php'\",1000)
				 </script>";
			}
			else
			{ 
				$_SESSION['name']='';
			    $_SESSION['id']='';
				echo "<center><br/><br/><br/><br/><br/><br/><font color='red' size=3><b>成功退出，请重新登陆</b></font>";
				echo "<script language='javascript'>
				  setTimeout(\"window.location='login.php'\",1000)
				 </script>";
		    }
}
?>