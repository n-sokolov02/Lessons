<?php

class PracticingSingleton
{
    private static ?PracticingSingleton $instance = null;

    private function __construct()
    {
        echo "Singleton" . PHP_EOL;
    }

    private function __clone()
    {
    }

    /**
     * @return void
     * @throws Exception
     */
    public function __wakeup(): void
    {
        // TODO: Implement __wakeup() method.
        throw new Exception("Singleton cannot be serialized");
    }

    /**
     * @return PracticingSingleton
     */
    public static function practicingGetInstances(): PracticingSingleton {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }
}

$object1 = PracticingSingleton::practicingGetInstances();
$object2 = PracticingSingleton::practicingGetInstances();
