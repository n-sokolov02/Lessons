<?php

class TestStatic
{
    private static array $app = [];

    private function __construct() {
    }

    public static function get() : TestStatic {
        $object = static::class;

        if (!isset(self::$app[$object])) {
            self::$app[$object] = new static();
        }

        return self::$app[$object];
    }

//    public function bootstrap(): void {
//        echo 'App is bootstrapping...'. PHP_EOL;
//    }
}

$exp = TestStatic::get();
$exp2 = TestStatic::get();

if ($exp === $exp2) {
    echo 'Singleton works' . PHP_EOL;
} else {
    echo 'Singleton failed' . PHP_EOL;
}

//exp->bootstrap();
