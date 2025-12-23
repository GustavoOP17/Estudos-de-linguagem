<?php 
while (true) {
    $soma = 0;
    list($A, $B) = array_map("intval", explode(" ", trim(fgets(STDIN))));

    $maior = max($A, $B);
    $menor = min($A, $B);

    if ($A <= 0 || $B <= 0) {
        break;
    }

    for ($i=$menor; $i < $maior+1; $i++) { 
        $soma += $i;
        echo "$i ";
    }
    
echo "Sum=$soma\n";
}

?>