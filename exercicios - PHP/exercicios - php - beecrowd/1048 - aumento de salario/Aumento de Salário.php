<?php 
$salario = floatval(fgets(STDIN));
if ($salario >= 0 && $salario <= 400){
    $porcentagem = 15;
} elseif ($salario > 400 && $salario <= 800) {
    $porcentagem = 12;
} elseif ($salario > 800 && $salario <= 1200) {
    $porcentagem = 10;
} elseif ($salario > 1200 && $salario <= 2000) {
    $porcentagem = 7;
} else {
    $porcentagem = 4;
}

$reajuste = $salario * ($porcentagem / 100);
$novoSalario = $salario + $reajuste;


echo "Novo salario: " . number_format($novoSalario, 2, '.', '') . "\n";
echo "Reajuste ganho: " . number_format($reajuste, 2, '.', '') . "\n";
echo "Em percentual: " . $porcentagem . " %\n";

?>