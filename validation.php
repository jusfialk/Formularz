<?php

//walidacja wagi
function testWeight($weight){



	
	if(preg_match("/[0-9]{1,3}/", $weight)){
return "<p style=\"font-­‐size:120%; font-­‐weight:bold; color:#0000FF;\"> Zapisano!</p>";
	}
    else {
return "<p style=\"font-­‐size:120%; font-­‐weight:bold; color:#FF0000;\">Niepoprawny format. Podaj wagę raz jeszcze!</p>";
	}
}
$status=testWeight($_REQUEST['weight']);
echo $status;


//walidacja wzrostu
// function testHeight($height){
	
// 	if(preg_match("/^([0-9]{2})(-[0-9]{3})?$/i", $height)){
// return "<p style=\"font-­‐size:120%; font-­‐weight:bold; color:#0000FF;\"> Zapisano!</p>";
// 	}
//     else {
// return "<p style=\"font-­‐size:120%; font-­‐weight:bold; color:#FF0000;\">Niepoprawny format. Podaj wzrost raz jeszcze!</p>";
// 	}
// }
// $status=testHeight($_REQUEST['height']);
// echo $status;


?>
