<?php 
session_start();
require_once 'configs/common.php';
//isSession();

//接收班级ID号
$id = $_GET['c_id'];

//根据班级ID，读取学生
$sql = "select * from spr_student where s_class=".$id;
$student = $db->getData($sql);

//把学生构造成下拉菜单
$string = "<select name='student' id='student' >
           <option value=''>请选择学生</option>";
foreach ($student as $s)
{
	$string .= "<option value=".$s['s_id']." >".$s['s_name']."</option>";
}

$string .="</select>";

echo $string;

?>