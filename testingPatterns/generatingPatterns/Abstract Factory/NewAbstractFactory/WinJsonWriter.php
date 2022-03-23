<?php

namespace DesignPatters\Creational\AbstractFactory;

class WinJsonWriter implements JsonWriter
{
    public function write(array $data, bool $formatted): string
    {
        // TODO: Implement write() method.
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
