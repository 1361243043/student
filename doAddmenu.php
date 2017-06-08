<?php
require_once 'configs/template.inc.php';
$sql="insert into spr_menu values('','".$_POST['m_name']."','".$_POST['m_href']."',".$_POST['f_id'].",".$_POST['m_grade'].",".$_POST['is_mark'].")";
$rs=addData($sql);
jumpTo('menu.php',$rs);
?>