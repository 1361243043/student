<?php
header("Content-Type:text/html;charset=utf-8");
//session_start();//开启会话，或者开启全局变量
//载入配置文件
require_once('configs/template.inc.php');
session();
power(filename());//权限
if($_POST['submit']){
	$sql="insert into `spr_charge` (`ch_type`,`ch_must_money`,`ch_real_money`,`ch_debt_money`,`ch_student_id`,`ch_end_date`,`add_name`,`add_date`,`ch_remarks`) values('".$_POST['xiangmu']."','".$_POST['yingjiao']."','".$_POST['yijiao']."','".$_POST['qian']."','".$_POST['bj_stuname']."','".$_POST['date2']."','".$_POST['shou']."','".$_POST['date1']."','".$_POST['nei']."')";
   $query=addData($sql);
   	jumpTo('money.php',$query);
}
else{
    if($_SESSION['role']=='财务')
	{
	$sql="select * from `spr_student`";	
	$arr=getData($sql);
	$smarty->assign('arr',$arr);
		 
	$sql1="select distinct(mr_grade) from `spr_class` group by mr_grade";
	$query_grade=getData($sql1);
	$smarty->assign('query_grade',$query_grade);

	$sql2="select distinct(mr_classid) from `spr_class` group by mr_classid";
	$arr4=getData($sql2);
	$smarty->assign('arr4',$arr4);


	$sql3="select * from `spr_xf_sort`";	
	$arr2=getData($sql3);
	$smarty->assign('arr2',$arr2);

	 $smarty->display('addmoney.html');
	}
	else
	{
		echo "<center><br/><br/><br/><br/><br/><br/><font SIZE=5 color='red'><b>对不起，您没有权限修改！</b></font>"; 
		echo "<script>setTimeout('location.href=\"money.php\"',2000);</script>";
	}

}
?>
