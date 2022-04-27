<?php

/*
 * Паттерн Bridge представляет собой возможность объединения двух разных интерфейсов так,
 * чтобы каждый из них развивался раздельно.
 */

namespace testingPatterns\BridgePattern;

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
    public function format($system): string
    {
        return 'ANDROID: ' . $system . PHP_EOL;
    }
}

class IOS implements Bridge
{
    public function format($system): string
    {
        return 'IOS: ' . $system . PHP_EOL;
    }
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
