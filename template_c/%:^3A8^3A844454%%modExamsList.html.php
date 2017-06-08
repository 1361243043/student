<?php /* Smarty version 2.6.26, created on 2013-06-13 11:29:01
         compiled from modExamsList.html */ ?>
<html>
<head>
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<script type="text/javascript" src="template/js/time.js"></script>
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
function SelectDate(nState) {
		reVal = window.showModalDialog("template/js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('DATE').value=reVal;
		}
	}
</script>
</head>
<body>
<form  action='' method='get'>
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['t']):
?>
<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="100" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif">
            <font color="#f7f7f7">修改模板</font>
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
     <tr bgcolor="#799AE1">
        <td align="center" >学生姓名</td>
		<td><input type="text" disabled="disabled" value="<?php echo $this->_tpl_vars['t']['s_name']; ?>
" name='s_name' maxlength="100" style="width:15%" class="formclass"></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >报名日期</td>
		<td><input type="text" id="date" name="at_date" value="<?php echo $this->_tpl_vars['t']['at_date']; ?>
" /><img border="0"src="template/images/sel_date.gif" name="btnBeginDate"style="cursor: hand"  onclick="SelectDate(3)"></td>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td align="center" >成绩</td>
		<td><input type="text" value="<?php echo $this->_tpl_vars['t']['at_result']; ?>
" name='at_result' maxlength="100" style="width:100%" class="formclass"></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >是否报名</td>
		<td><select name="at_issign">
		        <option value=''>--请选择--</option>
				<option value='报名'<?php if ($this->_tpl_vars['t']['at_issign'] == '报名'): ?>checked='checked'<?php endif; ?>>报名</option>
				<option value='未报名'<?php if ($this->_tpl_vars['t']['at_issign'] == '未报名'): ?>checked='checked'<?php endif; ?>>未报名</option>
		</select>
		</td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center">是否通过</td>
		<td>
		<select name="at_ispass">
		      <option value=''>--请选择--</option>
				<option value='通过'<?php if ($this->_tpl_vars['t']['at_ispass'] == '是'): ?>checked='checked'<?php endif; ?>>通过</option>
				<option value='未通过'<?php if ($this->_tpl_vars['t']['at_ispass'] == '是'): ?>checked='checked'<?php endif; ?>>不通过</option>
		</select>
		</td>
		
      </tr>
      
  
      </tbody>
	  <tr bgcolor="#DEE5FA">
        <td colspan="2" align="center">
		<input type='hidden' name='at_id' value="<?php echo $this->_tpl_vars['t']['at_id']; ?>
">
		<input type="submit" name="submit" value="确认修改" />
		<input type="button" value="关闭" onClick="window.close()"/>
		</td>
      </tr>
	  </table>

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
<?php endforeach; endif; unset($_from); ?>
</form>
</BODY>
  </HTML>