<?php 
$I = 1;
while ($I < 10) {
    $J = 7;
    $cont = 0;

    while (true) {
        echo "I=$I J=$J\n";
        $J -= 1;
        $cont ++;
        if ($cont == 3) { 
            $I += 2;
            break;
        }
    }
}
?>