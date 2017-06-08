<?php

//判断SESSION
function isSession()
{
	!empty($_SESSION['id']) or die('SESSION IS empty!'); 
}

