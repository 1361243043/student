<?php
header("content-type:text/html;charset=utf-8");
//���������ļ�
require_once('configs/template.inc.php');
session();
power(filename());//Ȩ��
if(isset($_GET['mr_id']))
{
	//$sql1="select * from `spr_teacher` join `spr_role` on t_role=ro_id where  ro_name='У��' or ro_name='����Ա'";
   //num($sql1,'class.php');
	$mr_id=intval($_GET['mr_id']);
    $sql="delete from `spr_class` where mr_id='".$mr_id."'";
	$query=delData($sql);
	jumpTo('class.php',$query);
}
?>