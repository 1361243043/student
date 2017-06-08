<?php
session_start();
require_once 'configs/common.php';
//isSession();

//接收example.php 传过来的值
$grade = $_GET['gName'];

//查询该年级所具备的班级
$sql = "select * from spr_class where mr_grade='".$grade."'";
$class = $db->getData($sql);

//把班级构造成下拉菜单
$string = "<select name='class' id='class' onchange='getStudent();'>
           <option value=''>请选择班级</option>";

foreach ($class as $c)
{
	$string .= "<option value=".$c['mr_id']." >".$c['mr_classid']."</option>";
}

$string .="</select>";

echo $string;
