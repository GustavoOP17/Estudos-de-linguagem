<?php 
$A = (int) fgets(STDIN); 
$B = (int) fgets(STDIN);
$soma = 0;
$maior = max($A, $B);
$menor = min($A, $B);
while (true) {
    if ($menor % 13 != 0) {
        $soma += $menor;
    }
    $menor ++;

    if ($menor > $maior) break;
}

echo $soma . "\n";
?>