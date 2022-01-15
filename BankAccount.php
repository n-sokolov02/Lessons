<?php

class BankAccount
{
    public int $balance;
    public int $amount;

    public function __construct($balance, $amount) {
        $this->balance = $balance;
        $this->amount = $amount;
    }

    public function getBalance (): int
    {
        return $this->balance;
    }

    public function depositMoney($amount, $interest): static
    {
        if ($amount >= 0) {
            $this->balance += $amount;
            $this->balance += $interest;
        }

        return $this;
    }
}

class SavingAccount extends BankAccount
{
    private float $interestRate;

    public function __construct($balance, $amount, $interestRate) {
        parent::__construct($balance, $amount);
        $this->interestRate = $interestRate;
    }

    public function addInterest() {
        $interest = $this->interestRate * $this->getBalance();
        $this->depositMoney($this->amount, $interest);
    }
}

$accountNumber = new SavingAccount(10000, 100, 0.25);
$accountNumber->addInterest();
echo $accountNumber->getBalance();
