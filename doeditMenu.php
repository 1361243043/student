<?php
require_once 'configs/template.inc.php';
 $sql="update `spr_menu` set m_name='".$_POST['m_name']."',m_href='".$_POST['m_href']."',f_id=".$_POST['f_id'].",m_grade=".$_POST['m_grade'].",is_mark=".$_POST['is_mark']." where m_id=".$_POST['id']."";
$rs=upData($sql);
jumpTo('menu.php',$rs);
?>