<?php

declare(strict_types=1);

function sumInbetween ($x, $y) {
    $sum = 0;
    for ($i = $x; $i <= $y; $i++) {
        $sum += $i;
    }

    $average = ($x + $y)/2;

    return "sum: $sum  average: $average \n";
}

echo sumInbetween(1, 10);
