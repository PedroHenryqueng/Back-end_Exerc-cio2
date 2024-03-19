<?php

while (true) {
    fscanf(STDIN, "%d %d", $M, $N);

    if ($M <= 0 || $N <= 0) {
        break;
    }


    $menor = min($M, $N);
    $maior = max($M, $N);

    $soma = 0;

    for ($i = $menor; $i <= $maior; $i++) {
        echo $i . " ";
        $soma += $i;
    }

    echo "Soma= " . $soma . "\n";
}
