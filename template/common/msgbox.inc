<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>系统</title>
<script language = "javascript">
var arrParm = window.dialogArguments;
//arrParm[0]: Y = 模式; N=无模式
//arrParm[1]: 描述文字
//arrParm[2]: 缺省值
//arrParm[3]: 联接element
//arrParm[4]: 第一个按钮名称,空表示无效
//arrParm[5]: 第一个按钮值
//arrParm[6]: 第二个按钮名称,空表示无效
//arrParm[7]: 第二个按钮值
//arrParm[8]: 第三个按钮名称,空表示无效
//arrParm[9]: 第三个按钮值

if (arrParm[0] == "Y")
    window.returnValue = arrParm[2];

function ClickOne ()
{
    if (arrParm[0] == "Y")
        window.returnValue = arrParm[5];
    else
    {
        arrParm[3].value = arrParm[5];
        arrParm[3].click ();
    };
    window.close ();
}

function ClickTwo ()
{
    if (arrParm[0] == "Y")
        window.returnValue = arrParm[7];
    else
    {
        arrParm[3].value = arrParm[7];
        arrParm[3].click ();
    };
    window.close ();
}

function ClickThr ()
{
    if (arrParm[0] == "Y")
        window.returnValue = arrParm[9];
    else
    {
        arrParm[3].value = arrParm[9];
        arrParm[3].click ();
    };
    window.close ();
}
</script>
</head>

<body bgcolor="#C0C0C0">
<table border=0 cellpdding=0 cellspacing=0 width="100%" >
<tr>
<td width="5%">&nbsp;
</td>
<td width="90%">
<table border=0 cellpdding=2 cellspacing=1 width="100%" style="font-size:10pt">
  <tr>
    <td width="100%" height="16" align="left">
    </td>
  </tr>
  <tr>
    <td id="inputTitle" width="100%" align="center">
    </td>
  </tr>
  <tr>
    <td width="100%" height="16" align="left">
    </td>
  </tr>
  <tr>
    <td width="100%" align="center">
      <input type="button" name="btnOne" value="" onclick="ClickOne ()" style="display:none">&nbsp;
      <input type="button" name="btnTwo" value="" onclick="ClickTwo ()" style="display:none">&nbsp;
      <input type="button" name="btnThr" value="" onclick="ClickThr ()" style="display:none">
    </td>
  </tr>
</table>
</td>
<td width="5%">&nbsp;
</td>
</tr>
</table>
</body>

<script language = "javascript">
inputTitle.innerText = arrParm[1];
if (arrParm[4] == "")
    btnOne.style.display = "none";
else
{
    btnOne.value = arrParm[4];
    btnOne.style.display = "inline";
};
if (arrParm[6] == "")
    btnTwo.style.display = "none";
else
{
    btnTwo.value = arrParm[6];
    btnTwo.style.display = "inline";
};
if (arrParm[8] == "")
    btnThr.style.display = "none";
else
{
    btnThr.value = arrParm[8];
    btnThr.style.display = "inline";
};
</script>
</html>