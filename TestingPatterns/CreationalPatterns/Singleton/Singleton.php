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

    private function __clone()
    {
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception('Cannot serialize singleton');
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

function clientCode()
{
    $object_1 = Singleton::getInstance();
    $object_2 = Singleton::getInstance();

    if ($object_1 === $object_2) {
        echo 'Singleton works, both variables contain the same instance';
    } else {
        echo 'Singleton failed, variables contain different instances';
    }
}

clientCode();
