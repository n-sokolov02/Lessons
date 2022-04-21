<?php

// This pattern can get objects in different views.
// There is some product - class Product
// Magic method __construct and method resetProduct to add and reset object of the product after creating it. Method getParts to view all the parts of the Product
// There are some builder. For example class Builder. It should implement some interface (BuilderProcess) or realize some abstract class and make it wider.
// ^ means, that all the builder have the different result of each product
// class Director is needed to realize the methods of the builders by different ways, (function buildMinProduct, buildMaxProduct, buildMixedProduct)

namespace testingPatterns\generatingPatterns\Builder;

interface BuilderProcess
{
    public function produceStepA();
    public function produceStepB();
    public function produceStepC();
}

class Product
{
    public array $data = [];

    public function getParts(): string
    {
        return 'RESULT: ' . implode(' + ', $this->data) . PHP_EOL;
    }
}

class Builder implements BuilderProcess
{
    public Product $product;

    public function __construct()
    {
        $this->resetProduct();
    }

    public function resetProduct()
    {
        $this->product = new Product();
    }

    public function produceStepA()
    {
        // TODO: Implement produceStepA() method.
        $this->product->data[] = 'STEP_A';
    }

    public function produceStepB()
    {
        // TODO: Implement produceStepB() method.
        $this->product->data[] = 'STEP_B';
    }

    public function produceStepC()
    {
        // TODO: Implement produceStepC() method.
        $this->product->data[] = 'STEP_C';
    }

    public function getResultProduct(): string
    {
        $result = $this->product->getParts();
        $this->resetProduct();
        return $result;
    }
}

class Director
{
    public Builder $builder;

    public function setBuilder(BuilderProcess $builderProcess)
    {
        $this->builder = $builderProcess;
    }

    public function buildMinProduct()
    {
        $this->builder->produceStepA();
    }

    public function buildMixedProduct()
    {
        $this->builder->produceStepA();
        $this->builder->produceStepB();
    }

    public function buildMaxProduct()
    {
        $this->builder->produceStepA();
        $this->builder->produceStepB();
        $this->builder->produceStepC();
    }
}

function getProduct(Director $director)
{
    $theBuilder = new Builder();
    $director->setBuilder($theBuilder);

    $director->buildMinProduct();
    echo $theBuilder->getResultProduct();

    $director->buildMixedProduct();
    echo $theBuilder->getResultProduct();

    $director->buildMaxProduct();
    echo $theBuilder->getResultProduct();
}

$director = new Director();
getProduct($director);
