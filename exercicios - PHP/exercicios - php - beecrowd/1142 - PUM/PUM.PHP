<?php
$N = (int) fgets(STDIN);

$numero = 1;

for ($i = 0; $i < $N; $i++) {
    echo $numero . " " . ($numero + 1) . " " . ($numero + 2) . " PUM\n";
    $numero += 4; 
}
?>
