var TANGER_OCX_bDocOpen = false;
var TANGER_OCX_filename;
var TANGER_OCX_actionURL; //For auto generate form fiields
var TANGER_OCX_OBJ; //The Control
var TANGER_OCX_State = "";
var TANGER_OCX_ReadOnly = false;

//以下为V1.7新增函数示例

//从本地增加图片到文档指定位置
function AddPictureFromLocal()
{
    if(TANGER_OCX_bDocOpen)
    {
        TANGER_OCX_OBJ.AddPicFromLocal(
        "", //路径
        true,//是否提示选择文件
        true,//是否浮动图片
        100,//如果是浮动图片，相对于左边的Left 单位磅
        100); //如果是浮动图片，相对于当前段落Top
    };
}

//从URL增加图片到文档指定位置
function AddPictureFromURL(URL)
{
    if(TANGER_OCX_bDocOpen)
    {
        TANGER_OCX_OBJ.AddPicFromURL(
        URL,//URL 注意；URL必须返回Word支持的图片类型。
        true,//是否浮动图片
        150,//如果是浮动图片，相对于左边的Left 单位磅
        150);//如果是浮动图片，相对于当前段落Top
    };
}

//从本地增加印章文档指定位置
function AddSignFromLocal(strUser)
{

   if(TANGER_OCX_bDocOpen)
   {
        TANGER_OCX_OBJ.AddSignFromLocal(
        strUser,//当前登陆用户
        "",//缺省文件
        true,//提示选择
        0,//left
        0//top
/*
        TANGER_OCX_key,
        1,//光标位置
        100, //缩放
        1 //图片位于文件上方
*/
        );
   }
}

//从URL增加印章文档指定位置
function AddSignFromURL(strUser,URL)
{
    if(TANGER_OCX_bDocOpen)
    {
        TANGER_OCX_OBJ.AddSignFromURL(
        strUser,//当前登陆用户
        URL,//URL
        -50,//left
        -50,  //top
        "",
        1,//光标位置
        100, //缩放
        1 //图片位于文件上方
        );
    }
}

//开始手写签名
function DoHandSign(strUser)
{
    if(TANGER_OCX_bDocOpen)
    {
        TANGER_OCX_OBJ.DoHandSign(
        strUser,//当前登陆用户 必须
        0,//笔型0－实线 0－4 //可选参数
        0x000000ff, //颜色 0x00RRGGBB//可选参数
        2,//笔宽//可选参数
        -50,//left//可选参数
        -40); //top//可选参数
/*
        OCX_OBJ. DoHandSign2 (
            strUser,//当前登陆用户 必须
            "", //SignKey
            -200,//left//可选参数
            -100,//top
            1,//relative=0，表示按照屏幕位置批注
            100 //缩放100%，表示原大小
        );
*/
    }
}

//全屏手写签名或者批注
function DoHandSign2(strUser)
{
    if(TANGER_OCX_bDocOpen)
    {
        TANGER_OCX_OBJ.DoHandSign2
        (
            strUser,//当前登陆用户 必须
            "", //SignKey
            0,//left//可选参数
            0,//top
            0,//relative=0，表示按照屏幕位置批注
            100 //缩放100%，表示原大小
        );
    }
}

