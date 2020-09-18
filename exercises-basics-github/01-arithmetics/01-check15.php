<?php

declare(strict_types=1);

function check15 ($x, $y){
    if ($x == 15 | $y == 15 | $x + $y == 15 | $x - $y == 15){
        return true . PHP_EOL;
    } else {
        return 'nope' . PHP_EOL;
    }
}

echo check15(15,10);
echo check15(10,15);
echo check15(5,10);
echo check15(15,5);
echo check15(1,100);
