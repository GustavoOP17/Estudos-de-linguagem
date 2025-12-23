<?php 
    $a = (floatval(fgets(STDIN)));

    if ($a >= 0 && $a <= 25) {
        echo "Intervalo [0,25]\n";
    } 
    elseif ($a > 25 && $a <= 50) {
        echo "Intervalo (25,50]\n";
        
    }
    elseif ($a > 50 && $a <= 75) {
        echo "Intervalo (50,75]\n";
    }
    elseif ($a > 75 && $a <= 100) {
        echo "Intervalo (75,100]\n";
    }
    else {
        echo "Fora de intervalo\n";
    }
?>