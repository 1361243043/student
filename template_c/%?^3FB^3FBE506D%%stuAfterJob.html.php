<?php /* Smarty version 2.6.26, created on 2013-06-12 06:44:32
         compiled from stuAfterJob.html */ ?>
<html>
<head>
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="template/js/ajax.js"></script>
<script type="text/javascript">
function conShow(html)
{
	window.showModalDialog (html,
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:1000px;dialogHeight:500px");
}
function addShow()
{
	window.showModalDialog ("studlateradd.html",
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
<form name="form1" method="post" action="checkAfterJob.php">

  <table width="1052" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
      <tr>
         <th align=center colspan=16 style="height: 23px">就业后学生信息</th>
      </tr>
      <form method="post" action="">
				<tr bgcolor="#DEE5FA">
         <td colspan="16" align="right" class=txlrow>
             <table width="1052" border=0  align=center cellpadding=2 cellspacing=1 class=tableBorder>
               <tr style="background-color:'#DEE5FA';border-color:#DEE5FA'">
                  <td>
                     <div>
                        <td colspan="3">	
	 年级<select name="grade" id='grade' onchange="one(document.getElementById('grade').value)">
	 <option value="">请选择
		</option>
		<?php $_from = $this->_tpl_vars['query1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs1']):
?>
		<option value="<?php echo $this->_tpl_vars['rs1']['mr_grade']; ?>
"><?php echo $this->_tpl_vars['rs1']['mr_grade']; ?>

		</option>
		<?php endforeach; endif; unset($_from); ?>
		</select>
		<span id='class'></span>
       <span id='people' name='people'></span>
                        &nbsp; 就业城市：
                         <select style=" width:70px"name='city'>
						<option value=''>请选择</option>
                          <option>北京</option>
                          <option>上海</option>
                          <option>济南</option>
                          <option>临沂</option>
                          <option>青岛</option>
                         </select>
                         &nbsp;&nbsp;<input type="submit" name="check" value="查询">
                        </div>
                  </td>
                  <td align="left">
                    <a href="addStuAfterJob.php">添加</a>
                  </td>
              </tr>
              </form>
           </table>
        
        </td>
      </tr>
      <tr align="center" bgcolor="#799AE1">
        <td width="4%" align="center" class="txlHeaderBackgroundAlternate">编号</td>
		<td width="4%" align="center" class="txlHeaderBackgroundAlternate">班级</td>
        <td width="5%" align="center" class=txlHeaderBackgroundAlternate>姓名</td>
        <td width="9%" align="center" class=txlHeaderBackgroundAlternate>手机号</td>
        <td width="8%" align="center" class=txlHeaderBackgroundAlternate>就业城市</td>
        <td width="10%" align="center" class=txlHeaderBackgroundAlternate>就业单位</td>
        <td width="9%" align="center" class=txlHeaderBackgroundAlternate>职位</td>
        <td width="7%" align="center" class=txlHeaderBackgroundAlternate>待遇</td>
        <td width="15%" align="center" class=txlHeaderBackgroundAlternate>公司简介</td>
        <td width="9%" align="center" class=txlHeaderBackgroundAlternate>公司地址</td>
        <td width="9%" align="center" class=txlHeaderBackgroundAlternate>个人住址</td>
         <td width="10%" align="center" class=txlHeaderBackgroundAlternate colspan="2">操作</td>
      </tr>
	  <?php $_from = $this->_tpl_vars['frist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vs']):
?>
      <tr bgcolor="#DEE5FA">
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['vs']['aj_id']; ?>
</td>
		<td align="center" class="txlrow"><?php echo $this->_tpl_vars['vs']['mr_grade']; ?>
<?php echo $this->_tpl_vars['vs']['mr_classid']; ?>
</td>
		<td align="center" class="txlrow"><?php echo $this->_tpl_vars['vs']['s_name']; ?>
</td>
        <td align=center class=txlrow><?php echo $this->_tpl_vars['vs']['aj_student_phone']; ?>
</td>
        <td align=center class=txlrow><?php echo $this->_tpl_vars['vs']['aj_jobcity']; ?>
</td>
        <td align=center bgcolor="#DEE5FA" class=txlrow><?php echo $this->_tpl_vars['vs']['aj_job_company']; ?>
</td>
        <td width="8%" align=center class=txlrow><?php echo $this->_tpl_vars['vs']['aj_post']; ?>
</td>
        <td width="6%" align=center class=txlrow><?php echo $this->_tpl_vars['vs']['aj_job_pay']; ?>
</td>
        <td width="8%" align=center class=txlrow><?php echo $this->_tpl_vars['vs']['aj_company_show']; ?>
</td>
        <td width="6%" align=center class=txlrow><?php echo $this->_tpl_vars['vs']['aj_address']; ?>
</td>
        <td align=center class=txlrow><?php echo $this->_tpl_vars['vs']['aj_my_address']; ?>
</td>
        <td align="center" class="txlrow">
		  <a href="updStudAfterJob.php?aj_id=<?php echo $this->_tpl_vars['vs']['aj_id']; ?>
">修改</a>
		</td>  
        <td align="center" class="txlrow">
		   <a href="delStuAfterJob.php?aj_id=<?php echo $this->_tpl_vars['vs']['aj_id']; ?>
">删除</a>
		</td> 
	  </tr>
       <?php endforeach; endif; unset($_from); ?> 
      </tr>
       <tr bgcolor="#DEE5FA">
        <td colspan="16" align=center bgcolor="#DEE5FA" class=txlrow> 
		 <input type="radio" name="do" value="1" />删除</label>
     
        <input type="submit" name="ok" value="确定" class="but"></td>
      </tr>
     <tr bgcolor="#DEE5FA">
        <td colspan=16 align=center class=txlrow><?php echo $this->_tpl_vars['pageList']; ?>
</td>
      </tr>
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