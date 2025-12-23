<?php 
$N = (int) fgets(STDIN);

for ($i=1; $i < $N; $i++) { 
    echo "$N " . $N**2 . " " . $N**3 . "\n";
    echo "$N " . $N**2+1 . " " . $N**3+1 . "\n";
}

?>

