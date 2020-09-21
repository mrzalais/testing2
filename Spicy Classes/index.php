<?php

declare(strict_types=1);

require_once './requireMe.php';

use App\SpicesCollection;
use App\Spices\Clove;
use App\Spices\Garlic;
use App\Spices\BlackPepper;

$spices = new SpicesCollection();

$spices->addSpice(new BlackPepper('Spicy', 'Black Pepper'));
$spices->addSpice(new Clove('Sweet', 'Clove'));
$spices->addSpice(new Garlic('Spicy', 'Garlic'));

foreach ($spices->allSpices() as $spice)
{
    echo $spice->getName() . PHP_EOL;
}