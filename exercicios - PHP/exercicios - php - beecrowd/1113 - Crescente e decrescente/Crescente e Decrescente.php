<?php 
while (true){
    list($A, $B) = array_map("intval", explode(" ", trim(fgets(STDIN))));

    if ($A == $B) {
        break;
    }

    if ($A > $B) {
        echo "Decrescente\n";
    } else {
        echo "Crescente\n";
    }
}
?>