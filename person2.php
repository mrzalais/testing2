<?php


class person
{
    protected string $name;

    protected string $surname;

    protected string $secondName;

    public function __construct(string $name, string $surname, $secondName = null)
    {
        if ($secondName != null) {
            $this->name = $name;
            $this->surname = $surname;
            $this->secondName = $secondName;
        } else {
            $this->name = $name;
            $this->surname = $surname;
        }
    }

    public function getData(): ?string
    {
        return $this->name . $this->surname . $this->secondName;
    }
}

$person = new person('Jānis', 'Bērziņš');
$person2 = new person('Bānis', 'Jērziņš');
$person3 = new person('Džobs', 'Bonsons', 'Otrvārds');

var_dump($person, $person2, $person3);
