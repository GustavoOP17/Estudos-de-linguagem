<?php 
$numeros = fgets(STDIN);
$cont = 0;

while ($cont < $numeros) {
    list($A, $B) = array_map("intval", explode(" ", trim(fgets(STDIN))));
    $soma = 0;

    $maior = max($A, $B);
    $menor = min($A, $B);
    if ($menor % 2 != 0) $menor ++;
    for ($i = $menor; $i < $maior; $i++) { 
        if ($i % 2 != 0) {
            $soma += $i;
        }
    }
    echo "$soma\n";
    $cont ++;
}
?>