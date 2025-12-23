<?php
echo "input dos numeros: ";
$texto = fgets(STDIN);
echo "\n\n\n\n\n\n\n";

$numeros = explode(",", $texto); 
$porLinha = 30; 
$total = count($numeros);

for ($i = 0; $i < $total; $i += $porLinha) {
    $parte = array_slice($numeros, $i, $porLinha);
    
    echo implode(",", $parte) . "\n";
}
?>
