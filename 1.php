<?php
$url=$_SERVER['PHP_SELF'];
echo $url.'<br>';
	$filename=substr($url,strrpos($url,'/')+1);
	echo $filename;