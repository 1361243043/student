/////////////////////////////////////////////////
//所有程序在开始引入的模块
//使用了onmousemove和onmousedown事件
/////////////////////////////////////////////////
load_ns = (navigator.appName == "Netscape");
function ExchangeImg(sign)
{
if (!ver4)
        return;
if(sign=="1")
    top.frameMain.menuup.background="/pimage/heng.gif";
else
    top.frameMain.menuup.background="/pimage/heng1.gif";
}

function loadFilterClick (e)
{
    try
    {
        if (!load_ns)
        {
            if (event.button > 1)
                alert ("欢迎使用本系统！");
        }
        else
        {
            if (e.which > 1)
                return (false);
        };
    }
    catch (e)
    {
    };
}

function loadFilterEvent (e)
{
    try
    {
        event.returnValue = false;
        return false;
    }
    catch (e)
    {
    };
}

function loadFilterKey (e)
{
    //Esc: 27
    //Ctrl+E: 69; Ctrl+H: 72; Ctrl+I: 73; Ctrl+N: 78; F3: 114; F11: 122
    try
    {
        if (event.keyCode == 27
            || event.keyCode == 114
            || event.keyCode == 122
            || (event.ctrlKey && event.keyCode == 69)
            || (event.ctrlKey && event.keyCode == 72)
            || (event.ctrlKey && event.keyCode == 73)
            || (event.ctrlKey && event.keyCode == 78))
        {
            event.cancelBubble = true;
            event.keyCode = 0;
            return (false);
        };
    }
    catch (e)
    {
    };
}

try
{
    if (load_ns)
        document.captureEvents (Event.MOUSEMOVE | Event.MOUSEDOWN);
    //document.oncontextmenu = loadFilterEvent;
    //document.ondragstart = loadFilterEvent;
    //document.onmousemove = loadFilterClick;
    //document.onmousedown = loadFilterClick;
    //document.onkeydown = loadFilterKey;
}
catch (e)
{
};