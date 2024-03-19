<?php
$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));
$c = intval(fgets(STDIN));
$MaiorAB = ($a + $b + abs($a - $b)) / 2;
$maior = ($MaiorAB + $c + abs($MaiorAB - $c)) / 2;

echo "$maior eh o maior";


