<?php 
list($A, $B, $C) = array_map("floatval", explode(" ", trim(fgets((STDIN)))));

$lados = [$A, $B, $C];
rsort($lados);
$A = $lados[0];
$B = $lados[1];
$C = $lados[2];

if ($A < $B + $C) {
    if (pow($A, 2) == pow($B, 2) + pow($C, 2)) {
        echo "TRIANGULO RETANGULO\n";
    } elseif (pow($A, 2) > pow($B, 2) + pow($C, 2)) {
        echo "TRIANGULO OBTUSANGULO\n";
    } elseif (pow($A, 2) < pow($B, 2) + pow($C, 2)) {
        echo "TRIANGULO ACUTANGULO\n";
    }

    if ($A == $B && $B == $C) {
        echo "TRIANGULO EQUILATERO\n";
    } elseif (($A == $B && $A != $C) || 
            ($A == $C && $A != $B) || 
            ($B == $C && $B != $A)) {
        echo "TRIANGULO ISOSCELES\n";
    }    
} else {
    echo "NAO FORMA TRIANGULO\n";
}


?>