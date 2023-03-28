<?php
// Menor e Posição

$x = array();
$z = array();
$y = intval(trim(fgets(STDIN)));
$a = fgets(STDIN);

for ($i = 0; $i < $y; $i++) {
    $x[$i] = intval($a[i]);
    $z[$i] = $x[$i];
}

sort($x);

echo "Menor valor: $x[0]" . PHP_EOL;
echo "Posicao: $search($x[0], $z);" . PHP_EOL;
?>