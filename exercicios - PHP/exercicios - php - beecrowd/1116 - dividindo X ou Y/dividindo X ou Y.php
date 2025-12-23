<?php 
$vezes = fgets(STDIN);
for ($i=0; $i < $vezes; $i++) { 
    list($A, $B) = array_map("intval", explode(" ", fgets(STDIN)));
    if ($B != 0) {
        $dividir = $A / $B;
        echo number_format($dividir, 1, ".", ",") . "\n";
    } else { 
        echo "divisao impossivel\n";
    }
}
?>