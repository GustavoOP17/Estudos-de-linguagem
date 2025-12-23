<?php 
$fator = (int) fgets(STDIN);
$fatorizacao = 1;

for ($i=$fator; $i > 1; $i--) { 
    $fatorizacao *= $i;
}

echo $fatorizacao;
?>