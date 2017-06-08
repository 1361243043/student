<?php
header("Content-Type:text/html;charset=utf-8");
session_start();//开启会话，或者开启全局变量
//载入配置文件
require_once('configs/template.inc.php');
//if(0==$_SESSION['type'])
//{
	$user=$_SESSION['name'];
	$role=$_SESSION['role'];
//}
//else
// {
  // $user=$_SESSION['name'];
  // $role=$_SESSION['role'];
 //}
$smarty->assign('role',$role);
$smarty->assign('user',$user);
$smarty->display('head.html');
?>