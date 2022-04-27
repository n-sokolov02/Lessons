<?php

class Robot
{
    public function greet(): string {
        return "Hello!" . PHP_EOL;
    }
}

class Android extends Robot
{
    public function greet(): string {
        $greeting = parent::greet();
        return $greeting . ' from Android' . PHP_EOL;
    }
}

$robot = new Robot();
echo $robot->greet();

$android = new Android();
echo $android->greet();
