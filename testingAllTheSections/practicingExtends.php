<?php

//parent class
class CarShowroom
{
    public string $carNumber;
    public string $carModel;
    public int $carAmount;

    public function __construct($carNumber, $carModel) {
        $this->carNumber = $carNumber;
        $this->carModel = $carModel;
    }

    public function setCarAmount($amount) {
        $this->carAmount = $amount;
    }
}

//child class
class Person extends CarShowroom
{
    private string $name;
    private string $surname;
    private string $email;

    public function __construct($carNumber, $carModel, $name, $surname, $email) {
        parent::__construct($carNumber, $carModel);
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }

    public function getInfo() {
        echo $this->name . PHP_EOL;
        echo $this->surname . PHP_EOL;
        echo $this->email . PHP_EOL;
        echo $this->carNumber . PHP_EOL;
        echo $this->carAmount . PHP_EOL;
        echo $this->carModel . PHP_EOL;
    }
}

$object = new Person('78HN21', 'Ford', 'Bob', 'Doe', 'bob.doe@sxope.com');
$object->setCarAmount('20');
$object->getInfo();
