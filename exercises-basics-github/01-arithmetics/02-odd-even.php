<?php

declare(strict_types=1);

function CheckOddEven ($x) {
    if($x % 2 == 0) {
        return 'even' . PHP_EOL;
    } else {
        return 'odd' . PHP_EOL;
    }
}

echo CheckOddEven(11);
echo CheckOddEven(10);
