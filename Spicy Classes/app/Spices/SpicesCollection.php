<?php

namespace App;

class SpicesCollection
{
    private array $spices = [];

    public function addSpice($spice): void
    {
        $this->spices[] = $spice;
    }

    public function allSpices(): array
    {
        return $this->spices;
    }
}