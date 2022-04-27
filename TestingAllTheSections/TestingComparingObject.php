<?php

class Point
{
    protected int $x;
    protected int $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
}

$p1 = new Point(10,20);
$p2 = new Point(10,20);

if ($p1 === $p2) {
    echo 'p1 and p2 are equal.' . PHP_EOL;
}
else {
    echo 'p1 and p2 are not equal.' . PHP_EOL;
}

$p3 = $p2;
if ($p1 === $p3) {
    echo 'p2 and p3 are equal.' . PHP_EOL;
}
else {
    echo 'p2 and p3 are not equal.' . PHP_EOL;
}

$p4 = new Point(20,10);
if ($p3 === $p4) {
    echo 'p3 and p4 are equal.' . PHP_EOL;
}
else {
    echo 'p3 and p4 are not equal.' . PHP_EOL;
}
