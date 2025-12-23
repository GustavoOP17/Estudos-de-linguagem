<?php 
$N = (int) fgets(STDIN);

for ($i=0; $i < $N; $i++) { 
    $X = (int) fgets(STDIN);
    if ($X % 2 == 0) {
        $divide = "EVEN";
    } elseif ($X % 2 != 0) {
        $divide = "ODD";
    }
    if ($X > 0) {
        $sinal = "POSITIVE";
    } elseif ($X < 0) {
        $sinal = "NEGATIVE";
    }
    if ($X == 0) {
        echo "NULL\n";
    } else {
        echo "$divide $sinal\n";  
    }
    
}

?>