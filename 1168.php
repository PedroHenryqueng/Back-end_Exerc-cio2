<?php
function contar_leds($numero) {
    $leds = ['0' => 6, '1' => 2, '2' => 5, '3' => 5, '4' => 4, '5' => 5, '6' => 6, '7' => 3, '8' => 7, '9' => 6];
    $total_leds = 0;
    for ($i = 0; $i < strlen($numero); $i++) {
        $total_leds += $leds[$numero[$i]];
    }
    return $total_leds;
}

$num_casos_teste = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $num_casos_teste; $i++) {
    $numero = trim(fgets(STDIN));
    $total_leds = contar_leds($numero);
    echo $total_leds . " leds\n";
}

