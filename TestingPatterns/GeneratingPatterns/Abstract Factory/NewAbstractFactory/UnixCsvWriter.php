<?php

namespace DesignPatters\Creational\AbstractFactory;

class UnixCsvWriter implements CsvWriter
{
    public function write(array $line): string
    {
        // TODO: Implement write() method.
        return join(',' , $line) . PHP_EOL;
    }
}
