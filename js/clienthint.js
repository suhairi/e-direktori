function search(str)
{	
	var xmlHttp;
    alert(''+str);
	
function stateChanged() 
{ 
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == 200)
	{ 
		document.getElementById("results").innerHTML = xmlHttp.responseText
	} 
}

function GetXmlHttpObject()
{
	var xmlHttp=null;
	
	try
	{
		 // Firefox, Opera 8.0+, Safari
		 xmlHttp=new XMLHttpRequest();
	}
	catch (e)
	{
		 // Internet Explorer
		try
		{
		  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	 }
	return xmlHttp;
}
	if (str.length==0)
	{ 
	  document.getElementById("results").innerHTML = ""
	  return
	}
	
	xmlHttp=GetXmlHttpObject()
	
	if (xmlHttp==null)
	{
	  alert ("Browser does not support HTTP Request")
	  return
	} 

	var url="searchNama.php";
	url=url+"?nama="+str;
	url=url+"&sid="+Math.random();
	xmlHttp.onreadystatechange=stateChanged ;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}