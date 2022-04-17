<?php

class Product
{
    public static array $data = [];

    public static function get($key): void
    {
        echo self::$data[$key];
    }

    /**
     * @param $key
     * @return void
     * @throws Exception
     */
    public static function remove($key): void
    {
        if (array_key_exists($key, self::$data))
        {
            unset(self::$data[$key]);
        } else
        {
            throw new Exception('No element');
        }
    }

    public static function set($key, $value): void
    {
        self::$data[$key] = $value;
    }
}

Product::set('name', 'product');
echo PHP_EOL;
Product::get('name');
echo PHP_EOL;

$flag = readline();

if ($flag = 1)
{
    Product::remove('name');
}

if (!(array_key_exists('name', Product::$data)))
{
    echo 'deleted. ' . PHP_EOL;
}
