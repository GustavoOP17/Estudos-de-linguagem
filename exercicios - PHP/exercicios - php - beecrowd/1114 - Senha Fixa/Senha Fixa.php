<?php 
$senha = 2002;
$tentativa = 0;
while (true) {
    $tentativa = (int) fgets(STDIN);

    if ($tentativa == $senha) {
        echo "Acesso Permitido\n";
        break;
    } else {
        echo "Senha Invalida\n";
    }
}
?>