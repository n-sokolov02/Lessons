<?php

/*
 * Задача фасада — скрыть сложную реализацию внутри какого-то класса.
 * То есть если есть 10 классов, у которых нужно выполнить кучу методов, то мы просто делаем один класс-фасад, который их и выполняет.
 * У нас же останется только один «пусковой» метод.
 */

namespace testingPatterns\Facade;

class Unit1
{
    public function getUnit1(): string
    {
        return __CLASS__;
    }
}

class Unit2
{
    public function getUnit2(): string
    {
        return __CLASS__;
    }
}

class Unit3
{
    public function getUnit3(): string
    {
        return __CLASS__;
    }
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

    public function run(): array
    {
        return [
        $this->unit1->getUnit1(),
        $this->unit2->getUnit2(),
        $this->unit3->getUnit3(),
        ];
    }
}

$facade = new Facade();
echo implode(' + ', $facade->run());