//开始手工绘图，可用于手工批示
function DoHandDraw()
{
    if(TANGER_OCX_bDocOpen)
    {
        TANGER_OCX_OBJ.DoHandDraw(
        0,//笔型0－实线 0－4 //可选参数
        0x00ff0000,//颜色 0x00RRGGBB//可选参数
        3,//笔宽//可选参数
        200,//left//可选参数
        50);//top//可选参数
    }
}
//检查签名结果
function DoCheckSign()
{
    if(TANGER_OCX_bDocOpen)
    {
    var ret = TANGER_OCX_OBJ.DoCheckSign
    (
    /*可选参数 IsSilent 缺省为FAlSE，表示弹出验证对话框,否则，只是返回验证结果到返回值*/
    );//返回值，验证结果字符串
    //alert(ret);
    }
}
//此函数用来加入一个自定义的文件头部
function TANGER_OCX_AddDocHeader( strHeader )
{
    var i,cNum = 30;
    var lineStr = "";
    try
    {
        for(i=0;i<cNum;i++) lineStr += "_";  //生成下划线
        with(TANGER_OCX_OBJ.ActiveDocument.Application)
        {
            Selection.HomeKey(6,0); // go home
            Selection.TypeText(strHeader);
            Selection.TypeParagraph();     //换行
            Selection.TypeText(lineStr);  //插入下划线
            // Selection.InsertSymbol(95,"",true); //插入下划线
            Selection.TypeText("★");
            Selection.TypeText(lineStr);  //插入下划线
            Selection.TypeParagraph();
            //Selection.MoveUp(5, 2, 1); //上移两行，且按住Shift键，相当于选择两行
            Selection.HomeKey(6,1);  //选择到文件头部所有文本
            Selection.ParagraphFormat.Alignment = 1; //居中对齐
            with(Selection.Font)
            {
                NameFarEast = "宋体";
                Name = "宋体";
                Size = 12;
                Bold = false;
                Italic = false;
                Underline = 0;
                UnderlineColor = 0;
                StrikeThrough = false;
                DoubleStrikeThrough = false;
                Outline = false;
                Emboss = false;
                Shadow = false;
                Hidden = false;
                SmallCaps = false;
                AllCaps = false;
                Color = 255;
                Engrave = false;
                Superscript = false;
                Subscript = false;
                Spacing = 0;
                Scaling = 100;
                Position = 0;
                Kerning = 0;
                Animation = 0;
                DisableCharacterSpaceGrid = false;
                EmphasisMark = 0;
            }
            Selection.MoveDown(5, 3, 0); //下移3行
        }
    }
    catch(err){
        //alert("错误：" + err.number + ":" + err.description);
    }
    finally{
    }
}
function strtrim(value)
{
    return value.replace(/^\s+/,'').replace(/\s+$/,'');
}

function TANGER_OCX_doFormOnSubmit()
{
    var form = document.forms[0];
    if (form.onsubmit)
    {
        var retVal = form.onsubmit();
         if (typeof retVal == "boolean" && retVal == false)
           return false;
    }
    return true;
}

//切换显示修订工具栏和工具菜单（保护修订）
function TANGER_OCX_EnableReviewBar(boolvalue)
{
    if(!TANGER_OCX_bDocOpen)
    {
        return;
    }
    TANGER_OCX_OBJ.ActiveDocument.CommandBars("Reviewing").Enabled = boolvalue;
    TANGER_OCX_OBJ.ActiveDocument.CommandBars("Track Changes").Enabled = boolvalue;
    TANGER_OCX_OBJ.IsShowToolMenu = boolvalue;    //关闭工具菜单
}

//切换打开或者关闭修订模式
function TANGER_OCX_SetReviewMode(boolvalue)
{
    if(!TANGER_OCX_bDocOpen)
    {
        return;
    }
        TANGER_OCX_OBJ.ActiveDocument.TrackRevisions = boolvalue;
}

//拒绝所有修订
function TANGER_OCX_RejectAllRevisions()
{
    TANGER_OCX_OBJ.ActiveDocument. RejectAllRevisions ();
}

//进入或退出痕迹保留状态，调用上面的两个函数
function TANGER_OCX_SetMarkModify(boolvalue)
{
    TANGER_OCX_SetReviewMode(boolvalue);
    TANGER_OCX_EnableReviewBar(!boolvalue);
}

//显示/不显示修订文字
function TANGER_OCX_ShowRevisions(boolvalue)
{
    if(TANGER_OCX_OBJ.DocType==1)
    {
        if (TANGER_OCX_ReadOnly)
        {
            TANGER_OCX_SetReadOnly(false);
            TANGER_OCX_OBJ.ActiveDocument.ShowRevisions = boolvalue;
            TANGER_OCX_SetReadOnly(true);
        }
        else
            TANGER_OCX_OBJ.ActiveDocument.ShowRevisions = boolvalue;
    }
}

