<?php

use JetBrains\PhpStorm\ArrayShape;

class SerializeCustomer
{
    private int $id;

    private string $name;

    private string $email;

    public function __construct($id, $name, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    #[ArrayShape(['id' => "int", 'name' => "string", 'email' => 'string'])] public function __serialize(): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}

$customer = new SerializeCustomer(10, 'John Doe', 'john.doe@sxope.com');
$str = serialize($customer);

var_dump($str);
