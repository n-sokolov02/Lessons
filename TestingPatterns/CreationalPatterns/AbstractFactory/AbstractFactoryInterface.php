<?php

//better than simple furniture factory, more conditions and small differences with objects

interface AbstractFactoryInterface
{
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;
}