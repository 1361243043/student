<?php
header("content-type:text/html;charset=utf-8");
session_start();//开启会话，或者开启全局变量
//载入配置文件
require_once('configs/template.inc.php');
session();
power(filename());//权限
		if($_POST['sub'])
		{
			$sql_role="select * from `spr_role` where `ro_name` like '%".$_POST['data']."%' order by `ro_id` desc";
			//$pageList='<table width=100%><tr>
	        //     <td width=100% align=center>
			//	 <input type="button" name="return" value="返回" //onclick="javascript:history.back(-1)">
			//	 </td></tr></table>';
		//	$smarty->assign('pageList',$pageList);
		}
		else
		{
			$sql_role="select * from `spr_role` order by `ro_id` desc";
		}
       $query=mysql_query($sql_role);
	    $num=mysql_num_rows($query);//统计数据数量
	   @$page=intval($_GET['page']);
	   pageft($num,5);
	   if($firstcount>=0)
	   {
		$sql_role.=" limit ".$firstcount.",5";
	   }
	  $query=getData($sql_role);
        $smarty->assign('fenye',$pagenav);
		$getData=getData($sql_role);
		$smarty->assign('id',1);
		$smarty->assign('path',PATH);
		$smarty->assign('getData',$getData);
		$smarty->display('base.html');
?>