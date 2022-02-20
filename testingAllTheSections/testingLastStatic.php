<?php

class ModelLastStatic
{
    protected static string $tableName = 'Model';

    public static function getTableName(): string {
        return static::$tableName;
    }
}

class UserLastStatic extends ModelLastStatic
{
    protected static string $tableName = 'User';
}

echo UserLastStatic::getTableName();
