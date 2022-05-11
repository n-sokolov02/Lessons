<?php

//creating an object or collection of objects (like furniture factory)

namespace DesignPatters\Creational\Factory;

abstract class Factory
{
    public static function buildCar($car)
    {
        return new $car;
    }

    abstract public function buildSaloon();
}

class FastCar extends Factory
{
    public function buildSaloon()
    {
        // TODO: Implement buildSaloon() method.
        echo 'FAST_CAR' . PHP_EOL;
    }
}

class SlowCar extends Factory
{
    public function buildSaloon()
    {
        // TODO: Implement buildSaloon() method.
        echo 'SLOW_CAR' . PHP_EOL;
    }
}

$array = [
            Factory::buildCar(new FastCar()),
            Factory::buildCar(new SlowCar()),
        ];

foreach ($array as $element)
{
    $element->buildSaloon();
}
