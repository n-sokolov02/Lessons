<?php

//creating an object or collection of objects (like furniture factory)

namespace DesignPatters\Creational\Factory;

abstract class Factory
{
    public static function buildCar($car)
    {
        return new $car;
    }

    abstract public function buildEngine();
}

class SlowCar extends Factory
{
    public function buildEngine()
    {
        // TODO: Implement buildEngine() method.
        echo 'SLOW_CAR' . PHP_EOL;
    }
}

class MediumCar extends Factory
{
    public function buildEngine()
    {
        // TODO: Implement buildEngine() method.
        echo 'MEDIUM_CAR' . PHP_EOL;
    }
}

class FastCar extends Factory
{
    public function buildEngine()
    {
        // TODO: Implement buildEngine() method.
        echo 'FAST_CAR' . PHP_EOL;
    }
}

$instances = [
        Factory::buildCar(new SlowCar()),
        Factory::buildCar(new MediumCar()),
        Factory::buildCar(new FastCar()),
    ];

foreach ($instances as $instance)
{
    $instance->buildEngine();
}

