<?php

class Person
{
    public string $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

$bob = new Person('Bob');
$alex = $bob;

$alex->name = 'Alex';

var_dump($bob);
var_dump($alex);
