<?php

spl_autoload_register(function($className) {
    include $className . '.php';
});

function getProductsOfFactoryOne(): void
{
    $factoryOne = new FactoryOne();

    $productA = $factoryOne->createProductA();
    $productB = $factoryOne->createProductB();

    echo $productA->operationA();
    echo $productB->operationB();
    echo $productB->anotherOperationB(new ProductAFactoryOne());
}

function getProductsOfFactoryTwo(): void
{
    $factoryTwo = new FactoryTwo();

    $productA = $factoryTwo->createProductA();
    $productB = $factoryTwo->createProductB();

    echo $productA->operationA();
    echo $productB->operationB();
    echo $productB->anotherOperationB(new ProductAFactoryTwo());
}

getProductsOfFactoryOne();
getProductsOfFactoryTwo();