<?php /* Smarty version 2.6.26, created on 2013-06-19 08:02:12
         compiled from studentadd.html */ ?>
<html>
<head>
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<script type="text/javascript" src="template/js/time.js"></script>
<script src="template/js/ajax.js"></script>
<script type="text/javascript" src="template/js/common.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
function ChangeDate ()
{
      var textDate=document.getElementById('textDate');
      reVal = window.showModalDialog ("common/day.php", "",
        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");
    if (reVal != null)
        textDate.value = reVal;
}
function returns()
{
   window.close();
}

function SelectBir(nState) {
		reVal = window.showModalDialog("template/js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('BIR').value=reVal;
		}
		}
function SelectDate(nState) {
		reVal = window.showModalDialog("template/js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('date').value=reVal;
		}
}	

function SelectDate1(nState) {
		reVal = window.showModalDialog("template/js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('date1').value=reVal;
		}
}	
</script>
</head>
<body>

<FORM METHOD=POST ACTION="" name="form1">
	<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="100" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif">
            <font color="#f7f7f7">添加信息</font>
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
<table width="100%"  border="5" cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
	   <tr height="30" bgcolor="#799AE1">
        <td align="center" colspan="2" ><FONT SIZE="3" COLOR="#FF3300">带*的为必填</FONT></td>
		
      </tr>
     <tr bgcolor="#799AE1">
        <td align="center" >学生姓名</td>
		<td><input type="text" name="name" /><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></td>
      </tr>
	       <tr bgcolor="#799AE1">
        <td align="center" >学生头像</td>
		<td><input type="file" name="file" /></td>
      </tr>
	 <tr bgcolor="#799AE1">
        <td align="center" >设置登陆密码</td>
		<td><INPUT TYPE="password" NAME="pwd"><FONT SIZE="" COLOR="#FF3300"><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></FONT></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >性别</td>
		<td>
          <input type="radio" name="sex" value="1" checked/>男
          <input type="radio" name="sex" value="2"/>女<FONT SIZE="" COLOR="#FF3300"><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></FONT>
        </td>
      </tr>
	        <tr bgcolor="#DEE5FA">
        <td align="center">出生日期</td>    
		<td><input type="text" id="date" name="bir"/><img border="0"src="template/images/sel_date.gif" name="bir" style="cursor: hand"  onclick="SelectDate(3)"><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >身份证号码</td>
		<td><input type="text" name="card" /><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></td>
      </tr>
	
	<tr bgcolor="#799AE1">
        <td align="center" >年龄</td>
		<td><input type="text" name="age" /><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></td>
      </tr>      
	 <tr bgcolor="#799AE1">
        <td align="center" >民族</td>
		<td><input type="text" name="nation" /><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></td>
      </tr>
	
       <tr bgcolor="#799AE1">
        <td align="center" >班级</td>
		<td>
         <select  name='grade' id='grade' onchange="dostart(document.getElementById('grade').value)">
<option value=''>--请选择--</option>
<?php $_from = $this->_tpl_vars['grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
   <option value='<?php echo $this->_tpl_vars['val']['mr_grade']; ?>
'> <?php echo $this->_tpl_vars['val']['mr_grade']; ?>
 </option>
   
<?php endforeach; endif; unset($_from); ?>
</select>

<span id='class'>  </span><FONT SIZE="3" COLOR="#FF3300">&nbsp;*</FONT>
        </td>
      </tr>
       <tr bgcolor="#799AE1">
        <td align="center" >宿舍</td>
		<td><input type="text" name="dor"/><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></td>
      </tr>

	    <tr bgcolor="#799AE1">
        <td align="center" >家长姓名</td>
		<td><input type="text" name="father" /><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >家庭住址</td>
		<td><input type="text" name="address" /><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >个人电话</td>
		<td><input type="text" name="phone"/><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></td>
      </tr>
	    <tr bgcolor="#799AE1">
        <td align="center" >QQ号</td>
		<td><input type="text" name="QQ"/></td>
      </tr>
	 <tr bgcolor="#799AE1">
        <td align="center" >家长电话</td>
		<td><input type="text" name="fp"/></td>
      </tr>
	    <tr bgcolor="#DEE5FA">
        <td align="center">入学时间</td>    
		<td><input type="text" id="date1" name="date"/><img border="0" src="template/images/sel_date.gif" name="Date" style="cursor: hand"  onclick="SelectDate1(3)"></td>
      </tr>
	    <tr bgcolor="#DEE5FA">
        <td align="center">角色</td>  
		<?php $_from = $this->_tpl_vars['role']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['role']):
?>
		<td><SELECT NAME="role">
			<OPTION VALUE="<?php echo $this->_tpl_vars['role']['ro_id']; ?>
"><?php echo $this->_tpl_vars['role']['ro_name']; ?>
</option>	
		</SELECT>
		</td>
		<?php endforeach; endif; unset($_from); ?>
      </tr>
      </tbody>
	  <tr bgcolor="#DEE5FA">
        <td colspan="2" align="center"><input type="submit" name="submit" value="确认添加" onclick="return checkstudent();"/>
		<input type="button" name="return" value="返回" onclick="javascript:history.back(-1)">
		</td>
      </tr>
	  </table>
</FORM>

<script  language="javascript">  
       function  selectAll()  
       {  
       var  arrObj  =  document.all;  
       for(var  i  =  0;  i  <  arrObj.length;i++)  
       {  
 
                               if(typeof  arrObj[i].type  !=  "undefined"  &&  arrObj[i].type=='checkbox')  arrObj[i].checked  =true;  
       }  
       }  
 
       function  unSelectAll()  
       {  
           var  arrObj  =  document.all;  
       for(var  i  =  0;  i  <  arrObj.length;i++)  
       {  
                               if(typeof  arrObj[i].type  !=  "undefined"  &&  arrObj[i].type=='checkbox')  arrObj[i].checked  =false;  
       }  
       }  
</script> 

</BODY>
  </HTML>
