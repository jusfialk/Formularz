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


?>


