<?php 
$qtdTestes = trim((int) fgets(STDIN));
$qtdCoelhos = $qtdSapos = $qtdRatos = $total = $PercentualCoelhos = $PercentualSapos = $PercentualRatos = 0;

for ($i=0; $i < $qtdTestes; $i++) { 
    list($A, $B) = explode(" ", trim(fgets(STDIN)));
    $A = (int) $A;
    $B = trim($B);

    $total += $A;

    if ($B == "C") {
        $qtdCoelhos += $A;
    } elseif ($B == "R") {
        $qtdRatos += $A;
    } else {
        $qtdSapos += $A;
    }

    $PercentualC = ($qtdCoelhos / $total) * 100;
    $PercentualS = ($qtdSapos / $total) * 100;
    $PercentualR = ($qtdRatos / $total) * 100;
}

echo "Total: $total cobaias\n";
echo "Total de coelhos: $qtdCoelhos\n";
echo "Total de ratos: $qtdRatos\n";
echo "Total de sapos: $qtdSapos\n";
echo "Percentual de coelhos: " . number_format($PercentualC, 2, ".", "") . " %\n";
echo "Percentual de ratos: " . number_format($PercentualR, 2, ".", "")  . " %\n";
echo "Percentual de sapos: " . number_format($PercentualS, 2, ".", "")  . " %\n";
?>
