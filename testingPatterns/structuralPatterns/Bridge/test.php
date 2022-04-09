<?php

interface Formatter
{
    public function format(string $text): string;
}

abstract class Service
{
    public Formatter $implementation;
    public function __construct($implementation)
    {
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
        return $text;
    }
}

class HelloWorldService extends Service
{
    public function get(): string
    {
        // TODO: Implement get() method.
        return $this->implementation->format('Hello World');
    }
}

$service = new HelloWorldService(new PlainTextFormatter());
$service->get();

$service_1 = new HelloWorldService(new HTMLFormatter());
$service_1->get();
