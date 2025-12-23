<?php 
$qtd = trim(fgets(STDIN));

$nume = trim(fgets(STDIN));

$numeros = array_map('intval', explode(" ", $nume));

$menor = min($numeros);
foreach ($numeros as $indice => $numero) {
    if ($menor == $numero){
        $posicao = $indice;
    }
}

echo "Menor valor: $menor\n";
echo "Posicao: $posicao\n";
?>