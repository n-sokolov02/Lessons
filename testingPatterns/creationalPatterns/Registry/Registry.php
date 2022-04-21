<?php

// Solve the global scope problem. Data can be retrieved by GET method, and added by SET method.

namespace testingPatterns\creationalPatterns\Registry;

use Exception;

class Registry
{
    public static array $data = [];

    public static function set($key, $value): void
    {
        self::$data[$key] = $value;
    }

    public static function get($key): void
    {
        echo self::$data[$key] . PHP_EOL;
    }

    /**
     * @param $key
     * @return void
     * @throws Exception
     */
    public static function remove($key): void
    {
        if(array_key_exists($key, self::$data))
        {
            unset(self::$data[$key]);
        } else
        {
            throw new Exception('No element');
        }
    }
}

Registry::set('name', 'some-value');
Registry::get('name') . PHP_EOL;
Registry::remove('name');
Registry::get('name');
