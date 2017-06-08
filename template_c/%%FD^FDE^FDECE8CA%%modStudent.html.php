<?php /* Smarty version 2.6.26, created on 2013-06-19 07:40:09
         compiled from modStudent.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<script type="text/javascript" src='template/js/common.js'></script>
<script type="text/javascript" src='template/js/ajax.js'></script>
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
			document.getElementById('date').value=reVal;
		}
}
function SelectDat(nState) {
		reVal = window.showModalDialog("template/js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('bir').value=reVal;
		}
}	
</script>
</head>
<body>
<FORM METHOD='POST' ACTION=""name="form1" enctype="multipart/form-data">
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
  <table width="100%"  border="5" cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['t']):
?>
    <tbody>
      <tr bgcolor="#799AE1">
        <td align="center" >学生姓名</td>
        <td><input type="text" name="name" disabled="disabled" value="<?php echo $this->_tpl_vars['t']['s_name']; ?>
" />
          </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >性别</td>
        <td><INPUT TYPE="radio" NAME="sex" value="<?php echo $this->_tpl_vars['sex']; ?>
" checked />
          <?php echo $this->_tpl_vars['sex']; ?>

          <?php if ($this->_tpl_vars['value'] == '1'): ?>
          <INPUT TYPE="radio" NAME="sex" value='女' />
          女
          <?php else: ?>
          <INPUT TYPE="radio" NAME="sex" value='男' />
          男
          <?php endif; ?> </td>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td align="center">出生日期</td>
        <td><input type="text" id="bir" name="bir" value="<?php echo $this->_tpl_vars['t']['s_birthday']; ?>
" />
          <img border="0"src="template/images/sel_date.gif" name="bir" style="cursor: hand"  onclick="SelectDat(3)"></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >身份证号码</td>
        <td><input type="text" name="card" value="<?php echo $this->_tpl_vars['t']['s_card']; ?>
" />
          </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >年龄</td>
        <td><input type="text" name="age" value="<?php echo $this->_tpl_vars['t']['s_age']; ?>
" />
          </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >民族</td>
        <td><input type="text" name="nation" value="<?php echo $this->_tpl_vars['t']['s_nation']; ?>
" />
          </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >班级</td>
        <td>
	<select  name='class'>
      <option value='<?php echo $this->_tpl_vars['t']['mr_id']; ?>
'><?php echo $this->_tpl_vars['t']['mr_classid']; ?>
</option> 
      <?php $_from = $this->_tpl_vars['data_o']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
      <?php if ($this->_tpl_vars['val']['mr_id'] != $this->_tpl_vars['t']['s_class']): ?>
     <option value='<?php echo $this->_tpl_vars['val']['mr_id']; ?>
'><?php echo $this->_tpl_vars['val']['mr_classid']; ?>
 </option>
      <?php endif; ?>
     <?php endforeach; endif; unset($_from); ?>
     </select>
           </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >宿舍</td>
        <td><input type="text" name="dor" value="<?php echo $this->_tpl_vars['t']['s_dormitory']; ?>
"/>
          </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >家长姓名</td>
        <td><input type="text" name="father" value="<?php echo $this->_tpl_vars['t']['s_father']; ?>
"/>
          </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >家庭住址</td>
        <td><input type="text" name="address" value="<?php echo $this->_tpl_vars['t']['s_address']; ?>
" />
          </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >个人电话</td>
        <td><input type="text" name="phone" value="<?php echo $this->_tpl_vars['t']['s_phone']; ?>
"/>
          </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >QQ号</td>
        <td><input type="text" name="QQ"/ value="<?php echo $this->_tpl_vars['t']['s_qq']; ?>
"></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >家长电话</td>
        <td><input type="text" name="fp" value="<?php echo $this->_tpl_vars['t']['s_father_phone']; ?>
"/></td>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td align="center">入学时间</td>
        <td><input type="text" id="date" name="date" value="<?php echo $this->_tpl_vars['t']['s_schooltimes']; ?>
"/>
          <img border="0" src="template/images/sel_date.gif" name="Date" style="cursor: hand"  onclick="SelectDate(3)"></td>
      </tr>
        <tr bgcolor="#799AE1">
        <td align="center" >头像</td>
		<td><img src="upload/<?php echo $this->_tpl_vars['t']['s_head']; ?>
" width="70" height="80"></td>
      </tr>
     <tr bgcolor="#799AE1">
        <td align="center" >更换头像</td>
		<td><input type="file" name="f" value="" /></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >是否在校</td>
        <td><SELECT style="width:80px" name="isname">
            <option value="<?php echo $this->_tpl_vars['t']['s_isatschool']; ?>
" selected><?php echo $this->_tpl_vars['t']['is_atschool']; ?>
</option>
            <OPTION VALUE="在校生">在校生</OPTION>
            <OPTION VALUE="已就业">已就业</OPTION>
            <OPTION VALUE="退学">退学</OPTION>
          </SELECT>
        </td>
      </tr>
    </tbody>
    <tr bgcolor="#DEE5FA">
      <input type="hidden" name="hid" value="<?php echo $this->_tpl_vars['t']['s_id']; ?>
">
      <td colspan="2" align="center"><input type="submit" name="submit" value="确认修改" onclick="return checkstudent();"/>
        <input type="button" name="return" value="返回" onClick="javascript:history.back(-1)">
      </td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
  </table>
</FORM>
</BODY>
</HTML>