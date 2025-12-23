<?php 
list($A, $B, $C, $D) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$inicio = $A * 60 + $B;
$fim = $C * 60 + $D;

$diferenca = $fim - $inicio;
if ($diferenca <= 0) {
    $diferenca += 24*60;
}

$horas = intval($diferenca / 60);
$minutos = $diferenca % 60;

echo "O JOGO DUROU $horas HORA(S) E $minutos MINUTO(S)\n";
?>