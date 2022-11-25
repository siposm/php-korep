<?php

    /*
        Készíts PHP szkriptet, amely az URL-ben paraméterként megadott PHP állományt tölti be. (Pl. ha paraméter értéke 'alma', akkor az 'alma.php' kerül betöltésre.) Az oldalak betöltéséhez az include() utasítást használjuk!
    */

    // betöltés 3 opció:
    // include --> hibát dob de nem hal le a program
    // require --> hibát dob ha nem sikerült
    // require_once ==> fatal error, megáll a program

    if(isset($_GET['menuItem'])) {
        include("./subpages/".$_GET['menuItem'].".php");
    }

?>

<form action="param-betolt.php" method="get">
    <input type="text" name="menuItem">
    <input type="submit" value="Get subpage">
</form>