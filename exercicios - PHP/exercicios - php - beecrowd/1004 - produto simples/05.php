<?php 
    echo "Digite o primeiro valor: ";
    $valor1 = (int)fgets(STDIN);

    echo "Digite o segundo valor: ";
    $valor2 = (int)fgets(STDIN);

    $PROD = $valor1 * $valor2;

    echo "PROD = " . $PROD . "\n"
?>
