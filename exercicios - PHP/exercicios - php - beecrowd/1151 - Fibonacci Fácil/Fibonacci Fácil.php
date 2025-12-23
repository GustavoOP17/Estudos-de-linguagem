<?php 
$casas = (int) trim(fgets(STDIN));
$anterior = 0;
$atual = 1;
$proximo = 0;

for ($i=0; $i < $casas; $i++) { 
    if ($i == 0) {
        echo $anterior;
    } elseif ($i == 1) {
        echo " " . $atual;
    } else {
        $proximo = $anterior + $atual;
        echo " " . $proximo;
        $anterior = $atual;
        $atual = $proximo;
    }
}
echo "\n";
?>