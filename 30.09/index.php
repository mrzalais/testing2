<?php

declare(strict_types=1);

require_once 'StorageInterface.php';
require_once 'RandomNumber.php';
require_once 'NumberCollection.php';
require_once 'NullStorage.php';
require_once 'FileNumberStorage.php';

$numberCollection = new NumberCollection('numbers.txt');
$numberGenerator = new RandomNumber($numberCollection);

$fileNumberStorage = new FileNumberStorage('numbers.txt');

$fileNumberStorage = new RandomNumber($numberCollection);

$input = readline('How many numbers do you want to add?');

for($i = 0; $i < $input;$i++)
{
    $random = $numberGenerator->getRandomNumber();
}

$allNumbers = $numberGenerator->getAll();

$numberGenerator->save();

echo 'All numbers ' . '(' . $numberCollection->getCount($allNumbers) . ') ' . implode(' ', $numberGenerator->getAll()) . PHP_EOL;
echo 'Last number: ' . $random . PHP_EOL;
echo 'Average: ' . number_format($numberGenerator->getAvg(), 2) . PHP_EOL;
