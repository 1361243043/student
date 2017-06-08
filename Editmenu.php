<?php
header("Content-Type:text/html;charset=utf-8");
//载入配置文件
require_once('configs/template.inc.php');
session();
power(filename());//权限


if($_POST[submit])
{
 $sql="update `spr_menu` set m_name='".$_POST['m_name']."',m_href='".$_POST['href']."',f_id=".$_POST['fid'].",m_grade=".$_POST['grade'].",is_mark=".$_POST['mark']." where m_id=".$_POST['id']."";
// die();
$rs=upData($sql);
jumpTo('menu.php',$rs);
}
else
{
$id=$_GET['id'];
$rs=getData($sql="select * from `spr_menu` where `m_id`=".$id."");
$rss=getData($sql="select * from `spr_menu` where `f_id`=0");
$smarty->assign('menu',$rs);
$smarty->assign('menus',$rss);
$smarty->display('Editmenu.html');
}
?>