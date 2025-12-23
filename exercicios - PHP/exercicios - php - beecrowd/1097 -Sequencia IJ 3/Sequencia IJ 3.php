<?php 
$I = 1;
$J = 7;

while ($I < 10) {
    $cont = 1;

    while (true) {
        echo "I=$I J=$J\n";
        $J -= 1;
        $cont ++;
        if ($cont == 4) { 
            $I += 2;
            $J += 5;
            break;
        }
    }
}
?>



7

4 5

13 10

6 4

3 3

3 5

3 4

3 8

