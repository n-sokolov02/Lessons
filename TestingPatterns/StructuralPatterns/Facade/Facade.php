<?php

/*
 * Задача фасада — скрыть сложную реализацию внутри какого-то класса.
 * То есть если есть 10 классов, у которых нужно выполнить кучу методов, то мы просто делаем один класс-фасад, который их и выполняет.
 * У нас же останется только один «пусковой» метод.
 */

namespace testingPatterns\Facade;

class Unit1
{
    public function methodUnit1(): string
    {
        return __CLASS__ . PHP_EOL;
    }
}

class Unit2
{
    public function methodUnit2(): string
    {
        return __CLASS__ . PHP_EOL;
    }
}

class Unit3
{
    public function methodUnit3(): string
    {
        return __CLASS__ . PHP_EOL;
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

    public function execute(): void
    {
        echo $this->unit1->methodUnit1();
        echo $this->unit2->methodUnit2();
        echo $this->unit3->methodUnit3();
    }
}

$facadeObject = new Facade();
$facadeObject->execute();
