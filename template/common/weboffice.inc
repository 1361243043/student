
//作用：显示操作状态
function StatusMsg(mString){
  StatusBar.innerText=mString;
}

/*
//作用：载入iWebOffice
function Load(){
  //try{
  webform.WebOffice.WebUrl="<?=$mServerUrl?>";
  webform.WebOffice.RecordID="<?=$mRecordID?>";
  webform.WebOffice.Template="<?=$mTemplate?>";
  webform.WebOffice.FileName="<?=$mFileName?>";
  webform.WebOffice.FileType="<?=$mFileType?>";
  webform.WebOffice.EditType="<?=$mEditType?>";
  webform.WebOffice.UserName="<?=$mUserName?>";
  webform.WebOffice.WebOpen();      //打开该文档
  StatusMsg(webform.WebOffice.Status);
  //}catch(e){}
}
*/

//作用：退出iWebOffice
function UnLoad(){
  try{
  if (!webform.WebOffice.WebClose()){
     StatusMsg(webform.WebOffice.Status);
  }else{
     StatusMsg("关闭文档...");
  }
  }catch(e){}
}

//作用：打开文档
function LoadDocument(){
  StatusMsg("正在打开文档...");
  if (!webform.WebOffice.WebOpen()){
     StatusMsg(webform.WebOffice.Status);
  }else{
     StatusMsg(webform.WebOffice.Status);
  }
}

/*
//作用：保存文档
function SaveDocument(){
  webform.WebOffice.WebSetMsgByName("Subject",webform.Subject.value);   //将信息打包,以便后台能够取出
  webform.WebOffice.WebSetMsgByName("Author",webform.Author.value); //将信息打包,以便后台能够取出
  webform.WebOffice.WebSetMsgByName("FileDate",webform.FileDate.value); //将信息打包,以便后台能够取出
  webform.WebOffice.WebSetMsgByName("HTMLPath",webform.HTMLPath.value); //将信息打包,以便后台能够取出

  if (!webform.WebOffice.WebSave()){
     StatusMsg(webform.WebOffice.Status);
     return false;
  }else{
     StatusMsg(webform.WebOffice.Status);
     return true;
  }
}
*/

//作用：显示或隐藏痕迹  true表示隐藏痕迹  false表示显示痕迹
function ShowRevision(mObject){
  var mFlag=mObject.value;
  if (mFlag=="显示痕迹"){
     mObject.value="隐藏痕迹";
     webform.WebOffice.WebShow(true);
     StatusMsg("显示痕迹...");
  }else{
     mObject.value="显示痕迹";
     webform.WebOffice.WebShow(false);
     StatusMsg("隐藏痕迹...");
  }
}



//作用：刷新文档
function WebReFresh(){
  webform.WebOffice.WebReFresh();
  StatusMsg("文档已刷新...");
}


//作用：设置书签值
function SetBookmarks(vbmName,vbmValue){
  if (!webform.WebOffice.WebSetBookmarks(vbmName,vbmValue)){
     StatusMsg(webform.WebOffice.Status);
  }else{
     StatusMsg(webform.WebOffice.Status);
  }
}

//作用：获取书签值
function GetBookmarks(vbmName){
  var vbmValue;
  vbmValue=webform.WebOffice.WebGetBookmarks(vbmName);
  return vbmValue;
}

