<?php
header("Content-Type:text/html;charset=utf-8");
//载入配置文件
session_start();//开启会话，或者开启全局变量
require_once('configs/template.inc.php');
session();
$smarty->display('index.html');
?>