<?php

class Singleton
{
    private static $instance = null;

    /**
     * @return Singleton
     */

    public static function getInstance(): Singleton
    {
        if (null == self::$instance)
        {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __clone()
    {
    }

    private function __construct()
    {
    }

    public function test()
    {
        var_dump($this);
    }
}

$object = Singleton::getInstance();
$object->test();
Singleton::getInstance()->test();

// fatal error: 
//$object_2 = new Singleton();
//$object_2 = clone $object();

