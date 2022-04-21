<?php

//Bridge is used, when we have some big classes, which work separately.

interface Formatter
{
    public function format(string $text): string;
}

abstract class Service
{
    public Formatter $implementation;
    public function __construct($implementation)
    {
        $this->implementation = $implementation;
    }

    abstract public function get(): string;
}

class HTMLFormatter implements Formatter
{
    public function format(string $text): string
    {
        // TODO: Implement format() method.
        return sprintf('<p>%s</p>', $text);
    }
}

class PlainTextFormatter implements Formatter
{
    public function format(string $text): string
    {
        // TODO: Implement format() method.
        return $text . PHP_EOL;
    }
}

class HelloWorldService extends Service
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return $this->implementation->format('Hello World') . PHP_EOL;
    }
}

$service = new HelloWorldService(new PlainTextFormatter());
echo $service->get();

$service_1 = new HelloWorldService(new HTMLFormatter());
echo $service_1->get();
