<?php 
    $saque = (int) fgets(STDIN);
    $resto = $saque;

    $cem = intdiv($resto, 100);
    $resto %= 100;

    $cinquenta = intdiv($resto, 50);
    $resto %= 50;

    $vinte  = intdiv($resto, 20);
    $resto %= 20;

    $dez = intdiv($resto, 10);
    $resto %= 10;

    $cinco = intdiv($resto, 5);
    $resto %= 5;

    $dois = intdiv($resto, 2);
    $resto %= 2;
    
    $umreal = $resto;

    echo $saque . "\n";
    echo $cem . " nota(s) de R$ 100,00\n";
    echo $cinquenta . " nota(s) de R$ 50,00\n";
    echo $vinte . " nota(s) de R$ 20,00\n";
    echo $dez . " nota(s) de R$ 10,00\n";
    echo $cinco . " nota(s) de R$ 5,00\n";
    echo $dois . " nota(s) de R$ 2,00\n";
    echo $umreal . " nota(s) de R$ 1,00\n";
?>