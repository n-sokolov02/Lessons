<?php

namespace testingPatterns\generatingPatterns\Singleton\PracticingSingleton;

class PracticingSingleton
{
    private static array $practicingSingleton;

    public static function getInstance(): PracticingSingleton
    {
        $cls = static::class;

        if (!isset(self::$practicingSingleton[$cls]))
        {
            self::$practicingSingleton[$cls] = new static();
        }

        return self::$practicingSingleton[$cls];
    }
}

function isSingletonWork(): void
{
    $object_1 = PracticingSingleton::getInstance();
    $object_2 = PracticingSingleton::getInstance();

    if ($object_1 === $object_2)
    {
        echo 'Singleton works, both variables contain the same instance';
    }
    else
    {
        echo 'Singleton failed, variables contain different instances';
    }
}

isSingletonWork();
