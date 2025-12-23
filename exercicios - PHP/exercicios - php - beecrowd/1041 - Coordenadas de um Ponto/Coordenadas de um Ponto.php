<?php 
list($X, $Y) = array_map('floatval', explode(' ', trim(fgets(STDIN))));

if ($X == 0 && $Y == 0) {
    echo "Origem\n";
}
if ($X == 0 && $Y != 0) {
    echo "Eixo Y\n";
} elseif ($X != 0 && $Y == 0) {
    echo "Eixo X\n";
}

if ($X > 0) {
    if ($Y > 0) {
        echo "Q1\n";
    } elseif ($Y < 0) {
        echo "Q4\n";
    }
} elseif ($X < 0) {
    if ($Y < 0) {
        echo "Q3\n";
    } elseif ($Y > 0) {
        echo "Q2\n";
    }
}


?>