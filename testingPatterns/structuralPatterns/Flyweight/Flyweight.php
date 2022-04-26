<?php

//Создает только 1 объект каждого класса, это позволяет оптимизировать расход памяти программы

namespace testingPatterns\creationalPatterns\Flyweight;

interface getNames
{
    public function run(): string;
}

class A implements getNames
{
    public function run(): string
    {
        // TODO: Implement run() method.
        return __CLASS__ . PHP_EOL;
    }
}

class B implements getNames
{
    public function run(): string
    {
        // TODO: Implement run() method.
        return __CLASS__ . PHP_EOL;
    }
}

class C implements getNames
{
    public function run(): string
    {
        // TODO: Implement run() method.
        return __CLASS__ . PHP_EOL;
    }
}

class FlyweightFactory
{
    private array $objects = [];

    /**
     * @param $key
     * @return void
     */
    public function getObj($key)
    {
        if (!isset($this->objects[$key])) {
            switch ($key) {
                case 'A':
                    $this->objects[$key] = new A();
                    break;
                case 'B':
                    $this->objects[$key] = new B();
                    break;
                case 'C':
                    $this->objects[$key] = new C();
            }
        }

        return $this->objects[$key];
    }
}

$factory = new FlyweightFactory();
$keys = ['A', 'B', 'C'];

foreach ($keys as $key) {
    echo $factory->getObj($key)->run();
}
