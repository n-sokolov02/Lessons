<?php

class TestStaticForExam
{
    public static function who()
    {
        echo __CLASS__ . PHP_EOL;
    }

    public static function foo()
    {
        self::who();
    }
}

class Daugher extends TestStaticForExam
{
    public static function who()
    {
        echo __CLASS__ . PHP_EOL;
    }
}

Daugher::foo();
