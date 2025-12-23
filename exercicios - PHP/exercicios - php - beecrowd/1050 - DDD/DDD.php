<?php
$DDD = [
    ["DDD" => 61, "capital" => "Brasilia"],
    ["DDD" => 71, "capital" => "Salvador"],
    ["DDD" => 11, "capital" => "Sao Paulo"],
    ["DDD" => 21, "capital" => "Rio de Janeiro"],
    ["DDD" => 32, "capital" => "Juiz de Fora"],
    ["DDD" => 19, "capital" => "Campinas"],
    ["DDD" => 27, "capital" => "Vitoria"],
    ["DDD" => 31, "capital" => "Belo Horizonte"]
];

$pesquisa = (int) fgets(STDIN);
foreach ($DDD as $item) {
    if ($item["DDD"] == $pesquisa){
        echo $item["capital"] . "\n";
        $exite = 1;
        break;
    } else {
        $exite = null;
    }
}
if ($exite == null) {
    echo "DDD nao cadastrado\n";
}

?>
