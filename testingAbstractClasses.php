<?php

abstract class ChooseCar
{
    abstract public function dump();
}

class Ford extends ChooseCar
{
    public function dump(): string {
        return "ford" . PHP_EOL;
    }
}

class Audi extends ChooseCar
{
    public function dump(): string {
        return "audi" . PHP_EOL;
    }
}

$class1 = new Audi();
echo $class1->dump();
