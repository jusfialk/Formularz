//walidacja wagi
function testWeight(weight){
	if(window.XMLHttpRequest) { 
		ajax=new XMLHttpRequest(); 
	} 
	ajax.onreadystatechange=function() {  
		if(ajax.status==200) { 
			document.getElementById("status").innerHTML=ajax.responseText; 
		} 
	} 
	var url="http://localhost:8081/validation.php?weight="+weight; 
	ajax.open("GET",url,true); 
	ajax.send(); 
}


//walidacja wzrostu
// function testHeight(height){
// 	if(window.XMLHttpRequest) { 
// 		ajax=new XMLHttpRequest(); 
// 	} 
// 	ajax.onreadystatechange=function() {  
// 		if(ajax.status==200) { 
// 			document.getElementById("status").innerHTML=ajax.responseText; 
// 		} 
// 	} 
// 	var url="http://localhost:8081/validation.php?height="+height; 
// 	ajax.open("GET",url,true); 
// 	ajax.send(); 
// }