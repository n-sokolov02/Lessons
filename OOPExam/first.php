<?php

class A
{
    public int $a = 5;
}

$a = new A;
$b = $a;
$c = clone $a;

$b->a = 6;
$c->a = 7;

echo $a->a . PHP_EOL; // 6
echo $b->a . PHP_EOL; // 6
echo $c->a . PHP_EOL; // 7

$a->a = 0;

echo $a->a . PHP_EOL; // 0
echo $b->a . PHP_EOL; // 0
echo $c->a . PHP_EOL; // 7
