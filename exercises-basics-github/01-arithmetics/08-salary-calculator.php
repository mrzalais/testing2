<?php

declare(strict_types=1);

function getPaid ($hours, $wage) {
    switch ($hours) {
        case $hours <= 40 && $wage >= 8.00:
            echo $hours * $wage;
            break;
        case $hours > 40 && $hours <= 60 && $wage >= 8.00:
            return 40 * $wage + ($hours - 40) * ($wage * 1.5);
        case $hours > 60:
            echo "Decrease the work hours you sociopath";
            break;
        case $wage < 8.00:
            echo "Pls pay a living wage then try again";
            break;
    }
}

echo getPaid (35, 7.50) . PHP_EOL;
echo getPaid (47, 8.20) . PHP_EOL;
echo getPaid (73, 10.00) . PHP_EOL;
