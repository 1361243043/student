<?php
header("Content-Type:text/html;charset=utf-8");

//绝对轮径的定义
define('PATH',substr(__FILE__,0,-18));

//samrty的配置
require_once PATH.'smarty/smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir=PATH.'template/';           //设置模板文件的存储位置
$smarty->compile_dir=PATH.'template_c/';          //设置编译文件的存储位置
$smarty->config_dir=PATH.'configs/';               //设置配置文件的存储位置
$smarty->cache_dir=PATH.'cache/';                  //设置缓存文件的存储位置
/***定义smarty定界符***/
$smarty->left_delimiter='<{';                  //设置左边定界符
$smarty->right_delimiter='}>';

//包含类库
require_once PATH.'lib/Db.class.php';

//包含数据库配置文件
require_once PATH.'configs/db.inc.php';

//包含公共函数库
require_once PATH.'fun/common.fun.php';

$db = new Db($host, $user, $pwd, $dbName);
$db->connect();

