<?php 
$lista = array();
$N = (int) fgets(STDIN);

for ($i=0; $i < 10; $i++) { 

    $X = $N *= 2;

    array_push($lista, $X);
}

foreach ($lista as $indice => $X) {
    echo "N[$indice] = $X\n";
}

?>