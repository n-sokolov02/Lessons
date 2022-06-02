<?php

// Создает только 1 объект каждого класса, это позволяет оптимизировать расход памяти программы

namespace testingPatterns\creationalPatterns\Flyweight;

use Exception;
use function testingPatterns\creationalPatterns\RegistryPattern\clientCodeWithCatchingExceptions;

trait getClassName
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__ . PHP_EOL;
    }
}

interface FlyweightPattern
{
    public function get();
}

class A implements FlyweightPattern
{
    use getClassName;
}

class B implements FlyweightPattern
{
    use getClassName;
}

class C implements FlyweightPattern
{
    use getClassName;
}

class Flyweight
{
    /**
     * @param $instance
     * @return A|B|C
     * @throws Exception
     */
    public function getFlyweightClasses($instance): A|B|C
    {
        if ($instance == 'A') {
            return new A();
        } elseif ($instance == 'B') {
            return new B();
        } else if ($instance == 'C') {
            return new C();
        } else {
            throw new Exception('Undefined class name');
        }
    }
}

$flyweightObject = new Flyweight();
$instances = ['A', 'B', 'UNDEFINED'];

function clientCode($instances, $object)
{
    foreach ($instances as $instance)
{
    try {
        echo $object->getFlyweightClasses($instance)->get();
    } catch (Exception $e) {
    }
}
}

clientCode($instances, $flyweightObject);
