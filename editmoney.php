<?php
header("Content-Type:text/html;charset=utf-8");
require_once('configs/template.inc.php');
session();
power(filename());//权限
$id=intval($_GET['ch_id']);

if($_POST['submit']){
	$sql="update `spr_charge` set `ch_type`='".$_POST['leixing']."',`add_name`='".$_POST['add_name']."',`ch_must_money`='".$_POST['jiao']."',`ch_real_money`='".$_POST['yijiao']."' ,`ch_debt_money`='".$_POST['qian']."',`add_date`='".$_POST['data']."',`ch_end_date`='".$_POST['end']."',`ch_remarks`='".$_POST['beizhu']."' where ch_id='".$_POST['ch_id']."'";

	$query=upData($sql);
   jumpTo('money.php',$query);
}
else{	
      if($_SESSION['role']=='财务')
	{
	  $id=intval($_GET['ch_id']);
	  $sql="select * from `spr_xf_sort` join `spr_charge` on `te_id`=`ch_type` join `spr_student` on `s_id`=`ch_student_id` join `spr_class` on `mr_id`=`s_class` where ch_id='".$id."'";
	  $query=mysql_query($sql);
	  $rs=mysql_fetch_array($query);
	  $b=$rs;
	  $smarty->assign('b',$b);
	

	$sql="select * from `spr_charge` where ch_id='".$id."'";
	$arr=getData($sql);
	$smarty->assign('arr',$arr);

	$sql="select * from `spr_student`";
	$arr1=getData($sql);
	$smarty->assign('arr1',$arr1);
	
	$sql1="select distinct(mr_grade) from `spr_class` group by mr_grade";
	$arr2=getData($sql1);
	$smarty->assign('arr2',$arr2);

	$sql1="select * from `spr_xf_sort`";
	$arr3=getData($sql1);
	$smarty->assign('arr3',$arr3);

	$smarty->display('editmoney.html');
	}
	else
	{
		echo "<center><br/><br/><br/><br/><br/><br/><font SIZE=5 color='red'><b>对不起，您没有权限修改！</b></font>"; 
		echo "<script>setTimeout('location.href=\"money.php\"',2000);</script>";
	}

}
?>
