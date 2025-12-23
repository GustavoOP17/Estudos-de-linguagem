<?php 
$acerto = 0;
$soma = 0;
while ($acerto != 2){
    $nota = (float) fgets(STDIN);
    if ($nota >= 0 && $nota <= 10) {
        $acerto += 1;
        $soma += $nota;
    } else {
        echo "nota invalida\n";
    }
}

$media = $soma/2;

echo "media = " . number_format($media, 2, ".", "") . "\n";
?>