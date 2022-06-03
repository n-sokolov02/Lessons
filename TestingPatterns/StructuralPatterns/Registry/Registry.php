<?php

// Solve the global scope problem. Data can be retrieved by GET method, and added by SET method.

namespace testingPatterns\creationalPatterns\RegistryPattern;

use Exception;

class Registry
{
    private static array $data = [];

    /**
     * @param $key
     * @param $value
     * @return void
     * @throws Exception
     */
    public static function add($key, $value): void
    {
        if (!isset(self::$data[$key])) {
            self::$data[$key] = $value;
        } else {
            throw new Exception('Element was already built');
        }
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
            throw new Exception('Element was already deleted or not added');
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
            throw new Exception('Element is not set or = NULL');
        }
    }
}

Registry::add(1, 'PHY_PARTNERS');
Registry::get(1);
Registry::remove(1);
Registry::get(1);