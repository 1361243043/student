<?php /* Smarty version 2.6.26, created on 2013-06-13 01:42:45
         compiled from G:%5Cxampp%5Chtdocs%5Cstudent%5Ctemplate/addmoney.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
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
	function SelectDate2(nState) {
		reVal = window.showModalDialog("template/js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('DAT').value=reVal;	
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
            <font color="#f7f7f7">添加缴费</font>
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
<form name="form" action='addmoney.php' method='post' enctype="multipart/form-data">
<table width="100%"  border="5" cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
     
      <tr bgcolor="#799AE1">
        <td align="center" >年级</td>
		<td>
		<select name='grade' id='grade' onchange="getClass(document.getElementById('grade').value)">
			  <option value=''>-请选择-</option>

<?php $_from = $this->_tpl_vars['arr3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>

	  <option value='<?php echo $this->_tpl_vars['aa']['mr_grade']; ?>
'><?php echo $this->_tpl_vars['aa']['mr_grade']; ?>
</option>

<?php endforeach; endif; unset($_from); ?>
		</select></td>
      </tr>
     
      <tr bgcolor="#799AE1">
        <td align="center" >班级</td>
		<td id='classid'> 
		<select>


		</select></td>
      </tr>
	   <tr bgcolor="#DEE5FA">
        <td align="center">姓名</td>    
		<td id='name'>
		<select  >

		<select></td>
      </tr>
	  	  <tr bgcolor="#DEE5FA">
        <td align="center">缴费项目</td>    
		<td><select name='xiangmu' >
<?php $_from = $this->_tpl_vars['arr2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aaa']):
?>
	  <option value='<?php echo $this->_tpl_vars['aaa']['te_id']; ?>
'><?php echo $this->_tpl_vars['aaa']['te_type']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
		<select></td>
      </tr>
      
     <tr bgcolor="#DEE5FA">
        <td align="center">缴费金额</td>    
		<td><input type="text" name="yingjiao" value="" /></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >已交金额</td>
		<td><input type="text" name='yijiao' value="" /></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >欠费金额</td>
		<td><input type="text" name='qian' value="" /></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >缴费日期</td>
		<td><input type="text" name='date1' id="DAT"/><img border="0"src="template/images/sel_date.gif" name="btnBeginDate"style="cursor: hand"  onclick="SelectDate2(3)"></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >最后交款时间</td>
		<td><input type="text" name='date2' value="" /></td>
      </tr>
	  <tr bgcolor="#799AE1">
        <td align="center" >收款人</td>
		<td><input type="text" name='shou' value="" /></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >备注</td>
		<td><textarea name='nei' cols="40" rows="8"></textarea>
            </td>
      </tr>   
      </tbody>
	  <tr bgcolor="#DEE5FA">
        <td colspan="2" align="center"><input type="submit" name='submit' value="确认添加" />
		<input type="button" value="关闭" onclick="window.close()"/>
		</td>
      </tr>
	  </table>
	  </form>



</body>
</html>