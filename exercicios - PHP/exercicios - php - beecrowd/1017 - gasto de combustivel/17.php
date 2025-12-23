<?php 
    $tempo = fgets(STDIN);
    $velocidade = fgets(STDIN);
    $percorreu = ($tempo * $velocidade) / 12;

    echo number_format($percorreu, 3, '.', '') . "\n";
?>