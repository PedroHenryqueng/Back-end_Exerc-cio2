<?php

function decifra_cesar($texto_codificado, $deslocamento)
{
    $texto_decodificado = '';
    $tamanho_alfabeto = 26;

    foreach (str_split($texto_codificado) as $caractere) {
        $ascii = ord($caractere);

        if ($ascii >= 65 && $ascii <= 90) {
            $novo_ascii = (($ascii - 65 - $deslocamento + $tamanho_alfabeto) % $tamanho_alfabeto) + 65;
            $texto_decodificado .= chr($novo_ascii);
        } else {
            $texto_decodificado .= $caractere;
        }
    }

    return $texto_decodificado;
}

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    $texto_codificado = trim(fgets(STDIN));
    $deslocamento = intval(trim(fgets(STDIN)));

    echo decifra_cesar($texto_codificado, $deslocamento) . "\n";
}

