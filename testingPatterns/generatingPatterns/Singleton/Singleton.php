<?php

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
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
        throw new Exception('Cannot serialize Singleton');
    }

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        $cls = static::class;
        if(!isset(self::$instances[$cls]))
        {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }
}

$object_1 = Singleton::getInstance();
$object_2 = Singleton::getInstance();

if ($object_1 === $object_2)
{
    echo 'Singleton works, variables contain the same instance';
}
else
{
    echo 'Singleton failed, variables contain different instances';
}
