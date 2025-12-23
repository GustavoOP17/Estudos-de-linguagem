<?php 
    $N = (int) fgets(STDIN);
    $qtdNumeros = $in = $out = 0;
    while ($qtdNumeros < $N) {
        $X = (int) fgets(STDIN);
        if ($X >= 10 && $X <= 20) {
            $in ++;
        } else {
            $out ++;
        }
        $qtdNumeros += 1;
    }

    echo "$in in\n";
    echo "$out out\n";
?>