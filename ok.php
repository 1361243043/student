<?php
header("Content-Type:text/html;charset=utf8");
 ini_set("display_errors","off");
//session_start();//开启会话，或者开启全局变量
//载入配置文件
require_once('configs/template.inc.php');
$grade =  iconv("", "UTF-8", $_GET['grade']);//将某个变量的编码转换为指定编码，如果不知道编码，可以为空。iconv("原先编码","指定编码","变量名");
$sql = "select * from spr_class where mr_grade='".$grade."'";
$class = getData($sql);
$string = "<select id='ban' name='class_id' onchange=\"second(document.getElementById('ban').value)\"><option value=''> 请选择 </option>";
foreach($class as $val)
{
   $string.="<option value='".$val['mr_id']."'> ".$val['mr_classid'] ."</option>";
}
$string.="</select>";
echo $string;
?>