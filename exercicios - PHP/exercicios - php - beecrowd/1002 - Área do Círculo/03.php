<?php 
    echo "Digite o raio : ";
    $raio = (float) fgets(STDIN);
    
    $area = ($raio ** 2) * 3.14159;

    echo "A= " . number_format($area, 4, ".", "") . "\n";
?>
