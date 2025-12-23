<?php 
    $raio = fgets(STDIN);
    $volume = (4/3) * 3.14159 * $raio ** 3;

    echo "VOLUME = " . number_format($volume, 3, ".", "") . "\n";
?>