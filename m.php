<?php
session_start();
require_once 'configs/common.php';
isSession();

//读取一级菜单
$sql = "select * from spr_menu where f_id=0";
$first = $db->getData($sql);

//读取二级菜单
foreach ($first as $f)
{
	$sql = "select * from spr_menu where f_id=".$f['m_id'];
	$second = $db->getData($sql);
	$list[] = $f;
	foreach($second as $s)
	$list[] = $s;
}

echo "<pre>";
var_dump($list);
echo "<pre>";




