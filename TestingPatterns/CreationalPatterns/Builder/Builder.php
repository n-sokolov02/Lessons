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

    public function getParts(): void
    {
        echo implode(' + ', $this->parts) . PHP_EOL;
    }
}

class Builder implements BuilderProcess
{
    private Product $product;

    public function __construct()
    {
        $this->resetProduct();
    }

    public function resetProduct(): void
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

    public function getResultProduct(): void
    {
        $this->product->getParts();
        $this->resetProduct();
    }
}

class Director
{
    private Builder $builder;

    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildMinProduct(): Builder
    {
        $this->builder->produceStepA();
        return $this->builder;
    }

    public function buildMixedProduct(): Builder
    {
        $this->builder->produceStepA();
        $this->builder->produceStepC();
        return $this->builder;
    }

    public function buildMaxProduct(): Builder
    {
        $this->builder->produceStepA();
        $this->builder->produceStepB();
        $this->builder->produceStepC();
        return $this->builder;
    }
}

function setBuilderAndBuildProduct(Director $director): void
{
    $theBuilder = new Builder();
    $director->setBuilder($theBuilder);

    $director->buildMinProduct()->getResultProduct();
    $director->buildMixedProduct()->getResultProduct();
    $director->buildMaxProduct()->getResultProduct();
}

$director = new Director();
setBuilderAndBuildProduct($director);