//打印/不打印修订文字
function TANGER_OCX_PrintRevisions(boolvalue)
{
        TANGER_OCX_OBJ.ActiveDocument.PrintRevisions = boolvalue;
}

//设置页面布局
function TANGER_OCX_ChgLayout()
{
    try
    {
        TANGER_OCX_OBJ.showdialog(5); //设置页面布局
    }
    catch(err){
        alert("错误：" + err.number + ":" + err.description);
    }
    finally{
    }
}

//打印文档
function TANGER_OCX_PrintDoc()
{
    try
    {
        TANGER_OCX_OBJ.printout(true);
    }
    catch(err){
        alert("错误：" + err.number + ":" + err.description);
    }
    finally{
    }
}

//设置用户名
function TANGER_OCX_SetDocUser(cuser)
{
    with(TANGER_OCX_OBJ.ActiveDocument.Application)
    {
        UserName = cuser;
        TANGER_OCX_Username = cuser;
    }
}

function TANGER_OCX_SaveEditToServer(strState)
{
    if(!TANGER_OCX_bDocOpen)
    {
        alert("没有打开的文档。");
        return;
    }
    TANGER_OCX_SaveDoc(strState);
}

function TANGER_OCX_FormPara(paraObj)
{
    try
    {
        var fmElements = document.forms[0].elements;
        var i,j,elObj,optionItem;
        for (i=0;i< fmElements.length;i++ )
        {
            elObj = fmElements[i];
            switch(elObj.type)
            {
                case "file":
                    paraObj.FFN = elObj.name;
                    break;
                case "reset":
                    break;
                case "radio":
                case "checkbox":
                    if (elObj.checked)
                    {
                        paraObj.PARA += ( elObj.name+"="+escape(elObj.value)+"&");
                    }
                    break;
                case "select-multiple":
                    for(j=0;j<elObj.options.length;j++)
                    {
                        optionItem = elObj.options[j];
                        if (optionItem.selected)
                        {
                            paraObj.PARA += ( elObj.name+"="+escape(optionItem.value)+"&");
                        }
                    }
                    break;
                default: // text,Areatext,selecte-one,password,submit,etc.
                    if(elObj.name)
                    {
                        paraObj.PARA += ( elObj.name+"="+escape(elObj.value)+"&");
                    }
                    break;
            }
        }
    }
    catch(err)
    {
        //alert("错误：" + err.number + ":" + err.description);
    };
}


function TANGER_OCX_EnableFileNewMenu(boolvalue)
{
    TANGER_OCX_OBJ.EnableFileCommand(0) = boolvalue;
}

function TANGER_OCX_EnableFileOpenMenu(boolvalue)
{
    TANGER_OCX_OBJ.EnableFileCommand(1) = boolvalue;
}

function TANGER_OCX_EnableFileExitMenu(boolvalue)
{
    TANGER_OCX_OBJ.EnableFileCommand(2) = boolvalue;
}

function TANGER_OCX_EnableFileSaveMenu(boolvalue)
{
    TANGER_OCX_OBJ.EnableFileCommand(3) = boolvalue;
}

function TANGER_OCX_EnableFileSaveAsMenu(boolvalue)
{
    TANGER_OCX_OBJ.EnableFileCommand(4) = boolvalue;
}

//允许或禁止文件－>打印菜单
function TANGER_OCX_EnableFilePrintMenu(boolvalue)
{
    TANGER_OCX_OBJ.EnableFileCommand(5) = boolvalue;
}
//允许或禁止文件－>打印预览菜单
function TANGER_OCX_EnableFilePrintPreviewMenu(boolvalue)
{
    TANGER_OCX_OBJ.EnableFileCommand(6) = boolvalue;
}
//允许或禁止文件－>打印设置菜单
function TANGER_OCX_EnableFilePageSetup(boolvalue)
{
    TANGER_OCX_OBJ.EnableFileCommand(7) = boolvalue;
}


