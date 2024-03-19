<?php
function mdc($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function tamanho_maximo_pilha($f1, $f2) {
    $divisor_comum = mdc($f1, $f2);
    return $divisor_comum;
}

$N = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $N; $i++) {
    $entrada = explode(" ", trim(fgets(STDIN)));
    $F1 = intval($entrada[0]);
    $F2 = intval($entrada[1]);

    echo tamanho_maximo_pilha($F1, $F2) . "\n";
}

