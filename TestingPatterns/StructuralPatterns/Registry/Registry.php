<?php

// Solve the global scope problem. Data can be retrieved by GET method, and added by SET method.

namespace testingPatterns\creationalPatterns\RegistryPattern;

use Exception;

class Registry
{
    private static array $data = [];

    public static function add($key, $value): void
    {
        self::$data[$key] = $value;
    }

    /**
     * @param $key
     * @return void
     * @throws Exception
     */
    public static function remove($key): void
    {
        if (isset(self::$data[$key])) {
            unset(self::$data[$key]);
        } else {
            throw new Exception('This element was already deleted or not set');
        }
    }

    /**
     * @param $key
     * @return void
     * @throws Exception
     */
    public static function get($key): void
    {
        if (isset(self::$data[$key])) {
            echo self::$data[$key];
        } else {
            throw new Exception('Element was not set');
        }
    }
}

Registry::add(1, 'PHY_PARTNERS');
Registry::get(1);
Registry::remove(1);
Registry::get(1);

