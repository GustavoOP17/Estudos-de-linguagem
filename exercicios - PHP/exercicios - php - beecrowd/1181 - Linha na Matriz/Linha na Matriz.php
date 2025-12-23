<?php 
$horizontal = $vertical = 12; 

$linhaVista = (int) fgets(STDIN);
$operacao = trim(fgets(STDIN));
$soma = $media = 0;

$matrix = array();
for ($h=0; $h < $horizontal; $h++) { 
    $matrix[$h] = array();
    for ($v=0; $v < $vertical; $v++) { 
        $matrix[$h][$v] = (float) trim(fgets(STDIN));
    }
}

for ($v=0; $v < 12; $v++) { 
    $matrix[$linhaVista][$v];
    $soma += $matrix[$linhaVista][$v];
}

if ($operacao == 'S') {
    echo "$soma\n";
} else {
    $media = $soma / 12;
    echo number_format($media, 1, ".", "") . "\n";
}
?>