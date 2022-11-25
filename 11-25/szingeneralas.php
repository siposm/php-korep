<?php
    /*
        Generálj egy véletlen hexadecimális színkódot! Használd ehhez a random_int, dechex, str_pad függvényeket (ld. referencia)! Ha mindegyik generált érték nagyobb, mint 128, akkor állítsd be háttérszínként, különben a háttérszín értéke legyen #cccccc! Az oldalra írjuk ki a generált színt szövegként, és azt is írjuk ki, hogy használtjuk-e a háttérszín beállításához vagy alapértelmezett háttérszín van-e!
    */

    $r = random_int(0,255);
    $g = random_int(0,255);
    $b = random_int(0,255);

    if($r > 128 && $g > 128 && $b > 128) {
        $rd = dechex($r);
        $rg = dechex($g);
        $rb = dechex($b);

        print_r($rd."<br>");
        print_r($rg."<br>");
        print_r($rb."<br>");

        $generatedColor = $rd.$rg.$rb;
        $paddingLength = strlen($generatedColor) + 1;
        $generatedColor = str_pad($generatedColor,$paddingLength,"#",STR_PAD_LEFT);
        echo "<br> GENERATED COLOR: " . $generatedColor;        
        echo "<body style=background-color:$generatedColor>";
    }
    else {
        echo "<body style=background-color:#cccccc>";
    }

    

?>