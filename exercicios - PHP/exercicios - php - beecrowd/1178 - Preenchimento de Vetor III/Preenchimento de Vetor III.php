<?php 
$X = floatval(fgets(STDIN));
$N = [];

while (true) {
    $N[] = $X;
    $X /= 2;

    if (count($N) == 100) break;
}

foreach ($N as $indice => $key) {
    echo "N[" . $indice ."] = " . number_format($key, 4, ".", "") . "\n";
}
?>