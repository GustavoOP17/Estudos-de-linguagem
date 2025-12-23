<?php 
$C = intval(fgets(STDIN));
$T = trim(fgets(STDIN));
$M = [];
$soma = 0;

for ($i=0; $i < 12; $i++) { 
    for ($j=0; $j < 12; $j++) { 
        $M[$i][$j] = floatval(fgets(STDIN));
    }
}

for ($i=0; $i < 12; $i++) {
    $soma += $M[$i][$C];
}
if ($T == "S") {
    echo "$soma\n";
} else {
    $media = $soma / 12;
    echo number_format($media, 1, ".", "") . "\n";
}
?>