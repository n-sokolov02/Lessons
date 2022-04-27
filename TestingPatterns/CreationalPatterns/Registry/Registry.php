<?php

// Solve the global scope problem. Data can be retrieved by GET method, and added by SET method.

namespace testingPatterns\creationalPatterns\RegistryPattern;

use Exception;

class RegistryPattern
{
    private static array $components = [];

    public static function set($key, $value)
    {
        self::$components[$key] = $value;
    }

    /**
     * @param $key
     * @return void
     * @throws Exception
     */
    public static function remove($key): void
    {
        if(isset(self::$components[$key]))
        {
            unset(self::$components[$key]);
        }
        else
        {
            throw new Exception('No element');
        }
    }

    /**
     * @param $key
     * @return void
     * @throws Exception
     */
    public static function get($key): void
    {
        if(isset(self::$components[$key]))
        {
            echo self::$components[$key] . PHP_EOL;
        }
        else
        {
            throw new Exception('Element was deleted or not set');
        }
    }
}

RegistryPattern::set('company', 'PHY_PARTNERS');
RegistryPattern::get('company');
RegistryPattern::remove('company');
RegistryPattern::get('company');
