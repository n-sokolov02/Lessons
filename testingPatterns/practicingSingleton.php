<?php

class PracticeSingleton
{
    private static ?PracticeSingleton $instance = null;

    /**
     * @return PracticeSingleton
     */
    public static function getSingleInstance(): PracticeSingleton
    {
        if (self::$instance == null) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    private function __construct()
    {
        echo 'Testing Singleton' . PHP_EOL;
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
        throw new Exception("Singleton cannot be serialized");
    }
}

$object_1 = PracticeSingleton::getSingleInstance();
$object_2 = PracticeSingleton::getSingleInstance();

