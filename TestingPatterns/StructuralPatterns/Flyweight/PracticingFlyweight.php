<?php

namespace testingPatterns\creationalPatterns\testingFlyweight;

trait getNameOfClass
{
    public function run(): string
    {
        // TODO: Implement run() method.
        return __CLASS__ . PHP_EOL;
    }
}

interface practiceFlyweight
{
    public function run(): string;
}

class A implements practiceFlyweight
{
    use getNameOfClass;
}

class B implements practiceFlyweight
{
    use getNameOfClass;
}

class C implements practiceFlyweight
{
    use getNameOfClass;
}

class PracticingFlyweight
{
    private array $instances = [];

    /**
     * @param $id
     * @return mixed|A|B|C
     */
    public function getFlyweightObjects($id)
    {
        if (!isset($this->instances[$id]))
        {
            switch ($id)
            {
                case 'A':
                    $this->instances[$id] = new A();
                    break;
                case 'B':
                    $this->instances[$id] = new B();
                    break;
                case 'C':
                    $this->instances[$id] = new C();
                    break;
            }
        }

        return $this->instances[$id];
    }
}

$flyweight = new PracticingFlyweight();
$ids = ['A', 'B'];

foreach ($ids as $id)
{
    echo $flyweight->getFlyweightObjects($id)->run();
}
