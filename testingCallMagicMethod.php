<?php

class Str
{
    private string $s = '';

    private array $functions = [
        'length' => 'strlen',
        'upper' => 'strtoupper',
        'lower' => 'strtolower',
    ];

    public function __construct(string $s) {
        $this->s = $s;
    }
    public function __call($method, $args) {
        if (!in_array($method, array_keys($this->functions))) {
            throw new BadMethodCallException();
        }

        array_unshift($args, $this->s);

        return call_user_func_array($this->functions[$method], $args);
    }
}

$s = new Str('Hello, World!');
echo $s->upper() . PHP_EOL;
echo $s->lower() . PHP_EOL;
echo $s->length() . PHP_EOL;
