<?php 
$qtdTestes = (int) fgets(STDIN);

for ($i=0; $i < $qtdTestes; $i++) { 
    list($A, $B, $C) = array_map("floatval", explode(" ", trim(fgets(STDIN))));
    $media = ((($A * 2) + ($B * 3) + ($C * 5)) / (2 + 3 + 5));
    echo number_format($media, 1) . "\n";
}
?>