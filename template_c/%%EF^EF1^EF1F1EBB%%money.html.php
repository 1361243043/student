<?php /* Smarty version 2.6.26, created on 2013-06-12 02:29:44
         compiled from G:%5Cxampp%5Chtdocs%5Cstudent%5Ctemplate/money.html */ ?>
<html>
<title>缴费明细</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<script type="text/javascript">
  function applyleave1()
{

    reVal = window.showModalDialog("addmoney.html", '',
    "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:640px;dialogHeight:460px");
	window.location="moneylist.html"
    if (reVal != null)
        if (reVal[0])
            document.FormMain.submit();
}
  function applyleave2()
{

    reVal = window.showModalDialog("addmoney.php", '',
    "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:640px;dialogHeight:260px");
	window.location="moneylist.html"
    if (reVal != null)
        if (reVal[0])
            document.FormMain.submit();
}

	function SelectDate(nState) {
		reVal = window.showModalDialog("common/day.php","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			if (nState == 1)
				document.form1.textstart.value = reVal;
			else
				document.form1.textend.value = reVal;
		}
	}
	function applyleave()
{
    reVal = window.showModalDialog ("upmoney.html", '',
      "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:640px;dialogHeight:480px");
   
}
</script>
</head>
<body>
<form name="form" method="post" action="">
<table  width="1050">
 <tbody>
<tr>
<td>
  <table border="0"  width="1050">
	 <tr>
	 <td colspan="3">
	
	 年级<select name='nianji'>
	 <option value=''>-请选择-</option>
<?php $_from = $this->_tpl_vars['arr3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>
	  <option value='<?php echo $this->_tpl_vars['aa']['mr_grade']; ?>
'><?php echo $this->_tpl_vars['aa']['mr_grade']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
	 </select>
	 班级<select name='banji'>
	 <option value=''>-请选择-</option>
<?php $_from = $this->_tpl_vars['arr4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aaa']):
?>
	  <option value='<?php echo $this->_tpl_vars['aaa']['mr_classid']; ?>
'><?php echo $this->_tpl_vars['aaa']['mr_classid']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
	 </select>姓名<input type="text" name="name" value="" />
	 收款人<input type="text" name="user" size="8" value="">
     缴费情况<select name='qingkuang'><option>已完成缴费情况</option>
     <option>欠费</option>
     <option>未缴费</option></select>
      费用类型<select name='type'>
	  	 <option value=''>-请选择-</option>
       <?php $_from = $this->_tpl_vars['arr2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
	  <option value='<?php echo $this->_tpl_vars['a']['te_id']; ?>
'><?php echo $this->_tpl_vars['a']['te_type']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
      </select>
      <input type="submit" name='submit' value="查询">
	  </td>
	  <td><a href='addmoney.php'>添加</a><td>
	</tr>
	</table>
    </td>
    </tr>
    <tr><td>
  <table  border="0" align="center" cellpadding=2 cellspacing=1 bordercolor="#799AE1" class="tableBorder" width="1050">
	</tr>
      <tr>
        <th align="center" colspan=16 style="height: 23px">缴费管理</th>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td colspan="16" align="right" class="txlrow"></td>
      </tr>
      <tr align="center" bgcolor="#799AE1">
        
        <td width="7%" align="center" class="txlHeaderBackgroundAlternate">年级</td>
        <td width="6%" align="center" class="txlHeaderBackgroundAlternate">姓名</td>
        <td width="7%" align="center" class="txlHeaderBackgroundAlternate">班级</td>
        <td width="9%" align="center" class="txlHeaderBackgroundAlternate">缴费项目</td>
        <td width="8%" align="center" class="txlHeaderBackgroundAlternate">缴费金额(元)</td>
        <td align="center" class="txlHeaderBackgroundAlternate">已交金额(元)</td>
        <td width="8%" align="center" class="txlHeaderBackgroundAlternate">欠费金额(元)</td>
		 <td width="8%" align="center" class="txlHeaderBackgroundAlternate">收款人</td>
		 <td width="8%" align="center" class="txlHeaderBackgroundAlternate">收款日期</td>
        <td width="9%" align="center" class="txlHeaderBackgroundAlternate">备注</td>
        <td width="6%" align="center" class="txlHeaderBackgroundAlternate" colspan="2">操作</td>
      
      </tr> 
<?php $_from = $this->_tpl_vars['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>

      <tr bgcolor="#DEE5FA">
        
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['a']['mr_grade']; ?>
</td>
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['a']['s_name']; ?>
</td>
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['a']['mr_classid']; ?>
</td>
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['a']['te_type']; ?>
</td>
        <td align="center" bgcolor="#DEE5FA" class="txlrow"><?php echo $this->_tpl_vars['a']['ch_must_money']; ?>
</td>
        <td width="8%" align="center" class="txlrow"><?php echo $this->_tpl_vars['a']['ch_real_money']; ?>
</td>
        <td width="8%" align="center" class="txlrow"><?php echo $this->_tpl_vars['a']['ch_debt_money']; ?>
</td>
		<td align="center" class="txlrow"><?php echo $this->_tpl_vars['a']['add_name']; ?>
</td>       
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['a']['add_date']; ?>
</td>
		<td align="center" class="txlrow"><?php echo $this->_tpl_vars['a']['ch_remarks']; ?>
 </td>

		<input type='hidden' value='<?php echo $this->_tpl_vars['a']['ch_id']; ?>
'> 

        <td align="center" class="txlrow"><a href="editmoney.php?ch_id=<?php echo $this->_tpl_vars['a']['ch_id']; ?>
" >修改 </a></td>
         <td align="center" class="txlrow"><a href="#" onClick="applyleave()">查看 </a></td>
              
      </tr>  
 <?php endforeach; endif; unset($_from); ?> 
     
      <tr bgcolor="#DEE5FA">
        <td colspan=16 align="center" class="txlrow"><?php echo $this->_tpl_vars['fenye']; ?>
</td>
      </tr>
<tr><td height=20 colspan=8 align=middle valign=top bgcolor=#ffffff></td></tr>

</table>
</td>
</tr>
</tbody>
</table>
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