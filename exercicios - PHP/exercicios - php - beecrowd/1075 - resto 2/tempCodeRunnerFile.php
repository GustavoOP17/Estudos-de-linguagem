<?php 
$N = (int) fgets(STDIN);

for ($i=1; $i < 10000; $i++) { 
    if ($i % $N == 2) {
        echo $i . "\n";
    }
}
?>