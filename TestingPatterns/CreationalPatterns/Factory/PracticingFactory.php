<?php

namespace testingPatterns\generatingPatterns\Factory\PracticingFactory;

abstract class Factory
{
    public static function getObject($object)
    {
        return new $object;
    }

    abstract public function buildObject(): string;
}

class Chair extends Factory
{
    public function buildObject(): string
    {
        // TODO: Implement buildObject() method.
        return 'CHAIR_OBJECT' . PHP_EOL;
    }
}

class Table extends Factory
{
    public function buildObject(): string
    {
        // TODO: Implement buildObject() method.
        return 'TABLE_OBJECT' . PHP_EOL;
    }
}

class Kitchen extends Factory
{
    public function buildObject(): string
    {
        // TODO: Implement buildObject() method.
        return 'KITCHEN_OBJECT' . PHP_EOL;
    }
}

class Room extends Factory
{
    public function buildObject(): string
    {
        // TODO: Implement buildObject() method.
        return 'ROOM_OBJECT' . PHP_EOL;
    }
}

function getFurnitureSteps($object): void
{
    $step = Factory::getObject($object);
    echo $step->buildObject();
}

$furniture = [
    new Chair,
    new Table,
    new Room,
    new Kitchen,
];

foreach ($furniture as $output)
{
    getFurnitureSteps($output);
}
