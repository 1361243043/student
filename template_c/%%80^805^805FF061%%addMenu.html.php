<?php /* Smarty version 2.6.26, created on 2013-06-19 02:47:42
         compiled from addMenu.html */ ?>
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
<form action='doAddmenu.php' method='POST' name="form1">
<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="100" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif">
            <font color="#f7f7f7">添加模板</font>
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
     <tr bgcolor="#799AE1">
        <td align="center" >中文名称</td>
		<td><input type="text" value="" name='m_name' maxlength="100" style="width:100%" class="formclass"></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >导航链接</td>
		<td>
           <input type="text" value="" name='m_href' maxlength="100" style="width:100%" class="formclass">
        </td>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td align="center" >父级导航</td>
		<td>
            <select name='f_id'>
			<option value=''>请选择</option>
			<option value='0'>顶级模块</option>
			<?php $_from = $this->_tpl_vars['get']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['t']):
?>
		    <option value='<?php echo $this->_tpl_vars['t']['m_id']; ?>
'><?php echo $this->_tpl_vars['t']['m_name']; ?>
</option>
		    <?php endforeach; endif; unset($_from); ?>
		    </select>
        </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >优先级</td>
		<td>  <input type="text" value="" name='m_grade' maxlength="100" style="width:100%" class="formclass"></td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >标识</td>
		<td>  <select name='is_mark' maxlength="100" style="width:100%" class="formclass">
		<option value='1' checked>显示</option>
		<option value='0'>不显示</option>
		</select></td>
      </tr>
      
       
      </tbody>
	  <tr bgcolor="#DEE5FA">
        <td colspan="2" align="center">
		<input type="submit" name="submit" value="确认添加" onclick="return menu();" />
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