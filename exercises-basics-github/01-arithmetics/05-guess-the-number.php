<?php

declare(strict_types=1);

$computerNumber = rand(1, 100);

$playerNumber = readline('Guess the number (1-100): ');

if ($playerNumber > $computerNumber) {
    echo "Too high, the number was $computerNumber \n";
} elseif ($playerNumber < $computerNumber) {
    echo "Too low, the number was $computerNumber \n";
} else {
    echo "YOU GOT IT \n";
}
