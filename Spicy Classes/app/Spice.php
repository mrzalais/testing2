<?php

declare(strict_types=1);

namespace App;

abstract class Spice
{
    private string $name;
    private string $type;
    public abstract function getType(): string;

    public function __construct(string $type, string $name)
    {
        $this->type = $type;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}