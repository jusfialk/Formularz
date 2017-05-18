<?php

// Wykonujemy tylko jeżeli formularz zostanie wysłany
if (isset($_POST["singlebutton"])) {

    // Pobieramy ustawienia z pliku konfiguracyjnego
    $ustawienia = require('config.php');

    // Ustawiamy raportowanie błędów
    if ($ustawienia['wyswietl_bledy']) {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }

    // Nawiązujemy połączenie z serwerem MySQL
    if (!$polaczenie = mysqli_connect(
        $ustawienia['db.host'],
        $ustawienia['db.uzytkownik'],
        $ustawienia['db.haslo'],
        $ustawienia['db.baza'],
        $ustawienia['db.port'])
    ) {
        echo 'Nie moge polaczyc sie z baza danych';
        exit (0);
    }

    $bledy = [];
    // Wypełniamy tablicę z domyślnymi wartościami (null)
    $dane = array_fill_keys(array(
        'sex', 'age', 'city', 'what_is_stroke', 'which_is_more_frequent', 'causes', 'symptoms', 'causes_young_people',
        'age_stroke', 'prevention', 'recognition', 'time', 'death', 'weight', 'height'
    ), null);


    // Iterujemy po polach formularza upewniając się, że dane nie zostały zmanipulowane – można przesłać tylko liczby całkowite
    foreach (array_keys($dane) as $klucz) {
        if (array_key_exists($klucz, $_POST)) {
            if (is_numeric($_POST[$klucz])) {
                $dane[$klucz] = (int)$_POST[$klucz];
            } elseif(is_array($_POST[$klucz])) {
                $dane[$klucz] = array_map('intval', $_POST[$klucz]);
            }
        }
    }

    // Sprawdzamy czy wszytskie pola zostały wypełnione
    foreach ($dane as $klucz => $wartosc) {
        if (is_null($wartosc)) {
            $bledy[] = $klucz;
        }
    }

    // Jeżeli nie ma błędów, to zapisujemy do bazy
    if (!$bledy) {
        $zapytanie = 'INSERT INTO udar VALUES (DEFAULT';

        // Budujemy zapytanie SQL
        foreach ($dane as $wartosc) {
            if (is_int($wartosc)) {
                $zapytanie .= ', ' . $wartosc;
            } elseif(is_array($wartosc)) {
                $zapytanie .= ', "' . serialize($wartosc) . '"';
            }
        }

        $zapytanie .= ');';

        if (!mysqli_query($polaczenie, $zapytanie)) {
            $bledy['komunikat'] = "<strong>Błąd!</strong> Wystąpił błąd podczas zapisywania wyników do bazy danych.<br>Zapytanie: <i>$zapytanie</i>";
        }
    }

    // Zamykamy połączenie
    if ($polaczenie) {
        mysqli_close($polaczenie);
    }
}