<?php 
$N = (int) fgets(STDIN);


for ($i=0; $i < $N; $i++) {
    $X = (int) fgets(STDIN);
    $soma = 0;

    for ($d=1; $d < $X; $d++) { 
        if ($X % $d == 0) {
            $soma += $d;
        }
    }
        
    if ($soma == $X) {
        echo "$X eh perfeito\n"; 
    } else {
        echo "$X nao eh perfeito\n";
    }
}
?>