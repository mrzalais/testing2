<?php

declare(strict_types=1);

$number = readline("Enter the number: \n");

switch ($number){
    case ($number > 0):
        echo "The number you entered ($number) is positive \n";
        break;
    case ($number < 0):
        echo "The number you entered ($number) is negative \n";
        break;
    default:
        echo "You entered zero, which is neither negative nor positive. \n";
        break;
}
