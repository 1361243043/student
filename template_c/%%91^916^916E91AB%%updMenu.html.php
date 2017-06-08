<?php /* Smarty version 2.6.26, created on 2013-06-05 01:34:26
         compiled from updMenu.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<title>修改模板</title>
<script language="JavaScript"> 
function SelectDate(nState) {
		reVal = window.showModalDialog("js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('DATE').value=reVal;	
		}
	
	}
	function SelectDate1(nState) {
		reVal = window.showModalDialog("js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

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
</script>
</head>
<body bgcolor="#F7F7F7" background="" style="font-size: 10pt" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="doUpdMenu.php">
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
	<?php $_from = $this->_tpl_vars['get']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vs']):
?>
    <tr bgcolor="#799AE1">
        <td align="center" >模板名称</td>
		<td><input type="text" name="m_name" value="<?php echo $this->_tpl_vars['vs']['m_name']; ?>
" />
		<input type='hidden' name='m_id' value="<?php echo $this->_tpl_vars['vs']['m_id']; ?>
" />
		</td>
      </tr>
       <tr bgcolor="#799AE1">
        <td align="center" >导航链接</td>
		<td><input type="text" name="m_href" value="<?php echo $this->_tpl_vars['vs']['m_href']; ?>
" /></td>
      </tr>
       <tr bgcolor="#799AE1">
        <td align="center" >父级</td>
		<td>
		 <SELECT style="width:80px" name='f_id'>
			<OPTION value='0'>顶级模块</OPTION>
			<?php $_from = $this->_tpl_vars['get1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
			<OPTION value='<?php echo $this->_tpl_vars['r']['m_id']; ?>
'<?php if ($this->_tpl_vars['r']['f_id'] == $this->_tpl_vars['vs']['f_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['r']['m_name']; ?>
</OPTION>
			<?php endforeach; endif; unset($_from); ?>
		  </SELECT>
		</td>
      </tr>
   <tr bgcolor="#799AE1">
        <td align="center" >优先级</td>
		<td><input type="text" value="<?php echo $this->_tpl_vars['vs']['m_grade']; ?>
" name='m_grade'/></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >标识</td>
		<td>
		<select name='is_mark' maxlength="100" style="width:30%" class="formclass">
		<option value='1'<?php if ($this->_tpl_vars['vs']['is_mark'] == 1): ?>selected="selected"<?php endif; ?>>显示</option>
		<option value='0'>不显示</option>
		</select>
      </tr> 
	  <?php endforeach; endif; unset($_from); ?>
      </tbody>
	  <tr bgcolor="#DEE5FA">
	  <input type='hidden' name='id' value="<?php echo $this->_tpl_vars['m_id']; ?>
">
        <td colspan="2" align="center"><input type="submit" value="确认修改" />
		<input type="button" value="关闭" onClick="window.close()"/>
		</td>
      </tr>
	  </table>
</form>
</body>
</html>