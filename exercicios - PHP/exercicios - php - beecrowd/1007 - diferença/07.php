<?php 
    echo "Digite o primeiro valor: ";
    $A = fgets(STDIN);

    echo "Digite o segundo valor: ";
    $B = fgets(STDIN);

    echo "Digite o terceiro valor: ";
    $C = fgets(STDIN);

    echo "Digite o quarto valor: ";
    $D = fgets(STDIN);

    $DIFERENCA = ($A * $B - $C * $D);

    echo "DIFERENCA = " . $DIFERENCA . "\n";
?>