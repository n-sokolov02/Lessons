<?php

abstract class ChooseCar
{
    abstract public function dump();
}

class Ford
{
    public function dump(): string {
        return "ford" . PHP_EOL;
    }
}

class Audi
{
    public function dump(): string {
        return "audi" . PHP_EOL;
    }
}

$class1 = new Audi();
echo $class1->dump();
