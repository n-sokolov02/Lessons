<?php

const C = 'G';

abstract class D
{
    CONST constant = 0;
}

class A2
{
    const C = 'A';
}

class B2 extends A2 implements I
{
    const C = 'B';
}

interface I
{
    const C = 'I';
}

echo C . PHP_EOL;
echo A2::C . PHP_EOL;
echo B2::C . PHP_EOL;
echo I::C . PHP_EOL;
echo D::constant;
