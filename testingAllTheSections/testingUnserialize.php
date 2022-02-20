<?php

class UnserializeCustomer
{
    protected int $id;
    protected string $name;
    protected string $email;

    public function __construct ($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}

$customer = new UnserializeCustomer(10, 'John Doe', 'john.doe@sxope.com');
$str = serialize($customer);
file_put_contents('customer.dat', $str);

$str = file_get_contents('customer.dat');
$customer = unserialize($str);

var_dump($customer);
