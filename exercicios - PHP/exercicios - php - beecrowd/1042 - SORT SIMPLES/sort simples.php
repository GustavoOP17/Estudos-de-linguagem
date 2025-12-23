<?php 
list($A, $B, $C) = array_map('intval', explode(' ', trim(fgets(STDIN))));

$maior = max($A, $B, $C);
$menor = min($A, $B, $C);

if ($A != $maior && $A != $menor) $meio = $A;
if ($B != $maior && $B != $menor) $meio = $B;
if ($C != $maior && $C != $menor) $meio = $C;

echo "$menor\n";
echo "$meio\n";
echo "$maior\n";
echo "\n";
echo "$A\n";
echo "$B\n";
echo "$C\n";

?>