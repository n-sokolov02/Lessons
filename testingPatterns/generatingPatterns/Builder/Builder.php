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
    public array $parts = [];

    public function getParts(): string
    {
        return implode(' + ', $this->parts);
    }
}

class Builder implements BuilderProcess
{
    protected Product $product;

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
        $this->product->parts[] = 'PART_A';
    }

    public function produceStepB()
    {
        // TODO: Implement produceStepB() method.
        $this->product->parts[] = 'PART_B';
    }

    public function produceStepC()
    {
        // TODO: Implement produceStepC() method.
        $this->product->parts[] = 'PART_C';
    }

    public function getResultProduct(): string
    {
        $result = $this->product->getParts();
        $this->resetProduct();
        return $result . PHP_EOL;
    }
}

class Director
{
    private Builder $builder;

    public function setBuilder(BuilderProcess $builderProcess): void
    {
        $this->builder = $builderProcess;
    }

    public function buildMinVariance(): void
    {
        $this->builder->produceStepA();
    }

    public function buildMixedVariance(): void
    {
        $this->builder->produceStepA();
        $this->builder->produceStepB();
    }

    public function buildMaxVariance(): void
    {
        $this->builder->produceStepA();
        $this->builder->produceStepB();
        $this->builder->produceStepC();
    }
}

function getBuildedProduct(Director $director): void
{
    $theBuilder = new Builder();
    $director->setBuilder($theBuilder);

    $director->buildMinVariance();
    echo $theBuilder->getResultProduct();

    $director->buildMixedVariance();
    echo $theBuilder->getResultProduct();

    $director->buildMaxVariance();
    echo $theBuilder->getResultProduct();
}

$director = new Director();
getBuildedProduct($director);
