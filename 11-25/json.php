<?php
    function valtki($v)
    {
        echo "<pre>";
        print_r($v);
        echo "</pre>";
    }

    $students = json_decode(file_get_contents("students.json"));

    // valtki($students);

    echo "<h1>First 3 students</h1>";
    for ($i=0; $i < 3; $i++) {
        // valtki($students[$i]);
        echo "<h3>".$students[$i]->Name."</h3>";
        echo "<p>".$students[$i]->NeptunCode."</p>";
        echo "<p>".$students[$i]->EnrollmentYear."</p>";
        echo "<p>".$students[$i]->IsActive."</p>";
        echo "<hr>";
    }

    // szerializáció --> objektumok szöveges formára transzformálása
    // deszerializáció --> szöveges formáról használható objektumokra alakít
?>