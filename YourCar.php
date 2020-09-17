<?php

class YourCar
{
    public string $type;
    public string $licensePlate;
    public int $fuelSize;

    public function __Construct($type, $licensePlate, $fuelSize)
    {
        $this->type = $type;
        $this->licensePlate = $licensePlate;
        $this->fuelSize = $fuelSize;
    }

    public function driveCar($fuelSize, $type, $licensePLate)
    {
        echo "Fuel left at start: $fuelSize \n";
        sleep(1);
        while ($fuelSize > 0) {
            $currentFuel = $fuelSize - 10;
            echo "Currently $currentFuel liters of fuel left, car: $type, license plate: $licensePLate \n";
            sleep(1);
            $fuelSize = $currentFuel;
        }
        echo "You ran out of gas :((( \n";
    }
}

$BMW = new YourCar('BMW', 'AA1234', 80);
$BMW->driveCar($BMW->fuelSize, $BMW->type, $BMW->licensePlate);

