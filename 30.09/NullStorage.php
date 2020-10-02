<?php


class NullStorage implements StorageInterface
{

    public function getFromFile(): array
    {
        return [];
    }

    public function saveToFile(array $numbers): void
    {

    }
}