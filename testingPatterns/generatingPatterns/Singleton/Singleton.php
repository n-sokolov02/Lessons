<?php

//make only 1 object of your program

namespace testingPatterns\generatingPatterns\Singleton;

class Singleton
{
    private static array $instances = [];

    public static function getInstance(): Singleton
    {
        $cls = static::class;

        if (!isset(self::$instances[$cls]))
        {
            self::$instances[$cls] = new static;
        }

        return self::$instances[$cls];
    }
}

function getClientCode(): void
{
    $object_1 = Singleton::getInstance();
    $object_2 = Singleton::getInstance();

    if ($object_1 === $object_2)
    {
        echo 'Singleton works, both variables contain the same instance';
    }
    else
    {
        echo 'Singleton failed, variables contain different instances';
    }
}

getClientCode();
