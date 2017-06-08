<?php
header("Content-Type:text/html;charset=utf-8");
session_start();//开启会话，或者开启全局变量
//载入配置文件
require_once('configs/template.inc.php');
//统计学生人数
$sql_num_student="select COUNT(s_name) from `spr_student`";
$query_num_student=getData($sql_num_student);
//统计教师人数
$sql_num_teacher="select COUNT(t_name) from `spr_teacher`";
$query_num_teacher=getData($sql_num_teacher);
//统计上学期学费未缴人员
$sql_weijiao="select * from `spr_xf_sort` join `spr_charge` on`spr_xf_sort`.te_id= `spr_charge`.ch_type join `spr_student` on `spr_charge`.ch_student_id=`spr_student`.s_id group by `s_id` having `ch_debt_money`=`ch_must_money`";
//统计上学期学费未缴完人员
$sql_weijiaowan="select * from `spr_xf_sort` join `spr_charge` on`spr_xf_sort`.te_id= `spr_charge`.ch_type join `spr_student` on `spr_charge`.ch_student_id=`spr_student`.s_id group by `s_id` having `ch_debt_money`>0 and `ch_debt_money`!=`ch_must_money`";
$query_weijiao=getData($sql_weijiao);
$query_weijiaowan=getData($sql_weijiaowan);
$user=$_SESSION['name'];
$smarty->assign('user',$user);
$smarty->assign('weijiao',$query_weijiao);
$smarty->assign('weijiaowan',$query_weijiaowan);
$smarty->assign('student_num',$query_num_student[0][0]);
$smarty->assign('teacher_num',$query_num_teacher[0][0]);
$smarty->display('right.html');
?>