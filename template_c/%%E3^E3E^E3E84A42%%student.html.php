<?php /* Smarty version 2.6.26, created on 2013-06-26 02:09:54
         compiled from student.html */ ?>
<html>
<head>
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript"  src="ajax.js"></script>
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
<form name="form1" method="get" action="">
  <table width="1052" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
      <tr>
         <th align=center colspan=16 style="height: 23px">学生信息管理</th>
      </tr>
      <tr bgcolor="#DEE5FA">
         <td colspan="16" align="right" class=txlrow>
             <table width="1052" border=0  align=center cellpadding=2 cellspacing=1 class=tableBorder>
               <tr style="background-color:'#DEE5FA';border-color:#DEE5FA'">
                  <td>
                     <div>
						年级:
                           <select  name='mr_grade'>
                         <option  selected value=''>-请选择-</option>
						 <?php $_from = $this->_tpl_vars['grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                          <option value="<?php echo $this->_tpl_vars['v']['mr_grade']; ?>
"><?php echo $this->_tpl_vars['v']['mr_grade']; ?>
</option>
						  <?php endforeach; endif; unset($_from); ?>
                        </select>
						班级:
						     <select  name='mr_classid'>
                         <option  selected value=''>-请选择-</option>
						 <?php $_from = $this->_tpl_vars['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
                          <option value="<?php echo $this->_tpl_vars['c']['mr_classid']; ?>
"><?php echo $this->_tpl_vars['c']['mr_classid']; ?>
</option>
						  <?php endforeach; endif; unset($_from); ?>
                        </select>
						姓名:
						     <input type='text'  name='s_name' value="">
						宿舍:
							  <select  name='dor' >
                         <option  selected value=''>-请选择-</option>
						 <?php $_from = $this->_tpl_vars['dor']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                          <option value="<?php echo $this->_tpl_vars['d']['s_dormitory']; ?>
"><?php echo $this->_tpl_vars['d']['s_dormitory']; ?>
</option>
						  <?php endforeach; endif; unset($_from); ?>
                        </select>
						性别:
						<INPUT TYPE="radio" NAME="sex" value="男">男
						<INPUT TYPE="radio" NAME="sex" value="女">女
								
                         &nbsp;&nbsp;<input type="submit" name="sub" value="查询">
                        </div>
                  </td>  
                  <td align="left">
                     <a href="studentAdd.php">添加</a> 
                  </td></form>
              </tr>
           </table>
        </td>
		<form name="form2" method="post" action="delstudent.php">
      </tr>
      <tr align="center" bgcolor="#799AE1">
        <td width="6%" align="center" class="txlHeaderBackgroundAlternate">编号</td>
        <td width="7%" align="center" class=txlHeaderBackgroundAlternate>姓名</td>
		<td width="7%" align="center" class=txlHeaderBackgroundAlternate>学生头像</td>
        <td width="8%" align="center" class=txlHeaderBackgroundAlternate>性别</td>
		<td width="6%" align="center" class=txlHeaderBackgroundAlternate>出生日期</td>
        <td width="8%" align="center" class=txlHeaderBackgroundAlternate>班级</td>
        <td align="center" class=txlHeaderBackgroundAlternate>宿舍</td>
        <td align="center" class=txlHeaderBackgroundAlternate>家庭住址</td>
        <td align="center" class=txlHeaderBackgroundAlternate>联系方式</td>
        <td width="6%" align="center" class=txlHeaderBackgroundAlternate>辅导员</td>
        <td width="6%" align="center" class=txlHeaderBackgroundAlternate>操作</td>
        <td width="4%" align="center" class=txlHeaderBackgroundAlternate>选定</td>
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
        <td width="6%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['s_dormitory']; ?>
</td>
        <td width="15%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['s_address']; ?>
</td>
        <td width="10%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['s_phone']; ?>
</td>
        <td align="center" class=txlrow><?php echo $this->_tpl_vars['loop']['t_name']; ?>
</td>
        <td align="center" class=txlrow><a  href="studentUp.php?id=<?php echo $this->_tpl_vars['loop']['s_id']; ?>
">修改</a> | <a  onclick="return confirm('你确定删除吗？')" href="delstudent.php?id=<?php echo $this->_tpl_vars['loop']['s_id']; ?>
">删除</a> </td>
        <td align=center class=txlrow>
		<input type="checkbox" name="checkbox[]" value="<?php echo $this->_tpl_vars['loop']['s_id']; ?>
"></td>
      </tr>
	  <?php endforeach; endif; unset($_from); ?>
      <tr bgcolor="#DEE5FA">
        <td colspan="16" align=center bgcolor="#DEE5FA" class=txlrow> 
		 <input type="radio" name="do" value="1" />删除</label>
          <span class="tablebody2">
          <input type="button" value="全选" name="Submit2" onClick="selectAll()" />
           <!-- <input type="button" value="反选" name="Submit2" onClick="selectOthers()"/> -->
          </span>
        <input type="submit" name="ok" value="删除" class="but"></td>
      </tr>
	  </form>
      <tr bgcolor="#DEE5FA">
        <td colspan=16 align=center class=txlrow><a href="?page=1<?php echo $this->_tpl_vars['pagelf']; ?>
"> 首页</a>
	               <a href="?page=<?php echo $this->_tpl_vars['pageList']['up']; ?>
<?php echo $this->_tpl_vars['pagelf']; ?>
">上一页</a>
	               <a href="?page=<?php echo $this->_tpl_vars['pageList']['down']; ?>
<?php echo $this->_tpl_vars['pagelf']; ?>
">下一页</a>
	               <a href="?page=<?php echo $this->_tpl_vars['pageList']['pageNum']; ?>
<?php echo $this->_tpl_vars['pagelf']; ?>
">尾页</a>
				   <form action='' method='post' style='display:inline'>
	               <input type='text' name='page' value='' size=1>
	               <input type='submit' name='jump' value='跳转'>
				    &nbsp;&nbsp;当前 <?php if (! $this->_tpl_vars['pageList']['page']): ?>1<?php else: ?><?php echo $this->_tpl_vars['pageList']['page']; ?>
<?php endif; ?> 页&nbsp;&nbsp;&nbsp;&nbsp;共 <?php echo $this->_tpl_vars['pageList']['pageNum']; ?>
 页
				   </form></td>
      </tr>
     </tbody></table>
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