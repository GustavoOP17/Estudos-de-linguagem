<?php 
$T = (int) fgets(STDIN);
$fib = [0, 1];

for ($i=2; $i <= 60; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}
for ($i=0; $i < $T; $i++) { 
    $N = (int) fgets(STDIN);
    echo "Fib(" . $N . ") = " . $fib[$N] . "\n";
}
?>