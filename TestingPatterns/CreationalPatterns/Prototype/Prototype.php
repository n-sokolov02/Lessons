<?php

/*
 * Прототип — порождающий шаблон проектирования. Он используется для клонирования существующего объекта, вместо его инстанцирования с помощью new.
 * Клонирование может использоваться для случаев, когда нужно создать несколько объектов, инстанцирование которых затратная операция.
 * В этом случае вначале делается один объект, происходит его начальная «тяжелая инициализация», а после объект клонируется для использования под разные задачи.
*/

namespace TestingPatterns\CreationalPatterns\Prototype;

class Prototype
{
    public function __clone()
    {
        echo __CLASS__ . ' was cloned' . PHP_EOL;
    }

    public function getClass(): void
    {
        echo __METHOD__ . PHP_EOL;
    }
}

$prototype = new Prototype();
$prototype->getClass();

$clonedObject = clone $prototype;
$clonedObject->getClass();

echo 'Unset $prototype' . PHP_EOL;
unset($prototype);

$clonedObject->getClass();