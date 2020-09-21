<?php

declare(strict_types=1);

namespace app\Spice;


abstract class Spice
{
    public abstract function getType(): string;

    public function getName(): string
    {
        return get_class($this);
    }
}