<?php 
$vez = 0;
$positivo = 0;
$soma = 0;

while ($vez < 6) {
    $valor = (float)fgets(STDIN);
    if ($valor > 0) {
        $positivo += 1;
        $soma += $valor;
    }
    $vez += 1;
}

$media = $soma / $positivo;

echo "$positivo valores positivos\n";
echo number_format($media, 1, ".", "") . "\n";
?>