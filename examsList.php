<?php
header("content-type:text/html;charset=utf-8");
//载入配置文件
require_once('configs/template.inc.php');
session();
power(filename());//权限
	if($_GET['check'])
	{
     if('学生'==$_SESSION['role'])
		{
	 $get="select * from `spr_student` join  `spr_class` on spr_student.s_class=spr_class.mr_id    join `spr_ck` on spr_student.s_id=spr_ck.at_type where mr_grade like '%".$_GET['mr_grade']."%' and `mr_classid`  like '%".$_GET['mr_classid']."%' and `s_name` like '%".$_GET['s_name']."%'  and  at_issign like '%".$_GET['at_issign']."%'   and at_ispass like  '%".$_GET['at_ispass']."%' and s_id='".$_SESSION['id']."' order by at_id asc ";
		}
      else if('辅导员'==$_SESSION['role'])
		{
	   $get="select * from `spr_student` join  `spr_class` on spr_student.s_class=spr_class.mr_id    join `spr_ck` on spr_student.s_id=spr_ck.at_type where mr_grade like '%".$_GET['mr_grade']."%' and `mr_classid`  like '%".$_GET['mr_classid']."%' and `s_name` like '%".$_GET['s_name']."%'  and  at_issign like '%".$_GET['at_issign']."%'   and at_ispass like  '%".$_GET['at_ispass']."%' and t_id='".$_SESSION['id']."' order by at_id asc ";
	  }
	  else
		{
	   $get="select * from `spr_student` join  `spr_class` on spr_student.s_class=spr_class.mr_id    join `spr_ck` on spr_student.s_id=spr_ck.at_type where mr_grade like '%".$_GET['mr_grade']."%' and `mr_classid`  like '%".$_GET['mr_classid']."%' and `s_name` like '%".$_GET['s_name']."%'  and  at_issign like '%".$_GET['at_issign']."%'   and at_ispass like  '%".$_GET['at_ispass']."%' order by at_id asc ";
	  }
	}
	else
		{
		if('学生'==$_SESSION['role'])
		{
		$get="select * from spr_student join spr_ck on s_id=at_type  join spr_class on s_class=mr_id where s_id='".$_SESSION['id']."'";
		}
		else if('辅导员'==$_SESSION['role'])
	   {
	    $get="select * from spr_student join spr_ck on s_id=at_type  join spr_class on s_class=mr_id where t_id='".$_SESSION['id']."'";
	   }
	   else
		{
	   $get="select * from spr_student join spr_ck on s_id=at_type  join spr_class on s_class=mr_id";
	   }
	   }
      $query=mysql_query($get);
	  $num=mysql_num_rows($query);//统计数据数量
	   @$page=intval($_GET['page']);
	   pageft($num,5);
	   if($firstcount>=0)
	   {
		$get.=" limit ".$firstcount.",5";
	   }
   	   $getData=getData($get);
       $smarty->assign('fenye',$pagenav);
	   $sql_class="select mr_grade from `spr_class` group by `mr_grade`";
       $query_class=getData($sql_class);
       $sql_classid="select mr_classid from `spr_class` group by `mr_classid`";
       $query_classid=getData($sql_classid);
	   $sql1="select * from  spr_class group by mr_grade";
	   $query=getData($sql1);
	   $smarty->assign('id',1);
	   $smarty->assign('query',$query);
       $smarty->assign('query_classid',$query_classid);
       $smarty->assign('query_class',$query_class);
	   $smarty->assign('get',$getData);
	   $smarty->display('examsList.html');

?>
