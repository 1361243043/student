<?php /* Smarty version 2.6.26, created on 2013-06-19 05:11:29
         compiled from base.html */ ?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>角色管理设置</title>
<link rel="stylesheet" type="text/css" href="template\css\formclass.css">
<link rel="stylesheet" href="template\inc\css.css" type="text/css" />
</head>
<body bgcolor="#f7f7f7" background="" style="font-size: 10pt" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="" name="formdo" enctype="multipart/form-data">
  <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#f7f7f7" bordercolor="#ffffff" style="font-size: 10pt">
    <tr>
      <td width="100%" colspan="5" bgcolor="#f7f7f7" align="center"><table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#f7f7f7" bordercolor="#ffffff" style="font-size: 10pt">
          <tr height="35">
            <td width="20" bgcolor="#f7f7f7" align="center" background="template/images/face/title_left.gif"><img src="template/images/file1.gif"></td>
            <td width="80" bgcolor="#f7f7f7" align="center" background="template/images/face/title_left.gif"><font color="#f7f7f7">角色管理设置</font> </td>
            <td width="11" bgcolor="#f7f7f7" align="center" background="template/images/face/title_middle.gif"><font color="#f7f7f7">&nbsp;</font> </td>
            <td bgcolor="#f7f7f7" align="center" background="template/images/face/title_right.gif"><font color="#f7f7f7">&nbsp;</font> </td>
          </tr>
        </table></td>
    </tr>
  </table>
  <div id="m4child" class="child">
    <table width="100%" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799ae1" class=tableborder>
      <tbody>
        <tr>
          <th align=center colspan=16 style="height: 23px">角色管理</th>
        </tr>
        <tr bgcolor="#dee5fa">
          <td colspan="16" align="right" class=txlrow><table width="1052" border=0  align=center cellpadding=2 cellspacing=1 class=tableborder>
              <tr style="background-color:'#dee5fa';border-color:#dee5fa'">
                <td><div> &nbsp; 角色名:
                    <input type="text" name="data">
                    &nbsp;&nbsp;
                    <input type="submit" name="sub" value="查询">
                  </div></td>
                <td align="left"><a  href="addBase.php"> 添加角色</a> </td>
              </tr>
            </table></td>
        </tr>
        <tr align="center" bgcolor="#799ae1">
          <td width="10%" align="center" class=txlheaderbackgroundalternate>编号</td>
          <td width="15%" align="center" class=txlheaderbackgroundalternate>角色名</td>
          <td width="35%" align="center" class=txlheaderbackgroundalternate>权限</td>
          <td width="25%" align="center" class=txlheaderbackgroundalternate>操作</td>
        </tr>
      <?php $_from = $this->_tpl_vars['getData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
      <tr bgcolor="#dee5fa">
        <td align=center class=txlrow><?php echo $this->_tpl_vars['id']++; ?>
</td>
        <td align=center class=txlrow><?php echo $this->_tpl_vars['v']['ro_name']; ?>
</td>
        <td align=center class=txlrow><a href="readBase.php?ro_id=<?php echo $this->_tpl_vars['v']['ro_id']; ?>
" style="text-decoration:none;color: #0000c0">查看详情</a></td>
        <td align=center class=txlrow><a href="modBase.php?ro_id=<?php echo $this->_tpl_vars['v']['ro_id']; ?>
" style="text-decoration:none;color: #0000c0">修改</a>　|　<a href="base.php?ro_id=<?php echo $this->_tpl_vars['v']['ro_id']; ?>
" onClick="return confirm('您确定删除吗?')" style="text-decoration:none;color: #0000c0">删除</a> </td>
      </tr>
      <?php endforeach; endif; unset($_from); ?>
      <tr bgcolor="#dee5fa">
        <td colspan="7" align=center bgcolor="#dee5fa" class=txlrow><?php echo $this->_tpl_vars['fenye']; ?>
 </td>
      </tr>
      </tbody>
    </table>
  </div>
</form>
</body>
</html>