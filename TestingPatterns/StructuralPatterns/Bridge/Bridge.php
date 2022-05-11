<?php

/*
 * Паттерн Bridge представляет собой возможность объединения двух разных интерфейсов так,
 * чтобы каждый из них развивался раздельно.
 */

namespace testingPatterns\BridgePattern;

trait getSystem
{
    public function format($system): string
    {
        return __CLASS__ . ': ' . $system . PHP_EOL;
    }
}

interface Bridge
{
    public function format($system): string;
}

abstract class Service
{
    public Bridge $bridge;

    public function __construct($bridge)
    {
        $this->bridge = $bridge;
    }

    abstract public function get();
}

class Android implements Bridge
{
    use getSystem;
}

class IOS implements Bridge
{
    use getSystem;
}

class SystemService extends Service
{
    public function get()
    {
        // TODO: Implement get() method.
        echo $this->bridge->format('New system has been initialized.') . PHP_EOL;
    }
}

$initSystemIOS = new SystemService(new IOS());
$initSystemIOS->get();

$initSystemAndroid = new SystemService(new Android());
$initSystemAndroid->get();
