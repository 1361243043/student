<?php /* Smarty version 2.6.26, created on 2013-06-20 07:48:35
         compiled from pwd.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
</head>
<script type="text/javascript">
function modpwd()
{
	if(form1.pwd.value==''||form1.pwd.value.length==0)
	{
	
		alert('请输入您的密码！');
		form1.pwd.focus();
		return false;
	}
	if(form1.newpwd.value==''||form1.newpwd.value.length==0)
	{
	
		alert('请输入您的新密码！');
		form1.newpwd.focus();
		return false;
	}
	else if(form1.newpwd.value.length<6)
	{
	alert('新密码应不少于六位！');
		form1.newpwd.focus();
		return false;
	}

	if(form1.anewpwd.value==''||form1.anewpwd.value.length==0)
	{
	
		alert('请再次输入您的新密码！');
		form1.anewpwd.focus();
		return false;
	}
	else if(form1.anewpwd.value.length<6)
	{
	alert('再次输入的新密码应不少于六位！');
		form1.anewpwd.focus();
		return false;
	}
}
</script>
<body>
<FORM METHOD='post' ACTION="" name="form1" enctype="multipart/form-data">
  <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
    <tr>
      <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center"><table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
          <tr height="35">
            <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
            <td width="100" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><font color="#f7f7f7">添加信息</font> </td>
            <td width="11" bgcolor="#F7F7F7" align="center" background="template/images/title_middle.gif"><font color="#f7f7f7">&nbsp;</font> </td>
            <td bgcolor="#F7F7F7" align="center" background="template/images/title_right.gif"><font color="#f7f7f7">&nbsp;</font> </td>
          </tr>
        </table></td>
    </tr>
  </table>
  <!-- 个人 -->
  <table width="100%"  border="5" cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
      <tr bgcolor="#799AE1">
        <td align="center" >用户姓名</td>
        <td><input type="text" name="name" disabled="disabled" value="<?php echo $this->_tpl_vars['name']; ?>
"/>
          <FONT SIZE="" COLOR="#FF3300"><FONT SIZE="3" COLOR="#FF3300">带*的为必填</FONT></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >登陆密码</td>
        <td><INPUT TYPE="password" NAME="pwd">
          <FONT SIZE="" COLOR="#FF3300"><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></FONT></td>
      </tr>
	  <tr bgcolor="#799AE1">
        <td align="center" >新&nbsp;密&nbsp;码</td>
        <td><INPUT TYPE="password" NAME="newpwd">
          <FONT SIZE="" COLOR="#FF3300"><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></FONT></td>
      </tr>
	  <tr bgcolor="#799AE1">
        <td align="center" >再次输入</td>
        <td><INPUT TYPE="password" NAME="anewpwd">
          <FONT SIZE="" COLOR="#FF3300"><FONT SIZE="" COLOR="#FF3300">&nbsp;*</FONT></FONT></td>
      </tr>
    <tr bgcolor="#DEE5FA">
      <td colspan="2" align="center"><input type="submit" name="submit" value="确认修改" onclick='return modpwd();'/>
        <input type="button" name="return" value="返回" onClick="javascript:history.back(-1)">
      </td>
    </tr>
  </table>
</FORM>
</BODY>
</HTML>