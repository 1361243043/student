
//���ã���ʾ����״̬
function StatusMsg(mString){
  StatusBar.innerText=mString;
}

/*
//���ã�����iWebOffice
function Load(){
  //try{
  webform.WebOffice.WebUrl="<?=$mServerUrl?>";
  webform.WebOffice.RecordID="<?=$mRecordID?>";
  webform.WebOffice.Template="<?=$mTemplate?>";
  webform.WebOffice.FileName="<?=$mFileName?>";
  webform.WebOffice.FileType="<?=$mFileType?>";
  webform.WebOffice.EditType="<?=$mEditType?>";
  webform.WebOffice.UserName="<?=$mUserName?>";
  webform.WebOffice.WebOpen();      //�򿪸��ĵ�
  StatusMsg(webform.WebOffice.Status);
  //}catch(e){}
}
*/

//���ã��˳�iWebOffice
function UnLoad(){
  try{
  if (!webform.WebOffice.WebClose()){
     StatusMsg(webform.WebOffice.Status);
  }else{
     StatusMsg("�ر��ĵ�...");
  }
  }catch(e){}
}

//���ã����ĵ�
function LoadDocument(){
  StatusMsg("���ڴ��ĵ�...");
  if (!webform.WebOffice.WebOpen()){
     StatusMsg(webform.WebOffice.Status);
  }else{
     StatusMsg(webform.WebOffice.Status);
  }
}

/*
//���ã������ĵ�
function SaveDocument(){
  webform.WebOffice.WebSetMsgByName("Subject",webform.Subject.value);   //����Ϣ���,�Ա��̨�ܹ�ȡ��
  webform.WebOffice.WebSetMsgByName("Author",webform.Author.value); //����Ϣ���,�Ա��̨�ܹ�ȡ��
  webform.WebOffice.WebSetMsgByName("FileDate",webform.FileDate.value); //����Ϣ���,�Ա��̨�ܹ�ȡ��
  webform.WebOffice.WebSetMsgByName("HTMLPath",webform.HTMLPath.value); //����Ϣ���,�Ա��̨�ܹ�ȡ��

  if (!webform.WebOffice.WebSave()){
     StatusMsg(webform.WebOffice.Status);
     return false;
  }else{
     StatusMsg(webform.WebOffice.Status);
     return true;
  }
}
*/

//���ã���ʾ�����غۼ�  true��ʾ���غۼ�  false��ʾ��ʾ�ۼ�
function ShowRevision(mObject){
  var mFlag=mObject.value;
  if (mFlag=="��ʾ�ۼ�"){
     mObject.value="���غۼ�";
     webform.WebOffice.WebShow(true);
     StatusMsg("��ʾ�ۼ�...");
  }else{
     mObject.value="��ʾ�ۼ�";
     webform.WebOffice.WebShow(false);
     StatusMsg("���غۼ�...");
  }
}



//���ã�ˢ���ĵ�
function WebReFresh(){
  webform.WebOffice.WebReFresh();
  StatusMsg("�ĵ���ˢ��...");
}


//���ã�������ǩֵ
function SetBookmarks(vbmName,vbmValue){
  if (!webform.WebOffice.WebSetBookmarks(vbmName,vbmValue)){
     StatusMsg(webform.WebOffice.Status);
  }else{
     StatusMsg(webform.WebOffice.Status);
  }
}

//���ã���ȡ��ǩֵ
function GetBookmarks(vbmName){
  var vbmValue;
  vbmValue=webform.WebOffice.WebGetBookmarks(vbmName);
  return vbmValue;
}

