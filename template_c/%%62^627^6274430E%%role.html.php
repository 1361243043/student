<?php /* Smarty version 2.6.26, created on 2013-06-05 10:57:27
         compiled from role.html */ ?>
<html>
 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>角色管理设置</title>
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
	window.showModalDialog ("addrole.php",
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:800px;dialogHeight:500px");
}
function editShow(id)
{
	window.showModalDialog ('editrole.php?id=+id',
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:800px;dialogHeight:500px");
}
</script></head>
 
<body bgcolor="#F7F7F7" background="" style="font-size: 10pt" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="POST" action="/SPROA/index.php/User/adduser" name="formDO" enctype="multipart/form-data">
  
<table border="0" cellpadding="0" cell  spacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
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

  <div id="m3Child" class="child">
     <table width="100%" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
      <tr>
        <th align=center colspan=16 style="height: 23px">角色管理</th>
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
  <td align="left">
     <a href="addrole.php">添加角色</a>
  </td>
 </tr>
  </table> 
        </td>
      </tr>
 <tr align="center" bgcolor="#799AE1">
      <td width="10%" align="center" class=txlHeaderBackgroundAlternate>编号</td>
		<td width="15%" align="center" class=txlHeaderBackgroundAlternate>角色名</td>
		<td width="35%" align="center" class=txlHeaderBackgroundAlternate>权限</td>
		<td width="25%" align="center" class=txlHeaderBackgroundAlternate>操作</td>
		     </tr>
        <?php $_from = $this->_tpl_vars['role']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		   <tr bgcolor="#DEE5FA">
		      <td align=center class=txlrow>
		<?php echo $this->_tpl_vars['id']++; ?>

		</td>
		<td align=center class=txlrow>
		<?php echo $this->_tpl_vars['v']['ro_name']; ?>

		</td>
		
		<td align=center class=txlrow>
		<?php echo $this->_tpl_vars['v']['ro_power']; ?>

		</td>
		
		<td align=center class=txlrow>
		<a  href="editrole.php?id='<?php echo $this->_tpl_vars['v']['ro_id']; ?>
'">修改</a> | 
         <a  href="delrole.php?id=<?php echo $this->_tpl_vars['v']['ro_id']; ?>
" onclick="return window.confirm('确定要删除吗？');">删除</a>
		</td>
    </tr>
	<?php endforeach; endif; unset($_from); ?>
    <tr><td align="center" bgcolor="#DEE5FA" colspan="5"><?php echo $this->_tpl_vars['pageList']; ?>
</td></tr>
    </tbody></table>
</div>
 </form>
</body>
</html>