<?php


class RandomNumber
{
    private StorageInterface $storage;

    private int $min;
    private int $max;
    private array $numbers;

    public function __construct(StorageInterface $storage, array $numbers = [], int $min = 1, int $max = 1000)
    {
        $this->storage = $storage;
        $this->min = $min;
        $this->max = $max;

        $this->numbers = $storage->getFromFile();
    }

    public function getRandomNumber(): int
    {
        $number = rand($this->min, $this->max);

        $this->add($number);

        return $number;
    }

    public function add(int $number): void
    {
        $this->numbers[] = $number;
    }

    public function getAll(): array
    {
        return array_filter($this->numbers);
    }

    public function getAvg(): float
    {
        return array_sum($this->getAll()) / count($this->getAll());
    }

    public function save(): void
    {
        $this->storage->saveToFile($this->getAll());
    }
}
