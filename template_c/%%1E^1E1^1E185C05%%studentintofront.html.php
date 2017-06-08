<?php /* Smarty version 2.6.26, created on 2013-06-18 01:55:26
         compiled from studentintofront.html */ ?>
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
	window.showModalDialog ("studfrontadd.php",
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
<body>

  <table width="1052" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
      <tr>
         <th align=center colspan=16 style="height: 23px">就业前学生信息</th>
      </tr>
      <tr bgcolor="#DEE5FA">
         <td colspan="16" align="right" class=txlrow>
             <table width="1052" border=0  align=center cellpadding=2 cellspacing=1 class=tableBorder>
               <tr style="background-color:'#DEE5FA';border-color:#DEE5FA'">
               <form name="form1" method="get" action="">
                  <td>
                     <div>
					
                        年级：
                        <select name='mr_grade'>
                          <OPTION value='' selected>--请选择--</OPTION>
			<?php $_from = $this->_tpl_vars['query_class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
			<OPTION VALUE="<?php echo $this->_tpl_vars['loop']['mr_grade']; ?>
"><?php echo $this->_tpl_vars['loop']['mr_grade']; ?>
</OPTION>
            <?php endforeach; endif; unset($_from); ?>
                        </select>
                        &nbsp; 班级：
                         <select style="width:80px" name='mr_classid'>
                          <OPTION value='' selected>--请选择--</OPTION>
			<?php $_from = $this->_tpl_vars['query_classid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop2']):
?>
			<OPTION VALUE="<?php echo $this->_tpl_vars['loop2']['mr_classid']; ?>
"><?php echo $this->_tpl_vars['loop2']['mr_classid']; ?>
</OPTION>
            <?php endforeach; endif; unset($_from); ?>
                         </select>
                         &nbsp; 姓名:
                         <input name='s_name' value='' type='text'>
                         &nbsp;带队老师:
                        <select style=" width:70px" name='t_name'>
						<OPTION value='' selected>--请选择--</OPTION>
                         <?php $_from = $this->_tpl_vars['query_teacher']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop3']):
?>
			<OPTION VALUE="<?php echo $this->_tpl_vars['loop3']['t_id']; ?>
"><?php echo $this->_tpl_vars['loop3']['t_name']; ?>
</OPTION>
            <?php endforeach; endif; unset($_from); ?>
                        </select>
                        &nbsp; 就业城市：
                         <select style=" width:70px" name='jobcity'>
						 <OPTION value='' selected>--请选择--</OPTION>
                          <option value="北京">北京</option>
                          <option value="上海">上海</option>
                          <option value="济南">济南</option>
                          <option value="临沂">临沂</option>
                          <option value="青岛">青岛</option>
                         </select>
                         &nbsp;&nbsp;<input type="submit" name="sub" value="查询">
						
                        </div>
                  </td>
				  </FORM>
                  <td align="left">
                     <!-- <a  href="javascript:addShow()">添加</a> --> 
					 <a  href="studfrontadd.php">添加</a>
                  </td>
              </tr>
           </table>
        </td>
      </tr>
	  <form name=form2 action='delstudentintofront.php' method='post'>
      <tr align="center" bgcolor="#799AE1">
        <td width="6%" align="center" class="txlHeaderBackgroundAlternate">编号</td>
        <td width="9%" align="center" class=txlHeaderBackgroundAlternate>姓名</td>
        <td width="9%" align="center" class=txlHeaderBackgroundAlternate>班级</td>
		<td width="9%" align="center" class=txlHeaderBackgroundAlternate>综合成绩</td>
		<td width="9%" align="center" class=txlHeaderBackgroundAlternate>就业城市</td>
		<td width="10%" align="center" class=txlHeaderBackgroundAlternate>带队老师</td>
		<td width="10%" align="center" class=txlHeaderBackgroundAlternate>离校日期</td>   
		<td width="9%" align="center" class=txlHeaderBackgroundAlternate>校长是否同意</td> 
		<td width="9%" align="center" class=txlHeaderBackgroundAlternate>费用是否交齐</td>
        <td width="15%" align="center" class=txlHeaderBackgroundAlternate>日常表现(辅导员)</td>
		<td width="9%" align="center" class=txlHeaderBackgroundAlternate>操作</td>
         <td width="4%" align="center" class=txlHeaderBackgroundAlternate>选定</td>
      </tr>
	  <?php $_from = $this->_tpl_vars['getData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
      <tr bgcolor="#DEE5FA">
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['id']++; ?>
</td>
        <td align=center class=txlrow><?php echo $this->_tpl_vars['loop']['s_name']; ?>
</td>
        <td align=center class=txlrow><?php echo $this->_tpl_vars['loop']['mr_classid']; ?>
</td>
        <td align=center bgcolor="#DEE5FA" class=txlrow><?php echo $this->_tpl_vars['loop']['bj_mul_result']; ?>
</td>
        <td width="8%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['bj_jobcity']; ?>
</td>
        <td width="6%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['t_name']; ?>
</td>
        <td width="8%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['bj_date']; ?>
</td>
        <td width="6%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['bj_is_sure']; ?>
</td>
		<td width="6%" align=center class=txlrow>
		<?php $_from = $this->_tpl_vars['charge']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loops']):
?>
		<?php if ($this->_tpl_vars['loop']['bj_studentid'] == $this->_tpl_vars['loops']['ch_student_id']): ?>
		<?php if (26800 == $this->_tpl_vars['loops']['sum']): ?>
		交齐
		<?php else: ?>
		未交齐
		<?php endif; ?>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</td>
         <td align=center class=txlrow>
           <a href="#"><?php echo $this->_tpl_vars['loop']['bj_daily_show']; ?>
</a>
         </td>
		 <td align=center class=txlrow>
		<a  href="studfrontedit.php?id='<?php echo $this->_tpl_vars['loop']['bj_id']; ?>
'">修改</a> | 
         <a  href="delstudentintofront.php?id='<?php echo $this->_tpl_vars['loop']['bj_id']; ?>
'" onclick="return window.confirm('确定要删除吗？');">删除</a>
		</td>
       <td align=center class=txlrow><input type="checkbox" name="checkbox[]" value="<?php echo $this->_tpl_vars['loop']['bj_id']; ?>
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
        <input type="submit" name="ok" value="确定" class="but"></td>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td colspan=16 align=center class=txlrow><?php echo $this->_tpl_vars['fenye']; ?>
</td>
      </tr>
     </tbody>
	 </form>
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

</BODY>
  </HTML>