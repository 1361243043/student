<?php /* Smarty version 2.6.26, created on 2013-06-19 05:23:10
         compiled from stuInfoAdd.html */ ?>
<html>
<head>
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<script type="text/javascript" src="template/js/time.js"></script>
<script type="text/javascript" src='template/js/common.js'></script>
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
<form action="" method='post' name="form1">
<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="100" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif">
            <font color="#f7f7f7">添加教师用户</font>
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
	 <!-- <tr bgcolor="#799AE1">
        <td align="center" >用户编号</td>
		<td> <input type="text" value="" maxlength="100" style="width:100%" class="formclass" name='t_id'></td>
      </tr> -->
     <tr bgcolor="#799AE1">
        <td align="center" >用户名</td>
		<td> <input type="text" value="" maxlength="100" style="width:100%" class="formclass" name='t_name'></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >用户密码</td>
		<td> <input type="text" value="" maxlength="100" style="width:100%" class="formclass" name='t_pwd'></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >角色</td>
		<td>
          <select maxlength="100" style="width:100%" class="formclass"  name='t_role'>
		   <option value=''>--请选择--</option>
		<?php $_from = $this->_tpl_vars['getData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
	<?php if ($this->_tpl_vars['loop']['ro_name'] != '学生'): ?><option value="<?php echo $this->_tpl_vars['loop']['ro_id']; ?>
"><?php echo $this->_tpl_vars['loop']['ro_name']; ?>
</option><?php endif; ?>
	  <?php endforeach; endif; unset($_from); ?>
	  </select>
        </td>
      </tr>
      <!-- <tr bgcolor="#DEE5FA">
        <td align="center" >性别</td>
		<td>
		<input type='radio' value='男' name='t_sex' checked='checked'>男
		<input type='radio' value='女' name='t_sex'>女
        </td>
      </tr> -->
	   <tr bgcolor="#799AE1">
        <td align="center" >年龄</td>
		<td> <input type="text" value="" maxlength="100" style="width:100%" class="formclass" name='t_age'></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >民族</td>
		<td>   <select maxlength="" style="width:100%" class="formclass" name='t_nation'>
		 <option  name='t_nation' value=''>--请选择--</option>
	  <option  name='t_nation' value='汉族'>汉族</option>
	  <option name='t_nation' value='藏族'>藏族</option>
	  <option name='t_nation' value='回族'>回族</option>
	  </select></td>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td align="center">出生日期</td>
		<td>
            <input type="text" name="t_birthday" value='' id="DATE"/>
					    <img border="0"src="template/images/sel_date.gif" name="btnBeginDate"style="cursor: hand"  onclick="SelectDate(3)">
        </td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >用户身份号码</td>
		<td> <input type="text" value="" maxlength="100" style="width:100%" class="formclass" name='t_card'></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >家庭住址</td>
		<td>
             <input type="text" value="" maxlength="100" style="width:100%" class="formclass" name='t_address'>
        </td>
      </tr>
	   <tr bgcolor="#DEE5FA">
        <td align="center" >联系方式</td>
		<td>
            <input type="text" value="" maxlength="100" style="width:100%" class="formclass" name='t_phone'>
        </td>
      </tr>
      </tbody>
	  <tr bgcolor="#DEE5FA">
        <td colspan="2" align="center"><input type="submit" value="确认添加" name='submit' onclick="return checkteacher();"/>
		<input type="button" name="return" value="返回" onclick="javascript:history.back(-1)">
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
</form>
</BODY>
  </HTML>