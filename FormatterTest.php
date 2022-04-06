<?php

namespace DesignPatterns\Structural\Bridge;

use DesignPatterns\Structural\Bridge\HelloWorldService;
use DesignPatterns\Structural\Bridge\HTMLFormatter;
use DesignPatterns\Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class FormatterTest extends TestCase
{
    public function testCanPrintUsingThePlaintTextFormatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        $this->assertSame('Hello World', $service->get());
    }

    public function testCanPrintUsingTheHTMLTextFormatter()
    {
        $service = new HelloWorldService(new HTMLFormatter());
        $this->assertSame('<p>Hello World</p>', $service->get());
    }
}
