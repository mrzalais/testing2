<?php


class Car
{
    protected string $name;
    private int $fuelTankSize;

    public function __construct(string $name, int $fuelTankSize)
    {
        $this->name = $name;
        $this->fuelTankSize = $fuelTankSize;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function fuelTankSize(): int
    {
        return $this->fuelTankSize;
    }

    public function fuelEfficient()
    {
        return 1.2;
    }
}

class BMW extends Car
{
    private string $temperature;

    public function __construct(string $name, int $fuelTankSize, int $temperature)
    {
        parent::__construct($name, $fuelTankSize);

        $this->temperature = $temperature;
    }

    public function setTemperature()
    {
        return $this->temperature;
    }
}

class Audi extends car
{
    public function biggerTankSize()
    {
        $fuelTankSize = parent::fuelTankSize();
        return $fuelTankSize * $this->fuelEfficient();
    }
}


$BMW = new BMW('BMW X5', 85, 20);
$Audi = new Audi('Audi R8', 75);

if ($BMW instanceof BMW) {
    echo "Name of car: " . $BMW->name() . " with tank size " . $BMW->fuelTankSize() . " AND temperature control set at " . $BMW->setTemperature() . "°C". PHP_EOL;
}

if ($Audi instanceof Audi) {
    echo "Name of car: " . $Audi->name() . " with tank size " . $Audi->fuelTankSize() . " but with fuel efficiency mode tank size is technically " . $Audi->biggerTankSize() . PHP_EOL;
}