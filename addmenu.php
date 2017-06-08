<?php
header("Content-Type:text/html;charset=utf-8");
require_once 'configs/template.inc.php';
session();
power(filename());//х╗оч
$sql="select * from spr_menu where f_id=0";
$get=getData($sql);
$smarty->assign('get',$get);
$smarty->display('addMenu.html');
?>