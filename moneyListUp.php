<?php
header("content-type:text/html;charset=utf-8");
require_once 'configs/template.inc.php';
session();
power(filename());//权限
if(isset($_POST['sub']))
	{
		 $sql="update `spr_xf_sort` set `te_type`='".$_POST['type']."',`te_money`='".$_POST['money']."',`te_date_begin`='".$_POST['begin']."',`te_date_end`='".$_POST['end']."' where te_id=".$_POST['hid'];
		$query=upData($sql);
		jumpTo('moneyList.php',$query);
	}
else
{
	if(isset($_GET['id']))
    {
	  if($_SESSION['role']=='财务')
	    {
		 $sql="select * from `spr_xf_sort` where te_id=".$_GET['id'];
		 $data=getData($sql);
		 $smarty->assign('data',$data);
		 $smarty->display('moneyListUp.html');
	    }
	  else
	  {
		 echo "<center><br/><br/><br/><br/><br/><br/><font color='red'><b>对不起，您没有权限修改！</b></font>"; 
		 echo "<script>setTimeout('location.href=\"moneylist.php\"',2000);</script>";
	  }
}
}
?>