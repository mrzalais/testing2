<?php

class YourCar
{
    public string $type;
    public string $licensePlate;
    public int $fuelSize;
    protected int $pin;

    public function __Construct($type, $licensePlate, $fuelSize)
    {
        $this->type = $type;
        $this->licensePlate = $licensePlate;
        $this->fuelSize = $fuelSize;
    }

    public function driveCar($fuelSize, $type, $licensePLate)
    {
        $odoMeter = 0;
        $speed = 90;
        echo "Fuel left at start: $fuelSize \n";
        sleep(1);
        while ($fuelSize > 0) {
            $currentFuel = $fuelSize - 10;
            $currentOdoMeter = $odoMeter + $speed;
            echo "Currently $currentFuel liters of fuel left, car: $type, license plate: $licensePLate, total driven distance: $currentOdoMeter \n";
            sleep(1);
            $fuelSize = $currentFuel;
            $odoMeter = $currentOdoMeter;
        }
        echo "You ran out of gas :((( \n";
    }

    public static function whoAmI()
    {
        return get_called_class();
    }

    public function getPin() {
        return $this->pin;
    }
}

class BMW extends YourCar
{
    public function BMWPin()
    {
        return $pin = 0000;
    }
}

class Audi extends YourCar
{
    public function AudiPin()
    {
        return $pin = 0000;
    }
}

class Volvo extends YourCar
{
    public function VolvoPin()
    {
        return $pin = 0000;
    }
}

echo "Available cars: \n";
echo BMW::whoAmI() . PHP_EOL;
echo Audi::whoAmI() . PHP_EOL;
echo Volvo::whoAmI() . PHP_EOL;

$userChoice = readline("Which of these cars you want: ");

echo "Great idea for choosing $userChoice\n";

$userPin = readline("Do you remember the pin we gave you (#%%#@hacked = BMW = 0000; Audi = 1111; Volvo = 2222: ");

sleep(2);

switch ($userPin) {
    case $userPin == 0000 && $userChoice == 'BMW';
        echo "Entered correct PIN, let's go for a ride \n";
        $BMW = new $userChoice('BMW', 'AA1234', 80);
        $BMW->driveCar($BMW->fuelSize, $BMW->type, $BMW->licensePlate);
        break;
    case $userPin == 1111 && $userChoice == 'Audi':
        echo "Entered correct PIN, let's go for a ride \n";
        $Audi = new $userChoice('Audi', 'BB4567', 100);
        $Audi->driveCar($Audi->fuelSize, $Audi->type, $Audi->licensePlate);
        break;
    case $userPin == 2222 && $userChoice == 'Volvo':
        echo "Entered correct PIN, let's go for a ride \n";
        $Volvo = new $userChoice('Volvo', 'XX3939', 80);
        $Volvo->driveCar($Volvo->fuelSize, $Volvo->type, $Volvo->licensePlate);
        break;
}

