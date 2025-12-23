<?php 
$salario = (float) fgets(STDIN);

if ($salario <= 2000){
    $imposto = 0;
} elseif ($salario > 2000 && $salario <= 3000) {
    $imposto = ($salario - 2000) * 0.08;
} elseif ($salario > 3000 && $salario <= 4500) {
    $imposto = (1000 * 0.08) + (($salario - 3000) * 0.18);
} else {
    $imposto = (1000 * 0.08) + (1500 * 0.18) + (($salario - 4500) * 0.28);
}

if ($imposto == 0) {
    echo "Isento\n";
} else {
    echo "R$ " . number_format($imposto, 2, ".", "") . "\n";
}
?>