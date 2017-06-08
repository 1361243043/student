<?php /* Smarty version 2.6.26, created on 2013-06-19 01:07:27
         compiled from money.html */ ?>
<html>
<head>
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
function conShow(html)
{
	window.showModalDialog (html,
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:1000px;dialogHeight:500px");
}
function addShow()
{
	window.showModalDialog ("studfrontadd.html",
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
<form name="form1" method="get" action="">

  <table width="1052" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
      <tr>
         <th align=center colspan=16 style="height: 23px">缴费管理</th>
      </tr>
      <tr bgcolor="#DEE5FA">
         <td colspan="16" align="right" class=txlrow>
             <table width="1052" border=0  align=center cellpadding=2 cellspacing=1 class=tableBorder>
               <tr style="background-color:'#DEE5FA';border-color:#DEE5FA'">
                  <td>
                     <div>
                        
	 年级<select name='mr_grade'>
	 <option value=''>-请选择-</option>
<?php $_from = $this->_tpl_vars['arr3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>
	  <option value='<?php echo $this->_tpl_vars['aa']['mr_grade']; ?>
'><?php echo $this->_tpl_vars['aa']['mr_grade']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
	 </select>
	 班级<select name='mr_classid'>
	 <option value=''>-请选择-</option>
<?php $_from = $this->_tpl_vars['arr4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aaa']):
?>
	  <option value='<?php echo $this->_tpl_vars['aaa']['mr_classid']; ?>
'><?php echo $this->_tpl_vars['aaa']['mr_classid']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
	 </select>姓名<input type="text" name="s_name" value="" />
	 收款人<input type="text" name="add_name" size="8" value="">
     缴费情况<select name='ch_isverify'>
	 <option value=''>已完成缴费情况</option>
     <option value=''>欠费</option>
     <option value=''>未缴费</option></select>
      费用类型<select name='te_type'>
	  	 <option value=''>-请选择-</option>
       <?php $_from = $this->_tpl_vars['arr2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
	  <option value='<?php echo $this->_tpl_vars['a']['te_id']; ?>
'><?php echo $this->_tpl_vars['a']['te_type']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
      </select>
                         &nbsp;&nbsp;<input type="submit" name="submit" value="查询">
                        </div>
                  </td>
                  <td align="left">
                     <a  href="addmoney.php">添加</a> 
                  </td>
              </tr>
           </table>
        </td>
      </tr>
      <tr align="center" bgcolor="#799AE1">
	  <td width="6%" align="center" class="txlHeaderBackgroundAlternate">编号</td>
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
        <td width="6%" align="center" class="txlHeaderBackgroundAlternate" >操作</td>
		 <td width="4%" align="center" class=txlHeaderBackgroundAlternate>选定</td>
      </tr>
	  <?php $_from = $this->_tpl_vars['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
      <tr bgcolor="#DEE5FA">
	   <td align="center" class="txlrow"><?php echo $this->_tpl_vars['id']++; ?>
</td>
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
" > 修改 </a>
        |<a href="delmoney.php?ch_id=<?php echo $this->_tpl_vars['a']['ch_id']; ?>
">  删除</a></td>
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
        <td colspan=16 align=center class=txlrow><a href="?page=1<?php echo $this->_tpl_vars['pagelf']; ?>
"> 首页</a>
	               <a href="?page=<?php echo $this->_tpl_vars['pageList']['up']; ?>
<?php echo $this->_tpl_vars['pagelf']; ?>
">上一页</a>
	               <a href="?page=<?php echo $this->_tpl_vars['pageList']['down']; ?>
<?php echo $this->_tpl_vars['pagelf']; ?>
">下一页</a>
	               <a href="?page=<?php echo $this->_tpl_vars['pageList']['pageNum']; ?>
<?php echo $this->_tpl_vars['pagelf']; ?>
">尾页</a>
					 &nbsp;&nbsp;当前<?php if (! $this->_tpl_vars['pageList']['page']): ?>1<?php else: ?><?php echo $this->_tpl_vars['pageList']['page']; ?>
<?php endif; ?>页&nbsp;&nbsp;&nbsp;&nbsp;共 <?php echo $this->_tpl_vars['pageList']['pageNum']; ?>
 页
	              </td>
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