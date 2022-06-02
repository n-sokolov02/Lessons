<?php

//creating an object or collection of objects (like furniture factory)

namespace DesignPatters\Creational\Factory;

trait getClass
{
    public function buildValue(): string
    {
        return __CLASS__ . PHP_EOL;
    }
}

abstract class Factory
{
    public static function buildObject($car)
    {
        return new $car;
    }

    abstract public function buildValue();
}

class IntFactory extends Factory
{
    use getClass;
}

class ArrayFactory extends Factory
{
    use getClass;
}

class StringFactory extends Factory
{
    use getClass;
}

$arrayOfFactories = [
    Factory::buildObject(new IntFactory()),
    Factory::buildObject(new ArrayFactory()),
    Factory::buildObject(new StringFactory()),
];

foreach ($arrayOfFactories as $factory)
{
    echo $factory->buildValue();
}
