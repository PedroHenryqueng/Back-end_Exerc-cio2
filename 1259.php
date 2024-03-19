<?php
$quantidade = intval(trim(fgets(STDIN))); // Lê a quantidade de números a serem inseridos

$pares = [];
$impares = [];

// Lê os números e os classifica em pares e ímpares
for ($i = 0; $i < $quantidade; $i++) {
    $num = intval(trim(fgets(STDIN)));
    if ($num % 2 == 0) {
        $pares[] = $num; // Adiciona o número par ao array de pares
    } else {
        $impares[] = $num; // Adiciona o número ímpar ao array de ímpares
    }
}

sort($pares); // Ordena os números pares em ordem crescente
rsort($impares); // Ordena os números ímpares em ordem decrescente

// Imprime os números pares seguidos dos ímpares
foreach ($pares as $par) {
    echo $par . "\n";
}
foreach ($impares as $impar) {
    echo $impar . "\n";
}