//���ã���ӡ�ĵ�
function WebOpenPrint(){
  try{
    webform.WebOffice.WebOpenPrint();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}


//���ã�ҳ������
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

//���ã�����ͼƬ
function WebOpenPicture(){
  try{
    webform.WebOffice.WebOpenPicture();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}


//���ã���Ϊ�����ļ�
function WebSaveLocal(){
  try{
    webform.WebOffice.WebSaveLocal();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}

//���ã��򿪱����ļ�
function WebOpenLocal(){
  try{
    webform.WebOffice.WebOpenLocal();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}

/*
//���ã�����ΪHTML�ĵ�
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

//���ã��رջ���ʾ���� ����1��ʾ����������  ����2Ϊfalseʱ����ʾ�ر�  �����ƾ��ɲ���VBA������
//����2Ϊtrueʱ����ʾ��ʾ
function WebToolsVisible(ToolName,Visible){
  try{
    webform.WebOffice.WebToolsVisible(ToolName,Visible);
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}


//���ã���ֹ�����ù��� ����1��ʾ����������  ����2��ʾ�������ť�ı��  �����ƺͱ�ž��ɲ���VBA������
//����3Ϊfalseʱ����ʾ��ֹ  ����3Ϊtrueʱ����ʾ����
function WebToolsEnable(ToolName,ToolIndex,Enable){
  try{
    webform.WebOffice.WebToolsEnable(ToolName,ToolIndex,Enable);
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}

//���ã���������  ����1Ϊtrue��ʾ�����ĵ�  false��ʾ�������
function WebProtect(value){
  try{
    webform.WebOffice.WebSetProtect(value,"");
  }catch(e){}
}


//���ã���ȡ�ĵ�Txt����
function WebGetWordContent(){
  try{
    alert(webform.WebOffice.WebObject.Content.Text);
  }catch(e){}
}

//���ã�дWord����
function WebSetWordContent(){
  var mText=window.prompt("����������:","��������");
  if (mText==null){
     return (false);
  }
  else
  {
     //����Ϊ��ʾѡ�е��ı�
     //alert(webform.WebOffice.WebObject.Application.Selection.Range.Text);
     //����Ϊ�ڵ�ǰ���������ı�
     webform.WebOffice.WebObject.Application.Selection.Range.InsertAfter (mText+"\n");
     //����Ϊ�ڵ�һ�κ�����ı�
     //webform.WebOffice.WebObject.Application.ActiveDocument.Range(1).InsertAfter(mText);
  }
}

//���ã���Excel���
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



//���ã�VBA�׺�
function WebInsertVBA(){

    //����
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

    var mtext="��";
    webform.WebOffice.WebObject.Application.Selection.Range.InsertAfter (mtext+"\n");
    var myRange=webform.WebOffice.WebObject.Paragraphs(1).Range;
    myRange.ParagraphFormat.LineSpacingRule =1.5;
    myRange.font.ColorIndex=6;
    myRange.ParagraphFormat.Alignment=1;
    myRange=webform.WebOffice.WebObject.Range(0,0);
    myRange.Select();
    mtext="���[��������]��������";
    webform.WebOffice.WebObject.Application.Selection.Range.InsertAfter (mtext+"\n");
    myRange=webform.WebOffice.WebObject.Paragraphs(1).Range;
    myRange.ParagraphFormat.LineSpacingRule =1.5;
    myRange.ParagraphFormat.Alignment=1;
    myRange.font.ColorIndex=1;

    mtext="�����������ļ�";
    webform.WebOffice.WebObject.Application.Selection.Range.InsertAfter (mtext+"\n");
    myRange=webform.WebOffice.WebObject.Paragraphs(1).Range;
    myRange.ParagraphFormat.LineSpacingRule =1.5;

    //myRange.Select();
    myRange.Font.ColorIndex=6;
    myRange.Font.Name="����_GB2312";
    myRange.font.Bold=true;
    myRange.Font.Size=50;
    myRange.ParagraphFormat.Alignment=1;

    //myRange=myRange=webform.WebOffice.WebObject.Paragraphs(1).Range;
    webform.WebOffice.WebObject.PageSetup.LeftMargin=70;
    webform.WebOffice.WebObject.PageSetup.RightMargin=70;
    webform.WebOffice.WebObject.PageSetup.TopMargin=70;
    webform.WebOffice.WebObject.PageSetup.BottomMargin=70;
}


//���ã���ȡ�ĵ�ҳ��
function WebDocumentPageCount(){
    var intPageTotal;
    intPageTotal = webform.WebOffice.WebObject.Application.ActiveDocument.BuiltInDocumentProperties(14);
    alert("�ĵ�ҳ������"+intPageTotal);
}

//���ã�ǩ��ӡ��
function WebOpenSignature(){
  try{
    webform.WebOffice.WebOpenSignature();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}

//���ã���֤ӡ��A
function WebShowSignature(){
  try{
    webform.WebOffice.WebShowSignature();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}

//���ã���ǩ����
function WebOpenBookMarks(){
  try{
    webform.WebOffice.WebOpenBookmarks();
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}

//���ã����ģ��
function LoadBookmarks(){
  StatusMsg("�������ģ��...");
  if (!webform.WebOffice.WebLoadBookmarks()){
     StatusMsg(webform.WebOffice.Status);
  }else{
     StatusMsg(webform.WebOffice.Status);
  }
}

//���ã�����汾
function WebSaveVersion(){
  webform.WebOffice.WebSaveVersion();
  StatusMsg(webform.WebOffice.Status);

}

//���ã��򿪰汾
function WebOpenVersion(){
  webform.WebOffice.WebOpenVersion();
  StatusMsg(webform.WebOffice.Status);
}


//���ã�����ģ�涨��
function WebInsertFile(){
  SaveDocument();
  webform.WebOffice.WebSetMsgByName("COMMAND","INSERTFILE");
  webform.WebOffice.Template="ģ��һ.doc";
  if (webform.WebOffice.WebLoadTemplate()){
     if (webform.WebOffice.WebInsertFile()){
       alert("�ɹ�");
     }else{
       StatusMsg(webform.WebOffice.Status);
     }
  }else{
     StatusMsg(webform.WebOffice.Status);
  }
}

//���ã����涨���ļ�
function WebUpdateFile(){
  if (webform.WebOffice.WebUpdateFile()){
     StatusMsg(webform.WebOffice.Status);
  }else{
     StatusMsg(webform.WebOffice.Status);
  }
}

//���ã�����Text
function WebInportText(){
    var mText;
    webform.WebOffice.WebSetMsgByName("COMMAND","INPORTTEXT");
    if (webform.WebOffice.WebSendMessage()){
      mText=webform.WebOffice.WebGetMsgByName("CONTENT");
      webform.WebOffice.WebObject.Application.Selection.Range.InsertAfter(mText);
      alert("�����ı��ɹ�");
    }
    StatusMsg(webform.WebOffice.Status);
}


//���ã�����Text
function WebExportText(){
    var mText=webform.WebOffice.WebObject.Content.Text;
    webform.WebOffice.WebSetMsgByName("COMMAND","EXPORTTEXT");
    webform.WebOffice.WebSetMsgByName("CONTENT",mText);
    if (webform.WebOffice.WebSendMessage()){
      alert("�����ı��ɹ�");
    }
    StatusMsg(webform.WebOffice.Status);
}

//���ã�����Զ��ͼƬ
function WebInsertImage(){
  try{
    webform.WebOffice.WebInsertImage('','GoldgridLogo.jpg',true,4);   //����1��ʾ��ǩ����  ����2��ʾͼƬ�ļ���  ����3Ϊtrue͸��  false��ʾ��͸��  ����4Ϊ4��ʾ���������Ϸ�  5��ʾ���������·�
    StatusMsg(webform.WebOffice.Status);
  }catch(e){}
}