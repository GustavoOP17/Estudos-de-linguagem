<?php 
    $idadeDias = (int) fgets(STDIN);
    $resto = $idadeDias;

    $anos = intdiv($idadeDias, 365);
    $resto %= 365;

    $mes = intdiv($idadeDias % 365, 30);
    $resto %= 30;

    $dias = $resto;
    
    echo $anos . " ano(s)\n";
    echo $mes . " mes(es)\n";
    echo $dias . " dia(s)\n";
?>