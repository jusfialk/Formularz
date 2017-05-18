# Formularz
Ankieta PHP/HTML

## Instrukcja instalacji
1. Skopiuj plik `config.php.dist` pod nazwą `config.php` i ustaw poprawne dane dla połączenia z serwerem MySQL.

2. Wgraj schemat bazy danych z pliku `schema.sql`.



## Dane do bazy na serwerze

<?php

return array(
    'db.host' => 'localhost',
    'db.uzytkownik' => 'id1710261_raim',
    'db.haslo' => 'raim2017!',
    'db.baza' => 'id1710261_raim',
    'db.port' => 3306,
    'wyswietl_bledy' => true,
);
