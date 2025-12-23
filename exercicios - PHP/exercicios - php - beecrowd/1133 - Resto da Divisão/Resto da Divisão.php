<?php 
$X = (int) fgets(STDIN);
$Y = (int) fgets(STDIN);
$maior = max($X, $Y)-1; 
$menor = min($X, $Y)+1;

while (true) {
    if ($menor % 5 == 2 || $menor % 5 == 3) {
        echo "$menor\n";
    }
    $menor ++;
    if ($menor > $maior) break;
}
?>