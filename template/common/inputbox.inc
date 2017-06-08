<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>系统</title>
<script language = "javascript">
var arrParm = window.dialogArguments;

if (arrParm[0] == "Y")
    window.returnValue = "";

function pri_TrimString (strVal)
{
    strTmp = strVal + "";
    if (strTmp.length == 0)
        return (strTmp);

    reVal = /^\s*/;
    strTmp = strTmp.replace (reVal, '');
    reVal = /\s*$/;
    return (strTmp.replace (reVal, ''));
}

function ForEnter ()
{
     if (window.event.keyCode == 13)
        InputOK ();
}

function InputOK ()
{
    if ((textInput.value = pri_TrimString (textInput.value)) == "")
    {
        alert ("内容不能为空！");
        textInput.focus ();
        return;
    };
    if (arrParm[0] == "Y")
        window.returnValue = textInput.value;
    else
    {
        arrParm[3].value = textInput.value;
        arrParm[3].click ();
    };
    window.close ();
}

function InputCancel ()
{
    if (arrParm[0] == "Y")
        window.returnValue = "";
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
    <td width="100%" height="8" align="left">
    </td>
  </tr>
  <tr>
    <td id="inputTitle" width="100%" align="left">
    </td>
  </tr>
  <tr>
    <td width="100%" align="left">
      <input type="text" name="textInput" style="width:100%" value="" onkeypress="ForEnter ()">
    </td>
  </tr>
  <tr>
    <td width="100%" height="8" align="left">
    </td>
  </tr>
  <tr>
    <td width="100%" align="center">
      <input type="button" name="btnOK" value=" 确定 " onclick="InputOK ()">&nbsp;
      <input type="button" name="btnCancel" value=" 取消 " onclick="InputCancel ()">
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
textInput.maxLength = arrParm[2];
</script>
<script language="Javascript" src="allonchg.inc"></script>
</html>