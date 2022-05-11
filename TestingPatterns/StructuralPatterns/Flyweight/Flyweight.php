<?php

// Создает только 1 объект каждого класса, это позволяет оптимизировать расход памяти программы

namespace testingPatterns\creationalPatterns\Flyweight;

use Exception;

trait insertIntoClass
{
    public function get(): string
    {
        return __CLASS__;
    }
}

interface buildObject
{
    public function get();
}

class A implements buildObject
{
    use insertIntoClass;
}

class B implements buildObject
{
    use insertIntoClass;
}

class C implements buildObject
{
    use insertIntoClass;
}


class FlyweightPattern
{
    private array $instances = [];

    /**
     * @param $type
     * @return A|B|C
     * @throws Exception
     */
    public function getInstances($type): A|B|C
    {
        if (!isset($this->instances[$type]))
        {
            $this->instances[$type] = match ($type)
            {
                'A' => new A(),
                'B' => new B(),
                'C' => new C(),
            };

            return $this->instances[$type];
        }
        else
        {
            throw new Exception('This element was already initialized.');
        }
    }
}

$object = new FlyweightPattern();
$array = ['A', 'B'];

foreach ($array as $type)
{
    $instances[] = $object->getInstances($type)->get();
}

echo implode(' + ', $instances);
