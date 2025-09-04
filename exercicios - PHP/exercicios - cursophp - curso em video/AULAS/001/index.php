
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>exemplo php</h1>
    <?php 
        echo "<h1>ola, mundo</h1>";

        $nome = "bom";
        $sobre = "dia";
        $idade = 50;
        $peso = 101.9;
        $casado = true;
        const PAIS = "Brasil";
        if ($casado == false) {
            $casado = "solteiro";
        } else { 
            $casado = "casado";
        }
        echo "olá $nome $sobre, vc tem $idade anos, seu peso é $peso, $casado e vc está em " . PAIS;
    
    ?>
</body>
</html>  

