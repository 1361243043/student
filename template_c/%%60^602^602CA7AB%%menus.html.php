<?php /* Smarty version 2.6.26, created on 2013-05-24 11:31:08
         compiled from menus.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>模块管理设置</title>
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
	window.showModalDialog ("addmenu.php",
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:800px;dialogHeight:500px");
}
function editShow()
{
	window.showModalDialog ("Editmenu.php",
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:800px;dialogHeight:500px");
}
</script></head>
 
<body bgcolor="#F7F7F7" background="" style="font-size: 10pt" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="POST" action="/SPROA/index.php/User/adduser" name="formDO" enctype="multipart/form-data">
  
<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/face/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="80" bgcolor="#F7F7F7" align="center" background="template/images/face/title_left.gif">
            <font color="#f7f7f7">模块管理设置</font>
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
        <th align=center colspan=16 style="height: 23px">模块管理</th>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td colspan="16" align="right" class=txlrow>
		 <table width="1052" border=0  align=center cellpadding=2 cellspacing=1 class=tableBorder>
<tr style="background-color:'#DEE5FA';border-color:#DEE5FA'">
<td>
<div>
 &nbsp; 名称:
 <input>
 &nbsp;&nbsp;<input type="button" name="" value="查询">
</div>
 </td>
  <td align="center">
     <a href="javascript:addShow()">添加模块</a>
  </td>
 </tr>
  </table>
        </td>
      </tr>
     <tr align="center" bgcolor="#799AE1">
        <td width="15%" align="center" class=txlHeaderBackgroundAlternate>编号</td>
		<td width="15%" align="center" class=txlHeaderBackgroundAlternate>模块名称</td>
		<td width="15%" align="center" class=txlHeaderBackgroundAlternate>导航链接</td>
		<td width="15%" align="center" class=txlHeaderBackgroundAlternate>父级导航编号</td>
		<td width="15%" align="center" class=txlHeaderBackgroundAlternate>优先级</td>
		<td width="15%" align="center" class=txlHeaderBackgroundAlternate>标识</td>
		<td width="15%" align="center" class=txlHeaderBackgroundAlternate>操作</td>
       </tr>
	  <?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
     <tr bgcolor="#DEE5FA">
        <td align=center class=txlrow>
		<?php echo $this->_tpl_vars['v']['m_id']; ?>

		</td>
		<td align=center class=txlrow>
		<?php echo $this->_tpl_vars['v']['m_name']; ?>

		</td>
		<td align=center class=txlrow>
	       <?php echo $this->_tpl_vars['v']['m_href']; ?>

		</td>
		<td align=center class=txlrow>
	       <?php echo $this->_tpl_vars['v']['f_id']; ?>

		</td>
		<td align=center class=txlrow>
	       <?php echo $this->_tpl_vars['v']['m_grade']; ?>

		</td>
		<td align=center class=txlrow>
	       <?php echo $this->_tpl_vars['v']['is_mark']; ?>

		</td>
		<td align=center class=txlrow>
		<a href="javascript:editShow()" style="text-decoration:none;color: #0000c0">修改</a>
		|&nbsp;<a href='delete.php?id=<?php echo $this->_tpl_vars['v']['m_id']; ?>
' onclick="return confirm('您确定删除吗?')" style="text-decoration:none;color: #0000c0">删除</a>
		</td>
      </tr>
	  <?php endforeach; endif; unset($_from); ?>
      </tbody></table>
  </div>
 </form>
</body>
</html>