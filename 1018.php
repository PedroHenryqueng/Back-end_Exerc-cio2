<?php

function CalculoDeNotas($valor)
{
  $notas = [100, 50, 20, 10, 5, 2, 1];
  $quantidades = [];

  foreach ($notas as $nota) {
    $quantidade = intval($valor / $nota);
    $quantidades[$nota] = $quantidade;
    $valor -= $quantidade * $nota;
  }

  return $quantidades;
}

$valor = (int)readline("");
$notasNecessarias = CalculoDeNotas($valor);

echo "Valor total: R$ " . $valor . "\n";
foreach ($notasNecessarias as $nota => $quantidade) {
  echo $quantidade . " nota(s) de R$ " . $nota . ",00\n";
}
