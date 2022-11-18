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
        <input type="text" name="tanulo" id="tanulo" value="">
        <br>
        <label for="szazalek">Eredmény (%):</label>
        <input type="text" name="szazalek" id="szazalek" value="">
        <br>
        <input type="checkbox" name="szobeli" id="szobeli">
        <label for="szobeli">Szóbeli időpont szükséges</label>
        <br>
        <button type="submit">Küldés</button>
    </form>
</body>
</html>