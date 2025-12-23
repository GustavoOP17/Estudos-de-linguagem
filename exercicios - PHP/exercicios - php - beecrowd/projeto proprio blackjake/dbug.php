<?php
$descarte = [];

function baralho() {
    global $descarte;
    $nips = ['ouro', 'copas', 'paus', 'espadas'];
    $tentativas = 0;

    while (true) {
        $tentativas++;
        if ($tentativas > 50) {
            $descarte = [];
            $tentativas = 0;
        }
        
        $compra = [
            "valor" => random_int(1, 10),
            "nip" => $nips[array_rand($nips)]
        ];

        $qtd = 0;
        foreach ($descarte as $des) {
            if ($des["valor"] == $compra["valor"] && $des["nip"] == $compra["nip"]) {
                $qtd++;
            }
        }
        
        if ( ($compra["valor"] == 10 && $qtd < 3) || ($compra["valor"] != 10 && $qtd < 1) ) {
            $descarte[] = $compra;
            return $compra;
        }
    }
}


function mensagem($prefixo, $mensagem) {
    $linhas = explode("\n", $mensagem);
    $tamanho = 0;

    foreach ($linhas as $linha) {
        $tamanho = max($tamanho, mb_strlen($linha));
    }
    echo "$prefixo ┌" . str_repeat("─", $tamanho + 2) . "┐\n";
    foreach ($linhas as $linha) {
        $espacos = $tamanho - mb_strlen($linha);
        echo "$prefixo │ \033[0;34m" . $linha . str_repeat(" ", $espacos) . "\033[0m │\n";
    }
    echo "$prefixo └" . str_repeat("─", $tamanho + 2) . "┘\n";
}

$carta1 = baralho();
$carta2 = baralho();
$somaplayer = $carta1["valor"] + $carta2["valor"];

mensagem("👤 ", "SUAS CARTAS:\n{$carta1["valor"]} de {$carta1["nip"]} + {$carta2["valor"]} de {$carta2["nip"]}\nSOMA: $somaplayer");