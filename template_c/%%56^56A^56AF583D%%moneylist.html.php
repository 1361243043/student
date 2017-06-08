<?php /* Smarty version 2.6.26, created on 2013-06-26 02:08:51
         compiled from moneylist.html */ ?>
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
	window.showModalDialog ("studentadd.html",
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:800px;dialogHeight:500px");
}
function editShow()
{
	window.showModalDialog ("stuInentEdit.html",
	        "",
	        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:800px;dialogHeight:500px");
}
</script>
</head>
<body>
<form name="form1" method="post" action="">
  <table width="1052" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
      <tr>
         <th align=center colspan=16 style="height: 23px">学费类型管理</th>
      </tr>
      <tr bgcolor="#DEE5FA">
         <td colspan="16" align="right" class=txlrow>
             <table width="1052" border=0  align=center cellpadding=2 cellspacing=1 class=tableBorder>
               <tr style="background-color:'#DEE5FA';border-color:#DEE5FA'">
                  <td>
                     <div>
                         &nbsp;学费类型:
                        <select name="type">
                         <option  selected value="">--请选择--</option>
						 <?php $_from = $this->_tpl_vars['type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                          <option value="<?php echo $this->_tpl_vars['v']['te_type']; ?>
"><?php echo $this->_tpl_vars['v']['te_type']; ?>
</option>
						  <?php endforeach; endif; unset($_from); ?>
                        </select>

						      &nbsp;学费金额:
                        <select name="money">
                         <option  selected value="">--请选择--</option>
						 <?php $_from = $this->_tpl_vars['dat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                          <option value="<?php echo $this->_tpl_vars['v']['te_money']; ?>
"><?php echo $this->_tpl_vars['v']['te_money']; ?>
</option>
						  <?php endforeach; endif; unset($_from); ?>
                        </select>
                         &nbsp;&nbsp;<input type="submit" name="submit" value="查询">
                        </div>
						 </td>
                 </FORM>
                  <td align="left">
                     <a href="moneyListadd.php">添加</a> 
                  </td>
              </tr>
           </table>
        </td>
      </tr>
	    <form name=form2 action='delmoneylist.php' method='post'>
      <tr align="center" bgcolor="#799AE1">
        <td width="6%" align="center" class="txlHeaderBackgroundAlternate">学费编号</td>
        <td width="7%" align="center" class=txlHeaderBackgroundAlternate>学费类型名称</td>
        <td width="8%" align="center" class=txlHeaderBackgroundAlternate>学费金额</td>
		<td width="6%" align="center" class=txlHeaderBackgroundAlternate>收费开始时间</td>
        <td width="8%" align="center" class=txlHeaderBackgroundAlternate>收费结束时间</td>
        <td width="6%" align="center" class=txlHeaderBackgroundAlternate>操作</td>
        <td width="4%" align="center" class=txlHeaderBackgroundAlternate>选定</td>
      </tr>
	  <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
      <tr bgcolor="#DEE5FA">
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['id']++; ?>
</td>
        <td align="center" class=txlrow><?php echo $this->_tpl_vars['loop']['te_type']; ?>
</td>
        <td align="center" class=txlrow><?php echo $this->_tpl_vars['loop']['te_money']; ?>
</td>
        <td align="center" bgcolor="#DEE5FA" class=txlrow><?php echo $this->_tpl_vars['loop']['te_date_begin']; ?>
</td>
        <td width="8%" align=center class=txlrow><?php echo $this->_tpl_vars['loop']['te_date_end']; ?>
</td>
        <td align="center" class=txlrow><a  href="moneyListUp.php?id=<?php echo $this->_tpl_vars['loop']['te_id']; ?>
">修改</a> | <a  onclick="return confirm('你确定删除吗？')" href="delmoneylist.php?id=<?php echo $this->_tpl_vars['loop']['te_id']; ?>
">删除</a> </td>
        <td align=center class=txlrow><input type="checkbox" name="ch[1]" value="0"></td>
      </tr>
	  <?php endforeach; endif; unset($_from); ?>
       <tr bgcolor="#DEE5FA">
        <td colspan="16" align=center bgcolor="#DEE5FA" class=txlrow> 
		 <input type="radio" name="do" value="1" />删除</label>
          <span class="tablebody2">
          <input type="button" value="全选" name="Submit2" onClick="selectAll()" />
          <input type="button" value="反选" name="Submit2" onClick="unSelectAll()" />
          </span>
        <input type="submit" name="ok" value="确定" class="but"></td>
      </tr>
      <tr bgcolor="#DEE5FA">
        <td colspan=16 align=center class=txlrow><?php echo $this->_tpl_vars['fenye']; ?>
</td>
      </tr>
	  </form>
     </tbody></table>

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