<?php

    function valtki($param) {
        echo "<pre>";
        print_r($param);
        echo "</pre>";
    }

    function formatRow($row) {
        // input: valami#20
        // output: valami (20 yo)
        $arr = explode("#",$row);

        return $arr[0]." (".$arr[1].")";
    }

    function avgAge($arr) {
        $sum = 0;
        for ($i=0; $i < count($arr); $i++) { 
            $sum += explode("#",$arr[$i])[1];
        }
        return round($sum / count($arr));
    }

    function createList($people) {
        // valtki($people);

        echo "<ul>";
        foreach ($people as $key => $value) {
            echo "<li><b><u>".$key."</u></b>, average age:".avgAge($value)."</li>";

            echo "<ul>";
            for ($i=0; $i < count($value); $i++) { 
                echo "<li>".formatRow($value[$i])."</li>";
            }
            echo "</ul>";
        }
        echo "</ul>";
    }



    
    
    
    $nev = "Cirmi";
    $cars = ["Volvo", "BMW", "Toyota"];
    
    $people = array(
        "Cirmi" => ["cholesky#20"],
        "Miki" => ["kruski#9", "dr. chan#9", "havanero#30"],
        "Csink" => ["euler#8", "dr. gauss#10", "dijkstra#2"],
    );



    // domain vizsgálat
    var_dump($_SERVER['SERVER_NAME']);
    // https://www.php.net/manual/en/function.strpos.php
    // https://www.php.net/manual/en/function.str-contains.php
    
    
    
    echo "<h1>CICAPANZIÓ ADMIN FELÜLET</h1>";

    createList($people);

    echo "<hr>";
    // admin.php?requested_site=dogs
    if(isset($_GET["requested_site"])) {
        if($_GET["requested_site"] == "cats")
            include('cats.php');
        else if($_GET["requested_site"] == "dogs")
            include('dogs.php');
    }
    echo "<hr>";



    
    // var_dump($cars);

    // echo "<br><br><br>";

    // echo "<br><br><br>";

    // for ($i=0; $i < count($cars); $i++) { 
    //     echo "$cars[$i]<br>";
    // }

    // for ($i=0; $i < 10; $i++) { 
    //     echo "<p>$i. Szia $nev</p>";
    // }
?>