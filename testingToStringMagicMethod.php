<?php

declare(strict_types=0);

//class toString
//{
//    private int $accountNumber;
//    private int $balance;
//
//    public function __construct($accountNumber, $balance) {
//        $this->accountNumber = $accountNumber;
//        $this->balance = $balance;
//    }
//
//    public function __toString() {
//        return "toString: " . $this->accountNumber . " Balance: " . $this->balance . PHP_EOL;
//    }
//}
//
//$account = new toString('123123213', 100);
//echo "Bank information: " . $account . PHP_EOL;

class Quarter
{
    private int $number;

    public function __construct($number) {
        if ($number < 0 && $number > 4) {
            throw new InvalidArgumentException('Quarter must be between 1 and 4');
        }
        $this->number = $number;
    }

    public function __toString(): string
    {
        return $this->number;
    }
}

$quarter = new Quarter(1);
echo $quarter;
