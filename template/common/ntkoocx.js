var TANGER_OCX_bDocOpen = false;
var TANGER_OCX_filename;
var TANGER_OCX_actionURL; //For auto generate form fiields
var TANGER_OCX_OBJ; //The Control
var TANGER_OCX_State = "";
var TANGER_OCX_ReadOnly = false;

//����ΪV1.7��������ʾ��

//�ӱ�������ͼƬ���ĵ�ָ��λ��
function AddPictureFromLocal()
{
    if(TANGER_OCX_bDocOpen)
    {
        TANGER_OCX_OBJ.AddPicFromLocal(
        "", //·��
        true,//�Ƿ���ʾѡ���ļ�
        true,//�Ƿ񸡶�ͼƬ
        100,//����Ǹ���ͼƬ���������ߵ�Left ��λ��
        100); //����Ǹ���ͼƬ������ڵ�ǰ����Top
    };
}

//��URL����ͼƬ���ĵ�ָ��λ��
function AddPictureFromURL(URL)
{
    if(TANGER_OCX_bDocOpen)
    {
        TANGER_OCX_OBJ.AddPicFromURL(
        URL,//URL ע�⣻URL���뷵��Word֧�ֵ�ͼƬ���͡�
        true,//�Ƿ񸡶�ͼƬ
        150,//����Ǹ���ͼƬ���������ߵ�Left ��λ��
        150);//����Ǹ���ͼƬ������ڵ�ǰ����Top
    };
}

//�ӱ�������ӡ���ĵ�ָ��λ��
function AddSignFromLocal(strUser)
{

   if(TANGER_OCX_bDocOpen)
   {
        TANGER_OCX_OBJ.AddSignFromLocal(
        strUser,//��ǰ��½�û�
        "",//ȱʡ�ļ�
        true,//��ʾѡ��
        0,//left
        0//top
/*
        TANGER_OCX_key,
        1,//���λ��
        100, //����
        1 //ͼƬλ���ļ��Ϸ�
*/
        );
   }
}

//��URL����ӡ���ĵ�ָ��λ��
function AddSignFromURL(strUser,URL)
{
    if(TANGER_OCX_bDocOpen)
    {
        TANGER_OCX_OBJ.AddSignFromURL(
        strUser,//��ǰ��½�û�
        URL,//URL
        -50,//left
        -50,  //top
        "",
        1,//���λ��
        100, //����
        1 //ͼƬλ���ļ��Ϸ�
        );
    }
}

//��ʼ��дǩ��
function DoHandSign(strUser)
{
    if(TANGER_OCX_bDocOpen)
    {
        TANGER_OCX_OBJ.DoHandSign(
        strUser,//��ǰ��½�û� ����
        0,//����0��ʵ�� 0��4 //��ѡ����
        0x000000ff, //��ɫ 0x00RRGGBB//��ѡ����
        2,//�ʿ�//��ѡ����
        -50,//left//��ѡ����
        -40); //top//��ѡ����
/*
        OCX_OBJ. DoHandSign2 (
            strUser,//��ǰ��½�û� ����
            "", //SignKey
            -200,//left//��ѡ����
            -100,//top
            1,//relative=0����ʾ������Ļλ����ע
            100 //����100%����ʾԭ��С
        );
*/
    }
}

//ȫ����дǩ��������ע
function DoHandSign2(strUser)
{
    if(TANGER_OCX_bDocOpen)
    {
        TANGER_OCX_OBJ.DoHandSign2
        (
            strUser,//��ǰ��½�û� ����
            "", //SignKey
            0,//left//��ѡ����
            0,//top
            0,//relative=0����ʾ������Ļλ����ע
            100 //����100%����ʾԭ��С
        );
    }
}

