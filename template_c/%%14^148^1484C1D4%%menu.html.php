<?php /* Smarty version 2.6.26, created on 2014-08-06 07:01:49
         compiled from menu.html */ ?>
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
<form name="form1" method="post" action="delMenu.php">
  <table width="1052" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
    <tbody>
      <tr>
         <th align=center colspan=16 style="height: 23px">模块信息管理</th>
      </tr>
      <tr bgcolor="#DEE5FA">
         <td colspan="16" align="right" class=txlrow>
             <table width="1052" border=0  align=center cellpadding=2 cellspacing=1 class=tableBorder>
               <tr style="background-color:'#DEE5FA';border-color:#DEE5FA'">
                  <td width=90%>
                  </td>
                  <td align="left">
                     <a href="addMenu.php">添加</a> 
                  </td>
              </tr>
           </table>
        
        </td>
      </tr>

      <tr align="center" bgcolor="#799AE1">
        <td width="10%" align="center" class="txlHeaderBackgroundAlternate">编号</td>
        <td width="15%" align="center" class=txlHeaderBackgroundAlternate>模块名称</td>
        <td width="35%" align="center" class=txlHeaderBackgroundAlternate>导航链接</td>
		<td width="10%" align="center" class=txlHeaderBackgroundAlternate>父级编号</td>
		<td width="10%" align="center" class=txlHeaderBackgroundAlternate>优先级</td>
        <td width="10%" align="center" class=txlHeaderBackgroundAlternate>是否显示</td>
        <td width="10%" align="center" class=txlHeaderBackgroundAlternate>操作</td>
        <td width="10%" align="center" class=txlHeaderBackgroundAlternate>选定</td>
      </tr>
   <?php $_from = $this->_tpl_vars['dataList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>     
      <tr bgcolor="#DEE5FA">
        <td align="center" class="txlrow"><?php echo $this->_tpl_vars['id']++; ?>
</td>
        <td style="padding-left:30px;" class=txlrow> 
            <?php if ($this->_tpl_vars['loop']['f_id'] != 0): ?> 
               &nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['loop']['m_name']; ?>
 
               <?php else: ?>
               <font color='red'> <?php echo $this->_tpl_vars['loop']['m_name']; ?>
 </font>
            <?php endif; ?>  
        </td>
        <td align=center class=txlrow> <?php echo $this->_tpl_vars['loop']['m_href']; ?>
 </td>      
		<td align=center class=txlrow> <?php echo $this->_tpl_vars['loop']['f_id']; ?>
 </td>
        <td align=center bgcolor="#DEE5FA" class=txlrow> <?php echo $this->_tpl_vars['loop']['m_grade']; ?>
 </td>
        <td width="8%" align=center class=txlrow>
         <?php if ($this->_tpl_vars['loop']['is_mark'] == 0): ?>
                                       不显示
          <?php else: ?>
                                       显示
         <?php endif; ?>
        </td>      
        <td align=center class=txlrow><a  href="Editmenu.php?id=<?php echo $this->_tpl_vars['loop']['m_id']; ?>
">修改</a> | 
         <a  href="delMenu.php?id=<?php echo $this->_tpl_vars['loop']['m_id']; ?>
" onclick="return window.confirm('确定要删除吗？');">删除</a></td>
        <td align=center class=txlrow><input type="checkbox" name="checkbox[]" value="0"></td>
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
      <tr bgcolor="#DEE5FA">
        <td colspan=16 align=center class=txlrow></td>
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