<?php

// Создает только 1 объект каждого класса, это позволяет оптимизировать расход памяти программы

namespace testingPatterns\creationalPatterns\Flyweight;

use Exception;

interface GetClassNameInterface
{
    public function get();
}

class A implements GetClassNameInterface
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__ . PHP_EOL;
    }
}

class B implements GetClassNameInterface
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__ . PHP_EOL;
    }
}

class C implements GetClassNameInterface
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__ . PHP_EOL;
    }
}

class Flyweight
{
    private array $instances = [];

    /**
     * @param $instance
     * @return A|B|C|void
     * @throws Exception
     */
    public function getObjectsOfClasses($instance)
    {
        if (!isset($this->instances[$instance])) {
            if ($instance == 'A') {
                return new A();
            } elseif ($instance == 'B') {
                return new B();
            } elseif ($instance == 'C') {
                return new C();
            } else {
                throw new Exception('UNDEFINED INSTANCE. CHOOSE ANOTHER');
            }
        }
    }
}

function getOutputOfClassesMethods(): void
{
    $flyweight = new Flyweight();
    $instances = ['A', 'B', 'SOME_UNDEFINED_INSTANCE'];

    foreach ($instances as $instance)
    {
        echo $flyweight->getObjectsOfClasses($instance)->get();
    }
}

getOutputOfClassesMethods();