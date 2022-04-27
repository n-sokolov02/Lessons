<?php

//creating an object or collection of objects (like furniture factory)

namespace DesignPatters\Creational\Factory;

abstract class Factory
{
    abstract public function build();

    public static function buildCar($car)
    {
        return new $car;
    }
}

class FirstBuilder extends Factory
{
    public function build(): string
    {
        // TODO: Implement build() method.
        return __CLASS__ . PHP_EOL;
    }
}

class SecondBuilder extends Factory
{
    public function build(): string
    {
        // TODO: Implement build() method.
        return __CLASS__ . PHP_EOL;
    }
}

class ThirdBuilder extends Factory
{
    public function build(): string
    {
        // TODO: Implement build() method.
        return __CLASS__ . PHP_EOL;
    }
}

$builder =
    [
        FirstBuilder::buildCar('FirstBuilder'),
        SecondBuilder::buildCar('SecondBuilder'),
        ThirdBuilder::buildCar('ThirdBuilder'),
    ];

$result = [
    $builder[0]->build(),
    $builder[1]->build(),
    $builder[2]->build(),
];

var_dump($result);
