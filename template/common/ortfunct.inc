function OrtHexWordToDec (HexVal)
{
    return (OrtHexByteToDec (HexVal.charAt (0)) * 16 + OrtHexByteToDec (HexVal.charAt (1)));
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

function OrtSelectMoveSelect (Source, Target, Start)
{
    var eItem;
    if (Start < 0)
        Start = 0;
    if (Source.length < Start)
        return;
    nEnd = Source.length;
    for (var i = Start; i < nEnd; i ++)
    {
        if (Target != null)
        {
            if (Source.item (i).selected)
            {
                eItem = document.createElement ("OPTION");
                Target.add (eItem);
                eItem.innerText = Source.item (i).text;
                eItem.value = Source.item (i).value;
                Source.remove (i);
                i --;
                nEnd --;
            }
        }
    }
    Source.selectedIndex = -1;
    if (Target != null)
        Target.selectedIndex = Target.length - 1;
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
function OrtSelectJoinString (Source, LinkStr, Start)
{
    var strVal;
    var i;
    if (Start < 0)
        Start = 0;
    strVal = "";
    if (Source.length == 1)
        strVal += Source.item(0).value;
    else
        for (i = Start; i < Source.length; i ++)
        {
            strVal += Source.item(i).value;

            if (i < (Source.length - 1))
                strVal += LinkStr;
        }
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
    if ((nWidth = eval (OrtTrimString (strComb))) <= 0)
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
    if ((nHeight = eval (OrtTrimString (strComb))) <= 0)
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
    {
    }
}
