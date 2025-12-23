<?php
$N = (int) fgets(STDIN);
$multiplicador = 1;
while (true) {
    echo "$multiplicador x $N = " . $multiplicador * $N . "\n";
    $multiplicador ++;
    if ($multiplicador == 11) break;
}
?>