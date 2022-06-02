<?php

//creating an object or collection of objects (like furniture factory)

namespace DesignPatters\Creational\Factory;

interface buildCar
{
    public function build(): string;
}

class FastCar extends Factory implements buildCar
{
    public function build(): string
    {
        // TODO: Implement build() method.
        return __CLASS__ . PHP_EOL;
    }
}

class SlowCar extends Factory implements buildCar
{
    public function build(): string
    {
        // TODO: Implement build() method.
        return __CLASS__ . PHP_EOL;
    }
}

class Factory
{
    public static function chooseCar($input)
    {
        return new $input;
    }
}

$fastCarObject = Factory::chooseCar(new FastCar());
$slowCarObject = Factory::chooseCar(new SlowCar());

$arrayOfFactories = [
    $fastCarObject,
    $slowCarObject,
];

foreach ($arrayOfFactories as $factory)
{
    echo $factory->build();
}