function TANGER_OCX_SetInfo()
{
    TANGER_OCX_OBJ = document.all.item("TANGER_OCX");
    /*
    TANGER_OCX_EnableFileNewMenu(false);
    TANGER_OCX_EnableFileOpenMenu(false);
    TANGER_OCX_EnableFileSaveMenu(false);
    TANGER_OCX_EnableFileSaveAsMenu(false);
    */
    try
    {
        TANGER_OCX_actionURL = document.forms[0].action;
        TANGER_OCX_filename = "";
        TANGER_OCX_OBJ.CreateNew("Word.Document");
        //TANGER_OCX_OBJ.focus();
    }
    catch(err){
        alert("错误：" + err.number + ":" + err.description);
    }
    finally{
    }
}

//设置文档为只读
function TANGER_OCX_SetReadOnly(boolvalue)
{
    var appName,i;
    TANGER_OCX_ReadOnly = boolvalue;
    try
    {
        if (boolvalue) TANGER_OCX_OBJ.IsShowToolMenu = false;
        with(TANGER_OCX_OBJ.ActiveDocument)
        {
            appName = new String(Application.Name);
            if( (appName.toUpperCase()).indexOf("WORD") > -1 ) //Word
            {
                if (ProtectionType != -1 &&  !boolvalue)
                {
                    Unprotect();
                }
                if (ProtectionType == -1 &&  boolvalue)
                {
                    Protect(2,true,"");
                }
            }
            else if ( (appName.toUpperCase()).indexOf("EXCEL") > -1 ) //EXCEL
            {
                for(i=1;i<=Application.Sheets.Count;i++)
                {
                    if(boolvalue)
                    {
                        Application.Sheets(i).Protect("",true,true,true);
                    }
                    else
                    {
                        Application.Sheets(i).Unprotect("");
                    }
                }
                if(boolvalue)
                {
                    Application.ActiveWorkbook.Protect("",true);
                }
                else
                {
                    Application.ActiveWorkbook.Unprotect("");
                }
            }
            else
            {
            }
        }
    }
    catch(err){
        //alert("错误：" + err.number + ":" + err.description);
    }
    finally{
    }
}

function TANGER_OCX_OpenDoc(opcode,fileName,strState)
{
    TANGER_OCX_State = strState;
    TANGER_OCX_actionURL = document.forms[0].action;
    TANGER_OCX_OBJ = document.all.item("TANGER_OCX");
    //alert("readdoc.jsp?docid=" + docid);
//alert ("zzz");
    TANGER_OCX_OBJ.IsDirectConnect = true;

    if(opcode == 1)//edit
    {
        try
        {
            TANGER_OCX_OBJ.OpenFromURL(fileName);
        }
        catch (e)
        {
            alert("error:"+e.number + ":" + e.description);
        };
    }
    else
    {
        TANGER_OCX_OBJ.CreateNew("Word.Document");
    }
    //TANGER_OCX_OBJ.focus();

    if (strState == "view")
        TANGER_OCX_SetReadOnly(true);
    else
        TANGER_OCX_SetReadOnly(false);
    TANGER_OCX_ShowRevisions(false);
}

function TANGER_OCX_OnDocumentOpened(str, obj)
{
    TANGER_OCX_bDocOpen = true;
    if (TANGER_OCX_State != "Create")
    {
        TANGER_OCX_EnableFileNewMenu (false);
        TANGER_OCX_EnableFileExitMenu (false);
        TANGER_OCX_EnableFileOpenMenu (false);
        TANGER_OCX_EnableFileSaveMenu (false);
        TANGER_OCX_EnableFileSaveAsMenu (false);
        TANGER_OCX_EnableFilePrintMenu (false);
        TANGER_OCX_EnableFilePrintPreviewMenu (false);
        TANGER_OCX_EnableFilePageSetup (false);
    };
}

function TANGER_OCX_OnDocumentClosed()
{
   TANGER_OCX_bDocOpen = false;
}

