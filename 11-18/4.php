<?php

/*
    Egy filmeket listázó oldalon szeretnénk legördülő mezőből kiválasztani a film kategóriáját. A háttérrendszernek azonban a kategória azonosítójára van szüksége. Például: 5 - Akció, 4 - Dráma, 8 - Vígjáték. Találjuk ki az adatokat tároló adatszerkezetet, majd az alapján állítsuk elő az oldalon a legördülő mezőt!
*/

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    $macskak = [
        "80XAB" => "Maine coon",
        "LFA56" => "Sphinx",
        "CK9AK" => "Orientális",
    ];

    $aruk = [
        "pendrive", "macskatáp", "szarszedő lapát", "algoritmusok és adatszerkezetek 2. könyv"
    ];

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP ZH - 1. feladat</title>
</head>
<body>
    <h1>LEGÖRDÜLŐ MENÜ</h1>

    <form method="post" action="4.php">
        <select name="cars" id="cars">
            <option value="volvo-mint-ertek">Volvo-de-más-ami-megjelenik</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>

        <br>
        <br>
        <br>

        <select name="cats" id="cats">
            <?php
                foreach ($macskak as $key => $value) {
                    echo "<option value=$key>$value</option>";
                }
            ?>
        </select>

        <br>

        <?php
            foreach ($macskak as $key => $value) {
                echo '
                    <input type="checkbox" name=kipipaltCicak[] value='.$key.'>'.$value.'
                    <br>
                ';
            }
        ?>


        <input type="submit" value="Send data">
    </form>

</body>
</html>