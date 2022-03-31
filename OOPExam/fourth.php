<?php

class A4
{
    protected static string $name = 'Danya';

    public static function getName(): string
    {
        return self::$name;
    }
}

class B4 extends A4
{
    protected static string $name = 'Pavel';
}
#--------------------------
class C4
{
    protected static string $name = 'Danya';

    public static function getName(): string
    {
        return static::$name;
    }
}

class D4 extends C4
{
    protected static string $name = 'Pavel';
}

echo B4::getName() . PHP_EOL;
echo D4::getName() . PHP_EOL;

