<?php

class Main
{
    public function polymorph (): string {
        return "parent" . PHP_EOL;
    }
}

class Second extends Main
{
    public function polymorph (): string {
        $test=parent::polymorph();
        return $test . PHP_EOL;
    }
}

$testing = new Main();
echo $testing->polymorph();

$android_1 = new Second();
echo $android_1->polymorph();
