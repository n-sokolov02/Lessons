<?php

namespace testingPatterns\generatingPatterns\Builder;

interface BuilderProcess
{
    public function produceA();
    public function produceB();
    public function produceC();
}

class Product
{
    public array $parts = [];
    public function getParts()
    {
        echo 'RESULT: ' . implode(', ', $this->parts) . PHP_EOL;
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

    public function produceA()
    {
        // TODO: Implement produceA() method.
        $this->product->parts[] = 'PART_A';
    }

    public function produceB()
    {
        // TODO: Implement produceB() method.
        $this->product->parts[] = 'PART_B';
    }

    public function produceC()
    {
        // TODO: Implement produceC() method.
        $this->product->parts[] = 'PART_C';
    }

    public function getFinalProduct(): Product
    {
        $result = $this->product;
        $this->resetProduct();
        return $result;
    }
}

class Director
{
    public Builder $builder;

    public function setBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function getMinProduct()
    {
        $this->builder->produceA();
    }

    public function getMixedProduct()
    {
        $this->builder->produceB();
        $this->builder->produceC();
    }

    public function getMaxProduct()
    {
        $this->builder->produceA();
        $this->builder->produceB();
        $this->builder->produceC();
    }
}

function buildProduct(Director $director)
{
    $theBuilder = new Builder();
    $director->setBuilder($theBuilder);

    $director->getMinProduct();
    $theBuilder->getFinalProduct()->getParts();

    $director->getMixedProduct();
    $theBuilder->getFinalProduct()->getParts();

    $director->getMaxProduct();
    $theBuilder->getFinalProduct()->getParts();
}

$director = new Director();
buildProduct($director);
