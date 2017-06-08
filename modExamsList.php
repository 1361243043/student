<?php
header("content-type:text/html;charset=utf-8");
require_once('configs/template.inc.php');
session();
power(filename());//х╗оч
if($_GET['at_id'])
{
 $at_id=$_GET['at_id'];
 $sql_q="select * from spr_student join spr_class on s_class=mr_id join spr_ck on s_id=at_type where at_id=".$_GET['at_id']."";
 $data=getData($sql_q);
 $smarty->assign('data',$data);
 }
if(isset($_GET['submit']))
{ 
        $at_id=$_GET['at_id'];
		$at_date=$_GET['at_date'];
		$at_result=$_GET['at_result'];
		$at_issign=$_GET['at_issign'];
		$at_ispass=$_GET['at_ispass'];
	  $sql="update `spr_ck` set `at_date`='".$at_date."',`at_result`='".$at_result."',`at_issign`='".$at_issign."',`at_ispass`='".$at_ispass."' where `at_id`='".$at_id."'";
	 $query=upData($sql);
    jumpTo('examslist.php',$query);
}
else{
	$smarty->display('modExamsList.html');
	}
?>