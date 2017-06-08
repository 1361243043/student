<?php /* Smarty version 2.6.26, created on 2013-06-19 03:22:37
         compiled from checkExamsList.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>成考明细</title>
<link rel="stylesheet" type="text/css" href="template/css/formclass.css">
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<script type="text/javascript">
function conShow(html)
{
	window.showModalDialog (html,
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:1000px;dialogHeight:500px");
}
function addShow()
{
	window.showModalDialog ("Addclass.php",
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:800px;dialogHeight:500px");
}
function editShow()
{
	window.showModalDialog ("Editclass.html",
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:800px;dialogHeight:500px");
}
</script>
</head>
 
<body bgcolor="#F7F7F7" background="" style="font-size: 10pt" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="get" action="" name="formDO" enctype="multipart/form-data">
  
<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/face/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="80" bgcolor="#F7F7F7" align="center" background="template/images/face/title_left.gif">
            <font color="#f7f7f7">成考明细设置</font>
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

  <div id="m3Child" class="child">
     <table width="100%" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
      <tr>
        <th align=center colspan=16 style="height: 23px">成考管理</th>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td colspan="16" align="right" class=txlrow>
		
		<table width="1052" border=0  align=center cellpadding=2 cellspacing=1 class=tableBorder>
		
<tr style="background-color:'#DEE5FA';border-color:#DEE5FA'">
<td>

<div>

		&nbsp; 年级<select name="grade" id='grade' onchange="one(document.getElementById('grade').value)">
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
		是否通过<select name="is_pass">
		<option value=''>请选择</option>
		<option value="是">通过</option>
		<option value="否">未通过</option>
	</select>
	是否报名<select name="is_issign">
		<option value=''>请选择</option>
		<option value="是" >报名</option>
		<option value="否">未报名</option>
	</select>
      <input type="submit" value="查询" name="check" />
	  </td>
	  </form>
	  <td><a href="addExamsList.php">添加</a><td>
  </td>
 </tr>

  </table>		
        </td>
      </tr>
	  <form method="get" action="" name="form">
     <tr align="center" bgcolor="#799AE1">
        <td width="7%" align="center" class=txlHeaderBackgroundAlternate>编号</td>
		 <td width="15%" align="center" class="txlHeaderBackgroundAlternate">年级</td>
        <td width="15%" align="center" class="txlHeaderBackgroundAlternate">班级</td>
        <td width="10%" align="center" class="txlHeaderBackgroundAlternate">姓名</td>
        <td width="9%" align="center" class="txlHeaderBackgroundAlternate">报名日期</td>
        <td width="8%" align="center" class="txlHeaderBackgroundAlternate">考试成绩</td>
		<td align="center" width="9%" class="txlHeaderBackgroundAlternate">是否报名</td>
        <td align="center" class="txlHeaderBackgroundAlternate">是否通过</td>
        <td width="10%" align="center" class="txlHeaderBackgroundAlternate" >操作</td>
		 <td width="4%" align="center" class=txlHeaderBackgroundAlternate>选定</td>
       </tr>
 <?php $_from = $this->_tpl_vars['get']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vs']):
?>

     <tr bgcolor="#DEE5FA">
        <td align=center class=txlrow>
		<?php echo $this->_tpl_vars['id']++; ?>

		</td>
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['vs']['mr_grade']; ?>
</td>
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['vs']['mr_classid']; ?>
</td>
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['vs']['s_name']; ?>
</td>
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['vs']['at_date']; ?>
</td>		   <td align="center" class="txlrow"><?php echo $this->_tpl_vars['vs']['at_result']; ?>
</td>
        <td align="center" bgcolor="#DEE5FA" class="txlrow"><?php echo $this->_tpl_vars['vs']['at_issign']; ?>
</td>
        <td width="8%" align="center" class="txlrow"><?php echo $this->_tpl_vars['vs']['at_ispass']; ?>
</td>
		<td align="center" class="txlrow">
		  <a href="updExamsList.php?at_id=<?php echo $this->_tpl_vars['vs']['at_id']; ?>
">修改</a>|
		   <a href="delExamsList.php?at_id=<?php echo $this->_tpl_vars['vs']['at_id']; ?>
">删除</a>
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
        <td colspan=16 align="center" class="txlrow"><?php echo $this->_tpl_vars['pageList']; ?>
</td>
      </tr>
	   <?php echo '<?'; ?>

}else{echo "<tr><td height=20 colspan=8 align=middle valign=top bgcolor=#ffffff>暂无记录</td></tr>";}
<?php echo '?>'; ?>

      </tbody></table>
  </div>
 </form>
</body>
</html>