<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <title>Ankieta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="stylesheets.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="container">
<?php require_once 'zapisz_wyniki.php'; ?>
<h1>Ankieta dotycząca wiedzy na temat udaru mózgu</h1>

<?php
    if (isset($bledy) and $bledy) {
        echo '<div class="alert alert-danger"><strong>Uwaga!</strong> Formularz zawiera błędy.</div>';
    }

    if (isset($bledy) and !$bledy) {
        echo '<div class="alert alert-success"><strong>Sukces!</strong> Zapisano wyniki ankiety.</div>';
    }
?>

<form class="form-horizontal" action="/" method="post">
    <fieldset>

        <!-- Ankieta dotycząca wiedzy oraz predyspozycji do zachorowania na udar mózgu -->
        <h2>Witaj! Odpowiedz proszę na nastepujące pytania:</h2>

        <!-- Płeć -->
        <div class="form-group<?php if(isset($bledy) and in_array('sex', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label">Płeć</label>
            <div class="col-md-4">
                <div class="radio">
                    <input type="radio" name="sex" id="kobieta" value="0"<?php if (isset($dane) and $dane['sex'] === 0) echo ' checked' ?>>
                    <label for="kobieta">Kobieta</label>
                </div>
                <div class="radio">
                    <input type="radio" name="sex" id="mezczyzna" value="1"<?php if (isset($dane) and $dane['sex'] === 1) echo ' checked' ?>>
                    <label for="mezczyzna">Mężczyzna</label>
                </div>
            </div>
        </div>

        <!-- Wiek -->
        <div class="form-group<?php if(isset($bledy) and in_array('age', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label">Wiek</label>
            <div class="col-md-4">
                <div class="radio">
                    <input type="radio" name="age" id="age_0" value="0"<?php if (isset($dane) and $dane['age'] === 0) echo ' checked' ?>>
                    <label for="age_0">mniej niż 20</label>
                </div>
                <div class="radio">
                    <input type="radio" name="age" id="age_1" value="1"<?php if (isset($dane) and $dane['age'] === 1) echo ' checked' ?>>
                    <label for="age_1">20 - 35</label>
                </div>
                <div class="radio">
                    <input type="radio" name="age" id="age_2" value="2"<?php if (isset($dane) and $dane['age'] === 2) echo ' checked' ?>>
                    <label for="age_2">35 - 50</label>
                </div>
                <div class="radio">
                    <input type="radio" name="age" id="age_3" value="3"<?php if (isset($dane) and $dane['age'] === 3) echo ' checked' ?>>
                    <label for="age_3">50 - 65</label>
                </div>
                <div class="radio">
                    <input type="radio" name="age" id="age_4" value="4"<?php if (isset($dane) and $dane['age'] === 4) echo ' checked' ?>>
                    <label for="age_4">66 i więcej</label>
                </div>
            </div>
        </div>

        <!-- Miejsce zamieszkania -->
        <div class="form-group<?php if(isset($bledy) and in_array('city', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label">Miejsce zamieszkania</label>
            <div class="col-md-4">
                <div class="radio">
                    <input type="radio" name="city" id="city_0" value="0"<?php if (isset($dane) and $dane['city'] === 0) echo ' checked' ?>>
                    <label for="city_0">Wieś</label>
                </div>
                <div class="radio">
                    <input type="radio" name="city" id="city_1" value="1"<?php if (isset($dane) and $dane['city'] === 1) echo ' checked' ?>>
                    <label for="city_1">Miasto do 10 tys. mieszkańców</label>
                </div>
                <div class="radio">
                    <input type="radio" name="city" id="city_2" value="2"<?php if (isset($dane) and $dane['city'] === 2) echo ' checked' ?>>
                    <label for="city_2">Miasto do 100 tys. mieszkańców</label>
                </div>
                <div class="radio">
                    <input type="radio" name="city" id="city_3" value="3"<?php if (isset($dane) and $dane['city'] === 3) echo ' checked' ?>>
                    <label for="city_3">Miasto do 500 tys. mieszkańców</label>
                </div>
                <div class="radio">
                    <input type="radio" name="city" id="city_4" value="4"<?php if (isset($dane) and $dane['city'] === 4) echo ' checked' ?>>
                    <label for="city_4">Miasto powyżej 500 tys. mieszkańców</label>
                </div>
            </div>
        </div>

        <!-- Waga-->
        <div class="form-group<?php if(isset($bledy) and in_array('weight', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label" for="waga">Waga [kg]:</label>
            <div class="col-md-1">
                <input id="waga" name="weight" type="text" placeholder="" class="form-control input-md" value="<?php if (isset($dane) and $dane['weight']) echo $dane['weight'] ?>">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group<?php if(isset($bledy) and in_array('height', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label" for="wzrost">Wzrost [cm]:</label>
            <div class="col-md-1">
                <input id="wzrost" name="height" type="text" placeholder="" class="form-control input-md" value="<?php if (isset($dane) and $dane['height']) echo $dane['height'] ?>">
            </div>
        </div>

        <!-- Czym jest udar mózgu? -->
        <div class="form-group<?php if(isset($bledy) and in_array('what_is_stroke', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label">Czym jest udar mózgu?</label>
            <div class="col-md-4">
                <div class="radio">
                    <input type="radio" name="what_is_stroke" id="what_is_stroke_0" value="0"<?php if (isset($dane) and $dane['what_is_stroke'] === 0) echo ' checked' ?>>
                    <label for="what_is_stroke_0">przegrzanie słoneczne</label>
                </div>
                <div class="radio">
                    <input type="radio" name="what_is_stroke" id="what_is_stroke_1" value="1"<?php if (isset($dane) and $dane['what_is_stroke'] === 1) echo ' checked' ?>>
                    <label for="what_is_stroke_1">niedokrwienie lub krwotok w części mózgu</label>
                </div>
                <div class="radio">
                    <input type="radio" name="what_is_stroke" id="what_is_stroke_2" value="2"<?php if (isset($dane) and $dane['what_is_stroke'] === 2) echo ' checked' ?>>
                    <label for="what_is_stroke_2">zatrucie</label>
                </div>
                <div class="radio">
                    <input type="radio" name="what_is_stroke" id="what_is_stroke_3" value="3"<?php if (isset($dane) and $dane['what_is_stroke'] === 3) echo ' checked' ?>>
                    <label for="what_is_stroke_3">infekcja uogólniona</label>
                </div>
            </div>
        </div>

        <!-- Która postać udaru mózgu występujeczęściej? -->
        <div class="form-group<?php if(isset($bledy) and in_array('which_is_more_frequent', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label">Która postać udaru mózgu występujeczęściej?</label>
            <div class="col-md-4">
                <div class="radio">
                    <input type="radio" name="which_is_more_frequent" id="which_is_more_frequent_0" value="0"<?php if (isset($dane) and $dane['which_is_more_frequent'] === 0) echo ' checked' ?>>
                    <label for="which_is_more_frequent_0">udar krwotoczny</label>
                </div>
                <div class="radio">
                    <input type="radio" name="which_is_more_frequent" id="which_is_more_frequent_1" value="1"<?php if (isset($dane) and $dane['which_is_more_frequent'] === 1) echo ' checked' ?>>
                    <label for="which_is_more_frequent_1">udar niedokrwienny</label>
                </div>
            </div>
        </div>

        <!-- Najczęstsze przyczyny udaru mózgu to -->
        <div class="form-group<?php if(isset($bledy) and in_array('causes', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label">Najczęstsze przyczyny udaru mózgu to:</label>
            <div class="col-md-4">
                <div class="checkbox">
                    <input type="checkbox" name="causes[]" id="causes_0" value="0"<?php if (isset($dane['causes']) and in_array(0, $dane['causes'])) echo ' checked' ?>>
                    <label for="causes_0">nadciśnienie tętnicze</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="causes[]" id="causes_1" value="1"<?php if (isset($dane['causes']) and in_array(1, $dane['causes'])) echo ' checked' ?>>
                    <label for="causes_1">nadwaga</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="causes[]" id="causes_2" value="2"<?php if (isset($dane['causes']) and in_array(2, $dane['causes'])) echo ' checked' ?>>
                    <label for="causes_2">nowotwór</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="causes[]" id="causes_3" value="3"<?php if (isset($dane['causes']) and in_array(3, $dane['causes'])) echo ' checked' ?>>
                    <label for="causes_3">migotanie przedsionków</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="causes[]" id="causes_4" value="4"<?php if (isset($dane['causes']) and in_array(4, $dane['causes'])) echo ' checked' ?>>
                    <label for="causes_4">anemia</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="causes[]" id="causes_5" value="5"<?php if (isset($dane['causes']) and in_array(5, $dane['causes'])) echo ' checked' ?>>
                    <label for="causes_5">migrena</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="causes[]" id="causes_6" value="6"<?php if (isset($dane['causes']) and in_array(6, $dane['causes'])) echo ' checked' ?>>
                    <label for="causes_6">palenie papierosów</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="causes[]" id="causes_7" value="7"<?php if (isset($dane['causes']) and in_array(7, $dane['causes'])) echo ' checked' ?>>
                    <label for="causes_7">cukrzyca</label>
                </div>
            </div>
        </div>

        <!-- Najczęstsze objawy udaru mózgu to -->
        <div class="form-group<?php if(isset($bledy) and in_array('symptoms', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label">Najczęstsze objawy udaru mózgu to:</label>
            <div class="col-md-4">
                <div class="checkbox">
                    <input type="checkbox" name="symptoms[]" id="symptoms_0" value="0"<?php if (isset($dane['symptoms']) and in_array(0, $dane['symptoms'])) echo ' checked' ?>>
                    <label for="symptoms_0">ból całego ciała</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="symptoms[]" id="symptoms_1" value="1"<?php if (isset($dane['symptoms']) and in_array(1, $dane['symptoms'])) echo ' checked' ?>>
                    <label for="symptoms_1">zaburzenia widzenia</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="symptoms[]" id="symptoms_2" value="2"<?php if (isset($dane['symptoms']) and in_array(2, $dane['symptoms'])) echo ' checked' ?>>
                    <label for="symptoms_2">trudności z mówieniem</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="symptoms[]" id="symptoms_3" value="3"<?php if (isset($dane['symptoms']) and in_array(3, $dane['symptoms'])) echo ' checked' ?>>
                    <label for="symptoms_3">wymioty</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="symptoms[]" id="symptoms_4" value="4"<?php if (isset($dane['symptoms']) and in_array(4, $dane['symptoms'])) echo ' checked' ?>>
                    <label for="symptoms_4">paraliż ręki lub nogi</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="symptoms[]" id="symptoms_5" value="5"<?php if (isset($dane['symptoms']) and in_array(5, $dane['symptoms'])) echo ' checked' ?>>
                    <label for="symptoms_5">zaburzenia trawienia</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="symptoms[]" id="symptoms_6" value="6"<?php if (isset($dane['symptoms']) and in_array(6, $dane['symptoms'])) echo ' checked' ?>>
                    <label for="symptoms_6">senność</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="symptoms[]" id="symptoms_7" value="7"<?php if (isset($dane['symptoms']) and in_array(7, $dane['symptoms'])) echo ' checked' ?>>
                    <label for="symptoms_7">asymetria twarzy</label>
                </div>
            </div>
        </div>

        <!-- Najczęstszą przyczyną udaru mózgu u ludzi młodych jest -->
        <div class="form-group<?php if(isset($bledy) and in_array('causes_young_people', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label">Najczęstszą przyczyną udaru mózgu u <b>ludzi młodych</b> jest:</label>
            <div class="col-md-4">
                <div class="radio">
                    <input type="radio" name="causes_young_people" id="causes_young_people_0" value="0"<?php if (isset($dane) and $dane['causes_young_people'] === 0) echo ' checked' ?>>
                    <label for="causes_young_people_0">miażdżyca</label>
                </div>
                <div class="radio">
                    <input type="radio" name="causes_young_people" id="causes_young_people_1" value="1"<?php if (isset($dane) and $dane['causes_young_people'] === 1) echo ' checked' ?>>
                    <label for="causes_young_people_1">zawał serca</label>
                </div>
                <div class="radio">
                    <input type="radio" name="causes_young_people" id="causes_young_people_2" value="2"<?php if (isset($dane) and $dane['causes_young_people'] === 2) echo ' checked' ?>>
                    <label for="causes_young_people_2">rozwarstwienie tętnicy domózgowej</label>
                </div>
                <div class="radio">
                    <input type="radio" name="causes_young_people" id="causes_young_people_3" value="3"<?php if (isset($dane) and $dane['causes_young_people'] === 3) echo ' checked' ?>>
                    <label for="causes_young_people_3">migrena</label>
                </div>
            </div>
        </div>

        <!-- W jakim wieku ludzie najczęściej chorują na udar mózgu? -->
        <div class="form-group<?php if(isset($bledy) and in_array('age_stroke', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label">W jakim wieku ludzie najczęściej chorują na udar mózgu?</label>
            <div class="col-md-4">
                <div class="radio">
                    <input type="radio" name="age_stroke" id="age_stroke_0" value="0"<?php if (isset($dane) and $dane['age_stroke'] === 0) echo ' checked' ?>>
                    <label class="radio-inline" for="age_stroke_0">50 - 65</label>
                </div>

                <div class="radio">
                    <input type="radio" name="age_stroke" id="age_stroke_1" value="1"<?php if (isset($dane) and $dane['age_stroke'] === 1) echo ' checked' ?>>
                    <label class="radio-inline" for="age_stroke_1">65 - 80</label>
                </div>

                <div class="radio">
                    <input type="radio" name="age_stroke" id="age_stroke_2" value="2"<?php if (isset($dane) and $dane['age_stroke'] === 2) echo ' checked' ?>>
                    <label class="radio-inline" for="age_stroke_2">80 - 95</label>
                </div>
            </div>
        </div>

        <!-- Multiple Checkboxes -->
        <div class="form-group<?php if(isset($bledy) and in_array('prevention', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label">Aby zapobiegać zachorowaniu na udar mózgu należy:</label>
            <div class="col-md-4">
                <div class="checkbox">
                    <input type="checkbox" name="prevention[]" id="prevention_0" value="0"<?php if (isset($dane['prevention']) and in_array(0, $dane['prevention'])) echo ' checked' ?>>
                    <label for="prevention_0">regularnie mierzyć ciśnienie</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="prevention[]" id="prevention_1" value="1"<?php if (isset($dane['prevention']) and in_array(1, $dane['prevention'])) echo ' checked' ?>>
                    <label for="prevention_1">regularnie pić alkohol</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="prevention[]" id="prevention_2" value="2"<?php if (isset($dane['prevention']) and in_array(2, $dane['prevention'])) echo ' checked' ?>>
                    <label for="prevention_2">używać dużo soli w potrawach</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="prevention[]" id="prevention_3" value="3"<?php if (isset($dane['prevention']) and in_array(3, $dane['prevention'])) echo ' checked' ?>>
                    <label for="prevention_3">podejmować aktywność fizyczną</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="prevention[]" id="prevention_4" value="4"<?php if (isset($dane['prevention']) and in_array(4, $dane['prevention'])) echo ' checked' ?>>
                    <label for="prevention_4">badać poziom cholesterolu</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="prevention[]" id="prevention_5" value="5"<?php if (isset($dane['prevention']) and in_array(5, $dane['prevention'])) echo ' checked' ?>>
                    <label for="prevention_5">palić papierosy</label>
                </div>
            </div>
        </div>

        <!-- Co zrobić, gdy u kogoś rozpoznamy udar mózgu? -->
        <div class="form-group<?php if(isset($bledy) and in_array('recognition', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label">Co zrobić, gdy u kogoś rozpoznamy udar mózgu?</label>
            <div class="col-md-4">
                <div class="radio">
                    <input type="radio" name="recognition" id="recognition_0" value="0"<?php if (isset($dane) and $dane['recognition'] === 0) echo ' checked' ?>>
                    <label for="recognition_0">położyć chorego w pozycji bocznej ustalonej</label>
                </div>
                <div class="radio">
                    <input type="radio" name="recognition" id="recognition_1" value="1"<?php if (isset($dane) and $dane['recognition'] === 1) echo ' checked' ?>>
                    <label for="recognition_1">natychmiast wezwać pogotowie</label>
                </div>
                <div class="radio">

                    <input type="radio" name="recognition" id="recognition_2" value="2"<?php if (isset($dane) and $dane['recognition'] === 2) echo ' checked' ?>>
                    <label for="recognition_2">posadzić chorego w pozycji półleżącej</label>
                </div>
                <div class="radio">
                    <input type="radio" name="recognition" id="recognition_3" value="3"<?php if (isset($dane) and $dane['recognition'] === 3) echo ' checked' ?>>
                    <label for="recognition_3">podać choremu leki na ciśnienie</label>
                </div>
            </div>
        </div>


        <!-- W jakim czasie trzeba podjąć leczenie przy udarze mózgu? -->
        <div class="form-group<?php if(isset($bledy) and in_array('time', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label">W jakim czasie trzeba podjąć leczenie przy udarze mózgu?</label>
            <div class="col-md-4">
                <div class="radio">
                    <input type="radio" name="time" id="time_0" value="0"<?php if (isset($dane) and $dane['time'] === 0) echo ' checked' ?>>
                    <label for="time_0">do 4,5 godziny</label>
                </div>
                <div class="radio">
                    <input type="radio" name="time" id="time_1" value="1"<?php if (isset($dane) and $dane['time'] === 1) echo ' checked' ?>>
                    <label for="time_1">4,5 - 6 godziny</label>
                </div>
                <div class="radio">
                    <input type="radio" name="time" id="time_2" value="2"<?php if (isset($dane) and $dane['time'] === 2) echo ' checked' ?>>
                    <label for="time_2">6 - 8 godzin</label>
                </div>
                <div class="radio">
                    <input type="radio" name="time" id="time_3" value="3"<?php if (isset($dane) and $dane['time'] === 3) echo ' checked' ?>>
                    <label for="time_3">8 i więcej godzin</label>
                </div>
            </div>
        </div>

        <!-- Którą co do częstości przyczyną śmierci jest udar mózgu? -->
        <div class="form-group<?php if(isset($bledy) and in_array('death', $bledy)) echo ' has-error'; ?>">
            <label class="col-md-4 control-label">Którą co do częstości przyczyną śmierci jest udar mózgu?</label>
            <div class="col-md-4">
                <div class="radio">
                    <input type="radio" name="death" id="death_0" value="0"<?php if (isset($dane) and $dane['death'] === 0) echo ' checked' ?>>
                    <label class="radio-inline" for="death_0">1-3</label>
                </div>
                <div class="radio">
                    <input type="radio" name="death" id="death_1" value="1"<?php if (isset($dane) and $dane['death'] === 1) echo ' checked' ?>>
                    <label class="radio-inline" for="death_1">4-6</label>
                </div>
                <div class="radio">
                    <input type="radio" name="death" id="death_2" value="2"<?php if (isset($dane) and $dane['death'] === 2) echo ' checked' ?>>
                    <label class="radio-inline" for="death_2">dalszą</label>
                </div>
            </div>
        </div>

        <!-- Wyślij -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Wyślij</button>
            </div>
        </div>

    </fieldset>
</form>
</body>
</html>