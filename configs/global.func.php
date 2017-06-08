<?php

/* 
	This is NOT a freeware, use is subject to license terms

	$RCSfile: global.func.php,v $
	$Revision: 1.83.2.7 $
	$Date: 2013/04/27 08:08:18 $
*/
//跳转
function gotos($query,$name,$add)
{
	if($query>0)
		{
			echo "<center><br/><br/><br/><br/><br/><br/><font color='red'><b>".$name."成功！正在跳转....</b></font>"; 
			echo "<script>setTimeout('location.href=\"".$add."\"',1000);</script>";
		}
		else
		{		
			echo "<center><br/><br/><br/><br/><br/><br/><font color='red'><b>".$name."失败！正在跳转....</b></font>"; 
			echo "<script>setTimeout('location.href=\"".$add."\"',1000);</script>";
		}
}



function power($filename)//filename当前文件名
{
	$m_href=explode(',',$_SESSION['m_href']);
	if(!in_array($filename,$m_href)){
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
	return $filename;
}
/**
*正常跳转页面
**/
function refreshto($URL,$content,$statime=1){
	global $Langdb,$tpl;
	if($Langdb[$content]){ 
		$content=$Langdb[$content];
	}
	if($statime>0){
		$tpl->assign("URL",$URL);
		$tpl->assign("content",$content);
		$tpl->assign("statime",$statime);
		$tpl->display('refreshto.htm');
		exit;
	} else{
		header("Location: $URL");
	}
}

/**
*出错页面
**/
	
function showerr($msg_info,$url='',$time=10	){
	global $Langdb,$webdb,$tpl;
	if($Langdb[$msg_info]){ 
		$msg_info=$Langdb[$msg_info];
		@eval("$msg_info=\"$msg_info\";");
		
	}
	$tpl->assign("N_path",$N_path);
	$tpl->assign("file_dir",$webdb['file_dir']);
	$tpl->assign("msg_info",$msg_info);
	$tpl->display('showerr.htm');		
	exit;
}
/**
*改变路径为跟目录下路径
**/
	
function changedir($dir){
	if(ereg('./',substr($dir,0,2))){
		$dir=substr($dir,1,strlen($dir));
	}
	elseif(ereg('../',substr($dir,0,3))){
		$dir=substr($dir,2,strlen($dir));
	}
	return $dir;
}

/**
*把用户资料写入缓存
**/
function write_usrinfo($lfjdb,$path='./cache/usr_info'){
	global $dbs,$P_M;
	$query=$dbs->query(" SELECT * FROM {$P_M[m][table]} limit 1 ");
	$i=0;
	foreach($lfjdb AS $key=>$value){
		$f_db=@mysql_fetch_field($query,$i);
		$field=$f_db->name;
		$value=addslashes($value);
		$show.="\$lfjdb['$field']='$value';\r\n";
		$i++;
	}
	$num=$lfjdb[uid]/1000;
	$num=floor($num);
	if(!is_dir("$path/$num")){
		mkdir("$path/$num",0777);
	}
	write_file("$path/$num/$lfjdb[uid].php",'<?php'."\r\n".$show.'?>');
}

/**
*读文件函数
**/
function read_file($filename,$method="rb"){
	if($handle=@fopen($filename,$method)){
		@flock($handle,LOCK_SH);
		$filedata=@fread($handle,@filesize($filename));
		@fclose($handle);
	}
	return $filedata;
}

/**
*写文件函数
**/
function write_file($filename,$data,$method="rb+",$iflock=1){
	@touch($filename);
	$handle=@fopen($filename,$method);
	if($iflock){
		@flock($handle,LOCK_EX);
	}
	@fputs($handle,$data);
	if($method=="rb+") @ftruncate($handle,strlen($data));
	@fclose($handle);
	@chmod($filename,0777);	
	if( is_writable($filename) ){
		return 1;
	}else{
		return 0;
	}
}
/**
*删除文件,值不为空，则返回不能删除的文件名
**/
function del_file($path){
	if (file_exists($path)){
		if(is_file($path)){
			if(	!@unlink($path)	){
				$show.="$path,";
			}
		} else{
			$handle = opendir($path);
			while ($file = readdir($handle)) {
				if (($file!=".") && ($file!="..") && ($file!="")){
					if (is_dir("$path/$file")){
						$show.=del_file("$path/$file");
					} else{
						if( !@unlink("$path/$file") ){
							$show.="$path/$file,";
						}
					}
				}
			}
			closedir($handle);
			if(!@rmdir($path)){
				$show.="$path,";
			}
		}
	}
	return $show;
}

/**
*md5加密
**/
function mymd5($value){
	global $webdb,$onlineip;
	$mymd5='5*j,.;?.%#@!';
	return md5("$value$mymd5$_SERVER[HTTP_USER_AGENT]");
}

/**
*过滤安全字符content
**/
function filtrate($msg){
	$msg = str_replace('&amp;','&',$msg);
	$msg = str_replace('&nbsp;',' ',$msg);
	$msg = str_replace('"','&quot;',$msg);
	$msg = str_replace("'",'&#39;',$msg);
	$msg = str_replace("<","&lt;",$msg);
	$msg = str_replace(">","&gt;",$msg);
	$msg = str_replace("\t","   &nbsp;  &nbsp;",$msg);
	$msg = str_replace("\r","",$msg);
	$msg = str_replace("   "," &nbsp; ",$msg);
	return $msg;
}

/**
*清除cookie
**/
function clearcookies() {
	dsetcookie('auth', '', -86400 * 365);
	dsetcookie('passport', '', -86400 * 365);
	dsetcookie('userbrowsed', '', -86400 * 365);
}

function dsetcookie($var, $value, $life = 0, $prefix = 1) {
	global $tablepre, $cookiedomain, $cookiepath, $timestamp, $_SERVER;
	setcookie(($prefix ? $tablepre : '').$var, $value,
		$life ? $timestamp + $life : 0, $cookiepath,
		$cookiedomain, $_SERVER['SERVER_PORT'] == 443 ? 1 : 0);
}

function title($body='',$type=''){
	global $webdb,$webtitle;
	$title=$webtitle[$body]."&gt";
	if($type!="")
	{
		$title.=$webtitle[$type]."&gt";
	}
	$title.=$webdb['webname']."  ".$webdb['weburl'];
	return $title;
}

function setRoot($path,$mode=0777) {
        $dirs = explode('/',$path);
        $path = $dirs[0];
        for($i = 1;$i < count($dirs);$i++) {
            $path .= "/".$dirs[$i];
            if(!is_dir($path))
                mkdir($path,$mode);
        }
        if(realpath($path)){
            return $path;
        }
        else{
            //echo "无法建立目录";
            exit;
        }
        
    }

/**
*生成code
**/
function autocode() {
	srand((double)microtime() * 1000000);
	$code=time()+rand();
	return $code;
}

function verifyinput($input)  
{  
      if (!get_magic_quotes_gpc())  
      {  
       //magic_quotes_gpc默认是on的，已经会自动转义’号等字符了 
          $input = addslashes($input);  
       }  
}  

function sendmail($email_to, $email_subject, $email_message, $email_from = '') {
	extract($GLOBALS, EXTR_SKIP);
	require LWUSB_ROOT.'./include/sendmail.inc.php';
}

function language($file, $templateid = 0, $tpldir = '') {
	$tpldir = $tpldir ? $tpldir : TPLDIR;
	$templateid = $templateid ? $templateid : TEMPLATEID;

	$languagepack = LWUSB_ROOT.'./'.$tpldir.'/'.$file.'.lang.php';
	if(file_exists($languagepack)) {
		return $languagepack;
	} elseif($templateid != 1 && $tpldir != './language/chinese') {
		return language($file, 1, './language/chinese');
	} else {
		return FALSE;
	}
}
function errorlog($type, $message, $halt = 1) {
	global $timestamp;
	@$fp = fopen(LWUSB_ROOT.'./configs/errorlog.php', 'a');
	@fwrite($fp, "<?PHP exit('Access Denied'); ?>\t$timestamp\t$type\t".str_replace(array("\r", "\n"), array(' ', ' '), trim(dhtmlspecialchars($message)))."\n");
	@fclose($fp);
	if($halt) {
		dexit();
	}
}

function dhtmlspecialchars($string) {
	if(is_array($string)) {
		foreach($string as $key => $val) {
			$string[$key] = dhtmlspecialchars($val);
		}
	} else {
		$string = preg_replace('/&amp;((#(\d{3,5}|x[a-fA-F0-9]{4})|[a-zA-Z][a-z0-9]{2,5});)/', '&\\1',
		str_replace(array('&', '"', '<', '>'), array('&amp;', '&quot;', '&lt;', '&gt;'), $string));
	}
	return $string;
}
function dexit($message = '') {
	echo $message;
	exit();
}
function getcode($tablename){
	global $table;
	$file='../cache/code.cache.php';
	$code=$table[$tablename]+1;
	$data=read_file($file);
	$data=str_replace("\$table[$tablename] = '".$table[$tablename]."'","\$table[$tablename] = '".$code."'",$data);
	write_file($file,$data);
	return $code;
}
/*
	[Struggle]
*/

/*
	栏目缓存
*/
function list_cache(){
	$dir=opendir( LWUSB_ROOT."cache/sort_cache/");
	while( $file=readdir($dir) ){
		if( ereg(".php",$file) ){
			@unlink( LWUSB_ROOT."cache/sort_cache/$file");
		}
	}
}

/**
*取得随机字符
**/
function rands($length) {
	$hash = '';
	$chars = '0126ABCDJK789abcRSTUdefghijkLMNOPQVWXYZlmnopq345rstuEFGHIvwxyz';
	$max = strlen($chars) - 1;
	mt_srand((double)microtime() * 1000000);
	for($i = 0; $i < $length; $i++) {
		$hash .= $chars[mt_rand(0, $max)];
	}
	return $hash;
}

/**
*时间格式函数
**/
function M_time($time='',$M=''){
	global $timestamp;
	$time && $timestamp=$time;
	$M?$m=$M:$m="Y-m-d H:i:s";
	return date($m,$timestamp);
}

/**
*分页
**/
function getpage($table,$choose,$url,$rows=20,$total=''){
	global $page,$db;
	if(!$page){
		$page=1;
	}
	if($table){
		$query=$db->fetch_array($db->query("select COUNT(*) AS num  from $table $choose"));
		$total=$query['num'];
	}
	$totalpage=@ceil($total/$rows);
	$nextpage=$page+1;
	$uppage=$page-1;
	if($nextpage>$totalpage){
		$nextpage=$totalpage;
	}
	if($uppage<1){
		$uppage=1;
	}
	$s=$page-3;
	if($s<1){
		$s=1;
	}
	$b=$s;
	for($ii=0;$ii<6;$ii++){
		$b++;
	}
	if($b>$totalpage){
		$b=$totalpage;
	}
	for($j=$s;$j<=$b;$j++){
		if($j==$page){
			$show.=" <font color=red>$j</font>";
		}else{
			$show.=" <a href=\"$url&page=$j\" title=\"第{$j}页\">$j</a>";
		}
	}
	$showpage="<font color='#000000' face='宋体'>[ </font> <a href=\"$url&page=1\" title=\"首页\">&lt;&lt;</A> <a href=\"$url&page=$uppage\" title=\"上一页\">&lt;</A>  {$show}  <a href=\"$url&page=$nextpage\" title=\"下一页\">&gt;</A> <a href=\"$url&page=$totalpage\" title=\"尾页\">&gt;&gt;</A> <font color=red>$page</font>/$totalpage <font color='#000000' face='宋体'> ]</font>";
    if($totalpage>1){
		return $showpage;
	}

}


/**
*  加密函数
*
* @param		string		等待加密的原字串
* @param		string		私有密匙(用于解密和加密)
*
* @return	string		原字串经过私有密匙加密后的结果
*/
function encrypt($txt, $key) {

	// 使用随机数发生器产生 0~32000 的值并 MD5()
	srand((double)microtime() * 1000000);
	$encrypt_key = md5(rand(0, 32000));

	// 变量初始化
	$ctr = 0;
	$tmp = '';

	// for 循环，$i 为从 0 开始，到小于 $txt 字串长度的整数
	for($i = 0; $i < strlen($txt); $i++) {
		// 如果 $ctr = $encrypt_key 的长度，则 $ctr 清零
		$ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
		// $tmp 字串在末尾增加两位，其第一位内容为 $encrypt_key 的第 $ctr 位，
		// 第二位内容为 $txt 的第 $i 位与 $encrypt_key 的 $ctr 位取异或。然后 $ctr = $ctr + 1
		$tmp .= $encrypt_key[$ctr].($txt[$i] ^ $encrypt_key[$ctr++]);
	}

	// 返回结果，结果为 passport_key() 函数返回值的 base65 编码结果
	return base64_encode(passport_key($tmp, $key));

}

/**
* 解密函数
*
* @param		string		加密后的字串
* @param		string		私有密匙(用于解密和加密)
*
* @return	string		字串经过私有密匙解密后的结果
*/
function decrypt($txt, $key) {

	// $txt 的结果为加密后的字串经过 base64 解码，然后与私有密匙一起，
	// 经过 passport_key() 函数处理后的返回值
	$txt = passport_key(base64_decode($txt), $key);

	// 变量初始化
	$tmp = '';

	// for 循环，$i 为从 0 开始，到小于 $txt 字串长度的整数
	for ($i = 0; $i < strlen($txt); $i++) {
		// $tmp 字串在末尾增加一位，其内容为 $txt 的第 $i 位，
		// 与 $txt 的第 $i + 1 位取异或。然后 $i = $i + 1
		$tmp .= $txt[$i] ^ $txt[++$i];
	}

	// 返回 $tmp 的值作为结果
	return $tmp;

}

/**
* Passport 密匙处理函数
*
* @param		string		待加密或待解密的字串
* @param		string		私有密匙(用于解密和加密)
*
* @return	string		处理后的密匙
*/
function passport_key($txt, $encrypt_key) {

	// 将 $encrypt_key 赋为 $encrypt_key 经 md5() 后的值
	$encrypt_key = md5($encrypt_key);

	// 变量初始化
	$ctr = 0;
	$tmp = '';

	// for 循环，$i 为从 0 开始，到小于 $txt 字串长度的整数
	for($i = 0; $i < strlen($txt); $i++) {
		// 如果 $ctr = $encrypt_key 的长度，则 $ctr 清零
		$ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
		// $tmp 字串在末尾增加一位，其内容为 $txt 的第 $i 位，
		// 与 $encrypt_key 的第 $ctr + 1 位取异或。然后 $ctr = $ctr + 1
		$tmp .= $txt[$i] ^ $encrypt_key[$ctr++];
	}

	// 返回 $tmp 的值作为结果
	return $tmp;

}

/**
* 信息(数组)编码函数
*
* @param		array		待编码的数组
*
* @return	string		数组经编码后的字串
*/
function passport_encode($array) {

	// 数组变量初始化
	$arrayenc = array();

	// 遍历数组 $array，其中 $key 为当前元素的下标，$val 为其对应的值
	foreach($array as $key => $val) {
		// $arrayenc 数组增加一个元素，其内容为 "$key=经过 urlencode() 后的 $val 值"
		$arrayenc[] = $key.'='.urlencode($val);
	}

	// 返回以 "&" 连接的 $arrayenc 的值(implode)，例如 $arrayenc = array('aa', 'bb', 'cc', 'dd')，
	// 则 implode('&', $arrayenc) 后的结果为 ”aa&bb&cc&dd"
	return implode('&', $arrayenc);

}

/**
*上传文件
**/
function upfile($upfile,$array){
	$filename=$array[name];
	$path=makepath($array[path]);
	$size=$array[size];
	$filetype=strrchr($filename,".");
	if(!$upfile){
		die("文件不存在，上传失败");
	}elseif(!$filetype){
		die("文件不存在，或文件无后缀名,上传失败");
	}elseif(!$path){
		die("上传目录不存在，上传失败");
	}else{
		upfileck($array);
	}
	$tempname=date("Y_m_d_H_s_m_",time()).rand(1,9999).$filetype;
	$newfile="$path/$tempname";

	if(@move_uploaded_file($upfile,$newfile)){
		@chmod($newfile, 0777);
		$ck=2;
	}
    if(!$ck){
		if(@copy($upfile,$newfile)){
			@chmod($newfile, 0777);
			$ck=2;
		}
	}
	if($ck){
		return $tempname;
	}
}

/**
*生成目录
**/
function makepath($path){
	$detail=explode("/",$path);
	foreach($detail AS $key=>$value){
		if(!$value){
			continue;
		}
		$newpath.="$value/";
		if( !is_dir($newpath) ){
			if(!@mkdir($newpath,0777)){
				$result='false';
			}
		}
	}
	if(!$result){
		return $path;
	}
}

function upfileck($array){
	global $mgroupdb,$webdb,$lfjdb,$db,$P_M,$timestamp,$web_admin;
	$filename=$array[name];
	$size=$array[size];
	$filetype=strrchr($filename,".");
	if($mgroupdb['uploadtype']){
		$filetype=$mgroupdb['uploadtype'];
	}else{
		$filetype=$webdb['upload_type'];
	}
    $type=strrchr($filename,'.');
    if( !eregi($type,$filetype) ){
		die( "{$type}格式不允许上传<a href=\"javascript:history.go(-1)\"> 点击返回</a>"	);
	}
	if($mgroupdb['uploadmaxsize']){
		$filesize=$mgroupdb['uploadmaxsize'];
	}else{
		$filesize=$webdb['upload_size'];
	}
	if($size>$filesize*1024){
		die( "文件大小超过 {$filesize} K,禁止上传,<a href=\"javascript:history.go(-1)\"> 点击返回</a>"	);
	}
}
?>