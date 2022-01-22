<?php

class PracticeClass
{
    //$text and $text_2 are attributes
    public string $text;
    public string $text_2 = 'Practice';

    public function __construct($text)
    {
        $this->text = $text;
    }

    //echoTest is a method
    public function echoTest ()
    {
        echo $this->text . PHP_EOL;
    }

    //echoPractice is a method
    public function echoPractice ()
    {
        echo $this->text_2;
    }
}

//$practice - is an object
$practice = new PracticeClass('This is OOP');
$practice->echoTest();
$practice->echoPractice();
