<?php

class FactoryOne implements AbstractFactoryInterface
{
    public function createProductA(): AbstractProductA
    {
        // TODO: Implement createProductA() method.
        return new ProductAFactoryOne();
    }

    public function createProductB(): AbstractProductB
    {
        // TODO: Implement createProductB() method.
        return new ProductBFactoryOne();
    }
}
