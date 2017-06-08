<?php
header("Content-Type:text/html;charset=utf-8");
//载入配置文件
require_once('configs/template.inc.php');
$smarty->display('center.html');
?>