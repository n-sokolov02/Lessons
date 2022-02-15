<?php

interface CarFactory {
    public function buildEngine();
    public function buildWheels();
    public function testingProduct();
}

class FastCar implements CarFactory
{
    public function buildEngine()
    {
        // TODO: Implement buildEngine() method.
        echo 'Fast Engine' . PHP_EOL;
    }

    public function buildWheels()
    {
        // TODO: Implement buildWheels() method.
        echo 'Fast Wheels' . PHP_EOL;
    }

    public function testingProduct()
    {
        // TODO: Implement testingProduct() method.
        echo 'Fast Testing' . PHP_EOL;
    }
}

class BigCar implements CarFactory
{
    public function buildEngine()
    {
        // TODO: Implement buildEngine() method.
        echo 'Big Engine' . PHP_EOL;
    }

    public function buildWheels()
    {
        // TODO: Implement buildWheels() method.
        echo 'Big Wheels' . PHP_EOL;
    }

    public function testingProduct()
    {
        // TODO: Implement testingProduct() method.
        echo 'Big Testing' . PHP_EOL;
    }
}

class CheapCar implements CarFactory
{
    public function buildEngine()
    {
        // TODO: Implement buildEngine() method.
        echo 'Cheap Engine' . PHP_EOL;
    }

    public function buildWheels()
    {
        // TODO: Implement buildWheels() method.
        echo 'Cheap Wheels' . PHP_EOL;
    }

    public function testingProduct()
    {
        // TODO: Implement testingProduct() method.
        echo 'Cheap Testing' . PHP_EOL;
    }
}

class Factory
{
    /**
     * @param $car
     */
    public static function factory($car)
    {
        $object = new $car;
        $object->buildEngine();
        $object->buildWheels();
        $object->testingProduct();
    }

}

echo 'What car do you want to build?' . PHP_EOL;
$parameters = readline();
$object = Factory::factory($parameters);
