<?php
header("content-type:text/html;charset=utf-8");
require_once 'configs/template.inc.php';
session();
power(filename());//权限
if(isset($_POST['submit']))
{
	$sql="insert into `spr_xf_sort` (`te_type`,`te_money`,`te_date_begin`,`te_date_end`) values ('".$_POST['type']."','".$_POST['money']."','".$_POST['begin']."','".$_POST['end']."')";
	$query=addData($sql);
	jumpTo('moneylist.php',$query);
}
else{
     $smarty->display('moneyListadd.html');
   }
else
{
	if($_SESSION['ro_id']==$_SESSION['t_role'])
	{
		$smarty->display('moneyListadd.html');
	}
	else
	{
		echo "<center><br/><br/><br/><br/><br/><br/><font color='red'><b>对不起，您没有权限添加！</b></font>"; 
		echo "<script>setTimeout('location.href=\"moneylist.php\"',2000);</script>";
	}
}
?>