<?php

class Customer
{
    private int $id;

    private string $name;

    private string $email;

    public function __construct($id, $name, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function getInitial() {
        if ($this->name !== '') {
            return strtoupper(substr($this->name, 0, 1));
        }
    }

    public function __serialize(): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}

$customer = new Customer(10, 'John Doe', 'john.doe@sxope.com');
$str = serialize($customer);

var_dump($str);
