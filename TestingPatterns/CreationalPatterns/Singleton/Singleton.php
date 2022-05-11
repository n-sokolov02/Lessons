<?php

//make only 1 instance of your program

namespace testingPatterns\generatingPatterns\Singleton;

use Exception;

class Singleton
{
    private static array $instances = [];

    private function __construct()
    {
    }

    private function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception('Singleton cannot be serialized');
    }

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }
}

function clientCode(): void
{
    $object_1 = Singleton::getInstance();
    $object_2 = Singleton::getInstance();

    if ($object_1 === $object_2) {
        echo 'Singleton works, both variables contain the same instance';
    } else
    {
        echo 'Singleton failed, variables contain different instances';
    }
}

clientCode();
