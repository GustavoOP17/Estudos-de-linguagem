<?php 
$maior = 0;
$posicao = 0;

for ($i=0; $i < 100; $i++) { 
    $numero = (int) fgets(STDIN);
    if ($i == 0) {
        $maior = $numero;
        $posicao = $i+1;
    } 

    if ($numero > $maior) {
        $maior = $numero;
        $posicao = $i+1;
    }
}

echo $maior . "\n";
echo $posicao . "\n";
?>