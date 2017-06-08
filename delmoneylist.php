<?php
header("Content-Type:text/html;charset=utf-8");
require_once('configs/template.inc.php');
power(filename());//权限
if($_SESSION['ro_name']=='财务')
{
$checkbox=$_POST['checkbox'];
if(isset($_GET['id']))
{
		$sql="delete from `spr_xf_sort` where te_id=".$_GET['id'];
		$query=delData($sql);
		jumpTo('moneylist.php',$query);
}
else
{
   $id=implode(',',$checkbox);
   $sql="delete from `spr_xf_sort` where te_id in (".$id.")";
}
	$query=delData($sql);
	jumpTo('studentintofront.php',$query);
}
else
{
        echo "<center><br/><br/><br/><br/><br/><br/><font SIZE=5 color='red'><b>对不起，您没有权限删除！</b></font>"; 
		echo "<script>setTimeout('location.href=\"moneylist.php\"',2000);</script>";
}
?>