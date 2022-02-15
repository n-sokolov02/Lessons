<?php

class Singleton
{
    private static array $instances = [];

    /**
     * @return Singleton
     */

    public static function getInstance(): Singleton
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls]))
        {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    private function __clone()
    {
    }

    private function __construct()
    {
    }

    /**
     * @throws Exception
     */
    private function __wakeup(): void
    {
        // TODO: Implement __wakeup() method.
        throw new Exception("Cannot unserialize a singleton.");
    }

}

function UsersCode()
{
    $obj1 = Singleton::getInstance();
    $obj2 = Singleton::getInstance();
    if ($obj1 === $obj2) {
        echo 'Singleton works, both variables contain the same instance' . PHP_EOL;
    } else {
        echo 'Singleton failed, variables contain different instances' . PHP_EOL;
    }
}

UsersCode();
