<?php

//class Main
//{
//    public function polymorph (): string {
//        return "parent" . PHP_EOL;
//    }
//}
//
//class Second extends Main
//{
//    public function polymorph (): string {
//        $test=parent::polymorph();
//        return $test . PHP_EOL;
//    }
//}

//abstract class Person
//{
//    abstract public function greet();
//}
//
//class English extends Person
//{
//    public function greet() {
//        return 'Hello!';
//    }
//}
//
//class German extends Person
//{
//    public function greet() {
//        return 'Hallo!';
//    }
//}
//
//class French extends Person
//{
//    public function greet() {
//        return 'Bonjour!';
//    }
//}
//
//class American extends Person
//{
//    public function greet() {
//        return 'Hi!';
//    }
//}
//
//$people = [
//    new English(),
//    new German(),
//    new French(),
//    new American()
//];
//
//function greeting ($people) {
//    foreach ($people as $person) {
//        echo $person->greet() . PHP_EOL;
//    }
//}
//
//greeting($people);


interface Greeting
{
    public function greet();
}

class English implements Greeting
{
    public function greet(): string {
        return 'Hello!';
    }
}

class German implements Greeting
{
    public function greet(): string {
        return 'Hallo!';
    }
}

class French implements Greeting
{
    public function greet(): string {
        return 'Bonjour!';
    }
}

$greeters = [
    new English(),
    new German(),
    new French()
];

function greeting($greeters) {
    foreach ($greeters as $greeter) {
        echo $greeter->greet() . PHP_EOL;
    }
}

greeting($greeters);
