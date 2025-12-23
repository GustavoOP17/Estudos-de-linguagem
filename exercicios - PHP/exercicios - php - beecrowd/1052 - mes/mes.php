<?php 
$calendario = array(
    "January", 
    "February", 
    "March", 
    "April", 
    "May", 
    "June", 
    "July", 
    "August", 
    "September", 
    "October", 
    "November", 
    "December"
);

$mes = (int) fgets(STDIN) - 1;

echo $calendario[$mes] . "\n";
?>