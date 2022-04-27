<?php

class BankAccount
{
    private int $balance;

    public function __construct($amount)
    {
        $this->balance = $amount;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
        return $this;
    }

    public function withdraw($amount): bool
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}


class CheckingAccount extends BankAccount
{
    private int $minBalance;

    public function __construct($amount, $minBalance) {
        if ($amount > 0 && $amount >= $minBalance) {
            parent::__construct($amount);
            $this->minBalance = $minBalance;
        } else {
            throw new InvalidArgumentException('amount must be more than zero and higher than the minimum balance');
        }
    }

    public function withdraw($amount): bool {
        $canWithdraw = $amount > 0 &&
            $this->getBalance() - $amount > $this->minBalance;

        if ($canWithdraw) {
            parent::withdraw($amount);

            return true;
        }

        return false;
    }
}
