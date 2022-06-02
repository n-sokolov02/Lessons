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
    public function produceStepA(): void;
    public function produceStepB(): void;
    public function produceStepC(): void;
}

class Product
{
    public array $parts = [];

    public function getParts(): string
    {
        return implode(' + ', $this->parts) . PHP_EOL;
    }
}

class Builder implements BuilderProcess
{
    public Product $product;

    public function __construct()
    {
        $this->resetProduct();
    }

    public function resetProduct(): void
    {
        $this->product = new Product();
    }

    public function produceStepA(): void
    {
        // TODO: Implement produceStepA() method.
        $this->product->parts[] = 'PART_A';
    }

    public function produceStepB(): void
    {
        // TODO: Implement produceStepB() method.
        $this->product->parts[] = 'PART_B';
    }

    public function produceStepC(): void
    {
        // TODO: Implement produceStepC() method.
        $this->product->parts[] = 'PART_C';
    }

    public function getResultProduct(): Product
    {
        $result = $this->product;
        $this->resetProduct();

        return $result;
    }
}

class Director
{
    public Builder $builder;

    public function setBuilder($builder): void
    {
        $this->builder = $builder;
    }

    public function buildMinProduct(): void
    {
        $this->builder->produceStepA();
    }

    public function buildMixedProduct(): void
    {
        $this->builder->produceStepA();
        $this->builder->produceStepC();
    }

    public function buildMaxProduct(): void
    {
        $this->builder->produceStepA();
        $this->builder->produceStepB();
        $this->builder->produceStepC();
    }
}

function clientCode(Director $director): void
{
    $theBuilder = new Builder();
    $director->setBuilder($theBuilder);

    $director->buildMinProduct();
    echo $theBuilder->getResultProduct()->getParts();

    $director->buildMixedProduct();
    echo $theBuilder->getResultProduct()->getParts();

    $director->buildMaxProduct();
    echo $theBuilder->getResultProduct()->getParts();
}

$director = new Director();
clientCode($director);