//作用：打印文档
function WebOpenPrint(){
  try{
    webform.WebOffice.WebOpenPrint();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}


//作用：页面设置
function WebOpenPageSetup(){
   try{
    if (webform.WebOffice.FileType==".doc"){
    webform.WebOffice.WebObject.Application.Dialogs(178).Show();
    }else{
    webform.WebOffice.WebObject.Application.Dialogs(7).Show;
    }
   }catch(e){

   }
}

//作用：插入图片
function WebOpenPicture(){
  try{
    webform.WebOffice.WebOpenPicture();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}


//作用：存为本地文件
function WebSaveLocal(){
  try{
    webform.WebOffice.WebSaveLocal();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}

//作用：打开本地文件
function WebOpenLocal(){
  try{
    webform.WebOffice.WebOpenLocal();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}

/*
//作用：保存为HTML文档
function WebSaveAsHtml(){
  try{
    if (webform.WebOffice.WebSaveAsHtml())
    {
      webform.HTMLPath.value="HTML/<?=$mRecordID?>.htm";
      window.open("<?=$mHttpUrl?>"+webform.HTMLPath.value);
    }
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}
*/

//作用：关闭或显示工具 参数1表示工具条名称  参数2为false时，表示关闭  （名称均可查找VBA帮助）
//参数2为true时，表示显示
function WebToolsVisible(ToolName,Visible){
  try{
    webform.WebOffice.WebToolsVisible(ToolName,Visible);
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}


//作用：禁止或启用工具 参数1表示工具条名称  参数2表示工具条铵钮的编号  （名称和编号均可查找VBA帮助）
//参数3为false时，表示禁止  参数3为true时，表示启用
function WebToolsEnable(ToolName,ToolIndex,Enable){
  try{
    webform.WebOffice.WebToolsEnable(ToolName,ToolIndex,Enable);
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}

//作用：保护与解除  参数1为true表示保护文档  false表示解除保护
function WebProtect(value){
  try{
    webform.WebOffice.WebSetProtect(value,"");
  }catch(e){}
}


//作用：获取文档Txt正文
function WebGetWordContent(){
  try{
    alert(webform.WebOffice.WebObject.Content.Text);
  }catch(e){}
}

//作用：写Word内容
function WebSetWordContent(){
  var mText=window.prompt("请输入内容:","测试内容");
  if (mText==null){
     return (false);
  }
  else
  {
     //下面为显示选中的文本
     //alert(webform.WebOffice.WebObject.Application.Selection.Range.Text);
     //下面为在当前光标出插入文本
     webform.WebOffice.WebObject.Application.Selection.Range.InsertAfter (mText+"\n");
     //下面为在第一段后插入文本
     //webform.WebOffice.WebObject.Application.ActiveDocument.Range(1).InsertAfter(mText);
  }
}

//作用：用Excel求和
function WebGetExcelContent(){
    webform.WebOffice.WebObject.Application.Sheets(1).Select;
    webform.WebOffice.WebObject.Application.Range("C5").Select;
    webform.WebOffice.WebObject.Application.ActiveCell.FormulaR1C1 = "126";
    webform.WebOffice.WebObject.Application.Range("C6").Select;
    webform.WebOffice.WebObject.Application.ActiveCell.FormulaR1C1 = "446";
    webform.WebOffice.WebObject.Application.Range("C7").Select;
    webform.WebOffice.WebObject.Application.ActiveCell.FormulaR1C1 = "556";
    webform.WebOffice.WebObject.Application.Range("C5:C8").Select;
    webform.WebOffice.WebObject.Application.Range("C8").Activate;
    webform.WebOffice.WebObject.Application.ActiveCell.FormulaR1C1 = "=SUM(R[-3]C:R[-1]C)";
    webform.WebOffice.WebObject.Application.Range("D8").Select;
    alert(webform.WebOffice.WebObject.Application.Range("C8").Text);
}



//作用：VBA套红
function WebInsertVBA(){

    //画线
    var object=webform.WebOffice.WebObject;
    var myl=object.Shapes.AddLine(100,60,305,60)
    myl.Line.ForeColor=255;
    myl.Line.Weight=2;
    var myl1=object.Shapes.AddLine(326,60,520,60)
    myl1.Line.ForeColor=255;
    myl1.Line.Weight=2;

    //object.Shapes.AddLine(200,200,450,200).Line.ForeColor=6;
    var myRange=webform.WebOffice.WebObject.Range(0,0);
    myRange.Select();

    var mtext="★";
    webform.WebOffice.WebObject.Application.Selection.Range.InsertAfter (mtext+"\n");
    var myRange=webform.WebOffice.WebObject.Paragraphs(1).Range;
    myRange.ParagraphFormat.LineSpacingRule =1.5;
    myRange.font.ColorIndex=6;
    myRange.ParagraphFormat.Alignment=1;
    myRange=webform.WebOffice.WebObject.Range(0,0);
    myRange.Select();
    mtext="金格发[２００３]１５４号";
    webform.WebOffice.WebObject.Application.Selection.Range.InsertAfter (mtext+"\n");
    myRange=webform.WebOffice.WebObject.Paragraphs(1).Range;
    myRange.ParagraphFormat.LineSpacingRule =1.5;
    myRange.ParagraphFormat.Alignment=1;
    myRange.font.ColorIndex=1;

    mtext="金格电子政务文件";
    webform.WebOffice.WebObject.Application.Selection.Range.InsertAfter (mtext+"\n");
    myRange=webform.WebOffice.WebObject.Paragraphs(1).Range;
    myRange.ParagraphFormat.LineSpacingRule =1.5;

    //myRange.Select();
    myRange.Font.ColorIndex=6;
    myRange.Font.Name="仿宋_GB2312";
    myRange.font.Bold=true;
    myRange.Font.Size=50;
    myRange.ParagraphFormat.Alignment=1;

    //myRange=myRange=webform.WebOffice.WebObject.Paragraphs(1).Range;
    webform.WebOffice.WebObject.PageSetup.LeftMargin=70;
    webform.WebOffice.WebObject.PageSetup.RightMargin=70;
    webform.WebOffice.WebObject.PageSetup.TopMargin=70;
    webform.WebOffice.WebObject.PageSetup.BottomMargin=70;
}


//作用：获取文档页数
function WebDocumentPageCount(){
    var intPageTotal;
    intPageTotal = webform.WebOffice.WebObject.Application.ActiveDocument.BuiltInDocumentProperties(14);
    alert("文档页总数："+intPageTotal);
}

//作用：签名印章
function WebOpenSignature(){
  try{
    webform.WebOffice.WebOpenSignature();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}

//作用：验证印章A
function WebShowSignature(){
  try{
    webform.WebOffice.WebShowSignature();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}

//作用：标签管理
function WebOpenBookMarks(){
  try{
    webform.WebOffice.WebOpenBookmarks();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}

//作用：填充模板
function LoadBookmarks(){
  StatusMsg("正在填充模扳...");
  if (!webform.WebOffice.WebLoadBookmarks()){
     StatusMsg(webform.WebOffice.Status);
  }else{
     StatusMsg(webform.WebOffice.Status);
  }
}

//作用：保存版本
function WebSaveVersion(){
  webform.WebOffice.WebSaveVersion();
  StatusMsg(webform.WebOffice.Status);

}

//作用：打开版本
function WebOpenVersion(){
  webform.WebOffice.WebOpenVersion();
  StatusMsg(webform.WebOffice.Status);
}


//作用：套用模版定稿
function WebInsertFile(){
  SaveDocument();
  webform.WebOffice.WebSetMsgByName("COMMAND","INSERTFILE");
  webform.WebOffice.Template="模板一.doc";
  if (webform.WebOffice.WebLoadTemplate()){
     if (webform.WebOffice.WebInsertFile()){
       alert("成功");
     }else{
       StatusMsg(webform.WebOffice.Status);
     }
  }else{
     StatusMsg(webform.WebOffice.Status);
  }
}

//作用：保存定稿文件
function WebUpdateFile(){
  if (webform.WebOffice.WebUpdateFile()){
     StatusMsg(webform.WebOffice.Status);
  }else{
     StatusMsg(webform.WebOffice.Status);
  }
}

//作用：导入Text
function WebInportText(){
    var mText;
    webform.WebOffice.WebSetMsgByName("COMMAND","INPORTTEXT");
    if (webform.WebOffice.WebSendMessage()){
      mText=webform.WebOffice.WebGetMsgByName("CONTENT");
      webform.WebOffice.WebObject.Application.Selection.Range.InsertAfter(mText);
      alert("导入文本成功");
    }
    StatusMsg(webform.WebOffice.Status);
}


//作用：导出Text
function WebExportText(){
    var mText=webform.WebOffice.WebObject.Content.Text;
    webform.WebOffice.WebSetMsgByName("COMMAND","EXPORTTEXT");
    webform.WebOffice.WebSetMsgByName("CONTENT",mText);
    if (webform.WebOffice.WebSendMessage()){
      alert("导出文本成功");
    }
    StatusMsg(webform.WebOffice.Status);
}

//作用：插入远程图片
function WebInsertImage(){
  try{
    webform.WebOffice.WebInsertImage('','GoldgridLogo.jpg',true,4);   //参数1表示标签名称  参数2表示图片文件名  参数3为true透明  false表示不透明  参数4为4表示浮于文字上方  5表示衬于文字下方
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}