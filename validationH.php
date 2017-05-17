<?php
//walidacja wzrostu
function testHeight($height){

	if(preg_match("/[0-9]{2,3}/", $height)){
return "<p style=\"font-­‐size:120%; font-­‐weight:bold; color:#0000FF;\"> Zapisano!</p>";
	}
    else {
return "<p style=\"font-­‐size:120%; font-­‐weight:bold; color:#FF0000;\">Niepoprawny format. Podaj wzrost raz jeszcze!</p>";
	}
}

$status2=testHeight($_REQUEST['height']);
echo $status2;

?>
