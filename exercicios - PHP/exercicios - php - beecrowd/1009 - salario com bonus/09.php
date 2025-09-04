<?php 
    $nome = fgets(STDIN);
    $salarioFixo = (float) fgets(STDIN);
    $vendasMes = (float) fgets(STDIN);

    $salarioBonus = $salarioFixo + ($vendasMes * 0.15);

    echo "TOTAL = R$ " . number_format($salarioBonus, 2, ".", "") . "\n";

?>