function TANGER_OCX_SaveDoc(strState)
{
    var retStr=new String;
    var newwin,newdoc;
    var paraObj = new Object();
    paraObj.PARA="";
    paraObj.FFN ="";

    if(!TANGER_OCX_bDocOpen)
    {
        alert("没有打开的文档。");
        return;
    }

    try
    {
         if(!TANGER_OCX_doFormOnSubmit())return;
        TANGER_OCX_FormPara(paraObj);
        if(!paraObj.FFN)
        {
            alert("参数错误：控件的第二个参数没有指定。");
            return;
        }

        //如果是wps，需要加上这条
        //TANGER_OCX_EnableFileSaveAsMenu (true);

        retStr =TANGER_OCX_OBJ.SaveToURL(TANGER_OCX_actionURL,"FILE1","","newdoc.doc",0);

        if (strState == "new")
        {
            if (retStr != "")
            {
                alert ("保存申请成功！");
                document.formAct.exaid.value = retStr;
                document.formAct.savestate.value = "modi";
            }
            else
                alert ("保存申请失败！");
        }
        else
        {
            if (retStr != "")
                alert (retStr);
            else
            {
                if (strState == "send")
                {
                    alert ("发送申请成功！");
                    //this.location= "create_list.php";
                    parent.window.close ();
                };
                if (strState == "netsend")
                {
                    alert ("发送成功！");
                    parent.window.close ();
                };
                if (strState == "modi")
                {
                    reVal = new Array(1);
                    reVal[0] = true;
                    parent.window.returnValue = reVal;
                    parent.window.close ();
                };
                if (strState == "save")
                {
                    alert ("保存申请成功！");
                };
            };
        };
    }
    catch(err){
        alert("不能保存到URL：" + err.number + ":" + err.description);
    }
    finally{
    }
}

function TANGER_OCX_DoPaiBan(URL)
{
    try{
        //选择对象当前文档的所有内容
        var curSel = TANGER_OCX_OBJ.ActiveDocument.Application.Selection;
        TANGER_OCX_SetMarkModify(false);
        curSel.WholeStory();
        curSel.Cut();

        //插入模板
        TANGER_OCX_OBJ.AddTemplateFromURL(URL);

        var BookMarkName = "zhengwen";

        var bkmkObj = TANGER_OCX_OBJ.ActiveDocument.BookMarks(BookMarkName);
        if(!bkmkObj)
        {
            alert("Word 模板中不存在名称为：\""+BookMarkName+"\"的书签！");
        }
        var saverange = bkmkObj.Range
        saverange.Paste();
        TANGER_OCX_OBJ.ActiveDocument.Bookmarks.Add(BookMarkName,saverange);
        TANGER_OCX_SetMarkModify(true);
    }
    catch(err)
    {
        //alert("错误：" + err.number + ":" + err.description);
    };

}

//将html form的域值拷贝到Word文档的标签中
function CopyTextToBookMark(inputname,BookMarkName)
{
    try
    {
        var inputValue="";
        var j,elObj,optionItem;
        var elObj = document.forms[0].elements(inputname);
        if (!elObj)
        {
            alert("HTML的FORM中没有此输入域："+ inputname);
            return;
        }
        switch(elObj.type)
        {
                case "select-one":
                    inputValue = elObj.options[elObj.selectedIndex].text;
                    break;
                case "select-multiple":
                    var isFirst = true;
                    for(j=0;j<elObj.options.length;j++)
                    {
                        optionItem = elObj.options[j];
                        if (optionItem.selected)
                        {
                            if(isFirst)
                            {
                                inputValue = optionItem.text;
                                isFirst = false;
                            }
                            else
                            {
                                inputValue += "  " + optionItem.text;
                            }
                        }
                    }

                    break;
                default: // text,Areatext,selecte-one,password,submit,etc.
                    inputValue = elObj.value;
                    break;
        }
        //do copy
        //DEBUG
//        alert(inputname+"="+inputValue+" Bookmarkname="+BookMarkName);
        var bkmkObj = TANGER_OCX_OBJ.ActiveDocument.BookMarks(BookMarkName);
        if(!bkmkObj)
        {
            alert("Word 模板中不存在名称为：\""+BookMarkName+"\"的书签！");
        }
        var saverange = bkmkObj.Range
        saverange.Text = inputValue;
        TANGER_OCX_OBJ.ActiveDocument.Bookmarks.Add(BookMarkName,saverange);
    }
    catch(err)
    {
//        alert("错误：" + err.number + ":" + err.description);
    }
    finally{
    }
}