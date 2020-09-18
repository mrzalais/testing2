<?php

declare(strict_types=1);

function factorThis(int $number)
{
    $fact = 1;

    for ($i = $number; $i >= 1; $i--) {
        $fact = $fact * $i;
    }
    return $fact . PHP_EOL;
}
echo factorThis(5);
echo factorThis(50);
echo factorThis(100);
echo factorThis(33);
echo factorThis(3);
