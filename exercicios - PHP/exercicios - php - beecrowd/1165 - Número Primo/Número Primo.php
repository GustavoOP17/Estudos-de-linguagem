<?php 
$qtd = (int) fgets(STDIN);
$cont = 0;
for ($i=0; $i<$qtd; $i++) {
    $primo = (int) fgets(STDIN);
    $cont = 0;

    for ($t=1; $t <= $primo; $t++) {
        if ($primo % $t == 0) {
            $cont ++;
        }
    }

    if ($cont == 2) {
        echo "$primo eh primo\n";
    } else {
       echo "$primo nao eh primo\n";
    }
    
}


?>