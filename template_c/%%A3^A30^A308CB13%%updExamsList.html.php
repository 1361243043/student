<?php /* Smarty version 2.6.26, created on 2013-06-19 02:29:56
         compiled from updExamsList.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<script type="text/javascript" src='template/js/common.js'></script>
<script src="ajax.js"></script>
<title>修改成考项</title>
<script language="JavaScript"> 
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
		reVal = window.showModalDialog("template/js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('DAT').value=reVal;	
		}
	
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
            <font color="#f7f7f7">修改成考项</font>
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
<form method="post" action="#" name="form1">
	<table width="100%"  border="5" cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
<?php $_from = $this->_tpl_vars['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vs']):
?>
   <tr bgcolor="#799AE1">
        <td align="center" >学生姓名</td>		
		<td>
		<input type="text" name="people" disabled value='<?php echo $this->_tpl_vars['vs']['s_name']; ?>
'>
	    </td>
       <tr bgcolor="#DEE5FA">
        <td align="center">报名日期</td>    
		<td><input type="text" id="DATE" name='at_date' value='<?php echo $this->_tpl_vars['vs']['at_date']; ?>
'/><img border="0"src="template/images/sel_date.gif" name="btnBeginDate"style="cursor: hand"  onclick="SelectDate(3)"></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >考试成绩</td>
		<td><input type="text" name='at_result' value='<?php echo $this->_tpl_vars['vs']['at_result']; ?>
'/></td>
      </tr>  
	  <tr bgcolor="#799AE1">
        <td align="center" >是否报名</td>
		<td><select name='at_issign' ><option>报名</option>
        <option>未报名</option></select></td>
      </tr>
	  <tr bgcolor="#799AE1">
        <td align="center" >是否通过</td>
		<td><select name='at_ispass'><option>通过</option>
        <option>未通过</option>
        </select></td>
      </tr>
   <input type="hidden" name="at_id" value='<?php echo $this->_tpl_vars['vs']['at_id']; ?>
'>
	  <?php endforeach; endif; unset($_from); ?>
      </tbody>
	  <tr bgcolor="#DEE5FA">
        <td colspan="2" align="center"><input type="submit" value="确认修改" name='sub' onclick="return modExamList();" />
			<input type="button" name="return" value="返回" onclick="javascript:history.back(-1)">
		</td>
      </tr>
	  </table>
</form>
</body>
</html>