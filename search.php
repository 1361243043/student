<?php
header("content-type:text/html;charset=utf-8");
require_once('configs/template.inc.php');

$sql = "select mr_grade from spr_class where 1 group by mr_grade";
$g = getData($sql);

$smarty->assign('g',$g);
$smarty->display('search.html');
?>