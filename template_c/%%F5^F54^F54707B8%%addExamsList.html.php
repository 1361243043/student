<?php /* Smarty version 2.6.26, created on 2015-05-25 06:47:56
         compiled from addExamsList.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<script type="text/javascript" src='template/js/common.js'></script>
<script src="template/js/ajax.js"></script>
<title>添加成考项</title>
<script type="text/JavaScript"> 
function SelectDate(nState) {
		reVal = window.showModalDialog("template/js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('DATE').value=reVal;	
		}
	
	}
	function SelectDate1(nState) {
		reVal = window.showModalDialog("template/js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('DAE').value=reVal;	
		}
	
	} 
	function SelectDate2(nState) {
		reVal = window.showModalDialog("js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('DAT').value=reVal;	
		}
	
	}
	function check()
{
	if(document.form.people.value=='')
	{
	  alert("名字不能为空"); 
	  document.form.people.focus();
	  return false;
	  
	}
}
	
function dostart(gid)
{
   	$.get('getClass.php',{GID:gid},
   			function(data)
   			{
   		      $("td#class").html(data);
   			})
}
</script>
</head>
<body bgcolor="#F7F7F7" background="" style="font-size: 10pt" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="100" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif">
            <font color="#f7f7f7">添加成考项</font>
          </td>
          <td width="11" bgcolor="#F7F7F7" align="center" background="template/images/title_middle.gif">
            <font color="#f7f7f7">&nbsp;</font>
          </td>
          <td bgcolor="#F7F7F7" align="center" background="template/images/title_right.gif">
            <font color="#f7f7f7">&nbsp;</font>
          </td>
       </tr>
     </table>
    </td>
 </tr>
</table>
  <!-- 个人 -->
<form method="post" action="" name='form1'>
	<table width="100%"  border="5" cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>         
	   <tr bgcolor="#799AE1">
         <td align="center" >年级</td>
		<td> <SELECT style="width:100px" name='grade' id='grade' onchange="dostart(document.getElementById('grade').value)">
			<OPTION value='' selected>--请选择--</OPTION>
			<?php $_from = $this->_tpl_vars['query_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
			<OPTION VALUE="<?php echo $this->_tpl_vars['loop']['mr_grade']; ?>
"><?php echo $this->_tpl_vars['loop']['mr_grade']; ?>
</OPTION>
            <?php endforeach; endif; unset($_from); ?>
		  </SELECT></td>
      </tr>

       <tr bgcolor="#799AE1">
        <td align="center">班级</td>
		<td id='class'>
         
        </td>
        </tr>

     <tr bgcolor="#799AE1">
        <td align="center" >学生姓名</td>
		<td id='ren'></td>
      </tr>
       <tr bgcolor="#DEE5FA">
        <td align="center">报名日期</td>    
		<td><input type="text" id="DATE" name='at_date' value=''/><img border="0"src="template/images/sel_date.gif" name="btnBeginDate"style="cursor: hand"  onclick="SelectDate(3)"></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >考试成绩</td>
		<td><input type="text" name='at_result' value=''/></td>
      </tr>  
	  <tr bgcolor="#799AE1">
        <td align="center" >是否报名</td>
		<td><select name='at_issign' >
		<option value=''>--请选择--</option>
		<option value='报名'>报名</option>
        <option value='未报名'>未报名</option>
		</select>
		</td>
      </tr>
	  <tr bgcolor="#799AE1">
        <td align="center" >是否通过</td>
		<td><select name='at_ispass'>
		<option value=''>--请选择--</option>
		<option value='通过'>通过</option>
        <option value='未通过'>未通过</option>
        </select></td>
      </tr>
      </tbody>
	  <tr bgcolor="#DEE5FA">
        <td colspan="2" align="center"><input type="submit" value="确认添加" name='sub' onclick="return addExamList();"/>
		<input type="button" name="return" value="返回" onclick="javascript:history.back(-1)">
		</td>
      </tr>
	  </table>
</form>
</body>
</html>