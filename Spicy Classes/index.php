<?php

declare(strict_types=1);

require_once 'app/Spice.php';

foreach (glob('app/Spices/*.php') as $filename) {
    require_once $filename;
}

use App\SpicesCollection;
use App\Spices\{Clove, Garlic, BlackPepper};

$spices = new SpicesCollection();

$spices->addSpice(new BlackPepper('Spicy', 'Black Pepper'));
$spices->addSpice(new Clove('Sweet', 'Clove'));
$spices->addSpice(new Garlic('Spicy', 'Garlic'));

foreach ($spices->allSpices() as $spice) {
    echo $spice->getName() . PHP_EOL;
}