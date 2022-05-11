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
    private Product $product;

    public function __construct()
    {
        $this->resetProduct();
    }

    public function resetProduct()
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

    public function getResultProduct(): string
    {
        $result = $this->product->getParts();
        $this->resetProduct();
        return $result;
    }
}

class Director
{
    private BuilderProcess $builder;

    public function setBuilder(): void
    {
        $this->builder = new Builder();
    }

    public function buildMinProduct(): Director
    {
        $this->builder->produceStepA();
        return $this;
    }

    public function buildMixedProduct(): Director
    {
        $this->builder->produceStepA();
        $this->builder->produceStepC();
        return $this;
    }

    public function buildMaxProduct(): Director
    {
        $this->builder->produceStepA();
        $this->builder->produceStepB();
        $this->builder->produceStepC();
        return $this;
    }

    public function getFullOrder(): string
    {
        return $this->builder->getResultProduct();
    }
}

function clientCode(Director $director): void
{
    $director->setBuilder();

    echo $director->buildMinProduct()->getFullOrder();

    echo $director->buildMixedProduct()->getFullOrder();

    echo $director->buildMaxProduct()->getFullOrder();
}

$director = new Director();
clientCode($director);
