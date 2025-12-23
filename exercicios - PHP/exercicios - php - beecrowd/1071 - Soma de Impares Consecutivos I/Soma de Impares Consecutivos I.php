<?php 
$n1 = (int) fgets(STDIN);
$n2 = (int) fgets(STDIN);
$soma = 0;

$maior = max($n1, $n2);
$menor = min($n1, $n2);

for ($i = $menor + 1; $i < $maior; $i++) { 
    if ($i % 2 != 0) {
        $soma += $i;
    }
}

echo "$soma\n";
?>