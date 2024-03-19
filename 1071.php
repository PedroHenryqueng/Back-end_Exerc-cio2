<?php
function isOdd($num) {
    return $num % 2 != 0;
}

function sumOfOddNumbers($x, $y) {
    $sum = 0;
    $start = min($x, $y);
    $end = max($x, $y);

    for ($i = $start; $i <= $end; $i++) {
        if (isOdd($i)) {
            $sum += $i;
        }
    }
    return $sum;
}
echo "Digite o valor de X: ";
$x = intval(trim(fgets(STDIN)));
echo "Digite o valor de Y: ";
$y = intval(trim(fgets(STDIN)));
$result = sumOfOddNumbers($x, $y);
echo "$result\n";

