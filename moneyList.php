<?php
header("content-type:text/html;charset=utf-8");
require_once 'configs/template.inc.php';
session();
power(filename());//权限
if(isset($_POST['submit']))
{
		$sql="select * from `spr_xf_sort` where te_type like '%".$_POST['type']."%' and `te_money` like '%".$_POST['money']."%'";
        $data=getData($sql);
}
else
	 {
		 $sql="select * from `spr_xf_sort`";
     }

		//查询出财务的id号

		$sql_r="select `ro_id` from `spr_role` where ro_name='财务'";
		$data_r=getData($sql_r);
		$_SESSION['ro_id']=$data_r[0]['ro_id'];

		//查询校长的id号

		$sql_x="select `ro_id` from `spr_role` where ro_name='校长'";
		$data_x=getData($sql_x);
		$ro_id=$data_x[0]['ro_id'];

		//查询出登陆者的角色

		$sql_t="select `t_role` from `spr_teacher` where t_id='".$_SESSION['tid']."'";
	
	    $query=mysql_query($sql);
	    $num=mysql_num_rows($query);//统计数据数量
	   @$page=intval($_GET['page']);
	   pageft($num,2);
	   if($firstcount>=0)
	   {
		$sql.=" limit ".$firstcount.",2";
	     $query=getData($sql);
         $smarty->assign('fenye',$pagenav);
}
			$data=getData($sql);
			$sql_m="select * from `spr_xf_sort` group by `te_money`";
			$dat=getData($sql_m);
			$sql_type="select * from `spr_xf_sort` group by `te_type`";
			$type=getData($sql_type);
			$smarty->assign('data',$query);
			$smarty->assign('id',1);
			$smarty->assign('dat',$dat);
			$smarty->assign('type',$type);
			$smarty->display('moneylist.html');
			
?>