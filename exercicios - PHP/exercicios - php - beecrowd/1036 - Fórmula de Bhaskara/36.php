<?php 
    $valores = explode(" ", trim(fgets(STDIN))); 

    $A = (float)$valores[0];
    $B = (float)$valores[1];
    $C = (float)$valores[2]; 

    $delta = ($B ** 2) - (4 * $A * $C);
    
    if ($delta < 0 || $A == 0) {
        echo "Impossivel calcular\n";
    } else {
        $bhaskara1 = (-$B + sqrt($delta)) / (2 * $A); 
        $bhaskara2 = (-$B - sqrt($delta)) / (2 * $A); 

        echo "R1 = " . number_format($bhaskara1, 5, ".", "") . "\n";
        echo "R2 = " . number_format($bhaskara2, 5, ".", "") . "\n";
    }
?>