<?php

/*
 * Паттерн Bridge представляет собой возможность объединения двух разных интерфейсов так,
 * чтобы каждый из них развивался раздельно.
 */

namespace testingPatterns\BridgePattern;

interface BridgeInterface
{
    public function makeBridge(): string;
}

abstract class AbstractBridge
{
    public BridgeInterface $bridge;

    public function __construct(BridgeInterface $bridge)
    {
        $this->bridge = $bridge;
    }

    abstract public function getClass();
}

class Android implements BridgeInterface
{
    public function makeBridge(): string
    {
        // TODO: Implement makeBridge() method.
        return __CLASS__ . ': New system' . PHP_EOL;
    }
}

class IOS implements BridgeInterface
{
    public function makeBridge(): string
    {
        // TODO: Implement makeBridge() method.
        return __CLASS__ . ': New system' . PHP_EOL;
    }
}

class MainBridge extends AbstractBridge
{
    public function getClass()
    {
        // TODO: Implement getClass() method.
        echo $this->bridge->makeBridge();
    }
}

$mainBridge = new MainBridge(new Android());
$mainBridge->getClass();

$mainBridge = new MainBridge(new IOS);
$mainBridge->getClass();