<?php

namespace DesignPatters\Creational\AbstractFactory;

class WinCsvWriter implements CsvWriter
{
    public function write(array $line): string
    {
        // TODO: Implement write() method.
        return WinCsvWriter . phpjoin(',', $line);
    }
}
