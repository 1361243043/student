///////////////////////////////////////////////// 
//��Ҫ������볬����������г����ڽ�β�����ģ��
//ʹ����text���͵�input��onchange�¼�
///////////////////////////////////////////////// 
function onchgTextEditOnChange ()
{
    e = window.event.srcElement;
    if (e.maxLength == 0)
        return;

    strOut = "";
    nLen = 0;
    for (i = 0; i < e.value.length; i ++)
    {
        if (e.value.charCodeAt (i) <= 255)
        {
            nLen ++;
            strOut = strOut + e.value.charAt (i);
            if (nLen == e.maxLength)
                break;
        }
        else
        {
            nLen += 2;
            if (nLen > e.maxLength)
                break;
            strOut = strOut + e.value.charAt (i);
            if (nLen == e.maxLength)
                break;
        };
    }
    e.value = strOut;
}

function onchgTextEditAdjust ()
{
    divColl = document.all.tags("INPUT");
    for (i = 0; i < divColl.length; i++)
    {
        whichEl = divColl (i);
        if (whichEl.type.toUpperCase () == "TEXT")
        {
            if (whichEl.maxLength > 0)
                whichEl.onchange = onchgTextEditOnChange;
        };
    };
}

onchgTextEditAdjust ();