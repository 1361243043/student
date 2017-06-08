<?php
header("Content-Type:text/html;charset=utf-8");
session_start();//开启会话，或者开启全局变量
require_once('configs/template.inc.php');

$txtcode=$_POST['txtcode'];//接收验证码
if($_SESSION['get_pwd_check']==$txtcode )//判断验证码是否一致
 {
	//接收用户名、密码、登录类型
	$name=$_POST['name'];
	$pwd=$_POST['pwd'];
	$type=$_POST['type'];

    if(0==$type)//学生登录
   {
      $sql="select * from `spr_student` where `s_name`='".$name."' and `s_pwd`='".$pwd."'";//sql
      $query=mysql_query($sql);//执行sql
      $rs=mysql_fetch_array($query);
      $num=mysql_num_rows($query);//取得结果集中行的数目
      if($num==1)
		  {
	    echo "<center><br/><br/><br/><br/><br/><br/><font color='red' size=3><b>登陆成功</b></font>";
	   //定义SESSION变量
	      $_SESSION['type']=0;
	      $_SESSION['name']=$name;
	      $_SESSION['id']=$rs['s_id'];
		  $_SESSION['sid']=$rs['s_id'];
          $sql_role="select * from `spr_role` join `spr_student` on `spr_role`.ro_id=`spr_student`.is_role where `s_name`='".$_SESSION['name']."'";//查出用户名的角色
	       $query_role=getOne($sql_role);
          $sql_classid="select * from `spr_class` join `spr_student` on `spr_class`.mr_id=`spr_student`.s_class where `s_name`='".$_SESSION['name']."'";//查出用户名的角色
	       $query_classid=getOne($sql_classid);
	      $_SESSION['role']=$query_role['ro_name'];
		  $_SESSION['m_href']=$query_role['ro_power'];
          $_SESSION['mr_classid']=$query_classid['mr_classid'];
	      echo "<script language='javascript'>setTimeout('window.location=\"index.php\";',1000);</script>";
         }
      else
		  {
	   echo "<center><br/><br/><br/><br/><br/><br/><font color='red' size=3><b>用户名或密码错误，请重新登陆</b></font>";
	   echo "<script language='javascript'>setTimeout('window.location=\"login.php\";',1000);</script>";

      }
	   }
      else
	   {
    $sql="select * from `spr_teacher` where `t_name`='".$name."' and `t_pwd`='".$pwd."'";//sql
	$query=mysql_query($sql);//执行sql
	$rs=mysql_fetch_array($query);
	$num=mysql_num_rows($query);//取得结果集中行的数目
	if($num==1)
		{
		echo "<center><br/><br/><br/><br/><br/><br/><font color='red' size=3><b>登陆成功</b></font>";
		$_SESSION['name']=$name;
		$_SESSION['id']=$rs['t_id'];
		$_SESSION['tid']=$rs['t_id'];
	  $sql_role="select * from `spr_role` join `spr_teacher` on `spr_role`.ro_id=`spr_teacher`.t_role where `t_name`='".$_SESSION['name']."'";
		$query_role=getOne($sql_role);
		 $sql_classid="select * from `spr_class` join `spr_teacher` on `spr_class`.mr_coach=`spr_teacher`.t_id where `t_name`='".$_SESSION['name']."'";
		$query_classid=getOne($sql_classid);
		$_SESSION['role']=$query_role['ro_name'];
		$_SESSION['m_href']=$query_role['ro_power'];
        $_SESSION['mr_classid']=$query_classid['mr_classid'];
		echo "<script language='javascript'>setTimeout('window.location=\"index.php\";',1000);</script>";
	   }
	 else
		{
	   echo "<center><br/><br/><br/><br/><br/><br/><font color='red' size=3><b>用户名或密码错误，请重新登陆</b></font>";
	   echo "<script language='javascript'>setTimeout('window.location=\"login.php\";',1000);</script>";

}
}
}
else
{
  echo "<center><br/><br/><br/><br/><br/><br/><font color='red' size=3><b>验证码错误，请重新登录！</b></font>";
  echo "<script language='javascript'>setTimeout('window.location=\"login.php\";',1000);</script>";
}
?>