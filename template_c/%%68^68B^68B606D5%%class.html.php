<?php /* Smarty version 2.6.26, created on 2013-06-17 01:39:48
         compiled from class.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>基础信息设置</title>
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
            <font color="#f7f7f7">班级管理设置</font>
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
        <th align=center colspan=16 style="height: 23px">班级管理</th>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td colspan="16" align="right" class=txlrow>
		
		<table width="1052" border=0  align=center cellpadding=2 cellspacing=1 class=tableBorder>
		
<tr style="background-color:'#DEE5FA';border-color:#DEE5FA'">
<td>

<div>

		&nbsp; 年级：<select name='mr_grade'>
		   <OPTION value='' selected>--请选择--</OPTION>
			<?php $_from = $this->_tpl_vars['query_class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop2']):
?>
			<OPTION VALUE="<?php echo $this->_tpl_vars['loop2']['mr_grade']; ?>
"><?php echo $this->_tpl_vars['loop2']['mr_grade']; ?>
</OPTION>
		  <?php endforeach; endif; unset($_from); ?>
		  </select>

		班级：
		<select name='mr_classid'>
		 <OPTION value='' selected>--请选择--</OPTION>
			
			<?php $_from = $this->_tpl_vars['query_classid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
			<OPTION VALUE="<?php echo $this->_tpl_vars['loop']['mr_classid']; ?>
"><?php echo $this->_tpl_vars['loop']['mr_classid']; ?>
</OPTION>
		  <?php endforeach; endif; unset($_from); ?>
		  </select>
		   &nbsp;&nbsp;<input type="submit" value="查询" name='sub'></div>
		</td>
  <td align="left">
      <a href="Addclass.php">添加班级</a>
  </td>
 </tr>

  </table>		
        </td>
      </tr>
     <tr align="center" bgcolor="#799AE1">
        <td width="25%" align="center" class=txlHeaderBackgroundAlternate>编号</td>
		<td width="25%" align="center" class=txlHeaderBackgroundAlternate>年级名称</td>
		<td width="10%" align="center" class=txlHeaderBackgroundAlternate>班级名称</td>
		<td width="20%" align="center" class=txlHeaderBackgroundAlternate>辅导员</td>
		<td width="20%" align="center" class=txlHeaderBackgroundAlternate>操作</td>
       </tr>
	   <?php $_from = $this->_tpl_vars['getData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>

     <tr bgcolor="#DEE5FA">
        <td align=center class=txlrow>
		<?php echo $this->_tpl_vars['id']++; ?>

		</td>
 <td align=center class=txlrow> <?php echo $this->_tpl_vars['loop']['mr_grade']; ?>
</td>
		<td align=center class=txlrow>
	    <?php echo $this->_tpl_vars['loop']['mr_classid']; ?>

		</td>
		<td align=center class=txlrow>
		<?php echo $this->_tpl_vars['loop']['t_name']; ?>

		</td>
		<td align=center class=txlrow>
		<a href="Editclass.php?mr_id=<?php echo $this->_tpl_vars['loop']['mr_id']; ?>
" style="text-decoration:none;color: #0000c0">修改</a>　｜　
		<a href="delclass.php?mr_id=<?php echo $this->_tpl_vars['loop']['mr_id']; ?>
" style="text-decoration:none;color: #0000c0" onClick="return confirm('您确定删除吗?')">删除</a>
		</td>
      </tr>
	  <?php endforeach; endif; unset($_from); ?>
   <tr><td align="center" bgcolor="#DEE5FA" colspan="5"><?php echo $this->_tpl_vars['fenye']; ?>
</td></tr>
      </tbody></table>
  </div>
 </form>
</body>
</html>