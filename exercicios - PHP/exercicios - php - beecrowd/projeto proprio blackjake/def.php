<?php 
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

echo "\n👤 ================================\n";
mensagem("👤 ", "JOGADOR BOT: $tipo\nCARTAS: {$carta1["valor"]} de {$carta1["nip"]} + {$carta2["valor"]} de {$carta2["nip"]}\nSOMA INICIAL DO BOT: $somaMao\n");
echo "\n👤 ================================\n";