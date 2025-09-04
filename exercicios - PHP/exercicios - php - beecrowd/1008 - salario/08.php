<?php 
    $numero = (int) fgets(STDIN);
    $horasTrabalho = (int) fgets(STDIN);
    $recebeHora = (float) fgets(STDIN);

    $salario = $horasTrabalho * $recebeHora;

    echo "NUMBER = " . $numero . "\n";
    echo "SALARY = U$ " . number_format($salario, 2, ".", "") . "\n"; 
?>