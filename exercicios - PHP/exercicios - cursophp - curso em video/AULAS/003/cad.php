<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"] ?? "";
            $s = $_GET["sobrenome"] ?? "";
            $num = "2" + "2";
            echo "olá, boa tarde $n $s $num";
        ?>
    </main>
</body>
</html>