<?php

interface BuilderWork
{
    public function processProduceA(): void;
    public function processProduceB(): void;
    public function processProduceC(): void;
}

class BuilderProcess implements BuilderWork
{
    private ?PartsProduct $productObject;

    public function __construct()
    {
        $this->resetProcessingProduct();
    }

    /**
     * @return void
     */
    public function resetProcessingProduct(): void
    {
        $this->productObject = new PartsProduct();
    }

    public function processProduceA(): void
    {
        // TODO: Implement processProduceA() method.
        $this->productObject->productParts[] = "PART A1";
    }

    public function processProduceB(): void
    {
        // TODO: Implement processProduceB() method.
        $this->productObject->productParts[] = "PART B1";
    }

    public function processProduceC(): void
    {
        // TODO: Implement processProduceC() method.
        $this->productObject->productParts[] = "PART C1";
    }

    /**
     * @return PartsProduct
     */
    public function getResultProduct(): PartsProduct
    {
        $resultOfTheWork = $this->productObject;
        $this->resetProcessingProduct();

        return $resultOfTheWork;
    }
}

class PartsProduct
{
    public array $productParts = [];
    public function listProductParts(): void
    {
        echo "It is the list of the parts: " . implode(',' , $this->productParts) . PHP_EOL;
    }
}

class DirectorOfBuilder
{
    /**
     * @var BuilderProcess|null
     */
    private ?BuilderProcess $builderProcess;

    /**
     * @param BuilderProcess $builderProcess
     * @return void
     */
    public function setBuilder(BuilderProcess $builderProcess): void
    {
        $this->builderProcess = $builderProcess;
    }

    /**
     * @return void
     */
    public function buildMinimalVariableOfTheProduct(): void
    {
        $this->builderProcess->processProduceA();
    }

    /**
     * @return void
     */
    public function buildMaximumVariableOfTheProduct(): void
    {
        $this->builderProcess->processProduceA();
        $this->builderProcess->processProduceB();
        $this->builderProcess->processProduceC();
    }

    /**
     * @return void
     */
    public function buildMixedVariableOfTheProduct(): void
    {
        $this->builderProcess->processProduceA();
        $this->builderProcess->processProduceC();
    }
}

function builderCompanyClientCode(DirectorOfBuilder $directorOfBuilder)
{
    $theBuilder = new BuilderProcess();
    $directorOfBuilder->setBuilder($theBuilder);

    echo "Standard basic product " . PHP_EOL;
    $directorOfBuilder->buildMinimalVariableOfTheProduct();
    $theBuilder->getResultProduct()->listProductParts();

    echo "Maximum variable of the product " . PHP_EOL;
    $directorOfBuilder->buildMaximumVariableOfTheProduct();
    $theBuilder->getResultProduct()->listProductParts();

    echo "Mixed variable of the product " . PHP_EOL;
    $directorOfBuilder->buildMixedVariableOfTheProduct();
    $theBuilder->getResultProduct()->listProductParts();
}

$directorOfBuilder = new DirectorOfBuilder();
builderCompanyClientCode($directorOfBuilder);
