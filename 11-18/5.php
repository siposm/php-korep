<?php
    var_dump($_GET);

    $colors = [
        "EE0701",
        "0E8A16",
        "FBCA04",
        "BCF5DB",
        "CC317C",
        "5319E7",
        "FF7F50",
        "FF6347",
        "FF4500",
        "FFD700",
        "FFA500",
        "FF8C00",
        "FFDAB9",
        "BDB76B",
        "00FF00",
        "006400",
        "00FF7F",
        "2E8B57",
        "1E90FF",
        "4169E1",
        "0000CD",
        "F4A460",
        "D2691E",
        "8B4513",
        "A52A2A",
        "FF34B3",
        "FF00FF",
        "9400D3",
        "7D26CD",
        "00B2EE",
        "00F5FF",
        "00C78C",
        "00FF00",
        "FFFF00",
        "FF3030",
        "FF82AB",
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
<?php echo '<body style="background-color:#'.$_GET['color'].'">'; ?>
    <h1>HÁTTÉRSZÍN URL-BŐL</h1>

    <!-- <a href="5.php?color=yellow">yellow</a><br>
    <a href="5.php?color=red">red</a><br>
    <a href="5.php?color=pink">pink</a> -->

    <?php

    foreach ($colors as $value) {
        echo '<a href="5.php?color='.$value.'">'.$value.'</a><br>';
    }

    ?>
</body>
</html>