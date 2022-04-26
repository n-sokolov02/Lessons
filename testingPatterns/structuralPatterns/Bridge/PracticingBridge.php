<?php

namespace testingPatterns\structuralPatterns\PracticingBridge;

interface Formatter
{
    public function format(): string;
}

abstract class FormatService
{
    protected Formatter $formatter;

    public function __construct(Formatter $formatter)
    {
        $this->formatter = $formatter;
    }

    abstract public function getFormattedValue(): string;
}

class HTMLFormat implements Formatter
{
    public function format(): string
    {
        // TODO: Implement format() method.
        return '<b>Some string</b>' . PHP_EOL;
    }
}

class StringFormat implements Formatter
{
    public function format(): string
    {
        // TODO: Implement format() method.
        return 'Some string' . PHP_EOL;
    }
}

class SomeStringFormat extends FormatService
{
    public function getFormattedValue(): string
    {
        // TODO: Implement getFormattedValue() method.
        return $this->formatter->format();
    }
}


$html = new SomeStringFormat(new HTMLFormat());
echo $html->getFormattedValue();

$string = new SomeStringFormat(new StringFormat());
echo $string->getFormattedValue();
