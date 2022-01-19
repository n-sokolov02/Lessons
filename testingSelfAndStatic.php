<?php

class TestStatic
{
    private static $app = null;

    private function __construct() {
    }

    public static function get() : TestStatic {
        if (!self::$app) {
            self::$app = new TestStatic();
        }

        return self::$app;
    }

    public function bootstrap(): void {
        echo 'App is bootstrapping...'. PHP_EOL;
    }
}

$app = TestStatic::get();
$app->bootstrap();
