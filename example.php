<?php
session_start();
require_once 'configs/common.php';
//isSession();

//读取所有的年级
$sql = "select mr_grade from spr_class group by mr_grade";
$grade = $db->getData($sql);

$smarty->assign('grade',$grade);
$smarty->display('example.html');


//echo "<pre>";
//var_dump($grade);
//echo "</pre>";