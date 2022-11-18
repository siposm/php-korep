<?php

    // https://stackoverflow.com/questions/2220519/in-php-is-0-treated-as-empty

    print_r( $_POST );
    echo '<hr>';

    $tanulo = null;
    $szobeli = null;
    $eredmeny = null;
    $hibaNev = null;
    $hibaEredmeny = null;
    $hibaSzobeli = null;

    if($_POST != null) {

        if(isset($_POST['szobeli']))    $szobeli = $_POST['szobeli'];
        if(isset($_POST['tanulo']))     $tanulo = $_POST['tanulo'];
        if(isset($_POST['szazalek']))   $eredmeny = $_POST['szazalek'];

        if($tanulo == "") {
            // echo "A tanuló nevének megadása kötelező.";
            $hibaNev = "A tanuló nevének megadása kötelező.";
        }
        else if(count(explode(' ',$tanulo)) < 2) {
            // echo "A tanuló neve legalább 2 szóból kell, hogy álljon.";
            $hibaNev = "A tanuló neve legalább 2 szóból kell, hogy álljon.";
        }
        else if($eredmeny == null) {
            // echo "Az elért eredményt megadni kötelező.";
            $hibaEredmeny = "Az elért eredményt megadni kötelező.";
        }
        else if(filter_var($eredmeny, FILTER_VALIDATE_INT) === false) {
            // echo "Az elért eredményt egész szám kell, hogy legyen.";
            $hibaEredmeny = "Az elért eredményt egész szám kell, hogy legyen.";
        }
        else if($eredmeny < 0) {
            // echo "Az elért eredményt nem lehet negatív.";
            $hibaEredmeny = "Az elért eredményt nem lehet negatív.";
        }
        else if($eredmeny >= 12 && $eredmeny <= 25) {
            if($szobeli == null) {
                // echo "Szóbeli időpontot kötelező foglalni.";
                $hibaSzobeli = "Szóbeli időpontot kötelező foglalni.";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP ZH - 2. feladat</title>
</head>
<body>
    <h1>ÉRETTSÉGI VIZSGA MATEMATIKÁBÓL</h1> 
    <h2>2. feladat: űrlapfeldolgozás</h2>
    <form action="2.php" method="POST" novalidate>
        <label for="tanulo">Tanuló neve:</label>
        <input type="text" name="tanulo" id="tanulo" value="<?php echo $tanulo; ?>"> <!-- értékmegtartás!!! fontos hogy echo-zni kell a változót -->
            <?php echo $hibaNev; ?>
        <br>
        <label for="szazalek">Eredmény (%):</label>
        <input type="text" name="szazalek" id="szazalek" value="<?php echo $eredmeny; ?>">
            <?php echo $hibaEredmeny; ?>
        <br>
        <input type="checkbox" name="szobeli" id="szobeli">
        <label for="szobeli">Szóbeli időpont szükséges</label>
            <?php echo $hibaSzobeli; ?>
        <br>
        <button type="submit">Küldés</button>
    </form>
</body>
</html>