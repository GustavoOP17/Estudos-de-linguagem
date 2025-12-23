<?php 
$N = (int) fgets(STDIN);
$base = 2;

while ($base <= $N) {
    if ($N % 2 == 0) {
        echo "$base^2 = " . $base ** 2 . "\n";
    }
    $base += 2;
}
?>