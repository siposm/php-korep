<?php

    function writeToFile($name, $age) {
        file_put_contents(
            "emberek.txt",
            $name . "<>" . $age . "\n",
            FILE_APPEND
        );
    }

    $x = file_get_contents("emberek.txt");

    if(isset($_POST['name']) && isset($_POST['age'])) {
        // minden ok -> fájlba ír
        writeToFile($_POST['name'], $_POST['age']);
    }

?>

<hr>
<?php echo $x; ?>
<hr>

<form method="post">
    Nev:<input type="text" name="name" required><br>
    Kor:<input type="number" name="age" required><br>
    <input type="submit" value="Save">
</form>