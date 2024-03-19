<?php
$input = explode(" ", readline());
$a = intval($input[0]);
$b = intval($input[1]);
$c = intval($input[2]);

$maior_ab = ($a + $b + abs($a - $b)) / 2;
$maior = ($maior_ab + $c + abs($maior_ab - $c)) / 2;

echo $maior . " eh o maior\n";
