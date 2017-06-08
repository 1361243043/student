/**
 * 
 * @since   Version 1.0  $date 2008-10-07  
 * @desc  ajax for editpwd
 * @filesource  
 **/

 /**
 * @desc Create XMLHttpRequest
 */
 function createXMLHttpRequest(){
     if(window.XMLHttpRequest){
        XMLHttp = new XMLHttpRequest();//mozilla浏览器
     }
     else if(window.ActiveXObject){
         try{
            XMLHttp = new ActiveXObject("Msxml2.XMLHTTP");//IE老版本
         }catch(e){}
         try{
             XMLHttp = new ActiveXObject("Microsoft.XMLHTTP");//IE新版本
         }catch(e){}
         if(!XMLHttp){
            window.alert("不能创建XMLHttpRequest对象实例");
            return false;
         }
     }
 }
 /**
 * @desc Send datas to Server
 */
function dostart(grade) { 
	createXMLHttpRequest();
	//alert(grade);
	var url = "ok.php?grade="+grade;
	//alert(url);
	XMLHttp.open("GET",url,true);
	XMLHttp.onreadystatechange = readusr;
	//XMLHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;");
	XMLHttp.send(null);
} 

function second(cla) { 
	createXMLHttpRequest();
	//alert(cla);
	var url = "hello.php?class="+cla;
	XMLHttp.open("GET",url,true);
	XMLHttp.onreadystatechange = read;
	//XMLHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;");
	XMLHttp.send(null);
} 

/**
* @desc Recieve dates from Server
*/
function read() { 
  if(XMLHttp.readyState == 4) { 
      if(XMLHttp.status == 200){ 
      //alert(XMLHttp.responseText);
	  document.getElementById("ren").innerHTML = XMLHttp.responseText;
	  }  
    } 
} 


/**
* @desc Recieve dates from Server
*/
function readusr() { 
  if(XMLHttp.readyState == 4) { 
      if(XMLHttp.status == 200){ 
     // alert(XMLHttp.responseText);
	  document.getElementById("class").innerHTML = XMLHttp.responseText;
	  }  
    } 
} 