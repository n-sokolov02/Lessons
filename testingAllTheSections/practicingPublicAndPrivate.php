<?php

class TestPublicAndPractice
{
    public string $text;
    private string $text_1;

    public function __construct($text) {
        $this->text = $text;
    }

    public function echoPublic (): string {
        return $this->text . PHP_EOL;
    }

    public function setPrivate ($text_1) {
        $this->text_1 = $text_1;
    }

    public function getPrivate (): string{
        return $this->text_1 . PHP_EOL;
    }
}

$publicAndPrivate = new TestPublicAndPractice('Public');
echo $publicAndPrivate->echoPublic();

$publicAndPrivate->setPrivate('Private');
echo $publicAndPrivate->getPrivate();
