<?php
    echo "Macska 1<br>";
    echo "Macska 2<br>";
    echo "Macska 3<br>";
    echo "Macska 4<br>";

    $cx = 50;
    $cy = 50;
    $r = 40;
    $stroke = "red";

    // vagy \ jellel escapeled a következő " karaktert
    echo "
        <svg width=\"100\" height=\"100\">
            <circle
                cx=$cx
                cy=$cy
                r=$r
                stroke=$stroke
                stroke-width=\"4\"
                fill=\"yellow\"
            />
        </svg>    
    ";


    $stroke = "purple";
    
    // vagy az egészet '-esbe rakod, viszont akokr a változók NEM lesznek
    // értelmezve --> ezért kell a változók előtt és után ki/be kapcsolni
    // a stringet
    echo '
        <svg width="100" height="100">
            <circle
                cx='.$cx.'
                cy='.$cy.'
                r='.$r.'
                stroke='.$stroke.'
                stroke-width="4"
                fill="yellow"
            />
        </svg>    
    ';
?>



<svg width="100" height="100">
  <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
</svg>