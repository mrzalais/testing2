<?php


class NumberCollection implements StorageInterface
{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function getFromFile(): array
    {
        return (array)explode(' ', file_get_contents($this->path));
    }

    public function saveToFile(array $numbers): void
    {
        file_put_contents($this->path, implode(' ', $numbers));
    }

    public function getCount(array $numbers): int
    {
        return count($numbers);
    }
}
