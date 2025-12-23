<?php 
    $segundos = (int) fgets(STDIN);

    $hora = intdiv($segundos, 3600);
    $resto = $segundos % 3600;

    $minuto = intdiv($resto, 60);
    $segundos = $resto % 60;

    echo $hora . ":" . $minuto . ":" . $segundos;
?>