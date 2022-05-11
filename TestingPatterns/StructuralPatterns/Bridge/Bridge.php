<?php

/*
 * Паттерн Bridge представляет собой возможность объединения двух разных интерфейсов так,
 * чтобы каждый из них развивался раздельно.
 */

namespace testingPatterns\BridgePattern;

interface BridgeInterface
{
    public function format(): string;
}

abstract class Bridge
{
    public BridgeInterface $bridge;

    public function __construct($bridge)
    {
        $this->bridge = $bridge;
    }

    abstract public function get();
}

class IOS implements BridgeInterface
{
    public function format(): string
    {
        // TODO: Implement format() method.
        return __CLASS__ . ' system initialized' . PHP_EOL;
    }
}

class Android implements BridgeInterface
{
    public function format(): string
    {
        // TODO: Implement format() method.
        return __CLASS__ . ' system initialized' . PHP_EOL;
    }
}

class InitBridge extends Bridge
{
    public function get()
    {
        // TODO: Implement get() method.
        echo $this->bridge->format();
    }
}

$initIOSBridge = new InitBridge(new IOS());
$initIOSBridge->get();

$initAndroidBridge = new InitBridge(new Android());
$initAndroidBridge->get();
