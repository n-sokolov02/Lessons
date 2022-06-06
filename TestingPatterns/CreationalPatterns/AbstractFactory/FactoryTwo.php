<?php

class FactoryTwo implements AbstractFactoryInterface
{
    public function createProductA(): AbstractProductA
    {
        // TODO: Implement createProductA() method.
        return new ProductAFactoryTwo();
    }

    public function createProductB(): AbstractProductB
    {
        // TODO: Implement createProductB() method.
        return new ProductBFactoryTwo();
    }
}
