<?php 
while (true) {
    $X = (int) fgets(STDIN);
    
    if ($X == 0) break;
    
    $sequencia = range(1, $X);
    echo implode(" ", $sequencia) . "\n";
}
?>