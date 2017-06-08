<?php
/*
	Author: MaoWenqiang
	Date:   2013-5-5 
	Desc:   smarty config
*/
header("Content-Type:text/html;charset=utf-8");

//error_reporting(E_ERROR | E_WARNING | E_PARSE);//屏蔽错误
//@set_time_limit(0); //网页执行时间不限制

define('PATH',substr(__FILE__,0,-24));         //定义文件根目录
/***创建smarty对象***/
require_once(PATH.'smarty/Smarty.class.php');   //加载smarty配置文件
$smarty=new smarty();                         //实例化一个smarty对象                        
$smarty->template_dir=PATH.'template/';           //设置模板文件的存储位置
$smarty->compile_dir=PATH.'template_c/';          //设置编译文件的存储位置
$smarty->config_dir=PATH.'configs/';               //设置配置文件的存储位置
$smarty->cache_dir=PATH.'cache/';                  //设置缓存文件的存储位置
/***定义smarty定界符***/
$smarty->left_delimiter='<{';                  //设置左边定界符
$smarty->right_delimiter='}>';                 //设置右边定界符
require_once PATH.'configs/config.php';             //加载数据库
require_once PATH.'fun/common.function.php';    //加载函数
 //power(filename());//权限
?>