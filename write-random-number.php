<?php

declare(strict_types=1);

function giveRandom()
{
    return rand(1,1000);
}
$filename = file('numbers.txt');
file_put_contents("numbers.txt",giveRandom(),FILE_APPEND);
file_put_contents("numbers.txt"," ",FILE_APPEND);

$number = explode(' ', file_get_contents('numbers.txt'));
$count = count($number) - 1;
$average = array_sum($number)/$count;
echo round($average, 2);
echo PHP_EOL;
