<?php 
$T = (int) fgets(STDIN);
$listao = array();

while (count($listao) < 1000) { 
    for ($f=0; $f < $T; $f++) { 
        if (count($listao) == 1000) break;
        $listao[] = $f;
    }
}

foreach ($listao as $indice => $item) {
    echo "N[$indice] = $item\n";
}
?>