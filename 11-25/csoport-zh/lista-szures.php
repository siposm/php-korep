<?php

    function writeStudent($students, $i) {
        echo "<p>";
        echo $students[$i]["name"] . " (" . $students[$i]["age"] .")";
        echo "</p>";
    }

    $students = [
        ['name' => 'Student1', 'age' => 20],
        ['name' => 'Student2', 'age' => 10],
        ['name' => 'Student3', 'age' => 30],
        ['name' => 'Student4', 'age' => 20],
        ['name' => 'Student5', 'age' => 10],
    ];

    if(isset($_GET['age']) && $_GET['age'] != "" && is_numeric($_GET['age'])) {
        for ($i=0; $i < count($students); $i++) {
            if($students[$i]["age"] == $_GET['age']) {
                writeStudent($students, $i);
            }
        }
    } else {
        echo "<h3>Teljes lista</h3>";
        for ($i=0; $i < count($students); $i++) {
            writeStudent($students, $i);
        }
    }


?>