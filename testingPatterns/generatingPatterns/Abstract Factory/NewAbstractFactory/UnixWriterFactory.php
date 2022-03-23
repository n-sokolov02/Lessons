<?php

namespace DesignPatters\Creational\AbstractFactory;

class UnixWriterFactory implements WriterFactory
{
    public function createCsvWriter(): UnixCsvWriter
    {
        // TODO: Implement createCsvWriter() method.
        return new UnixCsvWriter();
    }

    public function createJsonWriter(): UnixJsonWriter
    {
        // TODO: Implement createJsonWriter() method.
        return new UnixJsonWriter();
    }
}
