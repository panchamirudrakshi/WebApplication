//@author : Panchami Rudrakshi
function names(){
var str= document.getElementById("year").value;

if (str==""){
document.getElementById("mydiv").innerHTML="";
 return;
 }

if (window.XMLHttpRequest){
 xmlhttp=new XMLHttpRequest();

 }
else{
 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
 xmlhttp.open("GET","babynames.php?year="+str,true);
 xmlhttp.send();
 xmlhttp.onreadystatechange=handleServerResponse;
function handleServerResponse()
 {

if (xmlhttp.readyState==4){

  if(xmlhttp.status==200){
     document.getElementById("mydiv").innerHTML=xmlhttp.responseText;

    }else{
	 alert('problem');
	 }
 }

 }
}