//��ʼ�ֹ���ͼ���������ֹ���ʾ
function DoHandDraw()
{
    if(TANGER_OCX_bDocOpen)
    {
        TANGER_OCX_OBJ.DoHandDraw(
        0,//����0��ʵ�� 0��4 //��ѡ����
        0x00ff0000,//��ɫ 0x00RRGGBB//��ѡ����
        3,//�ʿ�//��ѡ����
        200,//left//��ѡ����
        50);//top//��ѡ����
    }
}
//���ǩ�����
function DoCheckSign()
{
    if(TANGER_OCX_bDocOpen)
    {
    var ret = TANGER_OCX_OBJ.DoCheckSign
    (
    /*��ѡ���� IsSilent ȱʡΪFAlSE����ʾ������֤�Ի���,����ֻ�Ƿ�����֤���������ֵ*/
    );//����ֵ����֤����ַ���
    //alert(ret);
    }
}
//�˺�����������һ���Զ�����ļ�ͷ��
function TANGER_OCX_AddDocHeader( strHeader )
{
    var i,cNum = 30;
    var lineStr = "";
    try
    {
        for(i=0;i<cNum;i++) lineStr += "_";  //�����»���
        with(TANGER_OCX_OBJ.ActiveDocument.Application)
        {
            Selection.HomeKey(6,0); // go home
            Selection.TypeText(strHeader);
            Selection.TypeParagraph();     //����
            Selection.TypeText(lineStr);  //�����»���
            // Selection.InsertSymbol(95,"",true); //�����»���
            Selection.TypeText("��");
            Selection.TypeText(lineStr);  //�����»���
            Selection.TypeParagraph();
            //Selection.MoveUp(5, 2, 1); //�������У��Ұ�סShift�����൱��ѡ������
            Selection.HomeKey(6,1);  //ѡ���ļ�ͷ�������ı�
            Selection.ParagraphFormat.Alignment = 1; //���ж���
            with(Selection.Font)
            {
                NameFarEast = "����";
                Name = "����";
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
            Selection.MoveDown(5, 3, 0); //����3��
        }
    }
    catch(err){
        //alert("����" + err.number + ":" + err.description);
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

//�л���ʾ�޶��������͹��߲˵��������޶���
function TANGER_OCX_EnableReviewBar(boolvalue)
{
    if(!TANGER_OCX_bDocOpen)
    {
        return;
    }
    TANGER_OCX_OBJ.ActiveDocument.CommandBars("Reviewing").Enabled = boolvalue;
    TANGER_OCX_OBJ.ActiveDocument.CommandBars("Track Changes").Enabled = boolvalue;
    TANGER_OCX_OBJ.IsShowToolMenu = boolvalue;    //�رչ��߲˵�
}

//�л��򿪻��߹ر��޶�ģʽ
function TANGER_OCX_SetReviewMode(boolvalue)
{
    if(!TANGER_OCX_bDocOpen)
    {
        return;
    }
        TANGER_OCX_OBJ.ActiveDocument.TrackRevisions = boolvalue;
}

//�ܾ������޶�
function TANGER_OCX_RejectAllRevisions()
{
    TANGER_OCX_OBJ.ActiveDocument. RejectAllRevisions ();
}

//������˳��ۼ�����״̬�������������������
function TANGER_OCX_SetMarkModify(boolvalue)
{
    TANGER_OCX_SetReviewMode(boolvalue);
    TANGER_OCX_EnableReviewBar(!boolvalue);
}

//��ʾ/����ʾ�޶�����
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

//��ӡ/����ӡ�޶�����
function TANGER_OCX_PrintRevisions(boolvalue)
{
        TANGER_OCX_OBJ.ActiveDocument.PrintRevisions = boolvalue;
}

//����ҳ�沼��
function TANGER_OCX_ChgLayout()
{
    try
    {
        TANGER_OCX_OBJ.showdialog(5); //����ҳ�沼��
    }
    catch(err){
        alert("����" + err.number + ":" + err.description);
    }
    finally{
    }
}

//��ӡ�ĵ�
function TANGER_OCX_PrintDoc()
{
    try
    {
        TANGER_OCX_OBJ.printout(true);
    }
    catch(err){
        alert("����" + err.number + ":" + err.description);
    }
    finally{
    }
}

//�����û���
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
        alert("û�д򿪵��ĵ���");
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
        //alert("����" + err.number + ":" + err.description);
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

//������ֹ�ļ���>��ӡ�˵�
function TANGER_OCX_EnableFilePrintMenu(boolvalue)
{
    TANGER_OCX_OBJ.EnableFileCommand(5) = boolvalue;
}
//������ֹ�ļ���>��ӡԤ���˵�
function TANGER_OCX_EnableFilePrintPreviewMenu(boolvalue)
{
    TANGER_OCX_OBJ.EnableFileCommand(6) = boolvalue;
}
//������ֹ�ļ���>��ӡ���ò˵�
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
        alert("����" + err.number + ":" + err.description);
    }
    finally{
    }
}

//�����ĵ�Ϊֻ��
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
        //alert("����" + err.number + ":" + err.description);
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
        alert("û�д򿪵��ĵ���");
        return;
    }

    try
    {
         if(!TANGER_OCX_doFormOnSubmit())return;
        TANGER_OCX_FormPara(paraObj);
        if(!paraObj.FFN)
        {
            alert("�������󣺿ؼ��ĵڶ�������û��ָ����");
            return;
        }

        //�����wps����Ҫ��������
        //TANGER_OCX_EnableFileSaveAsMenu (true);

        retStr =TANGER_OCX_OBJ.SaveToURL(TANGER_OCX_actionURL,"FILE1","","newdoc.doc",0);

        if (strState == "new")
        {
            if (retStr != "")
            {
                alert ("��������ɹ���");
                document.formAct.exaid.value = retStr;
                document.formAct.savestate.value = "modi";
            }
            else
                alert ("��������ʧ�ܣ�");
        }
        else
        {
            if (retStr != "")
                alert (retStr);
            else
            {
                if (strState == "send")
                {
                    alert ("��������ɹ���");
                    //this.location= "create_list.php";
                    parent.window.close ();
                };
                if (strState == "netsend")
                {
                    alert ("���ͳɹ���");
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
                    alert ("��������ɹ���");
                };
            };
        };
    }
    catch(err){
        alert("���ܱ��浽URL��" + err.number + ":" + err.description);
    }
    finally{
    }
}

