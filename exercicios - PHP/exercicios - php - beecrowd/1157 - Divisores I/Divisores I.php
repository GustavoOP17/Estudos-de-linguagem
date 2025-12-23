<?php 
$N = (int) fgets(STDIN);
$cont = 1;
while ($N >= $cont) {
    if ($N % $cont == 0) {
        echo $cont . "\n";
    }
    $cont ++;
}
?>