<?php

//jesli przycisk "wyslij" zostanie nacisniety
if (isset($_POST["singlebutton"])) {

    //wstawiamy dane configuracyjne do polaczenia z baza
    require('db.php');

    //pobieramy odpowiedzi udzielone w formularzu
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $what_is_stroke = $_POST['what_is_stroke'];
    $which_is_more_frequent = $_POST['which_is_more_frequent'];
    $causes = $_POST['causes'];
    $symptoms = $_POST['symptoms'];
    $causes_young_people = $_POST['causes_young_people'];
    $age_stroke = $_POST['age_stroke'];
    $prevention = $_POST['prevention'];
    $recognition = $_POST['recognition'];
    $time = $_POST['time'];
    $death = $_POST['death'];

    $serialized_causes = serialize($causes);
    $serialized_symptoms = serialize($symptoms);
    $serialized_prevention = serialize($prevention);


    $zapytanie = sprintf('INSERT INTO udar VALUES (DEFAULT, %s, %s, %s, %s, %s, "%s", "%s", %s, %s, "%s", %s, %s, %s, %s, %s)',
        mysqli_real_escape_string($polaczenie, $sex),
        mysqli_real_escape_string($polaczenie, $age),
        mysqli_real_escape_string($polaczenie, $city),
        mysqli_real_escape_string($polaczenie, $what_is_stroke),
        mysqli_real_escape_string($polaczenie, $which_is_more_frequent),
        mysqli_real_escape_string($polaczenie, $serialized_causes),
        mysqli_real_escape_string($polaczenie, $serialized_symptoms),
        mysqli_real_escape_string($polaczenie, $causes_young_people),
        mysqli_real_escape_string($polaczenie, $age_stroke),
        mysqli_real_escape_string($polaczenie, $serialized_prevention),
        mysqli_real_escape_string($polaczenie, $recognition),
        mysqli_real_escape_string($polaczenie, $time),
        mysqli_real_escape_string($polaczenie, $death),
        mysqli_real_escape_string($polaczenie, $weight),
        mysqli_real_escape_string($polaczenie, $height)
    );

    $rezultat = mysqli_query($polaczenie, $zapytanie);



    //jesli się nie powiedzie, zwróc informację o bledach
    if ($rezultat) {
        echo 'Zapisano ankietę!';
    } else {
        echo 'MySQL Error: ' . mysqli_error($polaczenie);
        echo 'zapytanie: ' . $zapytanie;
        exit;
    }
    


}




//zamknij połączenie z bazą danych
if (!mysqli_close($polaczenie)) {
    echo 'Nie moge zakonczyc polaczenia z baza danych';
    exit (0);
}