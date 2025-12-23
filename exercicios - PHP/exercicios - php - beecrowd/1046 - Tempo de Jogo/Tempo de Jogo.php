<?php 
list($A, $B) = array_map('intval', explode(" ", trim(fgets(STDIN))));

if ($A == $B) {
    $horas = 24;
} if ($B > $A) {
    $horas = $B - $A;
} else {
    $horas = (24 - $A) + $B;
}

echo "O JOGO DUROU " . $horas . " HORA(S)\n";
?>