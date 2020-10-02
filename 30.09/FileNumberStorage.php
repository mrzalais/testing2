<?php


class FileNumberStorage implements StorageInterface
{
    private string $path;

    private const DELIMITER = ';';

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function getFromFile(): array
    {
        return (array)explode(self::DELIMITER, file_get_contents($this->path));
    }

    public function saveToFile(array $numbers): void
    {
        file_put_contents($this->path, implode(self::DELIMITER, $numbers));
    }
}
