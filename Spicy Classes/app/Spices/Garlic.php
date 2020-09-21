<?php


declare(strict_types=1);

namespace app\Spice;


class Garlic extends Spice
{
    private string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}