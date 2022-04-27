<?php

use JetBrains\PhpStorm\Pure;

class Address
{
    public string $street;
    public string $city;
}

class ClonePerson
{
    public string $name;
    public ?Address $address;

    #[Pure] public function __construct($name) {
        $this->name = $name;
        $this->address = new Address();
    }

    public function __clone() {
        $this->address = clone $this->address;
    }
}

$bob = new ClonePerson('Bob');
$bob->address->street = 'North 1st Street';
$bob->address->city = 'San Jose';

$alex = clone $bob;
$alex->name = 'Alex';
$alex->address->street = '1 Apple Park Way';
$alex->address->city = 'Cupertino';

var_dump($bob);
var_dump($alex);
