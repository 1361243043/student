<?php /* Smarty version 2.6.26, created on 2013-06-21 00:48:36
         compiled from Editclass.html */ ?>
<html>
<head>
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<script type="text/javascript" src="template/js/time.js"></script>
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
		reVal = window.showModalDialog("js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('DATE').value=reVal;
		}
	}
</script>
</head>
<body>
<form action='' method='post' name='form1'>
<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="100" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif">
            <font color="#f7f7f7">修改班级</font>
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
	<?php $_from = $this->_tpl_vars['spr_class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
     <tr bgcolor="#799AE1">
        <td align="center" >年级名称</td>
		<td> <input type="text" id="mr_grade" name="mr_grade" value="<?php echo $this->_tpl_vars['v']['mr_grade']; ?>
" maxlength="200" style="width:100%"class="formclass"></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >班级名称</td>
		<td>
            <input type="text" id="mr_classid" name="mr_classid" value="<?php echo $this->_tpl_vars['v']['mr_classid']; ?>
" maxlength="200" style="width:100%"class="formclass">
        </td>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td align="center" >选择辅导员</td>
		<td>
         <select style="width:100%" class="formclass" name='mr_coach'>
		 <option value="<?php echo $this->_tpl_vars['v']['t_id']; ?>
"><?php echo $this->_tpl_vars['v']['t_name']; ?>
</option>
		 <?php $_from = $this->_tpl_vars['getData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?> 
         <option value="<?php echo $this->_tpl_vars['loop']['t_id']; ?>
"><?php if ($this->_tpl_vars['loop']['t_name'] != $this->_tpl_vars['v']['t_name']): ?><?php echo $this->_tpl_vars['loop']['t_name']; ?>
<?php endif; ?></option>
		<?php endforeach; endif; unset($_from); ?>
      </select>
        </td>
      </tr>
	  <?php endforeach; endif; unset($_from); ?>
      </tbody>
	  <tr bgcolor="#DEE5FA">
        <td colspan="2" align="center"><input type="submit" name='submit' value="确认修改" onclick="return classid();" />
		<input type="button" name="return" value="返回" onclick="javascript:history.back(-1)">
		<!-- <input type="button" value="关闭" onClick="window.close()"/> -->
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