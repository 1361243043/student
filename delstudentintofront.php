<?php
header("Content-Type:text/html;charset=utf-8");
require_once('configs/template.inc.php');
power(filename());//х╗оч
$checkbox=$_POST['checkbox'];
if(isset($_GET['id']))
	{
	$id=$_GET['id'];
	$sql="delete from `spr_before_job` where bj_id=$id";
	}
else
{
   $id=implode(',',$checkbox);
   $sql="delete from `spr_before_job` where bj_id in (".$id.")";
}
	$query=delData($sql);
	jumpTo('studentintofront.php',$query);
?>