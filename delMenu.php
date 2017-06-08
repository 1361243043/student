<?php
header("Content-Type:text/html;charset=utf-8");
require_once('configs/template.inc.php');
session();
power(filename());//х╗оч
$checkbox=$_POST['checkbox'];
if(isset($_GET['id']))
	{
	    $sql="delete from `spr_menu` where m_id='".$_GET['id']."'";
	}
	else
{
   $id=implode(',',$checkbox);
   $sql="delete from `spr_menu` where m_id in (".$id.")";
}
      $query=delData($sql);
	  jumpTo('menu.php',$query);
?>