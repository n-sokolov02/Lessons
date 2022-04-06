<?php

abstract class Factory
{
    public static function buildEngine($car)
    {
        return new $car;
    }

    abstract public function build();
}

class FastCar extends Factory
{
    public function build()
    {
        // TODO: Implement buildEngine() method.
        echo 'FastCar' . PHP_EOL;
    }
}

class BigCar extends Factory
{
    public function build()
    {
        // TODO: Implement build() method.
        echo 'BigCar' . PHP_EOL;
    }
}

class CheapCar extends Factory
{
    public function build()
    {
        // TODO: Implement build() method.
        echo 'CheapCar' . PHP_EOL;
    }
}

$cheapCar = Factory::buildEngine('CheapCar');
$bigCar = Factory::buildEngine('BigCar');
$fastCar = Factory::buildEngine('FastCar');

$cheapCar->build();
$bigCar->build();
$fastCar->build();
