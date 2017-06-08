<?php /* Smarty version 2.6.26, created on 2013-06-06 08:19:56
         compiled from template.html */ ?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>基础信息设置</title>
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
            <td width="80" bgcolor="#f7f7f7" align="center" background="template/images/face/title_left.gif"><font color="#f7f7f7">模块管理设置</font> </td>
            <td width="11" bgcolor="#f7f7f7" align="center" background="template/images/face/title_middle.gif"><font color="#f7f7f7">&nbsp;</font> </td>
            <td bgcolor="#f7f7f7" align="center" background="template/images/face/title_right.gif"><font color="#f7f7f7">&nbsp;</font> </td>
          </tr>
        </table></td>
    </tr>
  </table>
  <div id="m3child" class="child">
    <table width="100%" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799ae1" class=tableborder>
      <tbody>
        <tr>
          <th align=center colspan=16 style="height: 23px">模块信息管理</th>
        </tr>
        <tr bgcolor="#dee5fa">
          <td colspan="16" align="right" class=txlrow><table width="1052" border=0  align=center cellpadding=2 cellspacing=1 class=tableborder>
              <tr style="background-color:'#dee5fa';border-color:#dee5fa'">
                <td width=90%></td>
                <td align="left"><a href="addTemplate.php">添加</a> </td>
              </tr>
            </table></td>
        </tr>
        <tr align="center" bgcolor="#799ae1">
          <td width="10%" align="center" class="txlheaderbackgroundalternate">编号</td>
          <td width="15%" align="center" class=txlheaderbackgroundalternate>模块名称</td>
          <td width="35%" align="center" class=txlheaderbackgroundalternate>导航链接</td>
          <td width="10%" align="center" class=txlheaderbackgroundalternate>优先级</td>
          <td width="10%" align="center" class=txlheaderbackgroundalternate>是否显示</td>
          <td width="10%" align="center" class=txlheaderbackgroundalternate>操作</td>
          <td width="10%" align="center" class=txlheaderbackgroundalternate>选定</td>
        </tr>
      <?php $_from = $this->_tpl_vars['dataList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
      <tr bgcolor="#dee5fa">
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['id']++; ?>
</td>
        <td style="padding-left:30px;" class=txlrow><?php if ($this->_tpl_vars['loop']['f_id'] != 0): ?> 
          &nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['loop']['m_name']; ?>
 
          <?php else: ?> <font color='red'> <?php echo $this->_tpl_vars['loop']['m_name']; ?>
 </font> <?php endif; ?> </td>
        <td align=center class=txlrow><a href="<?php echo $this->_tpl_vars['loop']['m_href']; ?>
"><?php echo $this->_tpl_vars['loop']['m_href']; ?>
</a> </td>
        <td align=center bgcolor="#dee5fa" class=txlrow><?php echo $this->_tpl_vars['loop']['m_grade']; ?>
 </td>
        <td width="8%" align=center class=txlrow><?php if ($this->_tpl_vars['loop']['is_mark'] == 0): ?>
          不显示
          <?php else: ?>
          显示
          <?php endif; ?> </td>
        <td align=center class=txlrow><a href="modTemplate.php?m_id=<?php echo $this->_tpl_vars['loop']['m_id']; ?>
" style="text-decoration:none;color: #0000c0">修改</a> | <a  href='?m_id=<?php echo $this->_tpl_vars['loop']['m_id']; ?>
' onClick="return confirm('您确定删除吗?')" style="text-decoration:none;color: #0000c0">删除</a></td>
        <td align=center class=txlrow><input type="checkbox" name="ch[1]" value="0"></td>
      </tr>
      <?php endforeach; endif; unset($_from); ?>
      <tr bgcolor="#dee5fa">
        <td colspan="7" align=center bgcolor="#dee5fa" class=txlrow><input type="radio" name="do" value="1" />
          删除
          </label>
          <span class="tablebody2">
          <input type="button" value="全选" name="submit2" onClick="selectall()" />
          <input type="button" value="反选" name="submit2" onClick="selectall()" />
          </span>
          <input type="submit" name="ok" value="确定" class="but"></td>
      </tr>
      <tr bgcolor="#dee5fa">
        <td colspan="7" align=center bgcolor="#dee5fa" class=txlrow><?php echo $this->_tpl_vars['pageList']; ?>
 </td>
      </tr>
      </tbody>
    </table>
  </div>
</form>
</body>
</html>