<?php

declare(strict_types=1);

interface StorageInterface
{
    public function getFromFile(): array;
    public function saveToFile(array $numbers): void;
}