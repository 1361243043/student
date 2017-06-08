///////////////////////////////////////////////////////////////////////
//菜单控制功能集
//注意:
//  本控制程序使用了以下ID名称: menuAllItems、menu*Image、
//  menu*Show, 其中*表示有效的字符串，使用本功能要注意命名
//  冲突。只支持两级菜单。
//方法：
//  菜单开始处调用MenuStart,结束处调用MenuEnd; 父菜单开始处调用
//  MenuStartParent,结束处调用MenuEndParent;  插入子菜单调用
//  MenuAppendChild,它只能处于MenuStartParent和MenuEndParent之间;
//  展开父菜单用ExpandMenu.
///////////////////////////////////////////////////////////////////////

function ExpandMenu (mItem)
{
    var eImage;
    var eShow;
    var i;

    for (i = 4; i < menuAllItems.length; i ++)
    {
        eShow = eval ("menu" + menuAllItems.item(i).value + "Show");
        eImage = eval ("menu" + menuAllItems.item(i).value + "Image");
        if (eShow.style.display == "")
        {
            eShow.style.display = "none";
            eShow.height = 1;
            eImage.src = menuAllItems.item(1).value;
        };
    };

    eImage = eval ("menu" + mItem + "Image");
    eShow = eval ("menu" + mItem + "Show");

    eShow.style.display = "";
    eShow.height = "100%";
    eImage.src = menuAllItems.item(0).value;
}

//////////////////////////////////////////////////////////////
//输入:
//  imgOpened: 父菜单打开时的图片文件
//  imgClosed: 父菜单关闭时的图片文件
//  imgMiddle: 非最后一个子菜单的图片文件
//  imgTermin: 最后一个子菜单的图片文件
function MenuStart (imgOpened, imgClosed, imgMiddle, imgTermin)
{
    document.write ("<select id=\"menuAllItems\" style=\"display:none\">");
    document.write ("<option value=\"" + imgOpened + "\"></option>");
    document.write ("<option value=\"" + imgClosed + "\"></option>");
    document.write ("<option value=\"" + imgMiddle + "\"></option>");
    document.write ("<option value=\"" + imgTermin + "\"></option>");
    document.write ("</select>");
    document.write ("<table width=\"119\" height=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" background=\"../pimage/user/default/left_back.gif\">");
}

function MenuEnd ()
{
    document.write ("</table>");
}

function MenuStartParent (mItem, strDisplay, strColor, strFront)
{
    var eItem;
    
    eItem = document.createElement("option");
    menuAllItems.add (eItem);
    eItem.text = "";
    eItem.value = mItem;
    
    document.write ("<tr>");
    document.write ("<td width=\"100%\" height=\"23\"");
    document.write ("style=\"cursor:hand\" background=\"../pimage/user/default/sub_button.gif\" ");
    document.write ("onclick=\"javascript:ExpandMenu (" + mItem + ")\">");
    document.write ("<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">");
    document.write ("<tr>");
    document.write ("<td width=4></td>");
    document.write ("<td width=22 align=\"left\" valign=\"middle\">");
    document.write ("<img id=\"menu" + mItem + "Image\" src=\"" + menuAllItems.item(1).value + "\" border=0 align=\"absMiddle\">");
    document.write ("</td>");
    document.write ("<td align=\"left\" valign=\"middle\" nowrap>");
    document.write ("<font style=\"font-size:10pt\" color=\"" + strFront + "\">");
    document.write (strDisplay);
    document.write ("</font>");
    document.write ("</td>");
    document.write ("<td width=4></td>");
    document.write ("</tr>");
    document.write ("</table>");
    document.write ("</td>");
    document.write ("</tr>");

    document.write ("<tr>");
    document.write ("<td id=\"menu" + mItem + "Show\" width=\"100%\" style=\"display:none\">");
    document.write ("<table width=\"100%\" height=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" background=\"../pimage/user/default/left_back.gif\">");

    document.write ("<tr>");
    document.write ("<td width=\"100%\" valign=\"top\">");
    document.write ("<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"1\">");

}

function MenuEndParent ()
{
    document.write ("</table>");
    document.write ("</td>");
    document.write ("</tr>");

    document.write ("</table>");
    document.write ("</td>");
    document.write ("</tr>");
}

function MenuAppendChild (strName, bLast, strHref, strDisplay)
{
    document.write ("<tr>");
    document.write ("<td width=4>");
    document.write ("</td>");
    document.write ("<td width=26 align=\"left\" valign=\"top\">");
    if (bLast)
        document.write ("<img src=\"" + menuAllItems.item(3).value + "\" border=0>");
    else
        document.write ("<img src=\"" + menuAllItems.item(2).value + "\" border=0>");
    document.write ("</td>");
    document.write ("<td width=\"100%\" align=\"left\" valign=\"top\">");
    document.write ("<a ");
    if (strName != "")
        document.write ("id=\"" + strName + "\" ");
    document.write ("href=\"" + strHref + "\" style=\"text-decoration:none\">");
    document.write ("<font style=\"font-size:10pt\">");
    document.write (strDisplay);
    document.write ("</font>");
    document.write ("</a>");
    document.write ("</td>");
    document.write ("<td width=4>");
    document.write ("</td>");
    document.write ("</tr>");
}