function TANGER_OCX_DoPaiBan(URL)
{
    try{
        //ѡ�����ǰ�ĵ�����������
        var curSel = TANGER_OCX_OBJ.ActiveDocument.Application.Selection;
        TANGER_OCX_SetMarkModify(false);
        curSel.WholeStory();
        curSel.Cut();

        //����ģ��
        TANGER_OCX_OBJ.AddTemplateFromURL(URL);

        var BookMarkName = "zhengwen";

        var bkmkObj = TANGER_OCX_OBJ.ActiveDocument.BookMarks(BookMarkName);
        if(!bkmkObj)
        {
            alert("Word ģ���в���������Ϊ��\""+BookMarkName+"\"����ǩ��");
        }
        var saverange = bkmkObj.Range
        saverange.Paste();
        TANGER_OCX_OBJ.ActiveDocument.Bookmarks.Add(BookMarkName,saverange);
        TANGER_OCX_SetMarkModify(true);
    }
    catch(err)
    {
        //alert("����" + err.number + ":" + err.description);
    };

}

//��html form����ֵ������Word�ĵ��ı�ǩ��
function CopyTextToBookMark(inputname,BookMarkName)
{
    try
    {
        var inputValue="";
        var j,elObj,optionItem;
        var elObj = document.forms[0].elements(inputname);
        if (!elObj)
        {
            alert("HTML��FORM��û�д�������"+ inputname);
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
            alert("Word ģ���в���������Ϊ��\""+BookMarkName+"\"����ǩ��");
        }
        var saverange = bkmkObj.Range
        saverange.Text = inputValue;
        TANGER_OCX_OBJ.ActiveDocument.Bookmarks.Add(BookMarkName,saverange);
    }
    catch(err)
    {
//        alert("����" + err.number + ":" + err.description);
    }
    finally{
    }
}