<?php

// Создает только 1 объект каждого класса, это позволяет оптимизировать расход памяти программы

namespace testingPatterns\creationalPatterns\Flyweight;

use Exception;

interface getClassName
{
    public function get(): string;
}

class A implements getClassName
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__ . PHP_EOL;
    }
}

class B implements getClassName
{
    public function get(): string
    {
        return __CLASS__ . PHP_EOL;
    }
}

class C implements getClassName
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__ . PHP_EOL;
    }
}

class Flyweight
{
    private array $instances;

    /**
     * @param $className
     * @return A|B|C
     * @throws Exception
     */
    public function getFlyweightName($className): A|B|C
    {
        if (!isset($this->instances[$className])) {
            $this->instances[$className] = match($className) {
                'A' => new A(),
                'B' => new B(),
                'C' => new C(),
            };

            return $this->instances[$className];
        }
        else {
            throw new Exception('Wrong classname');
        }
    }
}

$instances = ['A', 'C'];
$object = new Flyweight();

foreach($instances as $instance)
{
    try {
        echo $object->getFlyweightName($instance)->get();
    } catch (Exception $e) {
    }
}
