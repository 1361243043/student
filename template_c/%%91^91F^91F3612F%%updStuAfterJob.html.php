<?php /* Smarty version 2.6.26, created on 2013-06-26 09:14:15
         compiled from updStuAfterJob.html */ ?>
<html>
<head>
<link rel="stylesheet" href="template\inc\css.css" type="text/css" />
<script type="text/javascript" src="template\js\time.js"></script>
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
<form action='' method='post'>
  <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
    <tr>
      <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center"><table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
          <tr height="35">
            <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
            <td width="100" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><font color="#f7f7f7">修改信息</font> </td>
            <td width="11" bgcolor="#F7F7F7" align="center" background="template/images/title_middle.gif"><font color="#f7f7f7">&nbsp;</font> </td>
            <td bgcolor="#F7F7F7" align="center" background="template/images/title_right.gif"><font color="#f7f7f7">&nbsp;</font> </td>
          </tr>
        </table></td>
    </tr>
  </table>
 <!-- 个人 -->
<form method="post" action="#" name='form1'>
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
      </tr>
	  <!-- <tr bgcolor="#799AE1">
        <td align="center" >原所在班级</td>
		<td><select name="aj_class_id">
		<?php $_from = $this->_tpl_vars['query_class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vss']):
?>
			<option value="<?php echo $this->_tpl_vars['vss']['mr_id']; ?>
" <?php if ($this->_tpl_vars['vs']['aj_class_id'] == $this->_tpl_vars['vss']['mr_id']): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['vss']['mr_classid']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>        
		</td>
      </tr> -->
	  <tr bgcolor="#799AE1">
        <td align="center" >就业单位</td>
		<td><input type="text" name='aj_job_company' value='<?php echo $this->_tpl_vars['vs']['aj_job_company']; ?>
'/></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >职位</td>
		<td><input type="text" name='aj_post' value='<?php echo $this->_tpl_vars['vs']['aj_post']; ?>
'/></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center">工作时间</td>
        <td><input type="text" name='aj_job_date'  value='<?php echo $this->_tpl_vars['vs']['aj_job_date']; ?>
' id="DATE"/>
          <img border="0"src="template/images/sel_date.gif" name="btnBeginDate"style="cursor: hand"  onclick="SelectDate(3)"></td>
      </tr>

      <tr bgcolor="#DEE5FA">
        <td align="center" >就业城市</td>
		<td>
          <SELECT style="width:90px" name='aj_jobcity'>
			 <OPTION value=''>--请选择--</OPTION>
			<OPTION value='北京'<?php if ($this->_tpl_vars['vs']['aj_jobcity'] == '北京'): ?>selected="selected"<?php endif; ?>>北京</OPTION>
			<OPTION VALUE="上海"<?php if ($this->_tpl_vars['vs']['aj_jobcity'] == '上海'): ?>selected="selected"<?php endif; ?>>上海</OPTION>
            <OPTION VALUE="济南"<?php if ($this->_tpl_vars['vs']['aj_jobcity'] == '济南'): ?>selected="selected"<?php endif; ?>>济南</OPTION>
            <OPTION VALUE="临沂"<?php if ($this->_tpl_vars['vs']['aj_jobcity'] == '临沂'): ?>selected="selected"<?php endif; ?>>临沂</OPTION>
		  </SELECT>
        </td>
      </tr>
	  <tr bgcolor="#799AE1">
        <td align="center" >手机号</td>
		<td><input type="text" name='aj_student_phone' value='<?php echo $this->_tpl_vars['vs']['aj_student_phone']; ?>
'/></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >待遇</td>
		<td><input type="text" name='aj_job_pay' value='<?php echo $this->_tpl_vars['vs']['aj_job_pay']; ?>
' /></td>
      </tr>
	  <tr bgcolor="#799AE1">
        <td align="center" >个人地址</td>
		<td><input type="text" style="width:200px"  name='aj_my_address' value='<?php echo $this->_tpl_vars['vs']['aj_my_address']; ?>
'/></td>
      </tr>
	  <tr bgcolor="#DEE5FA">
        <td align="center" >公司地址</td>
		<td><input type="text" style="width:200px" name='aj_address' value='<?php echo $this->_tpl_vars['vs']['aj_address']; ?>
' />
		</td>
      </tr>  
	   <tr bgcolor="#DEE5FA">
        <td align="center" >公司简介</td>
		<td><input type="text" style="width:200px; height:50px" name='aj_company_show' value='<?php echo $this->_tpl_vars['vs']['aj_company_show']; ?>
'/></td>
      </tr> 
	  <input type="hidden" name="aj_id" value='<?php echo $this->_tpl_vars['vs']['aj_id']; ?>
'>
	 <?php endforeach; endif; unset($_from); ?>
    </tbody>
    <tr bgcolor="#DEE5FA">
       <td colspan="2" align="center"><input type="submit" value="确认修改" name='sub' onclick="return modStuLater();"/>
		<input type="button" name="return" value="返回" onclick="javascript:history.back(-1)">
		</td>
    </tr>
  </table>
</form>
</BODY>
</HTML>