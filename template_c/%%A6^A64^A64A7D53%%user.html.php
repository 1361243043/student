<?php /* Smarty version 2.6.26, created on 2013-06-20 07:52:25
         compiled from user.html */ ?>
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
<form action='' method="post">
<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="100" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif">
            <font color="#f7f7f7">用户信息</font>
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
	<?php $_from = $this->_tpl_vars['getData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
     <tr bgcolor="#799AE1">
        <td align="center" >用户名</td>
		<td> <input type="text" value="<?php echo $this->_tpl_vars['name']; ?>
" maxlength="100" style="width:100%" class="formclass" name='name' disabled='disabled'></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >角色</td>
		<td>
        <input type="text" value="<?php echo $this->_tpl_vars['role_name']; ?>
" maxlength="100" style="width:100%" class="formclass" name='role_name' disabled='disabled'>
        </td>
      </tr>
	  <tr bgcolor="#799AE1">
        <td align="center" >用户密码</td>
		<td> <input type="text" value="<?php if ($this->_tpl_vars['role_name'] == '学生'): ?><?php echo $this->_tpl_vars['v']['s_pwd']; ?>
<?php else: ?><?php echo $this->_tpl_vars['v']['t_pwd']; ?>
<?php endif; ?>" maxlength="100" style="width:100%" class="formclass" name='t_pwd' disabled='disabled'></td>
      </tr>
      <!-- <tr bgcolor="#DEE5FA">
        <td align="center" >性别</td>
		<td>
             <input type="text" value="<?php if ($this->_tpl_vars['role_name'] == '学生'): ?><?php echo $this->_tpl_vars['v']['s_sex']; ?>
 <?php else: ?><?php echo $this->_tpl_vars['v']['t_sex']; ?>
<?php endif; ?>" maxlength="100" style="width:100%" class="formclass" name='t_sex' disabled='disabled'>
        </td>
      </tr> -->
	  <tr bgcolor="#799AE1">
        <td align="center" >年龄</td>
		<td> <input type="text" value="<?php if ($this->_tpl_vars['role_name'] == '学生'): ?><?php echo $this->_tpl_vars['v']['s_age']; ?>
 <?php else: ?><?php echo $this->_tpl_vars['v']['t_age']; ?>
<?php endif; ?>" maxlength="100" style="width:100%" class="formclass" name='t_age' disabled='disabled'></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >民族</td>
		<td> <input type="text" value="<?php if ($this->_tpl_vars['role_name'] == '学生'): ?><?php echo $this->_tpl_vars['v']['s_nation']; ?>
 <?php else: ?><?php echo $this->_tpl_vars['v']['t_nation']; ?>
<?php endif; ?>" maxlength="100" style="width:100%" class="formclass" name='t_nation' disabled='disabled'></td>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td align="center" >出生日期</td>
		<td>
            <input type="text" name="t_birthday" value="<?php if ($this->_tpl_vars['role_name'] == '学生'): ?><?php echo $this->_tpl_vars['v']['s_birthday']; ?>
 <?php else: ?><?php echo $this->_tpl_vars['v']['t_birthday']; ?>
<?php endif; ?>" maxlength="100" style="width:100%" class="formclass" disabled='disabled'>
        </td>
      </tr>
	  <tr bgcolor="#799AE1">
        <td align="center" >用户身份号码</td>
		<td> <input type="text" value="<?php if ($this->_tpl_vars['role_name'] == '学生'): ?><?php echo $this->_tpl_vars['v']['s_card']; ?>
 <?php else: ?><?php echo $this->_tpl_vars['v']['t_card']; ?>
<?php endif; ?>" maxlength="100" style="width:100%" class="formclass" name='t_card' disabled='disabled'></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >家庭住址</td>
		<td>
             <input type="text" value="<?php if ($this->_tpl_vars['role_name'] == '学生'): ?><?php echo $this->_tpl_vars['v']['s_address']; ?>
 <?php else: ?><?php echo $this->_tpl_vars['v']['t_address']; ?>
<?php endif; ?>" maxlength="100" style="width:100%" class="formclass" name='t_address' disabled='disabled'>
        </td>
      </tr>
	   <tr bgcolor="#DEE5FA">
        <td align="center" >联系方式</td>
		<td>
            <input type="text" value="<?php if ($this->_tpl_vars['role_name'] == '学生'): ?><?php echo $this->_tpl_vars['v']['s_phone']; ?>
 <?php else: ?><?php echo $this->_tpl_vars['v']['t_phone']; ?>
<?php endif; ?>" maxlength="100" style="width:100%" class="formclass" name='t_phone' disabled='disabled'>
        </td>
      </tr>
	  
	  <?php endforeach; endif; unset($_from); ?>
      </tbody>
	 <tr bgcolor="#DEE5FA">
      <td colspan="2" align="center">
        <input type="button" name="return" value="返回" onClick="javascript:history.back(-1)">
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