<?php /* Smarty version 2.6.26, created on 2014-06-24 00:10:38
         compiled from search.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script src="./template/js/jquery.js"></script>
<script type='text/javascript'>
function changeClass()
{
   //alert(document.getElementById('grade').value);
   $.get('c.php',{grade:document.getElementById('grade').value},
		 function (data)
		  {
	        document.getElementById("cl").innerHTML=data;
		  }
		 );
}

function changeStudent()
{
	//alert(document.getElementById('class').value);
	$.get('s.php',{c_id:document.getElementById('class').value},
		   function (data)
		   {
		     document.getElementById("st").innerHTML=data;
		   }
	     );
}
</script>
</head>
<body>
年级:<select id='grade' onchange="changeClass()">
       <option value=''>请选择年级</option>
     <?php $_from = $this->_tpl_vars['g']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
       <option value=<?php echo $this->_tpl_vars['loop']['mr_grade']; ?>
 > <?php echo $this->_tpl_vars['loop']['mr_grade']; ?>
 </option>
     <?php endforeach; endif; unset($_from); ?>
    </select>
    
    <div id='cl'>
      <select >
      <option value=''>请选择班级</option>
      </select>
    </div>
    <div id='st'>
      <select >
        <option value=''>请选择学生</option>
      </select>
    </div>
</body>
</html>