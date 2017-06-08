function OrtTrimString (strVal)
{
    var reVal;
    var strTmp;
    strTmp = strVal + "";
    if (strTmp.length == 0)
        return (strTmp);
    reVal = /^(\s|　)*/;
    strTmp = strTmp.replace (reVal, '');
    reVal = /(\s|　)*$/;
    return (strTmp.replace (reVal, ''));
}

function OrtHtmlFormat (strVal)
{
    var reVal;
    var strTmp;
    reVal = /</g;
    strTmp = strVal.replace (reVal, "&lt;");
    reVal = />/g;
    strTmp = strTmp.replace (reVal, "&gt;");
    reVal = /"/g;
    strTmp = strTmp.replace (reVal, "&quot;");
    return (strTmp);
}

function OrtUrlStringFormat (strVal)
{
    var reVal;
    var strTmp;
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

function OrtHtmlLine (strVal)
{
    var reVal;
    var strTmp;
    reVal = /\r/g;
    strTmp = strVal.replace (reVal, "<br>");
    return (strTmp);
}

function OrtHtmlFormatLine (strVal)
{
    return (OrtHtmlLine (OrtHtmlFormat (strVal)));
}

function OrtHtmlSingleQuote (strVal)
{
    var reVal;
    var strTmp;
    reVal = /'/g;
    strTmp = strVal.replace (reVal, "\\'");
    return (strTmp);
}

function OrtHtmlDoubleQuote (strVal)
{
    var reVal;
    var strTmp;
    reVal = /"/g;
    strTmp = strVal.replace (reVal, '\\"');
    return (strTmp);
}

function OrtHtmlQuote (strVal)
{
    return (OrtHtmlDoubleQuote (OrtHtmlSingleQuote (strVal)));
}

function OrtGetGBStrLength (strVal)
{
    var nLen;
    var i;
    nLen = 0;
    for (i = 0; i < strVal.length; i ++)
    {
        if (strVal.charCodeAt (i) <= 255)
            nLen ++;
        else
            nLen += 2;
    }
    return (nLen);
}

function OrtCheckNumber (strVal)
{
    var gar;
    var tmp;
    strVal = OrtTrimString (strVal);
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

/*------------------------
  功能：检测是否是有效浮点数字
-------------------------*/
function OrtCheckDecimal (strVal)
{
    strVal = OrtTrimString (strVal);
    if (strVal.length == 0 )
        return (false);
	reVal = /^[\-]{0,1}(0|[1-9][0-9]{0,5})([\.][0-9]{0,2}){0,1}$/;
	return ( reVal.test (strVal) );
}

function OrtCheckInteger (strVal)
{
    var reVal;
    strVal = OrtTrimString (strVal);
    if (strVal.length == "")
        return (false);
    reVal = /^[\-\+]?([1-9]\d*|0|[1-9]\d{0,2}(,\d{3})*)$/;
    return (reVal.test (strVal));
}
function OrtCheckPlusInteger (strVal)
{
    var reVal;
    strVal = OrtTrimString (strVal);
    if (strVal.length == "")
        return (false);
    reVal = /^[\-\+]?([1-9]\d*|0|[1-9]\d{0,2}(,\d{3})*)$/;
    if (reVal.test (strVal) && parseInt (strVal) > 0)
        return (true);
    else
        return (false);
}
function OrtCheckEmail (strEmail)
{
    var reVal;
    strEmail = (OrtTrimString (strEmail));
    if (strEmail.length == 0)
        return (false);
    reVal = /^[\-!#\$%&'\*\+\\\.\/0-9=\?A-Z\^_`a-z{|}~]+@[\-!#\$%&'\*\+\\\.\/0-9=\?A-Z\^_`a-z{|}~]+(\.[\-!#\$%&'\*\+\\\.\/0-9=\?A-Z\^_`a-z{|}~]+)+$/;
    return (reVal.test (strEmail));
}
function OrtCheckTime (strTime)
{
    var reVal;
    strTime = (OrtTrimString (strTime));
    if (strTime.length == 0)
        return (false);
    reVal = /^(([0-9]|[01][0-9]|2[0-3])(:([0-9]|[0-5][0-9])){0,2}|(0?[0-9]|1[0-1])(:([0-9]|[0-5][0-9])){0,2}\s?[aApP][mM])?$/;
    return (reVal.test (strTime));
}
function OrtCheckShortTime (strTime)
{
    var reVal;
    strTime = (OrtTrimString (strTime));
    if (strTime.length == 0)
        return (false);
    reVal = /^([0-9]|[01][0-9]|2[0-3])(:([0-9]|[0-5][0-9])){0,2}$/;
    return (reVal.test (strTime));
}
function OrtCheckDate (strDate)
{
    var nStart;
    var nEnd;
    var nYear;
    var nMonth;
    var nDay;
    var nFact;
    var arrDay = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    var reVal;
    strDate = (OrtTrimString (strDate));
    if (strDate.length == 0)
        return (false);
    reVal = /^([1-2]\d{3})[\/|\-](0?[1-9]|10|11|12)[\/|\-](0?[1-9]|1[0-9]|2[0-9]|30|31)$/;
    if (!reVal.test (strDate))
        return (false);
    if ((nStart = strDate.indexOf ("/", 0)) < 0)
    {
        if ((nStart = strDate.indexOf ("-", 0)) < 0)
            return (false);
        if ((nEnd = strDate.indexOf ("-", nStart + 1)) < 0)
            return (false);
    }
    else
    {
        if ((nEnd = strDate.indexOf ("/", nStart + 1)) < 0)
            return (false);
    }
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
function OrtCompareDate (strDate1, strDate2)
{
    var nStart1;
    var nEnd1;
    var nYear1;
    var nMonth1;
    var nDay1;
    var nStart2;
    var nEnd2;
    var nYear2;
    var nMonth2;
    var nDay2;
    strDate1 = (OrtTrimString (strDate1));
    strDate2 = (OrtTrimString (strDate2));
    if ((nStart1 = strDate1.indexOf ("/", 0)) < 0)
    {
        nStart1 = strDate1.indexOf ("-", 0);
        nEnd1 = strDate1.indexOf ("-", nStart1 + 1);
    }
    else
    {
        nEnd1 = strDate1.indexOf ("/", nStart1 + 1);
    }
    nYear1 = eval (strDate1.substring (0, nStart1));
    nMonth1 = eval (strDate1.substring (nStart1 + 1, nEnd1));
    nDay1 = eval (strDate1.substring (nEnd1 + 1, strDate1.length));
    if ((nStart2 = strDate2.indexOf ("/", 0)) < 0)
    {
        nStart2 = strDate2.indexOf ("-", 0);
        nEnd2 = strDate2.indexOf ("-", nStart2 + 1);
    }
    else
    {
        nEnd2 = strDate2.indexOf ("/", nStart2 + 1);
    }
    nYear2 = eval (strDate2.substring (0, nStart2));
    nMonth2 = eval (strDate2.substring (nStart2 + 1, nEnd2));
    nDay2 = eval (strDate2.substring (nEnd2 + 1, strDate2.length));
    if (nYear1 > nYear2)
        return (1);
    else if (nYear1 < nYear2)
        return (-1);
    else
    {
	    if (nMonth1 > nMonth2)
		    return (1);
		else if (nMonth1 < nMonth2)
		    return (-1);
		else
		{
		    if (nDay1 > nDay2)
		        return (1);
		    else if (nDay1 < nDay2)
		    	return (-1);
		    else
		    	return (0);
		};
	};
}
function OrtCheckEditInteger (strVal)
{
    var reVal;
    strVal = OrtTrimString (strVal);
    if (strVal.length == "")
        return (false);
    reVal = /^[\-\+]?([0-9]\d*|0|[1-9]\d{0,2}(,\d{3})*)$/;
    return (reVal.test (strVal));
}
function OrtIntTo2Char (nVal)
{
    var strOut;
    if (nVal <= 9)
        strOut = "0";
    else
        strOut = "";
    strOut += nVal;
    return (strOut);
}
function OrtAdjustTime (strVal)
{
    var nPos;
    var nHour;
    var nMinute;
    var nSecond;
    var strTmp;
    strVal = OrtTrimString (strVal);
    if (strVal == "")
        return ("");
    nPos = strVal.indexOf (":", 0);
    if (nPos < 0)
    {
        if (OrtCheckEditInteger (strVal))
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
            if (OrtCheckEditInteger (strTmp))
                nHour = Math.ceil (strTmp);
            else
                nHour = 0;
        };
        strVal = strVal.substring (nPos + 1, strVal.length + 1);
        nPos = strVal.indexOf (":");
        if (nPos < 0)
        {
            if (OrtCheckEditInteger (strVal))
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
                if (OrtCheckEditInteger (strTmp))
                    nMinute = Math.ceil (strTmp);
                else
                    nMinute = 0;
            };
            strTmp = strVal.substring (nPos + 1, strVal.length + 1);
            if (OrtCheckEditInteger (strTmp))
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
    return (OrtIntTo2Char (nHour) + ":" + OrtIntTo2Char (nMinute) + ":" + OrtIntTo2Char (nSecond));
}
function OrtAdjustShortTime (strVal)
{
    var nPos;
    var nHour;
    var nMinute;
    var nSecond;
    var strTmp;

    strVal = OrtTrimString (strVal);
    if (strVal == "")
        return ("");

    nPos = strVal.indexOf (":", 0);
    if (nPos < 0)
    {
        if (OrtCheckEditInteger (strVal))
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
            if (OrtCheckEditInteger (strTmp))
                nHour = Math.ceil (strTmp);
            else
                nHour = 0;
        };
        strVal = strVal.substring (nPos + 1, strVal.length + 1);
        nPos = strVal.indexOf (":");
        if (nPos < 0)
        {
            if (OrtCheckEditInteger (strVal))
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
                if (OrtCheckEditInteger (strTmp))
                    nMinute = Math.ceil (strTmp);
                else
                    nMinute = 0;
            };
            strTmp = strVal.substring (nPos + 1, strVal.length + 1);
            if (OrtCheckEditInteger (strTmp))
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

    return (OrtIntTo2Char (nHour) + ":" + OrtIntTo2Char (nMinute));
}
function OrtByteString (strVal)
{
    var nLen;
    var i;
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
function OrtByteSubString (strVal, nLength)
{
    var strOut;
    var nLen;
    var i;
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
function OrtFillString (strVal, strChar, nLength, bLeft)
{
    var nLen;
    var chVal;
    var strFill;
    var i;
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
function OrtCheckValidCode (strCode)
{
    var i;
    var strChar;
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
function OrtCheckValidSysCode (strCode)
{
    var i;
    var strChar;
    if (strCode.length == 0)
        return (false);
    for (i = 0; i < strCode.length; i ++)
    {
        strChar = strCode.substring (i, i + 1).toUpperCase ();
        if (i == 0 && !(strChar >= "A" && strChar <= "Z"))
            return (false);
        else if (!((strChar >= "A" && strChar <= "Z") || (strChar >= "0" && strChar <= "9")))
            return (false);
    };
    return (true);
}
function OrtCheckEnglishCode (strCode)
{
    var i;
    var strChar;
    if (strCode.length == 0)
        return (false);
    for (i = 0; i < strCode.length; i ++)
    {
        strChar = strCode.substring (i, i + 1).toUpperCase ();
        if (strChar == "-" || strChar == "_")
            continue;
        if (!((strChar >= "A" && strChar <= "Z") || (strChar >= "0" && strChar <= "9")))
            return (false);
    };
    return (true);
}
function OrtCheckIPAddr (strVal)
{
    strVal = (OrtTrimString (strVal));
    if (strVal.length == 0)
        return (false);
    reVal = /^(\d{1}|\d{2}|[0-1]\d{2}|2[0-4]\d|25[0-5])\.(\d{1}|\d{2}|[0-1]\d{2}|2[0-4]\d|25[0-5])\.(\d{1}|\d{2}|[0-1]\d{2}|2[0-4]\d|25[0-5])\.(\d{1}|\d{2}|[0-1]\d{2}|2[0-4]\d|25[0-5])$/;
    return (reVal.test (strVal));
}
function OrtCheckIPMesk (strValue)
{
    var arrTmp;
    var strTmp = OrtTrimString (strValue);
    if (strTmp == "" || !OrtCheckIPAddr (strTmp))
        return false;
    arrTmp = strTmp.split (".");
    if ((arrTmp[3] == "0" || arrTmp[3] == "2" || arrTmp[3] == "4" || arrTmp[3] == "8" || arrTmp[3] == "16"
        || arrTmp[3] == "32" || arrTmp[3] == "64" || arrTmp[3] == "128") && arrTmp[0] == "255"
        && arrTmp[1] == "255" && arrTmp[2] == "255")
        return true;
    if ((arrTmp[2] == "0" || arrTmp[2] == "2" || arrTmp[2] == "4" || arrTmp[2] == "8" || arrTmp[2] == "16"
        || arrTmp[2] == "32" || arrTmp[2] == "64" || arrTmp[2] == "128") && arrTmp[0] == "255"
        && arrTmp[1] == "255" && arrTmp[3] == "0")
        return true;
    if ((arrTmp[1] == "0" || arrTmp[1] == "2" || arrTmp[1] == "4" || arrTmp[1] == "8" || arrTmp[1] == "16"
        || arrTmp[1] == "32" || arrTmp[1] == "64" || arrTmp[1] == "128") && arrTmp[0] == "255"
        && arrTmp[2] == "0" && arrTmp[3] == "0")
        return true;
    if ((arrTmp[0] == "2" || arrTmp[0] == "4" || arrTmp[0] == "8" || arrTmp[0] == "16"
        || arrTmp[0] == "32" || arrTmp[0] == "64" || arrTmp[0] == "128") && arrTmp[1] == "0"
        && arrTmp[2] == "0" && arrTmp[3] == "0")
        return true;
    return false;
}
function OrtDecToHexByte (DecVal)
{
    switch (DecVal)
    {
        case 0:
            return ("0");
        case 1:
            return ("1");
        case 2:
            return ("2");
        case 3:
            return ("3");
        case 4:
            return ("4");
        case 5:
            return ("5");
        case 6:
            return ("6");
        case 7:
            return ("7");
        case 8:
            return ("8");
        case 9:
            return ("9");
        case 10:
            return ("a");
        case 11:
            return ("b");
        case 12:
            return ("c");
        case 13:
            return ("d");
        case 14:
            return ("e");
        case 15:
            return ("f");
        default:
            return ("0");
    };
}
function OrtDecToHexWord (DecVal)
{
    FVal = Math.floor (DecVal / 16);
    SVal = DecVal - FVal * 16;

    return (OrtDecToHexByte (FVal) + OrtDecToHexByte (SVal));
}
function OrtHexByteToDec (HexVal)
{
    switch (HexVal)
    {
        case "0":
            return (0);
        case "1":
            return (1);
        case "2":
            return (2);
        case "3":
            return (3);
        case "4":
            return (4);
        case "5":
            return (5);
        case "6":
            return (6);
        case "7":
            return (7);
        case "8":
            return (8);
        case "9":
            return (9);
        case "a":
        case "A":
            return (10);
        case "b":
        case "B":
            return (11);
        case "c":
        case "C":
            return (12);
        case "d":
        case "D":
            return (13);
        case "e":
        case "E":
            return (14);
        case "f":
        case "F":
            return (15);
        default:
            return (0);
    };
}