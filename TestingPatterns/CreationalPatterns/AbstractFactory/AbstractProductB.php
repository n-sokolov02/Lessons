<?php

interface AbstractProductB
{
    public function operationB(): string;
    public function anotherOperationB(AbstractProductA $abstractProductA): string;
}
