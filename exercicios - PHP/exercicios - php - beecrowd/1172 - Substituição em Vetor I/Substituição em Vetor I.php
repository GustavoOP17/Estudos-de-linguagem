<?php 
$lista = array();

for ($i=0; $i < 10; $i++) { 
    $X = (int) fgets(STDIN);

    if ($X <= 0) {
        $X = 1;
    }

    array_push($lista, $X);
}

foreach ($lista as $indice => $item) {
    echo "X[$indice] = $item\n";
}

?>