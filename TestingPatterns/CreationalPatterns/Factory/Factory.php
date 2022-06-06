<?php

//creating an object or collection of objects (like furniture factory)

namespace DesignPatters\Creational\Factory;

abstract class Factory
{
    public static function buildObject($object)
    {
        return new $object;
    }

    abstract public function build(): string;
}

class FirstClass extends Factory
{
    public function build(): string
    {
        // TODO: Implement build() method.
        return __CLASS__ . PHP_EOL;
    }
}

class SecondClass extends Factory
{
    public function build(): string
    {
        // TODO: Implement build() method.
        return __CLASS__ . PHP_EOL;
    }
}

class ThirdClass extends Factory
{
    public function build(): string
    {
        // TODO: Implement build() method.
        return __CLASS__ . PHP_EOL;
    }
}

function getClasses(): void
{
    $array = [
        Factory::buildObject(new FirstClass()),
        Factory::buildObject(new SecondClass()),
        Factory::buildObject(new ThirdClass()),
    ];

    foreach ($array as $element)
    {
        echo $element->build();
    }
}

getClasses();