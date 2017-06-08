<?php
header("Content-Type:text/html;charset=utf-8");
/**
 *@desc The file of common function
 *@version 2.0
 *@date 2013-05
 *@authorMaoWenqiang
*/

/**
 *@desc get data from database
 *@var string 
 *@return array
*/
function getData( $sql )
{
    $query = mysql_query($sql);
	while($rs = mysql_fetch_assoc($query))
	{
		$data[] = $rs;
	}
	return $data;
}

/**
 *@desc get one data from database
 *@var string 
 *@return array
*/
function getOne( $sql )
{
    $query = mysql_query($sql);
	$rs = mysql_fetch_array($query);
	return $rs;
}
function num($sql,$href)
{ $query = mysql_query($sql);
  $num=mysql_num_rows($query);
  if($num==0)
{
  echo "<center><br/><br/><br/><br/><br/><br/><font color='red'><b>无权限</b></font>"; 
echo "<script type='text/javascript'>
		setTimeout(\"window.location='".$href."'\",1000);
		</script>";
  }
}

/**
 *@desc delete data
 *@param string
 *@return int
 * */
function delData($sql)
{
	$query = mysql_query($sql);
	return $query;
}

/**
 * @desc add one data
 * @param string
 * @return int
 * */
function addData($sql)
{
	$query = mysql_query($sql);
	return $query;
}

/**
 * @desc updata one data
 * @param string
 * @return int
 * */
function upData($sql)
{
	$query = mysql_query($sql);
	return $query;
}

/**
 *@desc 跳转函数
 *@var  string,int
 *@return none
*/
function jumpTo($href,$result)
{
	if($result>0)
	{
		echo "<center><br/><br/><br/><br/><br/><br/><font color='red'><b>操作成功</b></font>"; 
		echo "<script type='text/javascript'>
		setTimeout(\"window.location='".$href."'\",1000);
		</script>";
	}
	else
	{
		echo "<center><br/><br/><br/><br/><br/><br/><font color='red'><b>操作失败</b></font>"; 
		 echo "<script language='javascript'>setTimeout('window.location=\"studfrontadd.php\";',1000);</script>";
	}
}
/**
 * @desc Do you enter the system?
 * @param none
 * @return none
 * */
function isSession()
{
	($_SESSION['u_id']&&$_SESSION['u_name']) ? 1 : die('请先登录');
}

/*
*@desc  截取字符串 
*@var string int int
*@return  string
*/
        
	function chineseSubstr($str,$start,$len)     //$str指定字符串,$start是字符串起始位置,$len是指长度
       {
	        $strlen=$start+$len;                       //用$strlen存储字符串的总长度
	        for($i=0;$i<$strlen;$i++)                 //通过for循环语句循环读取字符串
        {
    if(ord(substr($str,$i,1)>0xa0))   //如果首个字节的ASCII序数值大于0xa0,则表示为汉字,ord()是返回字ASCII
		{ 
			$tmpstr.=substr($str,$i,2);   //每次取出两位字符赋给变量$tmpstr,等于一个汉字
			$i++;                         //变量自加1
		}
	 else
		{
			$tmpstr.=substr($str,$i,1); 
		}
	}
	return $tmpstr;                    //输出字符串
}


/**
 * @desc  datapager
 * @param $sql is the sql of selecting database;
 *        $now is the page of now; 
 *        $num is the data that the number per page ; 
 * @return string
 * */
function pageShow( $sql,$now,$num)
{
	$query = mysql_query($sql);
	
	//The total number of data 
	$sum = mysql_num_rows($query);
	
	//The total number of page 
	$pageNum = ceil($sum/$num);
	
	if( 1 == $now )
	{
		$up   = 1;
		$down = $now+1;
	}
	if($now == $pageNum)
	{
		$up   = $now-1;
		$down = $now;
	}
	if($now>1 && $now<$pageNum)
	{
		$up   = $now-1;
		$down = $now+1;
	}
	$pageList['up']=$up;
	$pageList['down']=$down;
	$pageList['pageNum']=$pageNum;
	$pageList['now']=$now;
	return $pageList;
	
}

/**
*生成随机验证码
*@param int
*@return string
*/
function randomkeys($length)
			{
			$pattern='1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
				for($i=0;$i<$length;$i++)
				{
					$key.= $pattern{mt_rand(0,35)};    //生成php随机数
				}
				return $key;
			}	
/**
*判断是否登陆
*/
function session()
{
	@session_start();
	//启用会话
    //session_start();
   //判断是否登陆
   if($_SESSION['name']=="")
     { 
	   echo "<script language='javascript'>
		   setTimeout(\"window.location='login.php'\",1000);
		 </script>";
		 die("<center><br/><br/><br/><br/><br/><br/><br/><br/><font color='red' size=7><b>您尚未登录，无权访问，请先登录！</b></font>");
     }
}
/**
*登录使用时间是否超时
*/
 function user_mktime($onlinetime)
  { 
   $new_time=mktime();  
   echo $new_time-$onlinetime;  //当前时间减去用户登陆时间
   if($new_time-$onlinetime>'100')//判断登陆时间超过我们制定时间后，自动踢出！
   {    
	echo "登陆超时"; 
   exit();  
   session_destroy(); //清除session中的值
 
  }
  else
	  {  
        $_SESSION[times]=mktime();  //及时更新时间
      } 
 } 


/**
*权限的判定
*@param int
*@return string
*/
function power($filename)//filename当前文件名
{
	@session_start();
	 $m_href=explode(',',$_SESSION['m_href']);

	if(!in_array($filename['m_id'],$m_href)){
	     echo"<script>alert('对不起你没有权限!');</script>";
		 echo "<script>setTimeout('location.href=\"right.php\"',0);</script>";
		 die();
	
	}
}
//获取当前文件名
function filename()
{
	$url=$_SERVER['PHP_SELF'];
	$filename=substr($url,strrpos($url,'/')+1);
	$sql="select `m_id` from `spr_menu` where `m_href`='".$filename."'";
    $filename=getOne($sql);
	return $filename;
}

/**
*
*/
//为了避免重复包含文件而造成错误，加了判断函数是否存在的条件：
if(!function_exists(pageft)){ 
//定义函数pageft(),三个参数的含义为：
//$totle：信息总数；
//$displaypg：每页显示信息数，这里设置为默认是20；
//$url：分页导航中的链接，除了加入不同的查询信息“page”外的部分都与这个URL相同。
//　　　默认值本该设为本页URL（即$_SERVER["REQUEST_URI"]），但设置默认值的右边只能为常量，所以该默认值设为空字符串，在函数内部再设置为本页URL。
function pageft($totle,$displaypg=20,$url=''){

//定义几个全局变量： 
//$page：当前页码；
//$firstcount：（数据库）查询的起始项；
//$pagenav：页面导航条代码，函数内部并没有将它输出；
//$_SERVER：读取本页URL“$_SERVER["REQUEST_URI"]”所必须。
global $page,$firstcount,$pagenav,$_SERVER;

//为使函数外部可以访问这里的“$displaypg”，将它也设为全局变量。注意一个变量重新定义为全局变量后，原值被覆盖，所以这里给它重新赋值。
$GLOBALS["displaypg"]=$displaypg;

if(!$page) $page=1;

//如果$url使用默认，即空值，则赋值为本页URL：
if(!$url){ $url=$_SERVER["REQUEST_URI"];}

//URL分析：
$parse_url=parse_url($url);
$url_query=$parse_url["query"]; //单独取出URL的查询字串
if($url_query){
//因为URL中可能包含了页码信息，我们要把它去掉，以便加入新的页码信息。
//这里用到了正则表达式，请参考“PHP中的正规表达式”（http://www.pconline.com.cn/pcedu/empolder/wz/php/10111/15058.html）
$url_query=ereg_replace("(^|&)page=$page","",$url_query);

//将处理后的URL的查询字串替换原来的URL的查询字串：
$url=str_replace($parse_url["query"],$url_query,$url);

//在URL后加page查询信息，但待赋值： 
if($url_query) $url.="&page"; else $url.="page";
}else {
$url.="?page";
}

//页码计算：
$lastpg=ceil($totle/$displaypg); //最后页，也是总页数
$page=min($lastpg,$page);
$prepg=$page-1; //上一页
$nextpg=($page==$lastpg ? 0 : $page+1); //下一页
$firstcount=($page-1)*$displaypg;

//开始分页导航条代码：
$pagenav="显示第 <B>".($totle?($firstcount+1):0)."</B>-<B>".min($firstcount+$displaypg,$totle)."</B> 条记录，共 $totle 条记录<BR>";

//如果只有一页则跳出函数：
if($lastpg<=1) return false;
$pagenav.=" <a href='$url=1' target=_self>首页</a> ";
if($prepg) $pagenav.=" <a href='$url=$prepg' target=_self>前页</a> "; else $pagenav.=" 前页 ";
if($nextpg) $pagenav.=" <a href='$url=$nextpg' target=_self>后页</a> "; else $pagenav.=" 后页 ";
$pagenav.=" <a href='$url=$lastpg' target=_self>尾页</a> ";

//下拉跳转列表，循环列出所有页码：
$pagenav.="　到第 <select name='topage' size='1' onchange='window.location=\"$url=\"+this.value'>\n";
for($i=1;$i<=$lastpg;$i++){
if($i==$page) $pagenav.="<option value='$i' selected>$i</option>\n";
else $pagenav.="<option value='$i'>$i</option>\n";
}
$pagenav.="</select> 页，共 $lastpg 页";
}
}