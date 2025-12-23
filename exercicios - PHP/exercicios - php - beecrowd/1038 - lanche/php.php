<?php 
    $cardapio = [
    [1, 4.00],
    [2, 4.50],
    [3, 5.00],
    [4, 2.00],
    [5, 1.50]
];


    $codQtd = explode(" ", trim(fgets(STDIN)));
    $codigo = (int) $codQtd[0];
    $qtd = (int) $codQtd[1];

    if ($codigo <= count($cardapio) && $codigo >= 1) {
        foreach ($cardapio as $item) {
                if ($item[0] == $codigo) {
                    $preco = $item[1];
                    break;
            } 
        }

        $pagar = $preco * $qtd;

        echo "Total: R$ " . number_format($pagar, 2, ".", "") . "\n";
    } else {
        echo "Código inválido\n";
    }


?>