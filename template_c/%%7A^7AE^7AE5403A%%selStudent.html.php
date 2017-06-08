<?php /* Smarty version 2.6.26, created on 2013-06-13 02:55:04
         compiled from G:%5Cxampp%5Chtdocs%5Cstudent%5Ctemplate/selStudent.html */ ?>
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
	window.showModalDialog ("studentadd.html",
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:800px;dialogHeight:500px");
}
function editShow()
{
	window.showModalDialog ("stuInentEdit.html",
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:800px;dialogHeight:500px");
}
</script>
</head>
<body>
<form name="form1" method="post" action="">

  <table width="1052" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
      <tr>
         <th align=center colspan=16 style="height: 23px">学生信息管理</th>
      </tr>
      <tr bgcolor="#DEE5FA">
         <td colspan="16" align="right" class=txlrow>
        
        </td>
      </tr>
      <tr align="center" bgcolor="#799AE1">
        <td width="5%" align="center" class="txlHeaderBackgroundAlternate">编号</td>
        <td width="7%" align="center" class=txlHeaderBackgroundAlternate>姓名</td>
		<td width="7%" align="center" class=txlHeaderBackgroundAlternate>学生头像</td>
        <td width="5%" align="center" class=txlHeaderBackgroundAlternate>性别</td>
		<td width="6%" align="center" class=txlHeaderBackgroundAlternate>出生日期</td>
        <td width="8%" align="center" class=txlHeaderBackgroundAlternate>班级</td>
        <td align="center" class=txlHeaderBackgroundAlternate>宿舍</td>
		<td align="center" class=txlHeaderBackgroundAlternate>联系方式</td>
        <td align="center" class=txlHeaderBackgroundAlternate>家庭住址</td>
		<td align="center" class=txlHeaderBackgroundAlternate>家长姓名</td>
		<td align="center" class=txlHeaderBackgroundAlternate>家长电话</td>
		<td align="center" class=txlHeaderBackgroundAlternate>QQ</td>
        <td width="6%" align="center" class=txlHeaderBackgroundAlternate>辅导员
		<td width="6%" align="center" class=txlHeaderBackgroundAlternate>操作</td></td>
      </tr>
	  <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
      <tr bgcolor="#DEE5FA">
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['loop']['s_id']; ?>
</td>
		<td align="center" class="txlrow"><?php echo $this->_tpl_vars['loop']['s_name']; ?>
</td>
        <td align="center" class=txlrow><img src="upload/<?php echo $this->_tpl_vars['loop']['s_head']; ?>
" width="50" height="40"></td>
        <td align="center" class=txlrow><?php echo $this->_tpl_vars['loop']['s_sex']; ?>
</td>
        <td align="center" bgcolor="#DEE5FA" class=txlrow><?php echo $this->_tpl_vars['loop']['s_birthday']; ?>
</td>
        <td width="8%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['mr_classid']; ?>
</td>
        <td width="5%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['s_dormitory']; ?>
</td>
 <td width="10%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['s_phone']; ?>
</td>
        <td width="10%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['s_address']; ?>
</td>
        <td width="7%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['s_father']; ?>
</td>
		 <td width="7%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['s_father_phone']; ?>
</td>
		  <td width="7%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['s_qq']; ?>
</td>
        <td align="center" class=txlrow><?php echo $this->_tpl_vars['loop']['t_name']; ?>
</td>
    <td align="center" class=txlrow><a  href="studentUp.php?id=<?php echo $this->_tpl_vars['loop']['s_id']; ?>
">修改</a> | <a  onclick="return confirm('你确定删除吗？')" href="?id=<?php echo $this->_tpl_vars['loop']['s_id']; ?>
">删除</a> </td>
      </tr>
	  <?php endforeach; endif; unset($_from); ?>
       <tr bgcolor="#DEE5FA">
        <td colspan="16" align=center bgcolor="#DEE5FA" class=txlrow>
          <span class="tablebody2">
          
          </span>
        <input type="button" name="ok" value="返回" class="but" onclick="javascript:history.back(-1)"></td>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td colspan=16 align=center class=txlrow><?php echo $this->_tpl_vars['pageList']; ?>
</td>
      </tr>
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