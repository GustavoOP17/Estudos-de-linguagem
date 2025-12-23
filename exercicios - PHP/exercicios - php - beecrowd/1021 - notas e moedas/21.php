<?php 
    $saque = number_format((float) fgets(STDIN), 2, ".", "");
    $centavos = (int) round($saque * 100);

    $cem = intdiv($centavos, 10000);
    $centavos %= 10000;

    $cinquenta = intdiv($centavos, 5000);
    $centavos %= 5000;

    $vinte  = intdiv($centavos, 2000);
    $centavos %= 2000;

    $dez = intdiv($centavos, 1000);
    $centavos %= 1000;

    $cinco = intdiv($centavos, 500);
    $centavos %= 500;

    $dois = intdiv($centavos, 200);
    $centavos %= 200;


    
    $umreal  = intdiv($centavos, 100);
    $centavos %= 100;

    $cinquentacent  = intdiv($centavos, 50);
    $centavos %= 50;

    $vintecent  = intdiv($centavos, 25);
    $centavos %= 25;

    $dezcent  = intdiv($centavos, 10);
    $centavos %= 10;

    $cincocent  = intdiv($centavos, 5);
    $centavos %= 5;

    $umcent  = intdiv($centavos, 1);
    $centavos %= 1;

    echo "NOTAS:\n";
    echo $cem . " nota(s) de R$ 100.00\n";
    echo $cinquenta . " nota(s) de R$ 50.00\n";
    echo $vinte . " nota(s) de R$ 20.00\n";
    echo $dez . " nota(s) de R$ 10.00\n";
    echo $cinco . " nota(s) de R$ 5.00\n";
    echo $dois . " nota(s) de R$ 2.00\n";

    echo "MOEDAS:\n";
    echo $umreal . " moeda(s) de R$ 1.00\n";
    echo $cinquentacent . " moeda(s) de R$ 0.50\n";
    echo $vintecent . " moeda(s) de R$ 0.25\n";
    echo $dezcent . " moeda(s) de R$ 0.10\n";
    echo $cincocent . " moeda(s) de R$ 0.05\n";
    echo $umcent . " moeda(s) de R$ 0.01\n";
?>