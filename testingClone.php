<?php

class Address
{
    public string $street;
    public string $city;
}

class Person
{
    public string $name;

    public function __construct($name) {
        $this->name = $name;
        $this->address = new Address();
    }

    public function __clone() {
        $this->address = clone $this->address;
    }
}

$bob = new Person('Bob');
$bob->address->street = 'North 1st Street';
$bob->address->city = 'San Jose';

$alex = clone $bob;
$alex->name = 'Alex';
$alex->address->street = '1 Apple Park Way';
$alex->address->city = 'Cupertino';

var_dump($bob);
var_dump($alex);

function deep_clone($object) {
    return unserialize(serialize($object));
}
