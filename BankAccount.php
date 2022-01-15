<?php

class BankAccount
{
    public int $balance = 10000;

    public function getBalance () {
        return $this->balance;
    }

    public function depositMoney($amount) {
        if ($amount >= 0) {
            $this->balance += $amount;
        }

        return $this;
    }
}

class SavingAccount extends BankAccount
{
    private float $interestRate;

    public function setInterestRate ($interestRate) {
        $this->interestRate = $interestRate;
    }

    public function addInterest() {
        $interest = $this->interestRate * $this->getBalance();
        $this->depositMoney($interest);
    }
}

$accountNumber = new SavingAccount();
$accountNumber->depositMoney(100);
$accountNumber->setInterestRate(0.25);
$accountNumber->addInterest();
echo $accountNumber->getBalance();
