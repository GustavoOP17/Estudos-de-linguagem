<?php 
while (true){
    list($A, $B) = array_map("intval", explode(" ", trim(fgets(STDIN))));

    if ($A > 0 && $B > 0) {
        echo "primeiro\n";
    } elseif ($A > 0 & $B < 0) {
        echo "quarto\n";
    } elseif ($A < 0 && $B < 0) {
        echo "terceiro\n";
    } else {
        echo "segundo\n";
    }

    if ($A == 0 || $B == 0) {
        break;
    }
}
?>