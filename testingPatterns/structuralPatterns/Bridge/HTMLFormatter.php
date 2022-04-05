<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge;

class HTMLFormatter implements Formatter
{
    public function format(string $text): string
    {
        // TODO: Implement format() method.
        return sprintf('<p>%s</p>', $text);
    }
}
