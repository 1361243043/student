<?php
header("Content-Type:text/html;charset=utf-8");
require_once 'configs/template.inc.php';
session();
power(filename());//х╗оч
//get the page of now
$_POST['page']?($now = $_POST['page']):($now=$_GET['page']?$_GET['page']:1);

//get the list of page
$sql      = "select * from `spr_menu` where 1";
$num      = 8;
$start    = ($now-1)*$num;
$pageList = pageShow($sql, $now, $num) ;

//get the first menu 
$first = getData("select * from spr_menu where f_id=0 and is_mark=1 order by m_grade asc");

//get the first and the second menu
foreach ($first as $val)
{
	$sql = "select * from spr_menu where f_id=".$val['m_id']." order by m_grade asc ";
	//The second menu
	$second = getData($sql);
	//The beginning of all menu. first,it`s the first menu
	$list[] = $val;
	//push the second menu to array of list
	foreach($second as $v)
	{
		$list[] = $v;
	}
}
//get the list of data
for($i=$start;($i<$start+$num)&&($list[$i]['m_id'])!='';$i++)
{
	$dataList[] = $list[$i];
}
//-----------------------------
$smarty->assign('id',1);
$smarty->assign('URL',PATH);
$smarty->assign('pageList',$pageList);
$smarty->assign('dataList',$dataList);
$smarty->display('menu.html');
