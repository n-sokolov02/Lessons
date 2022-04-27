<?php

class Washroom
{
    public function greet(): string
    {
        return 'Welcome to our washroom!' . PHP_EOL;
    }
}

class Classroom extends Washroom
{
    public function greet(): string
    {
        //require function in the parent class
        $greeting = parent::greet();
        return $greeting . PHP_EOL;
    }
}

$object = new Washroom();
echo $object->greet();

$android = new Classroom();
echo $android->greet();
