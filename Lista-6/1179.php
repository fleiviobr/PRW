<?php
//Preenchimento de Vetor IV

$x = array();
$imp = array();
$par = array();
$pa = 0;
$im = 0;

for ($i = 0; $i < 15; $i++) {
    $x[$i] = trim(fgets(STDIN));
}

for ($i = 0; $i < 15; $i++) {
    if
    if ($x[$i] % 2.0 == 0.0) {
        $par = $x[$i];
        $pa++;
    } else {
        $imp = $x[$i];
        $im++;
    }
}

for ($i = 0; $i < 5; $i++) {
    echo "par[$i] = " . $par[$i] . PHP_EOL;
}