<?php

$num1 = intval(readline());
$num2 = intval(readline());

$menor = min($num1, $num2);
$maior = max($num1, $num2);

echo "=============== \n";

for ($i = $menor + 1; $i < $maior; $i++) {
  if ($i  % 5  == 2 || $i % 5  == 3) {
    echo $i . "\n";
  }
}
