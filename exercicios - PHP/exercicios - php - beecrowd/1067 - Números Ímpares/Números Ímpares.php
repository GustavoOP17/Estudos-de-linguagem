<?php 
$numero = fgets(STDIN);

for ($i=0; $i <= $numero; $i++) { 
    if ($i % 2 == 1){
    echo "$i\n";
    }
}
?>