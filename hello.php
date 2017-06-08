<?php
header("Content-Type:text/html;charset=utf-8");
 ini_set("display_errors","off");
//session_start();//开启会话，或者开启全局变量
//载入配置文件
require_once('configs/template.inc.php');
$sql = "select * from spr_student where s_class=".$_GET['class'];
$student = getData($sql);

$string = "<select id='ren' name='bj_stuname'><option value=''>--请选择-- </option>";

foreach($student as $val)
{
   $string.="<option value='".$val['s_id']."'> ".$val['s_name'] ."</option>";
}

$string.="</select>";

echo $string;

?>