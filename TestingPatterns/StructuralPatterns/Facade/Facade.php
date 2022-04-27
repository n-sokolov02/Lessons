<?php

class Unit1
{
    public function run(): void
    {
        echo __CLASS__ . ' -> run()' . PHP_EOL;
    }
}

class Unit2
{
    public function show(): void
    {
        echo __CLASS__ . ' -> show()' . PHP_EOL;
    }
}

class Unit3
{
    public function out(): void
    {
        echo __CLASS__ . ' -> out()' . PHP_EOL;
    }
}

class Facade
{
    protected Unit1 $unit1;
    protected Unit2 $unit2;
    protected Unit3 $unit3;

    public function __construct()
    {
        $this->unit1 = new Unit1();
        $this->unit2 = new Unit2();
        $this->unit3 = new Unit3();
    }

    public function execute(): void
    {
        $this->unit1->run();
        $this->unit2->show();
        $this->unit3->out();
    }
}

$facade = new Facade();
$facade->execute();
