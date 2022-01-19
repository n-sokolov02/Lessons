<?php

abstract class Model
{
    protected const TABLE_NAME = '';

    public function all(): string {
        return 'SELECT * FROM ' . static::TABLE_NAME . PHP_EOL;
    }
}

class User extends Model
{
    protected const TABLE_NAME = 'users';
}

class Role extends Model
{
    protected const TABLE_NAME = 'roles';
}

echo (new User)->all();
echo (new Role)->all();
