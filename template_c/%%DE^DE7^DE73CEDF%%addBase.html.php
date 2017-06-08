<?php /* Smarty version 2.6.26, created on 2013-06-18 06:38:10
         compiled from addBase.html */ ?>
<html>
<head>
<link rel="stylesheet" href="template\inc\css.css" type="text/css" />
<script type="text/javascript" src="template/js/time.js"></script>
<script type="text/javascript" src='template/js/common.js'></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
<form action='' method='post' name='form1'>
  <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#f7f7f7" bordercolor="#ffffff" style="font-size: 10pt">
    <tr>
      <td width="100%" colspan="5" bgcolor="#f7f7f7" align="center"><table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#f7f7f7" bordercolor="#ffffff" style="font-size: 10pt">
          <tr height="35">
            <td width="20" bgcolor="#f7f7f7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
            <td width="100" bgcolor="#f7f7f7" align="center" background="template/images/title_left.gif"><font color="#f7f7f7">添加模板</font> </td>
            <td width="11" bgcolor="#f7f7f7" align="center" background="template/images/title_middle.gif"><font color="#f7f7f7">&nbsp;</font> </td>
            <td bgcolor="#f7f7f7" align="center" background="template/images/title_right.gif"><font color="#f7f7f7">&nbsp;</font> </td>
          </tr>
        </table></td>
    </tr>
  </table>
  <!-- 个人 -->
  <table width="100%"  border="5" cellpadding=2 cellspacing=1 bordercolor="#799ae1" class=tableborder>
   <form action='' name='form1' method='post'>
    <tbody>
      <tr bgcolor="#799ae1">
        <td align="center" width="30%">角色名</td>
        <td width="70%"><input type="text" value="" name='ro_name' maxlength="100" style="width:100%" class="formclass"></td>
      </tr>
      <tr bgcolor="#799ae1">
        <td align="center" width="30%">权限</td>
        <td width="70%">
		<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
			<?php if ($this->_tpl_vars['loop']['f_id'] != 0): ?>
				&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="id[]" value="<?php echo $this->_tpl_vars['loop']['m_id']; ?>
"><?php echo $this->_tpl_vars['loop']['m_name']; ?>
<br /> 
            <?php else: ?>
				<font color='red'><?php echo $this->_tpl_vars['loop']['m_name']; ?>
</font><br /> 
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
        </td>
      </tr>
    </tbody>
    <tr bgcolor="#dee5fa">
      <td colspan="2" align="center">
	  <input type='submit' name='sub' value='确认添加'  onclick="return base();">
        <input type="button" name="return" value="返回" onclick="javascript:history.back(-1)">
      </td>
    </tr>
	</form>
  </table>
  <script  language="javascript">  
       function  selectall()  
       {  
       var  arrobj  =  document.all;  
       for(var  i  =  0;  i  <  arrobj.length;i++)  
       {  
 
                               if(typeof  arrobj[i].type  !=  "undefined"  &&  arrobj[i].type=='checkbox')  arrobj[i].checked  =true;  
       }  
       }  
 
       function  unselectall()  
       {  
           var  arrobj  =  document.all;  
       for(var  i  =  0;  i  <  arrobj.length;i++)  
       {  
                               if(typeof  arrobj[i].type  !=  "undefined"  &&  arrobj[i].type=='checkbox')  arrobj[i].checked  =false;  
       }  
       }  
</script>
</form>
</body>
</html>