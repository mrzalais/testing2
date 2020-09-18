<?php

declare(strict_types=1);

class Vehicle
{
    private string $brand;
    private string $licensePlate;
    private float $fuelSize;
    private float $fuelConsumption;
    private int $pin;
    private float $odometer;


    public function __Construct(
        string $brand,
        string $licensePlate,
        float $fuelSize,
        float $fuelConsumption,
        int $pin,
        float $odometer = 0
    )
    {
        $this->brand = $brand;
        $this->licensePlate = $licensePlate;
        $this->fuelSize = $fuelSize;
        $this->fuelConsumption = $fuelConsumption;
        $this->pin = $pin;
        $this->odometer = $odometer;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getLicensePlate()
    {
        return $this->licensePlate;
    }

    public function getPin()
    {
        return $this->pin;
    }

    public function getCurrentFuelAmount()
    {
        return $this->fuelSize;
    }

    public function getDistance()
    {
        return $this->odometer;
    }


    public function updateDistance(float $distance)
    {
        $this->drivenDistance($distance);
        $this->consumedFuel(-(($this->fuelConsumption / 100) * $distance));
    }

    public function consumedFuel($distance)
    {
        $this->fuelSize += $distance;
    }


    public function drivenDistance($distance)
    {
        $this->odometer += $distance;
    }
}


$cars = [
    new Vehicle('Fiat Multipla', '373 BTC', 30, 3.5, 3131),
    new Vehicle('Pontiac Aztek', 'WLTR WY7', 120, 12, 308),
    new Vehicle('Aston Martin Lagonda Shooting Break', 'LV9999', 80, 8, 1111),
    new Vehicle('Subaru Tribeca', 'WW3333', 80, 10, 2000),
    new Vehicle('Mitsubishi Icar', 'A8 MMC', 15, 1, 9999),
    new Vehicle('Toyota Yaris Verso', '1 B357', 30, 3.5, 3131)

];

echo "Available cars: \n";
foreach ($cars as $carNumber => $car) {
    echo 'Key: ' . $carNumber . ' | ';
    echo $car->getBrand() . ' | ';
    echo "Plate: " . $car->getLicensePlate() . ' | ';
    echo 'PIN: ' . $car->getPin() . ' | ' . PHP_EOL;

}

$userChoice = -1;
$max = count($cars);

while ($userChoice < 0 | $userChoice > $max) {
    $userChoice = readline("Which of these cars you want: ");
    $car = $cars[$userChoice] ?? null;
    if ($car === null) {
        echo "Did you enter the car key correctly? \n";
    }
}

echo "Great idea for choosing " . $car->getBrand() . "\n";

$attempts = 3;
$lock = true;

while ($attempts > 0 && $lock === true) {
    $userPin = readline("Enter the pin: ");
    if ($userPin != $car->getPin()) {
        $attempts--;
        echo "Incorrect pin! $attempts attempts left \n";
    } else {
        break;
    }
}

if ($attempts == 0) {
    echo "Car is blocked, please contact the manager \n";
    exit;
}

$lock = false;

if ($lock === false) {
    echo "Fuel left at start: " . $car->getCurrentFuelAmount() . "\n";

    sleep(1);

    echo "Starting " . $car->getBrand() . PHP_EOL;

    sleep(2);

    while ($car->getCurrentFuelAmount() > 0) {
        $distance = rand(1, 10);

        $car->updateDistance($distance);

        echo "car: " . $car->getBrand() . " | ";
        echo "Currently " . $car->getCurrentFuelAmount() . " liters of fuel left | ";
        echo "distance driven:" . $car->getDistance() . " | ";
        echo "license plate: " . $car->getLicensePlate() . "\n";

        sleep(1);
    }
    echo "You ran out of gas :((( \n";
}



