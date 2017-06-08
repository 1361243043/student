<?php /* Smarty version 2.6.26, created on 2013-06-25 12:28:27
         compiled from stuInfoManage.html */ ?>
<html>
<head>
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
function conShow(html)
{
	window.showModalDialog (html,
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:1000px;dialogHeight:500px");
}
function addShow()
{
	window.showModalDialog ("stuInfoAdd.html",
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:800px;dialogHeight:500px");
}
function editShow()
{
	window.showModalDialog ("stuInfoEdit.html",
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:800px;dialogHeight:500px");
}
</script>
</head>
<body bgcolor="#F7F7F7" background="" style="font-size: 10pt" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="POST" action="" name="form" enctype="multipart/form-data">
  
<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/face/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="80" bgcolor="#F7F7F7" align="center" background="template/images/face/title_left.gif">
            <font color="#f7f7f7">角色管理设置</font>
          </td>
          <td width="11" bgcolor="#F7F7F7" align="center" background="template/images/face/title_middle.gif">
            <font color="#f7f7f7">&nbsp;</font>
          </td>
          <td bgcolor="#F7F7F7" align="center" background="template/images/face/title_right.gif">
            <font color="#f7f7f7">&nbsp;</font>
          </td>
       </tr>
     </table>
    </td>
 </tr>
</table>

  <table width="100%" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
      <tr>
        <th align=center colspan=16 style="height: 23px">用户管理</th>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td colspan="16" align="right" class=txlrow>
         <table width="1052" border=0  align=center cellpadding=2 cellspacing=1 class=tableBorder>
<tr style="background-color:'#DEE5FA';border-color:#DEE5FA'">
<td>
<div>
 &nbsp; 姓名:
 <input name='data1'>
 &nbsp;职务:
<select style="width:150px" name='data'>
<option value="">--请选择--</option>
<?php $_from = $this->_tpl_vars['getData1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
 <option><?php echo $this->_tpl_vars['loop']['ro_name']; ?>
</option>
 <?php endforeach; endif; unset($_from); ?>
 </select>
 &nbsp;&nbsp;<input type="submit" name="sub" value="查询">
</div>
 </td>
  <td align="left">
    <?php echo $this->_tpl_vars['str']; ?>

  </td>
 </tr>
  </table>
        
        </td>
      </tr>
      <tr align="center" bgcolor="#799AE1">
        <td width="5%" align="center" class="txlHeaderBackgroundAlternate">编号</td>
        <td width="5%" align="center" class=txlHeaderBackgroundAlternate>姓名</td>
		  <td width="5%" align="center" class=txlHeaderBackgroundAlternate>角色</td>
		<td width="5%" align="center" class=txlHeaderBackgroundAlternate>民族</td>
		<td  width="8%" align="center" class=txlHeaderBackgroundAlternate>身份证号</td>
		<td width="8%" align="center" class=txlHeaderBackgroundAlternate>出生日期</td>
        <td width="9%" align="center" class=txlHeaderBackgroundAlternate>家庭住址</td>
        <td width="9%" align="center" class=txlHeaderBackgroundAlternate>联系方式</td>
        <td width="6%" align="center" class=txlHeaderBackgroundAlternate>操作</td>
        <td width="4%" align="center" class=txlHeaderBackgroundAlternate>选定</td>
      </tr>
	  <?php $_from = $this->_tpl_vars['getData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
      <tr bgcolor="#DEE5FA">
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['id']++; ?>
</td>
        <td align=center class=txlrow><?php echo $this->_tpl_vars['loop']['t_name']; ?>
</td>
		<td align=center class=txlrow><?php echo $this->_tpl_vars['loop']['ro_name']; ?>
</td>
		<td align=center class=txlrow><?php echo $this->_tpl_vars['loop']['t_nation']; ?>
</td>
		<td align=center class=txlrow><?php echo $this->_tpl_vars['loop']['t_card']; ?>
</td>
        <td align=center bgcolor="#DEE5FA" class=txlrow><?php echo $this->_tpl_vars['loop']['t_birthday']; ?>
</td>
        <td width="8%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['t_address']; ?>
</td>
        <td width="6%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['t_phone']; ?>
</td>
        <td align=center class=txlrow><a href="stuInfoEdit.php?t_id=<?php echo $this->_tpl_vars['loop']['t_id']; ?>
">修改</a> | <a href="?t_id=<?php echo $this->_tpl_vars['loop']['t_id']; ?>
" onClick="return confirm('您确定删除吗?')">删除</a></td>
        <td align=center class=txlrow><input type="checkbox" name="ch[1]" value="0"></td>
      </tr>
	  <?php endforeach; endif; unset($_from); ?>
     
      </tr>
       <tr bgcolor="#DEE5FA">
        <td colspan="16" align=center bgcolor="#DEE5FA" class=txlrow> 
		 <input type="radio" name="do" value="1" />删除</label>
          <label></label>
          <span class="tablebody2">
          <input type="button" value="全选" name="Submit2" onClick="selectAll()" />
          </span>
        <input type="submit" name="ok" value="确定" class="but"></td>
      </tr>
      <tr><td align="center" bgcolor="#DEE5FA" colspan="11"><?php echo $this->_tpl_vars['fenye']; ?>
</td></tr>
     </tbody></table>
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