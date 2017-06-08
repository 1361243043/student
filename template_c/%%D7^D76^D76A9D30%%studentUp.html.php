<?php /* Smarty version 2.6.26, created on 2013-06-20 11:53:12
         compiled from studentUp.html */ ?>
<html>
<head>
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<script type="text/javascript" src="template/js/time.js"></script>
<script type="text/javascript"  src="template/js/ajax.js"></script>
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
	function SelectDate1(nState) {
		reVal = window.showModalDialog("template/js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('DATE1').value=reVal;
		}
	}
	
</script>
</head>
<body>
<FORM METHOD=POST ACTION="studentUp.php" name="form1" enctype='multipart/form-data'>
		<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="100" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif">
            <font color="#f7f7f7">修改信息</font>
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
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
    <tbody>
     <tr bgcolor="#799AE1">
        <td align="center" >学生姓名</td>
		<td><input type="text" disabled="disabled" name="name" value="<?php echo $this->_tpl_vars['loop']['s_name']; ?>
"  /></td>
      </tr> 
	    <tr bgcolor="#799AE1">
        <td align="center" >头像</td>
		<td><img src="upload/<?php echo $this->_tpl_vars['loop']['s_head']; ?>
" width="70" height="80"></td>
      </tr>
	  <tr bgcolor="#799AE1">
        <td align="center" >更换头像</td>
		<td><input type="file" name="file" value="" /></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >性别</td>
        <td>
          <INPUT TYPE="radio" NAME="sex" value='女'<?php if ($this->_tpl_vars['loop']['s_sex'] == '女'): ?>checked<?php endif; ?> />
          女
          <INPUT TYPE="radio" NAME="sex" value='男'<?php if ($this->_tpl_vars['loop']['s_sex'] == '男'): ?>checked<?php endif; ?> />
          男
         </td>
      </tr> 
        <tr bgcolor="#DEE5FA">
        <td align="center">出生日期</td>
        <td><input type="text" id="DATE" name="bir" value="<?php echo $this->_tpl_vars['loop']['s_birthday']; ?>
" />
          <img border="0"src="template/images/sel_date.gif" name="bir" style="cursor: hand"  onclick="SelectDate(3)"></td>
      </tr>
<tr bgcolor="#799AE1">
        <td align="center" >身份证号码</td>
        <td><input type="text" name="card" value="<?php echo $this->_tpl_vars['loop']['s_card']; ?>
" />
          </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >年龄</td>
        <td><input type="text" name="age" value="<?php echo $this->_tpl_vars['loop']['s_age']; ?>
" />
          </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >民族</td>
        <td><input type="text" name="nation" value="<?php echo $this->_tpl_vars['loop']['s_nation']; ?>
" />
          </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >班级</td>
		<td>
		<select  name='class'>
<option value='<?php echo $this->_tpl_vars['loop']['s_class']; ?>
'><?php echo $this->_tpl_vars['loop']['mr_classid']; ?>
</option> 
<?php $_from = $this->_tpl_vars['grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
<?php if ($this->_tpl_vars['val']['mr_id'] != $this->_tpl_vars['loop']['s_class']): ?>
   <option value='<?php echo $this->_tpl_vars['val']['mr_id']; ?>
'> <?php echo $this->_tpl_vars['val']['mr_classid']; ?>
 </option>
   <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</select>
        </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >宿舍</td>
		<td><input type="text" NAME="dor" value="<?php echo $this->_tpl_vars['loop']['s_dormitory']; ?>
"/></td>
      </tr>
	   <tr bgcolor="#799AE1">
        <td align="center" >家长姓名</td>
        <td><input type="text" name="father" value="<?php echo $this->_tpl_vars['loop']['s_father']; ?>
"/>
          </td>
      <tr bgcolor="#799AE1">
        <td align="center" >家庭住址</td>
		<td><input type="text" name="address" value="<?php echo $this->_tpl_vars['loop']['s_address']; ?>
" /></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >联系方式</td>
		<td><input type="text" name="phone" value="<?php echo $this->_tpl_vars['loop']['s_phone']; ?>
" /></td>
      </tr>
      
       <tr bgcolor="#799AE1">
        <td align="center" >家长电话</td>
		<td><input type="text" name="fp" value="<?php echo $this->_tpl_vars['loop']['s_father_phone']; ?>
" /></td>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td align="center">入学时间</td>
        <td><input type="text" id="DATE1" name="date" value="<?php echo $this->_tpl_vars['loop']['s_schooltimes']; ?>
"/>
          <img border="0" src="template/images/sel_date.gif" name="Date" style="cursor: hand"  onclick="SelectDate1(3)"></td>
        </tr>
	      <tr bgcolor="#799AE1">
        <td align="center" >QQ</td>
		<td><input type="text" name="QQ" value="<?php echo $this->_tpl_vars['loop']['s_qq']; ?>
" /></td>
      </tr>
       <tr bgcolor="#799AE1">
        <td align="center" >是否在校</td>
        <td><SELECT style="width:80px" name="issure">
            <option value="是"<?php if ($this->_tpl_vars['loop']['s_isatschool'] == '是'): ?>selected<?php endif; ?>>是</option>
            <OPTION VALUE="在校生"<?php if ($this->_tpl_vars['loop']['s_isatschool'] == '在校生'): ?>selected<?php endif; ?>>在校生</OPTION>
            <OPTION VALUE="已就业"<?php if ($this->_tpl_vars['loop']['s_isatschool'] == '已就业'): ?>selected<?php endif; ?>>已就业</OPTION>
            <OPTION VALUE="退学"<?php if ($this->_tpl_vars['loop']['s_isatschool'] == '退学'): ?>selected<?php endif; ?>>退学</OPTION>
          </SELECT>
        </td>
      </tr>
      </tbody>
	  <?php endforeach; endif; unset($_from); ?>
	  <tr bgcolor="#DEE5FA">
        <td colspan="2" align="center">
		<input type="hidden" name="hid" value="<?php echo $this->_tpl_vars['loop']['s_id']; ?>
">
		<input type="submit" name="sub" value="确认修改" onclick="return modstudent();" />
		<input type="button" name="return" value="返回" onclick="javascript:history.back(-1)">
		</td>
      </tr>
	  </table>
	  </FORM>
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

</BODY>
  </HTML>
