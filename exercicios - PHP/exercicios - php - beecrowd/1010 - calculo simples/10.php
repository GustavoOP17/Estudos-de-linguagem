<?php 
    $linha1 = explode(" ", trim(fgets(STDIN)));
    $codigo1 = (int)$linha1[0];
    $qtd1 = (int) $linha1[1];
    $valorUnidade1 = (float) $linha1[2];

    $linha2 = explode(" ", trim(fgets(STDIN)));
    $codigo2 = (int)$linha2[0];    
    $qtd2 = (int) $linha2[1];
    $valorUnidade2 = (float) $linha2[2];

    $deve = ($qtd1 * $valorUnidade1) + ($qtd2 * $valorUnidade2);

    echo "VALOR A PAGAR: R$ " . number_format($deve, 2, ".", "") . "\n"; 
?>