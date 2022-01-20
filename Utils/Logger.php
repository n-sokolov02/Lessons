<?php

namespace Store\Utils;

use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;

class Logger
{
    public function log($message) {
        var_dump('Log ' . $message . PHP_EOL);
    }
}
