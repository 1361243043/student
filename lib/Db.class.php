<?php
class Db
{
	protected $host;
	protected $user;
	protected $pwd;
	protected $dbName;
	
	public function __construct($h,$u,$p,$dbName)
	{
		$this->host = $h;
		$this->user = $u;
		$this->pwd = $p;
		$this->dbName = $dbName;
	}
	
	//连接数据库
	public function connect()
	{
		$con = mysql_connect($this->host,$this->user,$this->pwd) or die('connect field!');
		$this->selectDb();
		mysql_set_charset('utf8',$con);
	}
	
	//选择数据库
	public function selectDb()
	{
		mysql_select_db($this->dbName) or die('select DB field!');
	}
	
	/*
	 * @desc 获取多条数据
	 * @var string
	 * @return array(二维)
	 * */
	public function getData($sql)
	{
		$result = mysql_query($sql);
		while($rs = mysql_fetch_assoc($result))
		   $data[] = $rs;
		   return $data;
	}
	
	//查询一条数据
	public function getOne($sql)
	{
		$result = mysql_query($sql);
		$one = mysql_fetch_assoc($result);
		return $one;
	}
	
	//查询数据条数
	public function dataNum($sql)
	{
		$result = mysql_query($sql);
		$num = mysql_num_rows($result);
		return $num;
	}
	
	//执行SQL语句(适合添加、删除、修改操作)
	public function query($sql)
	{
		$result = mysql_query($sql);		
		return $result;
	}
	
}