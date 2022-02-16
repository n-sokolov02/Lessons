<?php

interface CarWash
{
    public function WashIn();
    public function WashOut();
    public function AirIn();
}

class FirstCarWash implements CarWash
{
    public function WashIn()
    {
        // TODO: Implement WashIn() method.
        echo "first car wash (wash in)" . PHP_EOL;
    }

    public function WashOut()
    {
        // TODO: Implement WashOut() method.
        echo "first car wash (wash out)" . PHP_EOL;
    }

    public function AirIn()
    {
        // TODO: Implement AirIn() method.
        echo "first car wash (air in)" . PHP_EOL;
    }
}

class SecondCarWash implements CarWash
{
    public function WashIn()
    {
        // TODO: Implement WashIn() method.
        echo "second car wash (wash in)" . PHP_EOL;
    }

    public function WashOut()
    {
        // TODO: Implement WashOut() method.
        echo "second car wash (wash out)" . PHP_EOL;
    }

    public function AirIn()
    {
        // TODO: Implement AirIn() method.
        echo "second car wash (air in)" . PHP_EOL;
    }
}

class ThirdCarWash implements CarWash
{
    public function WashIn()
    {
        // TODO: Implement WashIn() method.
        echo "third car wash (wash in)" . PHP_EOL;
    }

    public function WashOut()
    {
        // TODO: Implement WashOut() method.
        echo "third car wash (wash out)" . PHP_EOL;
    }

    public function AirIn()
    {
        // TODO: Implement AirIn() method.
        echo "third car wash (air in)" . PHP_EOL;
    }
}

class WashFactory
{
    public static function washFactory ($car)
    {
        $object = new $car;
        $object->WashIn();
        $object->WashOut();
        $object->AirIn();
    }
}

echo 'In what wash do you want to drive?' . PHP_EOL;
$choose = readline();
$object = WashFactory::washFactory($choose);
