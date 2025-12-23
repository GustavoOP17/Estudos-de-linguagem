<?php 
$numeros = array();

for ($i=0; $i < 20; $i++) { 
    $valor = (int) trim(fgets(STDIN));
    array_push($numeros, $valor);
}

$revence = array_reverse($numeros);

foreach ($revence as $indice => $item) {
    echo "N[$indice] = $item\n"; 
}
?>