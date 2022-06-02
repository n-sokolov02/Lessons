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

    public function __construct($bridge)
    {
        $this->bridge = $bridge;
    }

    abstract public function get();
}

class Android implements BridgeInterface
{
    public function makeBridge(): string
    {
        // TODO: Implement makeBridge() method.
        return __CLASS__ . PHP_EOL;
    }
}

class IOS implements BridgeInterface
{
    public function makeBridge(): string
    {
        // TODO: Implement makeBridge() method.
        return __CLASS__ . PHP_EOL;
    }
}

class MainBridge extends AbstractBridge
{
    public function get()
    {
        // TODO: Implement get() method.
        echo $this->bridge->makeBridge();
    }
}

$androidSystem = new MainBridge(new Android());
$androidSystem->get();

$IOSSystem = new MainBridge(new IOS());
$IOSSystem->get();
