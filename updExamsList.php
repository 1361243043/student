<?php
require_once 'configs/template.inc.php';
session();
power(filename());//х╗оч
//{  $sql="select * from spr_student join spr_class on s_class=mr_id     join spr_ck on s_id=at_type where mr_coach=".$_SESSION['tid']." and    at_id=".$_GET['at_id']."";
  //  $query=mysql_query($sql);
	//$num=mysql_num_rows($query);
	//if($num==1)
	//{
	 if($_POST['sub']!='')
    {
	$query=upData("update spr_ck set at_date=".$_POST['at_date'].",at_result=".$_POST['at_result'].",at_issign='".$_POST['at_issign']."',at_ispass='".$_POST['at_ispass']."' where at_id=".$_POST['at_id']."");
   jumpTo('examsList.php',$query);
    }
else if($_GET['at_id']!='')
	{
     $rs=getData("select * from spr_student join spr_class on    s_class=mr_id join spr_ck on s_id=at_type where at_id=".$_GET['at_id']."");
     $smarty->assign('query',$rs);
     $smarty->display('updExamsList.html');
    }	 
//	}
	//else
		
//	{
	//	$rs=0;
	//   jumpTo('examsList.php',$rs);

//	}  
//}

?>