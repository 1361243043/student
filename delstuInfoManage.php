<?php
header("Content-Type:text/html;charset=utf-8");
require_once('configs/template.inc.php');
power(filename());//х╗оч
if(isset($_GET['t_id']))
{  
	$t_id=intval($_GET['t_id']);
    $sql="delete from `spr_teacher` where t_id='".$t_id."'";
	$query=delData($sql);
	jumpTo('stuInfoManage.php',$query);
}
?>