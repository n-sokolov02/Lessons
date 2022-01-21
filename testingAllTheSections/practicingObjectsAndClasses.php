<?php

class PracticeClass
{
    public string $text;
    public string $text_2 = 'Practice';

    public function __construct($text) {
        $this->text = $text;
    }

    public function echoTest () {
        echo $this->text . PHP_EOL;
    }

    public function echoPractice () {
        echo $this->text_2;
    }
}

$practice = new PracticeClass('This is OOP');
$practice->echoTest();
$practice->echoPractice();
