<?php /* Smarty version 2.6.26, created on 2014-08-08 08:10:22
         compiled from example.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script type="text/javascript"  src="./template/js/jquery.js"></script>
<script type="text/javascript">
  function getClass()
  {
	 var  grade = document.getElementById('grade').value;
	 //请求c.php，为了获取班级
	 //alert(grade);
	 $.get('c.php',{gName:grade},
			 function(data)
			  {
		      document.getElementById('cl').innerHTML=data;
			  } 
	       );
  }
  
  function getStudent()
  {
	  var  cid = document.getElementById('class').value;
	  $.get('s.php',{c_id:cid},
			 function(data)
			 {
		  document.getElementById('st').innerHTML=data;
			 }
	       );
  }
</script>
</head>
<body>

年级：<select name='grade' id='grade' onchange="getClass();">
     <option value=''>请选择年级</option>
     <?php $_from = $this->_tpl_vars['grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
       <option value='<?php echo $this->_tpl_vars['loop']['mr_grade']; ?>
'> <?php echo $this->_tpl_vars['loop']['mr_grade']; ?>
 </option>
     <?php endforeach; endif; unset($_from); ?>
    </select>

班级：<div id='cl'> </div>

学生：<div id='st'></div>
</body>
</html>