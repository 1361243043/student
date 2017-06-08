<?php /* Smarty version 2.6.26, created on 2013-06-20 06:56:50
         compiled from editmoney.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<script type="text/javascript" src='template/js/common.js'></script>
<title>缴费</title>
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
	
</script>
<script src='js/money.js'></script>

</head>
<body bgcolor="#F7F7F7" background="" style="font-size: 10pt" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="100" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif">
            <font color="#f7f7f7">修改缴费</font>
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
  <form name="form1" action='editmoney.php' method='post' enctype="multipart/form-data">

<table width="100%"  border="5" cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
     
      <!-- <tr bgcolor="#799AE1">
        <td align="center" >年级</td>
		<td><select name='nianji'  id='grade' onchange="getClass(document.getElementById('grade').value)" >
<option value='<?php echo $this->_tpl_vars['b']['mr_id']; ?>
'><?php echo $this->_tpl_vars['b']['mr_grade']; ?>
</option>

<?php $_from = $this->_tpl_vars['arr2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aaa']):
?>
	  <option value='<?php echo $this->_tpl_vars['aaa']['mr_grade']; ?>
'><?php echo $this->_tpl_vars['aaa']['mr_grade']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
		</select></td>
      </tr> -->
      <!-- <tr bgcolor="#799AE1">
        <td align="center" >班级</td>
		<td id='classid'> <select name='banji' >
 <option value='<?php echo $this->_tpl_vars['b']['mr_classid']; ?>
'><?php echo $this->_tpl_vars['b']['mr_classid']; ?>
</option>


		</select></td>
      </tr> -->
	  <tr bgcolor="#DEE5FA">
        <td align="center">姓名</td>    
		<td id='name'>
 <input type='text' name='s_name' value='<?php echo $this->_tpl_vars['b']['s_name']; ?>
' disabled='disabled'>
		</td>
      </tr>
	  	  <tr bgcolor="#DEE5FA">
        <td align="center">缴费项目</td>    
		<td><select name='leixing'>
	  <option value='<?php echo $this->_tpl_vars['b']['te_id']; ?>
'><?php echo $this->_tpl_vars['b']['te_type']; ?>
</option>
       <?php $_from = $this->_tpl_vars['arr3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
	  <option value='<?php echo $this->_tpl_vars['a']['te_id']; ?>
'><?php echo $this->_tpl_vars['a']['te_type']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
		<select></td>
      </tr>
      
     <tr bgcolor="#DEE5FA">
        <td align="center">缴费金额</td>
		<td><input type="text" name="jiao" value="<?php echo $this->_tpl_vars['b']['ch_must_money']; ?>
" /></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >已交金额</td>
		<td><input type="text" name='yijiao' value="<?php echo $this->_tpl_vars['b']['ch_real_money']; ?>
" /></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >欠费金额</td>
		<td><input type="text" name='qian' value="<?php echo $this->_tpl_vars['b']['ch_debt_money']; ?>
" /></td>
      </tr>
	  <tr bgcolor="#799AE1">
        <td align="center" >收款人</td>
		<td><input type="text" name='add_name' value="<?php echo $this->_tpl_vars['b']['add_name']; ?>
" /></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >缴费日期</td>
		<td><input type="text" name='data' id="DATE" value='<?php echo $this->_tpl_vars['b']['add_date']; ?>
'/><img border="0"src="template/images/sel_date.gif" name="btnBeginDate"style="cursor: hand"  onclick="SelectDate(3)"></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >最后交款时间</td>
		<td><input type="text" name='end' value="<?php echo $this->_tpl_vars['b']['ch_end_date']; ?>
" id='DAE' /><img border="0"src="template/images/sel_date.gif" name="btnBeginDate"style="cursor: hand"  onclick="SelectDate1(3)"></td>
      </tr>
	  <tr bgcolor="#799AE1">
        <td align="center" >备注</td>
		<td><textarea name='beizhu' cols="40" rows="8" value=''><?php echo $this->_tpl_vars['b']['ch_remarks']; ?>
</textarea>
            </td>
      </tr>
      </tbody>
	  <tr bgcolor="#DEE5FA">
	  	  <input name='ch_id' type="hidden" value="<?php echo $this->_tpl_vars['b']['ch_id']; ?>
" />
        <td colspan="2" align="center"><input name='submit' type="submit" value="确认修改"  onclick="return editmoney();"/>
			<input type="button" name="return" value="返回" onclick="javascript:history.back(-1)">
		</td>
      </tr>
	  </table>

	  </form>


</body>
</html>