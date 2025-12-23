<?php 
$vez = $par = $impar = $positivo = $negativo = 0; 
while ($vez < 5) {
    $valor = (int)fgets(STDIN);
    if ($valor % 2 == 0) {
        $par += 1;
    } else {
        $impar += 1;
    }

    if ($valor > 0) {
        $positivo += 1;
    } elseif ($valor < 0) {
        $negativo += 1;
    }
    $vez += 1;
}

echo "$par valor(es) par(es)\n";
echo "$impar valor(es) impar(es)\n";
echo "$positivo valor(es) positivo(s)\n";
echo "$negativo valor(es) negativo(s)\n";

?>