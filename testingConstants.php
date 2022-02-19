<?php

abstract class Model
{
    protected const TABLE_NAME = '';

    public function all(): string {
        return 'SELECT * FROM ' . static::TABLE_NAME . PHP_EOL;
    }
}

class ConstantUser extends Model
{
    protected const TABLE_NAME = 'users';
}

class ConstantRole extends Model
{
    protected const TABLE_NAME = 'roles';
}

echo (new ConstantUser)->all();
echo (new ConstantRole)->all();
