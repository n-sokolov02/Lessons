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
