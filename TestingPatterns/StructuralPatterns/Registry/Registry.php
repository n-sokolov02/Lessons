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
            echo 'INFO: Element was added' . PHP_EOL;
        } else {
            throw new Exception('Element was already set');
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
            echo 'INFO: ' . self::$data[$key] . PHP_EOL;
        } else {
            throw new Exception('Element is not set');
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
            echo 'INFO: Element was removed' . PHP_EOL;
        } else {
            throw new Exception('Element was not set or already removed');
        }
    }
}

function clientCodeWithCatchingExceptions(): void
{
    /*
     try {
        Registry::add(1, 'PHY_PARTNERS');
    } catch (Exception $e) {
    }

    try {
        Registry::get(1);
    } catch (Exception $e) {
    }

    try {
        Registry::remove(1);
    } catch (Exception $e) {
    }

    try {
        Registry::get(1);
    } catch (Exception $e) {
    }
    */

    Registry::add(1, 'PHY_PARTNERS');
    Registry::get(1);
    Registry::remove(1);
    Registry::get(1);
}

clientCodeWithCatchingExceptions();
