<?php /* Smarty version 2.6.26, created on 2014-08-07 03:40:54
         compiled from left.html */ ?>
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>管理页面</title>
<style type=text/css>
body {
	background: #799ae1; margin: 0px; font: 9pt 宋体
}
table {
	border-right: 0px; border-top: 0px; border-left: 0px; border-bottom: 0px
}
td {
	font: 12px 宋体
}
img {
	border-right: 0px; border-top: 0px; vertical-align: bottom; border-left: 0px; border-bottom: 0px
}
a {
	font: 12px 宋体; color: #000000; text-decoration: none
}
a:hover {
	color: #428eff; text-decoration: underline
}
.sec_menu {
	border-right: white 1px solid; background: #d6dff7; overflow: hidden; border-left: white 1px solid; border-bottom: white 1px solid
}
.menu_title {
	
}
.menu_title span {
	font-weight: bold; left: 7px; color: #215dc6; position: relative; top: 2px
}
.menu_title2 {
	
}
.menu_title2 span {
	font-weight: bold; left: 8px; color: #428eff; position: relative; top: 2px
}
</style>
<script language=javascript1.2>
function showsubmenu(sid)
{
whichel = eval("submenu" + sid);
if (whichel.style.display == "none")
{
eval("submenu" + sid + ".style.display=\"\";");
}
else
{
eval("submenu" + sid + ".style.display=\"none\";");
}
}
function applyleave()
{
    reval = window.showmodaldialog ("quick.html", '',
      "status:no;center:yes;scroll:no;resizable:no;help:no;dialogwidth:640px;dialogheight:480px");
   
}
</script>
<meta http-equiv=content-type content="text/html; charset=utf-8">
<meta content="mshtml 6.00.2900.2180" name=generator>
</head>
<body leftmargin=0 topmargin=0 marginwidth="0" marginheight="0">


<?php $_from = $this->_tpl_vars['list1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['loop']):
?>
<TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(<?php echo $this->_tpl_vars['id']++; ?>
) 
          onmouseout="this.className='menu_title';" 
          background='template/left.files/admin_left_1.gif' 
            height=25><span><B><?php echo $this->_tpl_vars['loop']['m_name']; ?>
</B></span></TD>
        </TR>
        <TR>
          <TD id=submenu<?php echo $this->_tpl_vars['id']-1; ?>
>
		   <?php $_from = $this->_tpl_vars['list2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
		   <?php if ($this->_tpl_vars['v']['f_id'] == $this->_tpl_vars['loop']['m_id']): ?>
            <DIV class=sec_menu style="WIDTH: 158px ">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
               <TR>
                <TD height=20><A 
                  href="<?php echo $this->_tpl_vars['v']['m_href']; ?>
" target="rightFrame"><?php echo $this->_tpl_vars['v']['m_name']; ?>
</A></TD>
               </TR>
              </TBODY></TABLE>
            </DIV>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
            <DIV style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD height=20></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
<?php endforeach; endif; unset($_from); ?>

        <table cellspacing=0 cellpadding=0 width=158 align=center>
          <tbody>
            <tr>
              <td class=menu_title id=menutitle1 
          onmouseover="this.classname='menu_title2';" 
          onmouseout="this.classname='menu_title';" 
          background=template/left.files/admin_left_9.gif 
          height=25><span>学生管理系统权信息</span></td>
            </tr>
            <tr>
              <td><div class=sec_menu style="width: 158px">
                  <table cellspacing=0 cellpadding=0 width=135 align=center>
                    <tbody>
                      <tr>
                        <td height=20 bgcolor="#d6dff7" style="line-height: 150%">版权:思柏瑞软件公司 </td>
                      </tr>
                    </tbody>
                  </table>
                </div></td>
            </tr>
          </tbody>
        </table>
    </tr>
  </tbody>
</table>
</body>
</html>