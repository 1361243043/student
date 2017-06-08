function TrimString (strVal)
{
    strTmp = strVal + "";
    if (strTmp.length == 0)
        return (strTmp);
    reVal = /^(\s|　)*/;
    strTmp = strTmp.replace (reVal, '');
    reVal = /(\s|　)*$/;
    return (strTmp.replace (reVal, ''));
}
function HtmlFormat (strVal)
{
    reVal = /</g;
    strTmp = strVal.replace (reVal, "&lt;");
    reVal = />/g;
    strTmp = strTmp.replace (reVal, "&gt;");
    reVal = /"/g;
    strTmp = strTmp.replace (reVal, "&quot;");
    return (strTmp);
}
function UrlStringFormat (strVal)
{
    reVal = /%/g;
    strTmp = strVal.replace (reVal, "%25");
    reVal = /&/g;
    strTmp = strTmp.replace (reVal, "%26");
    reVal = /#/g;
    strTmp = strTmp.replace (reVal, "%23");
    reVal = /\+/g;
    strTmp = strTmp.replace (reVal, "%2b");
    return (strTmp);
}
function CheckNumber (strVal)
{
    strVal = TrimString (strVal);
    if (strVal.length == "")
        return (false);
    reVal = /^[\-\+]?([0-9]\d*|0|[1-9]\d{0,2}(,\d{3})*)(\.\d+)?$/;
    if (reVal.test (strVal))
    {
        gar = strVal + '.';
        tmp = gar.split ('.');
        if (tmp[0].length > 15)
            return (false);
        else
            return (true);
    }
    return (false);
}
function CheckInteger (strVal)
{
    strVal = TrimString (strVal);
    if (strVal.length == "")
        return (false);
    reVal = /^[\-\+]?([1-9]\d*|0|[1-9]\d{0,2}(,\d{3})*)$/;
    return (reVal.test (strVal));
}
function CheckEmail (strEmail)
{
    strEmail = (TrimString (strEmail));
    if (strEmail.length == 0)
        return (false);
    reVal = /^[\-!#\$%&'\*\+\\\.\/0-9=\?A-Z\^_`a-z{|}~]+@[\-!#\$%&'\*\+\\\.\/0-9=\?A-Z\^_`a-z{|}~]+(\.[\-!#\$%&'\*\+\\\.\/0-9=\?A-Z\^_`a-z{|}~]+)+$/;
    return (reVal.test (strEmail));
}
function CheckTime (strTime)
{
    strTime = (TrimString (strTime));
    if (strTime.length == 0)
        return (false);
    reVal = /^(([0-9]|[01][0-9]|2[0-3])(:([0-9]|[0-5][0-9])){0,2}|(0?[0-9]|1[0-1])(:([0-9]|[0-5][0-9])){0,2}\s?[aApP][mM])?$/;
    return (reVal.test (strTime));
}
function CheckDate (strDate)
{
    var nStart;
    var nEnd;
    var nYear;
    var nMonth;
    var nDay;
    var nFact;
    var arrDay = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    strDate = (TrimString (strDate));
    if (strDate.length == 0)
        return (false);
    reVal = /^([1-2]\d{3})[\/|\-](0?[1-9]|10|11|12)[\/|\-]([1-2]?[0-9]|0[1-9]|30|31)$/;
    if (!reVal.test (strDate))
        return (false);
    nStart = strDate.indexOf ("/", 0);
    nEnd = strDate.indexOf ("/", nStart + 1);
    nYear = eval (strDate.substring (0, nStart));
    nMonth = eval (strDate.substring (nStart + 1, nEnd));
    nDay = eval (strDate.substring (nEnd + 1, strDate.length));
    nFact = arrDay[nMonth - 1];
    if (nMonth == 2)
    {
        if ((nYear % 4 == 0 && nYear %100 != 0) || (nYear % 400 == 0))
            nFact ++;
    };
    if (nDay > nFact)
        return (false);
    return (true);
}
function CheckEditInteger (strVal)
{
    strVal = TrimString (strVal);
    if (strVal.length == "")
        return (false);
    reVal = /^[\-\+]?([0-9]\d*|0|[1-9]\d{0,2}(,\d{3})*)$/;
    return (reVal.test (strVal));
}

function IntTo2Char (nVal)
{
    if (nVal <= 9)
        strOut = "0";
    else
        strOut = "";
    strOut += nVal;
    return (strOut);
}
function AdjustTime (strVal)
{
    strVal = TrimString (strVal);
    if (strVal == "")
        return ("");
    nPos = strVal.indexOf (":", 0);
    if (nPos < 0)
    {
        if (CheckEditInteger (strVal))
            nHour = Math.ceil (strVal);
        else
            nHour = 0;
        nMinute = 0;
        nSecond = 0;
    }
    else
    {
        if (nPos == 0)
            nHour = 0;
        else
        {
            strTmp = strVal.substring (0, nPos);
            if (CheckEditInteger (strTmp))
                nHour = Math.ceil (strTmp);
            else
                nHour = 0;
        };
        strVal = strVal.substring (nPos + 1, strVal.length + 1);
        nPos = strVal.indexOf (":");
        if (nPos < 0)
        {
            if (CheckEditInteger (strVal))
                nMinute = Math.ceil (strVal);
            else
                nMinute = 0;
            nSecond = 0;
        }
        else
        {
            if (nPos == 0)
                nMinute = 0;
            else
            {
                strTmp = strVal.substring (0, nPos);
                if (CheckEditInteger (strTmp))
                    nMinute = Math.ceil (strTmp);
                else
                    nMinute = 0;
            };
            strTmp = strVal.substring (nPos + 1, strVal.length + 1);
            if (CheckEditInteger (strTmp))
                nSecond = Math.ceil (strTmp);
            else
                nSecond = 0;
        };
    };
    if (nHour < 0)
        nHour = 0;
    else if (nHour > 23)
        nHour = 23;
    if (nMinute < 0)
        nMinute = 0;
    else if (nMinute > 59)
        nMinute = 59;
    if (nSecond < 0)
        nSecond = 0;
    else if (nSecond > 59)
        nSecond = 59;
    return (IntTo2Char (nHour) + ":" + IntTo2Char (nMinute) + ":" + IntTo2Char (nSecond));
}

function ByteString (strVal)
{
    nLen = 0;
    for (i = 0; i < strVal.length; i ++)
    {
        if (strVal.charCodeAt (i) > 255)
            nLen += 2;
        else
            nLen ++;
    };
    return (nLen);
}
function ByteSubString (strVal, nLength)
{
    if (nLength == 0)
        return ("");
    strOut = "";
    nLen = 0;
    for (i = 0; i < strVal.length; i ++)
    {
        if (strVal.charCodeAt (i) <= 255)
        {
            nLen ++;
            strOut = strOut + strVal.charAt (i);
            if (nLen == nLength)
                break;
        }
        else
        {
            nLen += 2;
            if (nLen > nLength)
                break;
            strOut = strOut + strVal.charAt (i);
            if (nLen == nLength)
                break;
        };
    }
    return (strOut);
}
function FillString (strVal, strChar, nLength, bLeft)
{
    nLen = strVal.length;
    if (nLen >= nLength)
        return (strVal);
    if (strChar == "")
        chVal = " ";
    else
        chVal = strChar.substring(0, 1);
    strFill = "";
    for (i = 0; i < nLength - nLen; i ++)
        strFill = strFill + chVal;
    if (bLeft)
        return (strFill + strVal);
    else
        return (strVal + strFill);
}

function CheckValidCode (strCode)
{
    if (strCode.length == 0)
        return (false);
    for (i = 0; i < strCode.length; i ++)
    {
        strChar = strCode.substring (i, i + 1).toUpperCase ();
        if (!((strChar >= "A" && strChar <= "Z") || (strChar >= "0" && strChar <= "9")))
            return (false);
    };
    return (true);
}

function CheckIPAddr (strVal)
{
    strVal = (TrimString (strVal));
    if (strVal.length == 0)
        return (false);
    reVal = /^(\d{1}|\d{2}|[0-1]\d{2}|2[0-4]\d|25[0-5])\.(\d{1}|\d{2}|[0-1]\d{2}|2[0-4]\d|25[0-5])\.(\d{1}|\d{2}|[0-1]\d{2}|2[0-4]\d|25[0-5])\.(\d{1}|\d{2}|[0-1]\d{2}|2[0-4]\d|25[0-5])$/;
    return (reVal.test (strVal));
}
function OrtSelectMove (Source, Target, Start)
{
    var nIndex;
    var eItem;
    if (Start < 0)
        Start = 0;
    nIndex = Source.selectedIndex;
    if (nIndex < Start)
        return;
    if (Target != null)
    {
        eItem = document.createElement ("OPTION");
        Target.add (eItem);
        eItem.innerText = Source.item (nIndex).text;
        eItem.value = Source.item (nIndex).value;
        Target.selectedIndex = Target.length - 1;
    }
    Source.remove (nIndex);
    if (nIndex >= Source.length)
        nIndex = Source.length - 1;
    Source.selectedIndex = nIndex;
}
function OrtSelectAppend (Source, Target, Start, Permit)
{
    var nIndex;
    var i;
    var eItem;
    if (Start < 0)
        Start = 0;
    nIndex = Source.selectedIndex;
    if (nIndex < Start)
        return;
    if (!Permit)
    {
        for (i = 0; i < Target.length; i ++)
        {
            if (Target.item (i).value == Source.item (nIndex).value)
                return;
        }
    }
    eItem = document.createElement ("OPTION");
    Target.add (eItem);
    eItem.innerText = Source.item (nIndex).text;
    eItem.value = Source.item (nIndex).value;
    Target.selectedIndex = Target.length - 1;
}
function OrtSelectMoveAll (Source, Target, Start)
{
    var eItem;
    if (Start < 0)
        Start = 0;
    if (Source.length < Start)
        return;
    while (Source.length > Start)
    {
        if (Target != null)
        {
            eItem = document.createElement ("OPTION");
            Target.add (eItem);
            eItem.innerText = Source.item (Start).text;
            eItem.value = Source.item (Start).value;
        }
        Source.remove (Start);
    }
    Source.selectedIndex = -1;
    if (Target != null)
        Target.selectedIndex = Target.length - 1;
}
function OrtSelectAppendAll (Source, Target, Start, Permit)
{
    var i;
    var j;
    var Find;
    var eItem;
    if (Start < 0)
        Start = 0;
    if (Source.length < Start)
        return;
    for (i = Start; i < Source.length; i ++)
    {
        if (!Permit)
        {
            Find = false;
            for (j = 0; j < Target.length; j ++)
            {
                if (Target.item (j).value == Source.item (i).value)
                {
                    Find = true;
                    break;
                }
            }
            if (Find)
                continue;
        }
        eItem = document.createElement ("OPTION");
        Target.add (eItem);
        eItem.innerText = Source.item (i).text;
        eItem.value = Source.item (i).value;
    }
    Target.selectedIndex = Target.length - 1;
}
function OrtSelectString (Source, LinkStr, Start)
{
    var strVal;
    var i;
    if (Start < 0)
        Start = 0;
    strVal = "";
    for (i = Start; i < Source.length; i ++)
        strVal += Source.item(i).value + LinkStr;
    if (strVal != "")
        strVal = LinkStr + strVal;
    return (strVal);
}
function OrtSelectInclude (Source, LinkStr, Start)
{
    var strVal;
    var i;
    if (Start < 0)
        Start = 0;
    strVal = "";
    for (i = Start; i < Source.length; i ++)
        strVal += LinkStr + Source.item(i).value + LinkStr;
    return (strVal);
}
function OrtSelectSwapColor (Source, First, Second, FirstColor, SecondColor, Start)
{
    var nIdx;
    var nLen;
    if (Start < 0)
        Start = 0;
    if ((nIdx = Source.selectedIndex) < Start)
        return;
    nLen = Source.item (nIdx).text.length;
    if (Source.item (nIdx).text.substring (0, First.length) == First)
    {
        Source.item (nIdx).text = Second + Source.item (nIdx).text.substring (First.length, nLen);
        if (FirstColor != SecondColor)
            Source.item (nIdx).style.color = SecondColor;
    }
    else if (Source.item (nIdx).text.substring (0, Second.length) == Second)
    {
        Source.item (nIdx).text = First + Source.item (nIdx).text.substring (Second.length, nLen);
        if (FirstColor != SecondColor)
            Source.item (nIdx).style.color = FirstColor;
    }
    Source.selectedIndex = -1;
}
function OrtSelectSwap (Source, First, Second, Start)
{
    OrtSelectSwap (Source, First, Second, "", "", Start);
}
function OrtSelectSwapString (Source, Pref, LinkStr, Start)
{
    var strVal;
    var i;
    if (Start < 0)
        Start = 0;
    strVal = "";
    for (i = Start; i < Source.length; i ++)
    {
        if (Source.item (i).text.substring (0, Pref.length) == Pref)
            strVal += Source.item(i).value + LinkStr;
    }
    if (strVal != "")
        strVal = LinkStr + strVal;
    return (strVal);
}
function OrtSelectFind (Source, Value, Start)
{
    var i;
    if (Start < 0)
        Start = 0;
    for (i = Start; i < Source.length; i ++)
    {
        if (Source.item (i).value == Value)
            return (i);
    }
    return (-1);
}
function OrtSelectAddElement (Source, Value, Text)
{
    var eItem;
    eItem = document.createElement ("OPTION");
    Source.add (eItem);
    eItem.innerText = Text;
    eItem.value = Value;
    Source.selectedIndex = Source.length - 1;
}
function OrtSelectRemoveNotExists (Source, Target, Start)
{
    var nSelect;
    var nFrom;
    var i;
    var strVal;
    var bFind;
    if (Start < 0)
        Start = 0;
    nSelect = Target.selectedIndex;
    nFrom = Start;
    while (nFrom < Target.length)
    {
        strVal = Target.item (nFrom).value;
        bFind = false;
        for (i = 0; i < Source.length; i ++)
        {
            if (Source.item (i).value == strVal)
            {
                bFind = true;
                break;
            }
        }
        if (bFind)
            nFrom ++;
        else
            Target.remove (nFrom);
    }
    if (Target.selectedIndex == -1)
    {
        if (nSelect >= Target.length)
            Target.selectedIndex = Target.length - 1;
        else
            Target.selectedIndex = nSelect;
    }
}
function OrtSelectRemoveElement (Source, Start)
{
    var nIndex;
    if (Start < 0)
        Start = 0;
    if ((nIndex = Source.selectedIndex) < Start)
        return;
    Source.remove (nIndex);
    if (nIndex >= Source.length)
        nIndex = Source.length - 1;
    Source.selectedIndex = nIndex;
}
function OrtOpenCenterWindow (URL, Name, Features)
{
    var nWidth;
    var nHeight;
    var nLeft;
    var nTop;
    var strVal;
    var nPos;
    var strComb;
    var i;
    var chVal;
    nLeft = 0;
    nTop = 0;
    if (Features == null)
        return (window.open (URL, Name, Features));
    strVal = Features.toUpperCase ();
    if (strVal.indexOf ("LEFT", 0) >= 0 || strVal.indexOf ("TOP", 0) >= 0)
        return (window.open (URL, Name, Features));
    if ((nPos = strVal.indexOf ("WIDTH", 0)) < 0)
        return (window.open (URL, Name, Features));
    if ((nPos = strVal.indexOf ("=", nPos)) < 0)
        return (window.open (URL, Name, Features));
    strComb = "";
    for (i = nPos + 1; i < Features.length; i ++)
    {
        chVal = Features.charAt (i);
        if (chVal == " " || (chVal >= "0" && chVal <= "9"))
            strComb += chVal;
        else
            break;
    }
    if ((nWidth = eval (TrimString (strComb))) <= 0)
        return (window.open (URL, Name, Features));
    if ((nPos = strVal.indexOf ("HEIGHT", 0)) < 0)
        return (window.open (URL, Name, Features));
    if ((nPos = strVal.indexOf ("=", nPos)) < 0)
        return (window.open (URL, Name, Features));
    strComb = "";
    for (i = nPos + 1; i < Features.length; i ++)
    {
        chVal = Features.charAt (i);
        if (chVal == " " || (chVal >= "0" && chVal <= "9"))
            strComb += chVal;
        else
            break;
    }
    if ((nHeight = eval (TrimString (strComb))) <= 0)
        return (window.open (URL, Name, Features));
    nLeft = (window.screen.width - nWidth) / 2;
    nTop = (window.screen.height - nHeight) / 2;
    Features += ",left=" + nLeft + ",top=" + nTop;
    return (window.open (URL, Name, Features));
}
function OrtCloseWindow (wShow)
{
    try
    {
        wShow.close ();
    }
    catch (e)
    {}
}

function CheckValidCodeArch (strCode)
{
    if (strCode.length == 0)
        return (false);
    for (i = 0; i < strCode.length; i ++)
    {
        strChar = strCode.substring (i, i + 1).toUpperCase ();
        if (!((strChar >= "A" && strChar <= "Z") || (strChar >= "0" && strChar <= "9")) && strChar != "." && strChar != "_")
            return (false);
    };
    return (true);
}

//////////////////////////////////////////////////
//返回是否CAD文件类型
//输入:
//      strExtName: 文件类型
//返回: TRUE:是CAD文件; FALSE:不是CAD文件
function GetCadFlag (strExtName)
{
    strExtName = strExtName.toUpperCase ();
    if (strExtName == "DWG")
        return (true);
    else
        return (false);
}