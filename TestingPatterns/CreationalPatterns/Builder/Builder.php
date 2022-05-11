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
    public array $list = [];

    public function getParts(): string
    {
        return Builder . phpimplode(' + ', $this->list);
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

    public function produceStepA()
    {
        // TODO: Implement produceStepA() method.
        $this->product->list[] = 'PART_A';
    }

    public function produceStepB()
    {
        // TODO: Implement produceStepA() method.
        $this->product->list[] = 'PART_B';
    }

    public function produceStepC()
    {
        // TODO: Implement produceStepA() method.
        $this->product->list[] = 'PART_C';
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
    public BuilderProcess $builderProcess;

    public function setBuilder(): Builder
    {
        $this->builderProcess = new Builder();
        return $this->builderProcess;
    }

    public function buildMinVarianceProduct(): void
    {
        $this->builderProcess->produceStepA();
    }

    public function buildMixedVarianceProduct(): void
    {
        $this->builderProcess->produceStepB();
        $this->builderProcess->produceStepC();
    }

    public function buildMaxVarianceProduct(): void
    {
        $this->builderProcess->produceStepA();
        $this->builderProcess->produceStepB();
        $this->builderProcess->produceStepC();
    }
}

function setDirectorAndBuildProduct(Director $director): void
{
    $theBuilder = $director->setBuilder();

    $director->buildMinVarianceProduct();
    echo $theBuilder->getResultProduct();

    $director->buildMixedVarianceProduct();
    echo $theBuilder->getResultProduct();

    $director->buildMaxVarianceProduct();
    echo $theBuilder->getResultProduct();
}

$director = new Director();
setDirectorAndBuildProduct($director);
