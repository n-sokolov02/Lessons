<?php

class HtmlElement
{
    private array $attributes = [];

    private string $tag;

    public function __construct($tag) {
        $this->tag = $tag;
    }

    public function __set($name, $value) {
        $this->attributes[$name] = $value;
    }

    public function __get($name) {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
    }

    public function html($innerHTML = ''): string
    {
        $html = "<$this->tag";
        foreach ($this->attributes as $key => $value) {
            $html .= ' ' . $key . '="'. $value . '"';
        }
        $html .= '>';
        $html .= $innerHTML;
        $html .= "<$this->tag>";

        return $html;
    }
}

$div = new HtmlElement('div');
echo $div->html('Hello');

