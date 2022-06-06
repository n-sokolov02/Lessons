<?php

class ProductBFactoryTwo implements AbstractProductB
{
    public function operationB(): string
    {
        // TODO: Implement operationB() method.
        return 'PRODUCT_B | FACTORY_TWO' . PHP_EOL;
    }

    public function anotherOperationB(AbstractProductA $abstractProductA): string
    {
        // TODO: Implement anotherOperationB() method.
        $joinProduct = $abstractProductA->operationA();
        return $this->operationB() . ' [WITH] ' . $joinProduct . PHP_EOL;
    }
}
