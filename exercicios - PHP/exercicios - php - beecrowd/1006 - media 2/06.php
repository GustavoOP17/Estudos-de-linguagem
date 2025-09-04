<?php 
    $A = round((float)fgets(STDIN), 1);
    $B = round((float)fgets(STDIN), 1);    
    $C = round((float)fgets(STDIN), 1);

    $MEDIA = (($A * 2) + ($B * 3) + ($C * 5)) / 10;

    echo "MEIDA = " . number_format($MEDIA, 1, ".", ""). "\n";
?>