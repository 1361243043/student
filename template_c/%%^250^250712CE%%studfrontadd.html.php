<?php /* Smarty version 2.6.26, created on 2013-06-18 12:39:18
         compiled from studfrontadd.html */ ?>
<html>
<head>
<link rel="stylesheet" href="template/inc/css.css" type="text/css" />
<script type="text/javascript" src="template/js/time.js"></script>
<script type="text/javascript" src='template/js/common.js'></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript">
function ChangeDate ()
{
      var textDate=document.getElementById('textDate');
      reVal = window.showModalDialog ("common/day.php", "",
        "status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");
    if (reVal != null)
        textDate.value = reVal;
}
function returns()
{
   window.close();
}
function SelectDate(nState) {
		reVal = window.showModalDialog("template/js/day.html","","status:no;center:yes;scroll:no;resizable:no;help:no;dialogWidth:255px;dialogHeight:260px");

		if (reVal != null) {
			document.getElementById('DATE').value=reVal;
		}
	}
function check()
{
if(document.form1.bj_stuname.value=="")
{
alert ("姓名不能为空！");
document.form1.bj_stuname.focus();
	return false;
}
}
</script>
<script src="template/js/ajax.js"></script>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
 <tr>
    <td width="100%" colspan="5" bgcolor="#F7F7F7" align="center">
     <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F7F7F7" bordercolor="#FFFFFF" style="font-size: 10pt">
       <tr height="35">
          <td width="20" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif"><img src="template/images/file1.gif"></td>
          <td width="100" bgcolor="#F7F7F7" align="center" background="template/images/title_left.gif">
            <font color="#f7f7f7">添加信息</font>
          </td>
          <td width="11" bgcolor="#F7F7F7" align="center" background="template/images/title_middle.gif">
            <font color="#f7f7f7">&nbsp;</font>
          </td>
          <td bgcolor="#F7F7F7" align="center" background="template/images/title_right.gif">
            <font color="#f7f7f7">&nbsp;</font>
          </td>
       </tr>
     </table>
    </td>
 </tr>
</table>

<!-- 个人 -->
<table width="100%"  border="5" cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
<form name='form1' action='' method='post'  enctype="multipart/form-data" onsubmit="return check();">
    <tbody>
     <tr bgcolor="#799AE1">
        <td align="center" >年级</td>
		<td> <SELECT style="width:100px" name='grade' id='grade' onchange="dostart(document.getElementById('grade').value)">
			<OPTION value='' selected>--请选择--</OPTION>
			<?php $_from = $this->_tpl_vars['query_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop']):
?>
			<OPTION VALUE="<?php echo $this->_tpl_vars['loop']['mr_grade']; ?>
"><?php echo $this->_tpl_vars['loop']['mr_grade']; ?>
</OPTION>
            <?php endforeach; endif; unset($_from); ?>
		  </SELECT></td>
      </tr>

       <tr bgcolor="#799AE1">
        <td align="center">班级</td>
		<td id='class'>
        </td>
        </tr>

     <tr bgcolor="#799AE1">
        <td align="center" >学生姓名</td>
		<td id='ren'></td>
      </tr>
      <!-- <tr bgcolor="#DEE5FA">
        <td align="center" >日常表现</td>
		<td>
           <input type="text" name='bj_daily_show'  value='' style="width:200px; height:50px"/>
        </td>
      </tr> -->
      <tr bgcolor="#799AE1">
        <td align="center" >离校时间</td>
		<td><input type="text" name='bj_date'  value='' id="DATE"/><img border="0"src="template/images/sel_date.gif" name="btnBeginDate"style="cursor: hand"  onclick="SelectDate(3)"></td>
      </tr>
	  <tr bgcolor="#799AE1">
        <td align="center" >校长是否确认</td>
		<td>
          <input type="radio" name="radio" value='是'/>是
          <input type="radio" name="radio" value='否'/>否
        </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >带队老师</td>
		<td>
           <SELECT style="width:100px" name='bj_lead_teacher'>
		   <OPTION value='' selected>--请选择--</OPTION>
			<?php $_from = $this->_tpl_vars['query_teacher']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['loop2']):
?>
			<OPTION VALUE="<?php echo $this->_tpl_vars['loop2']['t_id']; ?>
"><?php echo $this->_tpl_vars['loop2']['t_name']; ?>
</OPTION>
            <?php endforeach; endif; unset($_from); ?>
		  </SELECT>
        </td>
      </tr>
      <tr bgcolor="#799AE1">
        <td align="center" >综合成绩</td>
		<td>
          <SELECT style="width:100px" name='bj_mul_result'>
		  <OPTION value='' selected>--请选择--</OPTION>
			<OPTION value='合格'>合格</OPTION>
			<OPTION VALUE="优秀">优秀</OPTION>
            <OPTION VALUE="良好">良好</OPTION>
            <OPTION VALUE="不合格">不合格</OPTION>
		  </SELECT>
        </td>
      </tr>
       <tr bgcolor="#DEE5FA">
        <td align="center" >就业城市</td>
		<td>
          <SELECT style="width:100px" name='bj_jobcity'>
		  <OPTION value='' selected>--请选择--</OPTION>
			<OPTION value='北京'>北京</OPTION>
			<OPTION VALUE="上海">上海</OPTION>
            <OPTION VALUE="济南">济南</OPTION>
            <OPTION VALUE="临沂">临沂</OPTION>
		  </SELECT>
        </td>
      </tr>
       <!-- </tr> -->
       
      </tbody>
	  <tr bgcolor="#DEE5FA">
        <td colspan="2" align="center"><input type="submit" name='submit' value="确认添加"  onclick="return addmoney();" />
		<input type="button" name="return" value="返回" onclick="javascript:history.back(-1)">
		<!-- <input type="button" value="关闭" onClick="window.close()"/> -->
		</td>
      </tr>
	  </form>
	  </table>

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
