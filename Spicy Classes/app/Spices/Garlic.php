<?php

declare(strict_types=1);

namespace App\Spices;

use app\Spice;


class Garlic extends Spice
{
    private string $type;

    public function getType(): string
    {
        return $this->type;
    }
}