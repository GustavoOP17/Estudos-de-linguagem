<?php 
$vez = 0;
$par = 0;
while ($vez < 5) {
    $valor = (int)fgets(STDIN);
    if ($valor % 2 == 0) {
        $par += 1;
    }
    $vez += 1;
}
 
echo "$par valores pares\n";
?>