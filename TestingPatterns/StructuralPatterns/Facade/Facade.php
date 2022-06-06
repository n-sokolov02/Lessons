<?php

namespace TestingPatterns\StructuralPatterns\Facade;

trait GetUnitTrait
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return __CLASS__ . PHP_EOL;
    }
}

interface FacadeInterface
{
    public function get(): string;
}

class Unit1 implements FacadeInterface
{
    use GetUnitTrait;
}

class Unit2 implements FacadeInterface
{
    use GetUnitTrait;
}

class Unit3 implements FacadeInterface
{
    use GetUnitTrait;
}

class Facade
{
    private Unit1 $unit1;
    private Unit2 $unit2;
    private Unit3 $unit3;

    public function __construct()
    {
        $this->unit1 = new Unit1();
        $this->unit2 = new Unit2();
        $this->unit3 = new Unit3();
    }

    public function executeUnitMethods(): void
    {
        echo $this->unit1->get();
        echo $this->unit2->get();
        echo $this->unit3->get();
    }
}

$facade = new Facade();
$facade->executeUnitMethods();

