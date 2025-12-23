<?php 
$numeros = array();
for ($i=0; $i < 100; $i++) { 
    $numero = floatval(trim(fgets(STDIN)));
    $numeros[] = $numero;
}

foreach ($numeros as $indice => $valores) {
    if ($valores <= 10) {
        echo "A[$indice] = " . number_format($valores, 1, '.', '') . "\n";
    }
}
?>