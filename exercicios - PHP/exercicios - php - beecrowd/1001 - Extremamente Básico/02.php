<?php 

    echo "Insira o primeiro valor: ";
    $a = (int)fgets(STDIN);

    echo "Insira o segundo valor: ";
    $b = (int)fgets(STDIN);
    
    $soma = $a + $b;

    echo "X = " . $soma . "\n";
?>