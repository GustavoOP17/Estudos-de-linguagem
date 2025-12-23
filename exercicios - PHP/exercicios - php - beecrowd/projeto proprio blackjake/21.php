<?php  
$descarte = [];
$historicoApostaBot = [];
$historicoApostaPlayer = [];
$lucrobot = [];
$estatisticasbot = ["vitorias"=>0,"derrotas"=>0,"empates"=>0,"21"=>0];
$lucroplayer = [];
$estatisticasplayer = ["vitorias"=>0,"derrotas"=>0,"empates"=>0,"21"=>0];

function baralho() {
    global $descarte;
    $nips = ['ouro', 'copas', 'paus', 'espadas'];
    $tentativas = 0;

    while (true) {
        $tentativas++;
        if ($tentativas > 200) {
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
    $linhas = explode("\n", trim($mensagem));
    $tamanho = 0;
    foreach ($linhas as $linha) $tamanho = max($tamanho, mb_strlen($linha));
    echo "$prefixo ┌" . str_repeat("─", $tamanho + 2) . "┐\n";
    foreach ($linhas as $linha) {
        $espacos = $tamanho - mb_strlen($linha);
        echo "$prefixo │ \033[0;34m" . $linha . str_repeat(" ", $espacos) . "\033[0m │\n";
    }
    echo "$prefixo └" . str_repeat("─", $tamanho + 2) . "┘\n";
}


function exibeCarta($prefixo, $carta) {
    $texto = "{$carta['valor']} de {$carta['nip']}";
    $tamanho = mb_strlen($texto);

    echo "$prefixo ┌" . str_repeat("─", $tamanho + 2) . "┐\n";
    echo "$prefixo │  " . $texto . " │\n";
    echo "$prefixo └" . str_repeat("─", $tamanho + 2) . "┘\n";
}

function acao($acao, &$sum, &$aposta, &$éPlayer=false){
    global $historicoApostaPlayer;
    if ($acao == "Hit") {
        $carta1 = baralho();
        echo "🃏 ➕ COMPROU CARTA: {$carta1["valor"]} de {$carta1["nip"]}\n";
        $sum += $carta1["valor"];
        echo "📊 NOVA SOMA: $sum\n";
    } elseif ($acao == "Double") {
        if ($aposta > 0) {
            echo "💎 DOBROU A APOSTA!\n";
            $aposta *= 2;
            echo "💰 APOSTA TOTAL: R$ $aposta\n";
        }
        $carta = baralho();
        echo "🃏 ➕ CARTA APÓS DOUBLE: {$carta['valor']} de {$carta['nip']}\n";
        $sum += $carta["valor"];
        echo "📊 NOVA SOMA: $sum\n";
    } elseif ($acao == "Stand") {
        echo "✋ STAND! Manteve a mão atual.\n";
    }
}


function perfilJogador(&$patrimoniobot, &$derrotasmat, $somaMesa, $player=true) {
    global $historicoApostaBot;
    static $tipagem = null;
    if ($tipagem === null) $tipagem = random_int(1, 4);
    $tipoPessoa = ["Matemático", "Martingaleiro", "Adrenalina", "Impulsivo"];
    $tipo = $tipoPessoa[$tipagem - 1];

    $carta1 = baralho();
    $carta2 = baralho();
    $somaMao = $carta1["valor"] + $carta2["valor"];
    echo "\n👤 ================================\n";
    mensagem("👤 ", "JOGADOR BOT: $tipo\nCARTAS: {$carta1["valor"]} de {$carta1["nip"]} + {$carta2["valor"]} de {$carta2["nip"]}\nSOMA INICIAL DO BOT: $somaMao\n");
    echo "\n👤 ================================\n"; 
    
    switch ($tipagem) {
        case 1: // Matemático — aposta moderada
            $apostaRodada = min(random_int(50, 200), 1000);
            $derrotasmat = 0;
            break;
        case 2: // Martingaleiro
            if ($derrotasmat == 0) $apostaRodada = min(random_int(50, 200), $patrimoniobot);
            else $apostaRodada = min(random_int(50, 200) * (2 ** ($derrotasmat - 1)), $patrimoniobot);
            break;
        case 3: // Adrenalina — aposta alta aleatória
            $apostaAleatoria = random_int(1, 3);
            if ($apostaAleatoria == 1) $apostaRodada = min(random_int(500, 2000), $patrimoniobot);
            elseif ($apostaAleatoria == 2) $apostaRodada = round(min(random_int(200, 600), $patrimoniobot) * 1.3);
            else $apostaRodada = min(random_int(100, 500), $patrimoniobot);
            break;
        case 4: // Impulsivo
        default:
            $apostaRodada = round(min(random_int(300, 600), $patrimoniobot) * [1.4, 1.5, 1.7][random_int(0, 2)]);
            break;
    }

    if ($patrimoniobot <= 0) $apostaRodada = 0;
    if ($apostaRodada > $patrimoniobot) $apostaRodada = $patrimoniobot;

    echo "💰 Aposta do BOT ($tipo): R$ $apostaRodada\n";
    $historicoApostaBot[] = $apostaRodada;

    while ($somaMao < 17) {
        $chance = random_int(0, 10);
        if ($somaMao <= 11) {
            $acao = "Hit";
        } elseif ($somaMao >= 12 && $somaMao <= 16) {
            $acao = ($chance < 3) ? "Stand" : "Hit";
        } else {
            $acao = "Stand";
        }
        $player = false;
        acao($acao, $somaMao, $apostaRodada, $player);
        if ($acao == "Stand") break;
    }

    return ["soma" => $somaMao, "aposta" => $apostaRodada];
}

function resultadobot($somaMaobot, $somaMesa, $apostaRodadabot, &$patrimoniobot, &$derrotasmat) { 
    global $lucrobot, $estatisticasbot; 
    echo "\n🎯 ======== RESULTADO ========\n"; 
    if ($somaMaobot == 21 && $somaMesa != 21) { 
        echo "💥🎯 BLACKJACK! O bot tirou 21!\n"; 
        $ganho = $apostaRodadabot * 5; 
        $estatisticasbot["21"]++; 
        $lucrobot[] = $ganho; 
        echo "💰 GANHOU: R$ $ganho\n"; 
    } elseif ($somaMaobot > 21 || $somaMesa > $somaMaobot && $somaMesa < 22) { 
        echo "💥 ESTOUROU! A casa VENCEU\n"; 
        $ganho = (-1) * $apostaRodadabot;
        $derrotasmat++; 
        $estatisticasbot["derrotas"]++; 
        $lucrobot[] = $ganho;
        echo "💸 PERDEU: R$ $ganho\n"; 
    } elseif ($somaMesa > 21 && $somaMaobot <= 21) { 
        echo "🏆 VITÓRIA! Casa estourou\n"; 
        $ganho = $apostaRodadabot * 2; 
        $estatisticasbot["vitorias"]++; 
        $lucrobot[] = $ganho; 
        echo "💰 GANHOU: R$ $ganho\n"; 
    } elseif ($somaMaobot == $somaMesa) { 
        echo "🤝 EMPATE! (Push)\n"; 
        $estatisticasbot["empates"]++; 
        echo "💰 Aposta devolvida\n"; 
        $lucrobot[] = 0; 
    }
    $patrimoniobot += $ganho;
    echo "💳 SALDO ATUAL: R$ $patrimoniobot\n"; 
    echo "🎯 ===========================\n\n"; 
} 

function resultadoplayer ($somaMaoplayer, $somaMesa, $apostaRodadaPlayer, &$patrimonioplayer) { 
        global $lucrobot, $estatisticasbot; 
    echo "\n🎯 ======== SEU RESULTADO ========\n"; 
    if ($somaMaoplayer == 21 && $somaMesa != 21) { 
        echo "💥🎯 BLACKJACK! O bot tirou 21!\n"; 
        $ganho = $apostaRodadaPlayer * 5; 
        $estatisticasbot["21"]++; 
        $lucrobot[] = $ganho; 
        echo "💰 GANHOU: R$ $ganho\n"; 
    } elseif ($somaMaoplayer > 21 || $somaMesa > $somaMaoplayer && $somaMesa < 22) { 
        echo "💥 ESTOUROU! A casa VENCEU\n"; 
        $ganho = (-1) * $apostaRodadaPlayer;
        $estatisticasbot["derrotas"]++; 
        $lucrobot[] = $ganho;
        echo "💸 PERDEU: R$ $ganho\n"; 
    } elseif ($somaMesa > 21 && $somaMaoplayer <= 21) { 
        echo "🏆 VITÓRIA! Casa estourou\n"; 
        $ganho = $apostaRodadaPlayer * 2; 
        $estatisticasbot["vitorias"]++; 
        $lucrobot[] = $ganho; 
        echo "💰 GANHOU: R$ $ganho\n"; 
    } elseif ($somaMaoplayer == $somaMesa) { 
        echo "🤝 EMPATE! (Push)\n"; 
        $estatisticasbot["empates"]++; 
        echo "💰 Aposta devolvida\n"; 
        $lucrobot[] = 0; 
    }
    $patrimonioplayer += $ganho;
    echo "💳 SALDO ATUAL: R$ $patrimonioplayer\n"; 
    echo "🎯 ===========================\n\n"; 
}

function player($somaMesa, $ativo=true, $patrimonioplayer) {
    global $historicoApostaPlayer;
    if ($patrimonioplayer <= 1) {
        echo "⚠️ Você está sem saldo.\n";
        return $patrimonioplayer;
    }
    
    while (true) {
        echo "🎲 Digite sua aposta (você tem R$ $patrimonioplayer): R$ ";
        $line = trim(fgets(STDIN));
        if ($line === '') continue;
        $apostaRodadaPlayer = (int)$line;
        if ($apostaRodadaPlayer <= 0) {
            echo "❌ Aposta inválida! Tente novamente.\n";
            continue;
        }
        if ($apostaRodadaPlayer > $patrimonioplayer) {
            echo "❌ Saldo insuficiente, você tem apenas R$ $patrimonioplayer.\n";
            continue;
        }
        break;
    }

    $historicoApostaPlayer[] = $apostaRodadaPlayer;

    $carta1 = baralho();
    $carta2 = baralho(); 
    $somaplayer = $carta1["valor"] + $carta2["valor"];
    
    mensagem("👤 ", "SUAS CARTAS:\n{$carta1["valor"]} de {$carta1["nip"]} + {$carta2["valor"]} de {$carta2["nip"]}\nSOMA: $somaplayer");

    while (true) {
        echo "📋 ESCOLHA SUA AÇÃO:\n";
        echo "🎯 [ 1 ] HIT (Pedir carta)\n";
        echo "💎 [ 2 ] DOUBLE (Dobrar aposta)\n";
        echo "✋ [ 3 ] STAND (Parar)\n";
        echo "➡️  Sua escolha: ";
        $op = (int) trim(fgets(STDIN));
        while ($op < 0 || $op  > 3) {
            echo "❌ Opção inválida! Tente novamente: ";
            $op = (int) trim(fgets(STDIN));
        }

        if ($op == 1) {
            acao("Hit", $zero, $somaplayer, $zero, $apostaRodadaPlayer, true);
            if ($somaplayer > 21) break;
        } elseif ($op == 2) {
            if ($apostaRodadaPlayer * 2 > $patrimonioplayer) {
                echo "❌ Você não tem saldo para dobrar.\n";
                continue;
            }
            acao("Double", $zero, $somaplayer, $zero, $apostaRodadaPlayer, true); 
            break;
        } else {
            acao("Stand", $zero, $somaplayer, $zero, $apostaRodadaPlayer, true); 
            break;
        }
    }
    return ['soma' => $somaplayer, 'aposta' => $apostaRodadaPlayer, 'saldo' => $patrimonioplayer];   
}

function mesa() {
    global $estatisticasbot, $estatisticasplayer;

    $patrimoniobot = 5000;
    $patrimonioplayer = 5000;
    $derrotasmat = 0;

    echo "🎰 ================================\n";
    echo "🎰        BLACKJACK INICIADO       \n";
    echo "🎰 ================================\n\n";

    echo "Quantas rodadas desejar jogar? ";
    $rodadas = (int) fgets(STDIN);
    if ($rodadas < 1) {
        echo "Nenhuma rodada selecionada. Saindo.\n";
        return;

    }

    while ($rodadas > 0) {
        echo "\n🔄 ======== NOVA RODADA ========\n";
        
        $cartaMesa1 = baralho();
        $cartaMesa2 = baralho();
        $somaMesa = $cartaMesa1["valor"] + $cartaMesa2["valor"];

        echo "Primeira carta da mesa:\n";
        exibeCarta("🏠", $cartaMesa1);

        $resultadoBot = perfilJogador($patrimoniobot, $derrotasmat, $somaMesa);
        $somaMaobot = $resultadoBot['soma'];
        $apostaBot = $resultadoBot['aposta'];

        echo "🏠 📊 SOMA DA CASA (inicial): {$cartaMesa1['valor']}\n";

        $resultadoplayer = player($cartaMesa1["valor"], true, $patrimonioplayer);
        $somaplayer = $resultadoplayer['soma'];
        $apostaPlayer = $resultadoplayer['aposta'];

        echo "Segunda carta da mesa :\n";
        exibeCarta("🏠", $cartaMesa2);
        echo "🏠 📊 SOMA INICIAL DA MESA: {$cartaMesa1['valor']} + {$cartaMesa2['valor']} = $somaMesa\n";

        while ($somaMesa < 16) {
            $cartaExtra = baralho();
            $somaMesa += $cartaExtra["valor"];
            echo "🏠 🃏 CASA COMPROU: {$cartaExtra['valor']} de {$cartaExtra['nip']}\n";
            echo "🏠 📊 SOMA ATUAL DA CASA: $somaMesa\n";
        }

        exibeCarta("🏠 💎", "SOMA FINAL DA CASA: $somaMesa");

        echo "\n📊 PLACAR ATUAL:\n";
        echo "👤 Jogador - Vitórias: {$estatisticasplayer['vitorias']} | Derrotas: {$estatisticasplayer['derrotas']} | Empates: {$estatisticasplayer['empates']}\n";
        echo "🏠 Casa   - Vitórias: {$estatisticasbot['vitorias']} | Derrotas: {$estatisticasbot['derrotas']} | Empates: {$estatisticasbot['empates']}\n";

        resultadoplayer($somaplayer, $somaMesa, $apostaPlayer, $patrimonioplayer);

        resultadobot($somaMaobot, $somaMesa, $apostaBot, $patrimoniobot, $derrotasmat);

        echo "💳 SALDOS — Jogador: R$ $patrimonioplayer | Casa: R$ $patrimoniobot\n";

        $rodadas--;
    }

    echo "\n🔚 JOGO FINALIZADO. Placar final:\n";
    echo "👤 Jogador - Vitórias: {$estatisticasplayer['vitorias']} | Derrotas: {$estatisticasplayer['derrotas']} | Empates: {$estatisticasplayer['empates']}\n";
    echo "🏠 Casa   - Vitórias: {$estatisticasbot['vitorias']} | Derrotas: {$estatisticasbot['derrotas']} | Empates: {$estatisticasbot['empates']}\n";
}


mesa();
?>
