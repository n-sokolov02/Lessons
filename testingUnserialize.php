<?php

class Customer
{
    public function __construct (
        private int $id,
        private string $name,
        private string $email,
    ) {
    }

    public function getInitial() {
        if ($this->name !== '') {
            return strtoupper(substr($this->name, 0, 1));
        }
    }
}

$customer = new Customer(10, 'John Doe', 'john.doe@sxope.com');
$str = serialize($customer);
file_put_contents('customer.dat', $str);

$str = file_get_contents('customer.dat');
$customer = unserialize($str);

var_dump($customer);
