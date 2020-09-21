<?php

declare(strict_types=1);

require_once './app/Spices/Spices.php';
require_once './app/Spices/Clove.php';
require_once './app/Spices/BlackPepper.php';
require_once './app/Spices/Garlic.php';


use app\Spice;

$pepper = new \app\Spice\BlackPepper('Spicy');
var_dump($pepper);

$clove = new \app\Spice\Clove('Sweet');
var_dump($clove);

$garlic = new \app\Spice\Garlic('Spicy');
var_dump($garlic);