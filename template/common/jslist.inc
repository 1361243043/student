NS4 = (document.layers) ? 1 : 0;
IE4 = (document.all) ? 1 : 0;
ver4 = (NS4 || IE4) ? 1 : 0;

if (ver4)
{
    with (document)
    {
        write("<STYLE TYPE='text/css'>");
        if (NS4)
        {
            write(".parent {position:absolute; visibility:visible}");
            write(".child {position:absolute; visibility:visible}");
            write(".regular {position:absolute; visibility:visible}")
        }
        else
        {
            write(".child {display:none}")
        }

        write("</STYLE>");
    }
}

function ArrangeMenu ()
{
    nextY = document.layers[firstInd].pageY + document.layers[firstInd].document.height;
    for (i = firstInd + 1; i < document.layers.length; i ++)
    {
        whichEl = document.layers[i];
        if (whichEl.visibility != "hide")
        {
            whichEl.pageY = nextY;
            nextY += whichEl.document.height;
        }
    }
}

function InitMenu ()
{
    if (!ver4)
        return;

    if (NS4)
    {
        for (i = 0; i < document.layers.length; i++)
        {
            whichEl = document.layers[i];
            if (whichEl.id.indexOf ("Child") != -1)
                whichEl.visibility = "hide";
        }

        ArrangeMenu ();
    }
    else
    {
        divColl = document.all.tags("DIV");
        for (i = 0; i < divColl.length; i++)
        {
            whichEl = divColl (i);
            if (whichEl.className == "child")
                whichEl.style.display = "none";
        }
    }
}

function ExpandMenu (strMain)
{
    if (!ver4)
        return;

    if (IE4)
    {
        whichSubMenu = eval (strMain + "Child");
        whichSubTitle = eval (strMain + "Title");

        divWhich = document.all.tags ("DIV");
        for (i = 0; i < divWhich.length; i++)
        {
            whichItem = divWhich (i);
            if (whichItem.className == "child")
            {
                if (whichItem != whichSubMenu)
                {
                    whichItem.style.display = "none";
                    whichItem = eval (whichItem.id.substring (0, whichItem.id.length - 5) + "Title");
                    whichItem.style.color = 0x666666;
                };
            };
        };

        if (whichSubMenu.style.display == "none")
        {
            whichSubMenu.style.display = "block";
            whichSubTitle.style.color = 0x0E0789;
        };
    }
    else
    {
        whichSubMenu = eval ("document." + strMain + "Child");
        whichSubTitle = eval ("document." + strMain + "Title");

        for (i = 0; i < document.layers.length; i++)
        {
            whichItem = document.layers[i];

            if (whichItem.id.indexOf ("Child") != -1)
            {
                if (whichItem != whichSubMenu)
                {
                    whichItem.visibility = "hide";
                    whichItem = eval (whichItem.id.substring (0, whichItem.id.length - 5) + "Title");
                    whichItem.style.color = 0x666666;
                };
            };
        }

        if (whichSubMenu.visibility == "hide")
        {
            whichSubMenu.visibility = "show";
            whichSubTitle.style.color = 0x0E0789;
        };

        ArrangeMenu ();
    }
}