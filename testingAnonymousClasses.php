<?php

use JetBrains\PhpStorm\Pure;

interface ImplementLogger
{
    public function log(string $message): void;
}

abstract class SimpleLogger implements ImplementLogger
{
    protected string $newLine;

    public function __construct(bool $newLine) {
        $this->newLine = $newLine;
    }

    abstract public function log(string $message): void;
}

$logger = new class(true) extends SimpleLogger {
    #[Pure] public function __construct(bool $newLine) {
        parent::__construct($newLine);
    }

    public function log (string $message): void {
        echo $this->newLine ? $message . PHP_EOL : $message;
    }
};

$logger->log('Hello');
$logger->log('Bye');
//echo $logger instanceof Logger . PHP_EOL;
//echo get_class($logger) . PHP_EOL;
//$logger ->log('Hello');

//function save(Logger $logger) {
//    $logger->log('The file was updated successfully');
//}

//save($logger);
