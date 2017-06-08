<?php /* Smarty version 2.6.26, created on 2013-06-19 00:12:00
         compiled from moneyListUp.html */ ?>
<html>
<head>
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src='template/js/common.js'></script>
<script type="text/javascript">
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
<form action="" method="post" name="form1">
<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="100" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif">
            <font color="#f7f7f7">学费类型修改</font>
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
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
     <tr bgcolor="#799AE1">
        <td align="center" >学费类型名称</td>
		<td><input type="text" name="type" value="<?php echo $this->_tpl_vars['loop']['te_type']; ?>
"/></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >学费金额</td>
		<td>
          <input type="text" name="money" value="<?php echo $this->_tpl_vars['loop']['te_money']; ?>
"/>  
        </td>
      </tr>
    	        <tr bgcolor="#DEE5FA">
        <td align="center">收费开始时间</td>    
		<td><input type="text" id="date" name="begin" value="<?php echo $this->_tpl_vars['loop']['te_date_begin']; ?>
" /><img border="0"src="template/images/sel_date.gif" name="bir" style="cursor: hand"  onclick="SelectDate(3)"></td>
      </tr>
	    <tr bgcolor="#DEE5FA">
        <td align="center">收费结束时间</td>    
		<td><input type="text" id="date1" name="end" value="<?php echo $this->_tpl_vars['loop']['te_date_end']; ?>
"/><img border="0" src="template/images/sel_date.gif" name="Date" style="cursor: hand"  onclick="SelectDate1(3)"></td>
      </tr>
<?php endforeach; endif; unset($_from); ?>
      </tbody>
	  <tr bgcolor="#DEE5FA">
        <td colspan="2" align="center">
		<input type="hidden" name="hid" value="<?php echo $this->_tpl_vars['loop']['te_id']; ?>
" />
		<INPUT TYPE="submit" name="sub" value="确认修改" onclick="return editmoneylist();" />
				<input type="button" name="return" value="返回" onclick="javascript:history.back(-1)">
		</td>
      </tr>
	  </table> 
  </form>
</BODY>
  </HTML>
