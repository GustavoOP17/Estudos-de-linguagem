<?php 
    echo "Digite o primeiro valor: ";
    $A = round((float)fgets(STDIN), 1);

    echo "Digite o segundo valor: ";
    $B = round((float)fgets(STDIN), 1);

    $media = (($A * 3.5) + ($B * 7.5)) / 11; 
    echo 'MEDIA = ' . number_format($media, 5, '.', '') . "\n"; 
?>