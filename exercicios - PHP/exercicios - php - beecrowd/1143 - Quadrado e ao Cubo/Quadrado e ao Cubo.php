<?php 
$N = (int) fgets(STDIN);
$soma = 0;

for ($i=1; $i < $N+1; $i++) { 
    for ($p=0; $p < 3; $p++) {
        $primeiro = $i;
        $segundo = $primeiro ** 2;
        $terceiro = $primeiro * $segundo;
    }
    echo "$primeiro $segundo $terceiro\n";
}
?>