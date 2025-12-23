<?php 
$soma = 0;
$cont = 0;

while (true) {
    $A = (int) fgets(STDIN);
    if ($A < 0) break;
    if ($A >= 0) {
        $soma += $A;
        $cont ++;
    }
}
$media = $soma / $cont;

echo number_format($media, 2, ".", ",") . "\n";
?>