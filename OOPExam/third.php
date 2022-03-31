<?php

abstract class A3
{
    abstract static function method();
}

abstract class B3 extends A3
{
    public static function method(){
        echo __CLASS__ . PHP_EOL;
    }
}

abstract class C3 extends B3
{
    public static function method(){
        echo __CLASS__ . PHP_EOL;
    }
}

abstract class D3 extends B3
{
    public static function method(){
        echo __CLASS__ . PHP_EOL;
    }
}

B3::method();
C3::method();
D3::method();

