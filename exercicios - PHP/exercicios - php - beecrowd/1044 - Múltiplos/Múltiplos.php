<?php 
list($A, $B) = array_map('intval', explode(' ', trim(fgets(STDIN))));

if ($B % $A == 0 || $A % $B == 0) {
    echo "Sao Multiplos\n";
} else {
    echo "Nao sao Multiplos\n";
}
?>