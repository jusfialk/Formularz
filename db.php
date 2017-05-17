<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = '127.0.0.1';
$uzytkownik = 'root';
$haslo = 'abcd';
$nazwa_bazy = 'RAIM';
$port = 3306;

//ustaw połączenie z serwerem mysql
if (!$polaczenie = mysqli_connect($host, $uzytkownik, $haslo, $nazwa_bazy, $port)) {
    echo 'Nie moge polaczyc sie z baza danych';
    exit (0);
}