<?php

interface Builder
{
    public function produceStepA(): void;
    public function produceStepB(): void;
    public function produceStepC(): void;
}

class FirstBuilder implements Builder
{
    private ?Product $product;

    public function __construct()
    {
        $this->resetProduct();
    }

    /**
     * @return void
     */
    public function resetProduct(): void
    {
        $this->product = new Product();
    }

    public function produceStepA(): void
    {
        // TODO: Implement produceStepA() method.
        $this->product->parts[] = "PartA1";
    }

    public function produceStepB(): void
    {
        // TODO: Implement produceStepB() method.
        $this->product->parts[] = "PartB1";
    }

    public function produceStepC(): void
    {
        // TODO: Implement produceStepC() method.
        $this->product->parts[] = "PartC1";
    }

    public function getProduct(): Product
    {
        $result = $this->product;
        $this->resetProduct();

        return $result;
    }
}

class Product
{
    public array $parts = [];
    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . PHP_EOL . PHP_EOL;
    }
}

class Director
{
    /**
     * @var FirstBuilder|null
     */
    private ?FirstBuilder $builder;

    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildMinimalViableProduct(): void
    {
        $this->builder->produceStepA();
    }

    public function buildFullFeatureProduct(): void
    {
        $this->builder->produceStepA();
        $this->builder->produceStepB();
        $this->builder->produceStepC();
    }
}

function clientCode (Director $director)
{
    $builder = new FirstBuilder();
    $director->setBuilder($builder);

    echo "Standard basic product: " . PHP_EOL;
    $director->buildMinimalViableProduct();
    $builder->getProduct()->listParts();

    echo "Standard full feature product: " . PHP_EOL;
    $director->buildFullFeatureProduct();
    $builder->getProduct()->listParts();

    echo "Custom product: " . PHP_EOL;
    $builder->produceStepA();
    $builder->produceStepC();
    $builder->getProduct()->listParts();
}

$director = new Director();
clientCode($director);
