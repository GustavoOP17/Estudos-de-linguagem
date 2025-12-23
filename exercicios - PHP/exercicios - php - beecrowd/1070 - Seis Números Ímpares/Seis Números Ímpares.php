<?php 
$numero = (int) fgets(STDIN);
$vez = 0;
if ($numero % 2 == 0) {
    $numero += 1;
}
while ($vez < 6) {
    if ($numero % 2 == 1) {
        echo "$numero\n";
    }
    $numero += 2;
    $vez += 1;
}

?>