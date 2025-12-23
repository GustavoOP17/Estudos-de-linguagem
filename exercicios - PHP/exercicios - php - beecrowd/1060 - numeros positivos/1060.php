<?php  
$vez = 0;
$positivo = 0;
while ($vez < 6) {
    $valor = (int)fgets(STDIN);
    if ($valor > 0) {
        $positivo += 1;
    }
    $vez += 1;
}
 
echo "$positivo valores positivos\n";
?>