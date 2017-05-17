function testHeight(height){
	if(window.XMLHttpRequest) { 
		ajax=new XMLHttpRequest(); 
	} 
	ajax.onreadystatechange=function() {  
		if(ajax.status==200) { 
			document.getElementById("status2").innerHTML=ajax.responseText; 
		} 
	} 
	var url="http://localhost:8081/validationH.php?height="+height; 
	ajax.open("GET",url,true); 
	ajax.send(); 
}