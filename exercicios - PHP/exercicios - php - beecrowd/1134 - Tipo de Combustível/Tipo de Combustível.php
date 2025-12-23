<?php 
$numero = (int) fgets(STDIN);
$alcool = $gasolina = $diesel = 0;
while (true){
    $numero = (int) fgets(STDIN);
    while ($numero < 0 && $numero > 4) {
        $numero = (int) fgets(STDIN);
    }
    switch ($numero) {
        case 1:
            $alcool += 1;        
            break;
        case 2:
            $gasolina += 1;
            break;
        case 3:
            $diesel += 1;
    }
    if ($numero == 4) {
        break;
    }
}

echo "MUITO OBRIGADO\n";
echo "Alcool: " . $alcool . "\n";
echo "Gasolina: " . $gasolina . "\n";
echo "Diesel: " . $diesel . "\n";
?>