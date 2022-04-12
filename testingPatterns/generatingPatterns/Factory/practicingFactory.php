<?php

abstract class FactoryWash
{
    public static function buildWash($washroom)
    {
        return new $washroom;
    }

    abstract public function carWash();
}

class FirstCarWash extends FactoryWash
{
    public function carWash(): string
    {
        // TODO: Implement carWash() method.
        return __CLASS__ . PHP_EOL;
    }
}

class SecondCarWash extends FactoryWash
{
    public function carWash(): string
    {
        // TODO: Implement carWash() method.
        return __CLASS__ . PHP_EOL;
    }
}

class ThirdCarWash extends FactoryWash
{
    public function carWash(): string
    {
        // TODO: Implement carWash() method.
        return __CLASS__ . PHP_EOL;
    }
}

$firstCarWash = FirstCarWash::buildWash('FirstCarWash');
$secondCarWash = SecondCarWash::buildWash('SecondCarWash');
$thirdCarWash = ThirdCarWash::buildWash('ThirdCarWash');

$outputArray = [
    $firstCarWash->carWash(),
    $secondCarWash->carWash(),
    $thirdCarWash->carWash(),
];

print_r($outputArray);
