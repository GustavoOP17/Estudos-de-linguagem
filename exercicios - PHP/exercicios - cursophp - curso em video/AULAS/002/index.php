<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos</title>
</head>
<body>
    <h1>teste de tipos primitivos</h1>
    <?php  
    echo "<h2>ESCALARES</h2>";
    $num = 10;
    echo "o numero é $num";
    
    $v = 300; 
    echo "<br><br>";
    var_dump($v);

    echo "<br><br>";
    //$a = (real) "43";

    echo "<h2>COMPOSTOS</h2>";
    $vetor = [9, 9, 2, 10];
    echo "o vetor é $vetor";

    echo "<br><br>";

    var_dump($vetor);
    
    echo "<br><br>";
    echo "<h2>ESPECIAIS</h2>";
    class Pessoa {
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);
    ?>
</body>
</html>