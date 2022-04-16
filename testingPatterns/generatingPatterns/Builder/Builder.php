<?php

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
        echo 'RESULT: ' . implode(' + ', $this->parts) . PHP_EOL;
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

    public function produceStepA()
    {
        // TODO: Implement produceStepA() method.
        $this->product->parts[] = "PART_A";
    }

    public function produceStepB()
    {
        // TODO: Implement produceStepB() method.
        $this->product->parts[] = "PART_B";
    }

    public function produceStepC()
    {
        // TODO: Implement produceStepC() method.
        $this->product->parts[] = "PART_C";
    }

    public function getResultProduct()
    {
        $result = $this->product->getParts();
        $this->resetProduct();
        return $result;
    }
}

class Director
{
    private Builder $builder;

    public function setBuilder($builder): void
    {
        $this->builder = $builder;
    }

    public function buildMinVariance(): void
    {
        $this->builder->produceStepA();
    }

    public function buildMaxVariance(): void
    {
        $this->builder->produceStepA();
        $this->builder->produceStepB();
        $this->builder->produceStepC();
    }
}

function getResultProduct(Director $director): void
{
    $theBuilder = new Builder();
    $director->setBuilder($theBuilder);

    $director->buildMinVariance();
    $theBuilder->getResultProduct();

    $director->buildMaxVariance();
    $theBuilder->getResultProduct();
}

$director = new Director();
getResultProduct($director);
